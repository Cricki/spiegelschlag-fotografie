<?php
    require("galheader.php");
?>
<div class="wrapper">
<div class="gal-header">
        <h2 style="text-align: center;">SCHWARZWALD</h2>
        <p style="text-align : center;margin: 20px 10px;">
<b>
Im Südwesten Baden-Württembergs liegt das das meistbesuchte Urlaubsziel unter den deutschen Mittelgebirgen ,es ist das höchste und größte <br>
zusammenhängende Mittelgebirge Deutschlands.Weite Teile des Schwarzwalds leben heute hauptsächlich von der Tourismusbranche. <br>
Skifahren , Mountainbikefahren , KLettern , Wandern aber auch Windsurfen oder Tauchen ist am Titisee und Schluchsee möglich.Dazu gibt es gute möglichkeiten<br>
zum  Drachen- und Gleitschirmfliegen.<br>
Sehenswerte Altstädte und Museen , wie das Deutsche Uhrenmuseum in Furtwangen , das Schüttesäge-Museum in Schiltach (Themen Holzwirtschaft, Flößerei ), <br>
das Mineralien- und Mathematikmuseum in Oberwolfach und das Freilichtmuseum Vogtsbauernhof in Gutach , bieten Interessante Infos und zeigen wie es früher einmal war.<br>
Im Schwarzwald gibt einen Nationalpark , zwei Naturparks und über 100 Naturschutzgebiete sowie zahlreiche Landschafts-, Wald- und Vogelschutzgebiete.<br>
Bekannt aus dem Schwarzwald sind die typischen Bauernhäuser , das Kirschwasser , die Schwarzwälder Kirschtorte, der Schwarzwälder Schinken, die Kuckucksuhr noch viele andere Sehenswürdigkeiten .<b><br>
<hr style="border:solid #a5a5a5 0,5px;
background-color:#a5a5a5;height:0,5px;margin:20px 10px;">
</p>
    </div>

<div id="main">
    
    <?php
        $files = glob('galerie/schwarzwald//*.{jpg,png,gif,JPG}', GLOB_BRACE);
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
      