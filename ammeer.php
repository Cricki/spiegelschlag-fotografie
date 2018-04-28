<?php
    require("galheader.php");
?>

<div class="wrapper">
<div class="gal-header">
        <h1 style="text-align: center;">Am Meer</h1>
        <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, quaerat!</p>
    </div>

<div id="main">

    <?php
        $files = glob('galerie/ammeer//*.{jpg,png,gif,JPG}', GLOB_BRACE);
        foreach($files as $file){
            ?>

        <div class="thumbnails zoom">
            <a href="<?php echo $file;?>" data-fancybox="img" >
            <img src="<?php echo $file;?>" alt="<?php echo $file;?>">
        </a>
        </div>
        <?php
        }
    ?>
</div>
                
 
<div class="push"></div>
</div>




<?php
    require("footer.php");
?>
      