<?php
$allowedExts = array("pdf", "txt");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((in_array($extension, $allowedExts)) && (($_FILES["file"]["size"] / 1024) <= 10)) {
    if ($_FILES["file"]["error"] > 0) {
        // do something for error
    } else {
        $counter = 1;
        $name = "upload/" . $_FILES["file"]["name"];
        while (file_exists($name)) {
            $name = "upload/" . $_FILES["file"]["name"] . "_" . $counter;
            $counter++;
        }
        move_uploaded_file($_FILES["file"]["tmp_name"], $name);
        http_redirect("index.html", array(), true, HTTP_REDIRECT_PERM);
    }
} else {
    // do something for wrong file
}
?>
