<?php
    date_default_timezone_set('America/New_York');

    function to_filename($path, $extension) {
        $path = ($path == "/") ? $path . "index" : $path;
        return sprintf("content%s.%s", $path, $extension);
    }

    // determine requested page
    $path = $_SERVER['REQUEST_URI'];

    $error_404 = true;
    // always error for /index (arbitrary; only allow index access when no path provided)
    if ($path != "/index") {

        // supported filetypes (extension->MIME type); in order of preference
        $types['html'] = 'text/html';
        $types['atom'] = 'application/xml+atom';

        // look for file and set content type
        foreach ($types as $extension => $mime_type) {
            $filename = to_filename($path, $extension);
            if (file_exists($filename)) {
                header("Content-type: " . $mime_type);
                $error_404 = false;
                break;
            }
        }

    }

    if ($error_404) {
        $filename = to_filename("/404", "html");
    }

    print file_get_contents($filename);
?>
