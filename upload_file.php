<?php
$allowedExts = array("PDF", "ASCII");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

$name = $_FILES["file"]["tmp_name"];

if (($_FILES["file"]["size"] / 1024) <= 10000) {

    $validExt = FALSE;

    echo $name . " " . shell_exec("file ". $name) . " ";
    foreach ($allowedExts as $ext) {
        if (strpos(shell_exec("file " . $name), $ext) !== FALSE) {
            $validExt = TRUE;
            break;
        }
    }

    echo $validExt;

    if ($validExt == FALSE) {
        //header("Location: http://meru.noip.me/failure.html");
    }

    if ($_FILES["file"]["error"] > 0) {
        //header("Location: http://meru.noip.me/failure.html");
    } else {
        $counter = 1;
        $name = "upload/" . $_FILES["file"]["name"];
        while (file_exists($name)) {
            $name = "upload/" . $_FILES["file"]["name"] . "_" . $counter;
            $counter++;
        }
        //move_uploaded_file($_FILES["file"]["tmp_name"], $name);
        //header("Location: http://meru.noip.me/success.html");
    }
} else {
    //header("Location: http://meru.noip.me/failure.html");
}
?>
