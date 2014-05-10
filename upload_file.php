<?php
$allowedExts = array("pdf", "txt");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

echo "test " . var_dump($_FILES["file"]["name"]). " " . var_dump($temp) . "\n";

if ((in_array($extension, $allowedExts))) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    $counter = 1;
    $name = "upload/" . $_FILES["file"]["name"];
    while (file_exists($name)) {
        $name = "upload/" . $_FILES["file"]["name"] . "_" . $counter;
        $counter++;
    }
  move_uploaded_file($_FILES["file"]["tmp_name"], $name);
  echo "Stored in: " . $name;
  }
} else {
  echo "Invalid file";
}
?>
