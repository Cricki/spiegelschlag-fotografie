<?php
    require("galheader.php");
?>

<div class="wrapper">


<div id="main">
    
    <?php
        $files = glob('galerie/pilze//*.{jpg,png,gif,JPG}', GLOB_BRACE);
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
      