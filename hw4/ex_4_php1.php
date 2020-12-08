<?PHP

$dir1 = "gallery/small";
$dir2 = "gallery/big";

$files = array_slice(scandir($dir1), 2);
//$files2 = array_slice(scandir($dir2), 2);

?>

<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Моя галерея</title>
<link rel="stylesheet" href="style.css"/>
    <script type="text/javascript" src="scripts/jguery.js"> </script>
    <script type="text/javascript" src="scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/javascript" href="scripts/fancybox/jquery.fancybox-1.3.4.pack.css">
<script type="text/javascript">
    $(document).ready(function() {
        $("a.photo").fancybox ({
            transitionIn: 'elastic',
            transitionOut: 'elastic',
            speedIn: 500,
            speedOut: 500,
        });
    });
    </script>
</head>
<body>
<div id="main">  
   <div class="post_title"><h2>Моя галерея - дз №4</h2></div>
   <div class="gallery">
   
<?php
for ($i = 0; $i < count($files); $i++) { ?>
<a rel="gallery" class="photo" href="<?= $dir2."/".$files[$i] ?> " target = "_blank"><img src="<?=$dir1."/".$files[$i]?>" alt="" /> </a>
<?php } ?>
    </div>
</div>     
</body>
</html>
