<?php
    require("galheader.php");
?>

<div class="wrapper">
<div class="gal-header">
        <h2 style="text-align: center;">KORFU</h2>
        <p style="text-align : center;margin: 20px 10px;">
<b>Sie soll die grünste Insel Griechenlands sein. Überall auf Korfu sieht und riecht<br>
man Olivenbäume, Akazien, Zitrusfrüchte und den für Korfu charakteristischen Zwergorangenbaum (Kumquat) woraus Marmelade hergestellt wird.<br>
Selbst Kaiserin Sissi war wohl so begeistert von Korfu, das Sie sich ein Schloss, das Achillion (um)bauen ließ.<br>
Ein muss, ist ein Trip nach Kerkira, die Hauptstadt der Insel. Der Hafen, die Altstadt, zwei Festungen und vieles mehr kann man hier sehen.<br>
Kap Drastis, ist der nördlichste Punkt Korfus und ist ein lohnenswertes Ausflugsziel mit Blick auf das albanische Festland,<br>
welches man auch vom Pantokrator, mit 914 Meter Höhe der höchste Berg Korfus aus sieht.<br>
Kirchen, Klöster und viele kleine und große Strandbuchten findet man rund um die ganze Insel.<br>
Am besten erkundet man die Insel mit dem Mietwagen oder den öffentlichen Verkehrmitteln, die sehr Preisgünstig sind und daher oftmals etwas überfüllt.<br>
 <b><br>
<hr style="border:solid #a5a5a5 0,5px;
background-color:#a5a5a5;height:0,5px;margin:20px 10px;">
</p>
    </div>


<div id="main">
    
    <?php
        $files = glob('galerie/korfu//*.{jpg,png,gif,JPG}', GLOB_BRACE);
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
      