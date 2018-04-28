<?php
    require("galheader.php");
?>

<div class="wrapper">
<div class="gal-header">
        <h2 style="text-align: center;">FELDBERG</h2>
        <p style="text-align : center;margin: 20px 10px;">
<b>Der Feldberg ist mit 1493 m ü.NHN der höchste Berg in Baden-Württemberg  und ist außerhalb der Alpen der höchste Berg Deutschlands .<br>
Im Sommer laden gut erschlossene Wege zum Wandern ein , im Winter gibt es zahlreiche Abfahrtspisten , Langlaufloipen <br>
und zahlreiche möglichkeiten zum Schneeschuhwandern.Bei Inversionswetterlage bietet der Feldberg einen Panoramablick über den Oberrheingraben , <br>
die gesamten Vogesen , die Alpen und im gegensatz zum Schauinsland , kann man von hier aus auch die Schwäbische Alb bewundern .<br>
 <b><br>
<hr style="border:solid #a5a5a5 0,5px;
background-color:#a5a5a5;height:0,5px;margin:20px 10px;">
</p>
    </div>

<div id="main">
    
    <?php
        $files = glob('galerie/feldberg//*.{jpg,png,gif,JPG}', GLOB_BRACE);
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
      
