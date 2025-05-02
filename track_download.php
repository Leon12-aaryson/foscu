<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file
include "dashboard/dbconn.php";

// Assuming the file name is passed via GET parameter
if (isset($_GET['file'])) {
    $file = basename($_GET['file']); // Sanitize to prevent path traversal
    $filePath = 'static/briefs/' . $file; // Path to the file relative to the server's document root

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
        } catch(PDOException $e) {
            echo "Error tracking download: " . $e->getMessage();
        }
    } else {
        echo "File not found!";
    }
} else {
    echo "No file specified.";
}
?>