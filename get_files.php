<?php
$directory = 'your_folder_path'; // Replace with the path to your folder
$files = array_diff(scandir($directory), array('..', '.'));

header('Content-Type: application/json');
echo json_encode($files);
?>
