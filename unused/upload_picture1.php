<!DOCTYPE html>
<html>
<body>

<h1>File upload</h1>

<?php

define("UPLOAD_DIR", "C:\wamp\www\ArchDatabase\upload");
 
if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];
 
    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>An error occurred.</p>";
        exit;
    }
 
    // ensure a safe filename
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
 
    // don't overwrite an existing file
    $i = 0;
    $parts = pathinfo($name);
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }
 
    // preserve file from temporary directory
    $success = move_uploaded_file($myFile["tmp_name"],
        UPLOAD_DIR . "\\" . $name);
    if (!$success) { 
        echo "<p>Unable to save file.</p>";
        exit;
    }
}
?>
</body>
</html>
