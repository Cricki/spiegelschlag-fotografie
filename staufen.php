<?php
    require("galheader.php");
?>

<div class="wrapper">
<div class="gal-header">
        <h2 style="text-align: center;">Staufen</h2>
        <p style="text-align : center;margin: 20px 10px;">
<b>Staufen im Breisgau liegt südlich von Freiburg, zwischen Bad Krozingen und Münstertal und hat ca.8000 Einwohner.<br>
 
 Die kleine, aber schöne Altstadt lädt zum Gemütlichem herumschlenzen ein bevor man sich, zwischen den Reben, <br>
 zur Burgruine hochquält, wo man jedoch mit einer herrlichen Aussicht, belohnt wird. <br>
  
 Eine Inschrift an der Fassade des Gasthauses Löwen, berichtet über einen Herren Johann Georg Faust, der Wunderheiler, Alchemist, Magier, Astrologe und Wahrsager <br>
 gewesen sein soll und im Jahre 1539 im Gasthaus ein Zimmer hatte. Der verschuldete Burgherr Anton von Staufen, hatte den Herren Faust als "Goldmacher" <br>
 angestellt, um ihm aus der Bredouille zu helfen. Als dieser sich an die Herstellung des Goldes machte, war er wohl bei einem alchemistischen Experiment etwas unvorsichtig <br>
 und kam bei einer Explosion ums Leben. Johann Wolfgang von Goethe berichtet in der Tragödie Faust über diesen Vorfall.<br>
 
 Über die Stadt wurde viel in den Medien berichtet, als durch Geothermiebohrungen für die Heizung des renovierten Rathauses 2007 eine Hebung <br>
 der Altstadt erfolgte, die bis 2010 Risse in etlichen Häusern verursachte, von denen ca. 127 besonders stark beschädigt wurden.<b><br>
<hr style="border:solid #a5a5a5 0,5px;
background-color:#a5a5a5;height:0,5px;margin:20px 10px;">
</p>
    </div>

<div id="main">
    
    <?php
        $files = glob('galerie/staufen//*.{jpg,png,gif,JPG}', GLOB_BRACE);
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
      