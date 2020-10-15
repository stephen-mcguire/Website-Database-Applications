<?php
require_once 'file_util.php';  // the get_file_list function
require_once 'image_util.php'; // the process_image function

$image_dir = 'images';
$image_dir_path = getcwd() . DIRECTORY_SEPARATOR . $image_dir;

$action = '';
//better to add filter input to check for malicious code
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

switch ($action) {
    case 'upload':
	for ($i=1; $i <=3; i++) {
		
        if (isset($_FILES['file[$i]'])) {
            $filename = $_FILES['file[$i]']['name'];
            if (empty($filename)) {
                break;
            }
            $source = $_FILES['file[$i]']['tmp_name'];
            $target = $image_dir_path . DIRECTORY_SEPARATOR . $filename;
            move_uploaded_file($source, $target);

            // create the '400' and '100' versions of the image
            process_image($image_dir_path, $filename);
        }
        break;
    case 'delete':
        $filename = $_GET['filename'];
        $target = $image_dir_path . DIRECTORY_SEPARATOR . $filename;
        if (file_exists($target)) {
            unlink($target);
        }
        break;
		
		//use the php manual code
	}
}

$files = get_file_list($image_dir_path);
include('uploadform.php');
?>