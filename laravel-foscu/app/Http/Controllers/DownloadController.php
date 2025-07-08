<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function trackDownload(Request $request)
    {
        $filename = $request->get('file');
        
        // Track or increment download count
        $download = Download::firstOrCreate(
            ['filename' => $filename],
            ['downloads' => 0]
        );
        
        $download->incrementDownloads();
        
        // Define the file path
        $filePath = storage_path('app/public/briefs/' . $filename);
        
        if (file_exists($filePath)) {
            return response()->download($filePath);
        }
        
        return abort(404, 'File not found');
    }
}
