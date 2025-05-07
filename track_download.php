<?php
// Enable error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file and configuration file
include "dashboard/dbconn.php";
include "config.php";

// Check if file parameter is provided
if (isset($_GET['file'])) {
    $file = basename($_GET['file']); // Sanitize to prevent path traversal
    // Use BASE_FILE_PATH if path=base, otherwise REPORTS_PATH
    $basePath = isset($_GET['path']) && $_GET['path'] === 'base' ? BASE_FILE_PATH : REPORTS_PATH;
    $filePath = $basePath . $file;

    if (file_exists($filePath)) {
        try {
            // Increment download count in database
            $stmt = $conn->prepare("INSERT INTO downloads (filename, downloads) VALUES (:file, 1) ON DUPLICATE KEY UPDATE downloads = downloads + 1");
            $stmt->execute(['file' => $file]);

            // Set headers for download
            header('Content-Description: File Transfer');
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename="' . $file . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filePath));
            readfile($filePath);
            exit;
        } catch (PDOException $e) {
            echo "Error tracking download: " . htmlspecialchars($e->getMessage());
        }
    } else {
        echo "File not found at: " . htmlspecialchars($filePath);
    }
} else {
    echo "No file specified.";
}
?>