<?php
    require("galheader.php");
?>

<div class="wrapper">
<div class="gal-header">
        <h2 style="text-align: center;">SCHAUINSLAND</h2>
        <p style="text-align : center;margin: 20px 10px;">
<b>Der höchste Punkt auf Freiburger Gemarkung ist , mit 1284,4 m ü.NHN der Schauinsland , der Freiburger Hausberg . <br>
Bei dementsprechender Wetterlage bietet der Schauinsland hervorragende Aussichten  auf den Feldberg , die Vogesen, zur Hornisgrinde <br>
bis zu den Alpen und natürlich nach Freiburg im Breisgau , den Kaiserstuhl und auf das Oberrheintal.<br>
Wandern , Klettern , Mountainbikefahren , Skifahren und Fotografieren , alldies kann man auf dem Berg und der <br>
wunderschönen Schwarzwaldlandschaft drumherum ausüben und genießen .<br>
 <b><br>
<hr style="border:solid #a5a5a5 0,5px;
background-color:#a5a5a5;height:0,5px;margin:20px 10px;">
</p>
    </div>

<div id="main">
    
    <?php
        $files = glob('galerie/schauinsland//*.{jpg,png,gif,JPG}', GLOB_BRACE);
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
      
