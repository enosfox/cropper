<?php

require "../vendor/autoload.php";

$thumb = new \KitsuneCode\Cropper\Cropper("cache", 75, 5, true);
//$thumb->flush();

echo "<p><img src='{$thumb->make("images/image.jpg", 200)}' alt='Image' title='Image'></p>";
echo "<p><img src='{$thumb->make("images/image.jpg", 400)}' alt='Image' title='Image'></p>";
echo "<p><img src='{$thumb->make("images/image.jpg", 400,400)}' alt='Image' title='Image'></p>";
echo "<p><img src='{$thumb->make("images/image.jpg", 1200,628)}' alt='Image' title='Image'></p>";
echo "<p><img src='{$thumb->make("images/image.jpg", 200,600)}' alt='Image' title='Image'></p>";

echo "<p><img src='{$thumb->make("images/image.png", 200)}' alt='Image' title='Image'></p>";
echo "<p><img src='{$thumb->make("images/image.png", 400)}' alt='Image' title='Image'></p>";
echo "<p><img src='{$thumb->make("images/image.png", 400,400)}' alt='Image' title='Image'></p>";
echo "<p><img src='{$thumb->make("images/image.png", 1200,628)}' alt='Image' title='Image'></p>";
echo "<p><img src='{$thumb->make("images/image.png", 200,600)}' alt='Image' title='Image'></p>";

echo "<p><img src='{$thumb->make("images/image.webp", 200)}' alt='Image' title='Image'></p>";
echo "<p><img src='{$thumb->make("images/image.webp", 400)}' alt='Image' title='Image'></p>";
echo "<p><img src='{$thumb->make("images/image.webp", 400,400)}' alt='Image' title='Image'></p>";
echo "<p><img src='{$thumb->make("images/image.webp", 1200,628)}' alt='Image' title='Image'></p>";
echo "<p><img src='{$thumb->make("images/image.webp", 200,600)}' alt='Image' title='Image'></p>";

//$thumb->flush("images/image.jpg");
//$thumb->flush("images/image.png");
//$thumb->flush();