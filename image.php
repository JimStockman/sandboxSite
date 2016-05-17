<?php 
header("Content_type: imagge/png");
$image = imagecreate(200, 50);
imagepng($image);
?>