<?php
$allowedExts = array("pdf", "txt");
$allowedMimeTypes = array("application/pdf", "text/plain");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$MimeType = mime_content_type($_FILES["file"]["name"]);

if ((in_array($extension, $allowedExts)) && (($_FILES["file"]["size"] / 1024) <= 10000) && (in_array($MimeType, $allowedMimeTypes))) {
    if ($_FILES["file"]["error"] > 0) {
        header("Location: http://meru.noip.me/failure.html");
    } else {
        $counter = 1;
        $name = "upload/" . $_FILES["file"]["name"];
        while (file_exists($name)) {
            $name = "upload/" . $_FILES["file"]["name"] . "_" . $counter;
            $counter++;
        }
        move_uploaded_file($_FILES["file"]["tmp_name"], $name);
        header("Location: http://meru.noip.me/success.html");
    }
} else {
    header("Location: http://meru.noip.me/failure.html");
}
?>
