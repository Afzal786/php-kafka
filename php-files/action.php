<?php
$my_file = '/home/afzal786/Desktop/file.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = $_POST['fullname'];
fwrite($handle, $data);
echo "data submitted successfully";

?> 


