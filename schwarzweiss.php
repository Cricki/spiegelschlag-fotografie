<?php
    require("galheader.php");
?>

<div class="wrapper">
<div class="gal-header">
        <h2 style="text-align: center;">SCHWARZ-WEISS</h2>
        <p style="text-align : center;margin: 20px 10px;">
<b>In den  Anfängen der Fotografie , als es die Möglichkeit der Farbwiedergabe noch nicht gab , wurde nur Schwarz-Weiß-Fotografiert .<br>
S/W fotografie besteht aus Abstufungen von weiß bis schwarz und lebt Hauptsächlich von Formen , Licht , Schatten, Konturen,  und Linien.<br>
Heute hat sich die Farbfotografie als Standart durchgesetzt , konnte aber die S/W Fotografie nicht gänzlich verdrängen im Gegenteil , im digitalen Zeitalter <br>
gewinnt Schwarz-Weiß-Fotografie wieder an Bedeutung.Sie hat sich als eigene Kunstform etabliert und durch die herabsetzung auf Grauwertstufen <br>
kann man den Blick , gezielter auf das Hauptsächliche lenken , ohne von Farben abgelenkt zu werden.<b><br>
<hr style="border:solid #a5a5a5 0,5px;
background-color:#a5a5a5;height:0,5px;margin:20px 10px;">
</p>
    </div>

<div id="main">

    <?php
        $files = glob('galerie/schwarz-weiss//*.{jpg,png,gif,JPG}', GLOB_BRACE);
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
