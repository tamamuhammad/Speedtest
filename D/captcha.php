<?php 

session_start();

if ($_POST){
    $input = $_POST['input'];

    if ($_SESSION['captcha'] == $input){
        header("Location: index.php?message=success");
    } else if ($input == null) {
        header("Location: index.php?message=null");
    } else {
        header("Location: index.php?message=failed");
    }
} else {
    $_SESSION['captcha'] = '';

    $image = imagecreate(200,50);

    imagecolorallocate($image, 57, 157, 169);

    $color = imagecolorallocate($image, 0, 0, 0);
    $noise = imagecolorallocate($image, 100, 100, 100);
    $font = __DIR__ . '/arial.ttf';

    for ($i = 0; $i < 4; $i++){
       $y = rand(32, 50);
       
       $char = substr(md5(random_bytes(1)), 0, 1);

       $_SESSION['captcha'] .= $char;

       $angle = rand(-45, 45);

       imagettftext($image, 32, $angle, 25 + 45 * $i, $y, $color, $font, $char);
    }

    for ($i = 0; $i < (200 * 50) / 3; $i++){
        imagefilledellipse($image, rand(0, 200), rand(0, 50), 1, 1, $noise);
    }

    for ($i = 0; $i < 3; $i++){
        imageline($image, rand(0, 200), rand(0, 50), rand(0, 200), rand(0, 50), $color);
    }

    header("Content-type: image/png");
    imagepng($image);
    imagedestroy($image);
}