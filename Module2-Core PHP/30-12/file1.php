<?php

$filename = "example.txt";
$content_to_write = "Hello world\n";

// Write/Overwrite the file
$file_handle = fopen($filename, 'w') or die("Can't open file for writing"); // Use 'a' to append
fwrite($file_handle, $content_to_write);
fclose($file_handle);
echo "Data written to $filename successfully!" . "<br>";

// // Read the entire file
if (file_exists($filename)) 
{
    $file_handle = fopen($filename, 'r');
    $content = fread($file_handle, filesize($filename)); // Read entire file size
    fclose($file_handle);
    echo "Content of $filename: " . $content;
} else {
    echo "$filename does not exist.";
}


?>