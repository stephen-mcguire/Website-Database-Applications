<?php
function get_file_list($path) {
	//Given a path to a directory, scan it
	//to retrieve a list of files and subdirectories
	//filtering out just the files to return them
	//in an array back to the calling code
	
    $files = array();
    if (!is_dir($path)) return $files;

    $items = scandir($path);
    foreach ($items as $item) {
         $item_path = $path . DIRECTORY_SEPARATOR . $item;
         if (is_file($item_path)) {
             $files[] = $item;
         }
    }
    return $files;
}
?>
