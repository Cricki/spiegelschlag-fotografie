<?php
    require("galheader.php");
?>

<div class="wrapper">
<div class="gal-header">
        <h1 style="text-align: center;">HDR</h1>
        <p style="text-align : center;margin: 20px 10px;">
<b>HDR Fotos (High Dynamic Range Image) sind Fotos mit hohem Dynamikumfang und Kontrast .<br>
Die Fotos entstehen , indem man ausgehend von einem normal belichteten Foto , eine Belichtungsreihe (bitte mit Stativ) mit Unter-  und Überbelichteten Fotos macht , die anschließend <br>
mittels einer Software übereinander gelegt und miteinander verrechnet werden .Dabei entstehen sehr Farbenfrohe Fotos , die nicht jedermanns Auge erfreuen.<br>
Damit  ein herkömmlicher Bildschirm HDR Fotos überhaupt darstellen kann , müssen die  Helligkeitskontraste des HDR-Bildes verringert werden , indem man die Fotos mittels einer Software <br>
in LDR-Bilder (Low Dynamic Range) umwandelt .Dieser Vorgang wird Dynamikkompression (englisch - tone Mapping) genannt.<br>
Der große Vorteil solcher Belichtungsreihen ist wohl aber , das Über- und Unterbelichtete Bildpartien komplett vermieden werden , oder man zumindest  viel mehr Bilddetails aus diesen Bereichen herausarbeiten kann.<br>
Dies ist eine kurze und vereinfachte Darstellung der Funktionsweise der HDR  Fotografie .Wer gerne mehr und  genauere  Informationen zu diesem Thema hätte  , bekommt diese auf Wikipedia <br>
in einer Genauigkeit und Fülle , bis der Input die Schädeldecke anheben lässt.<b><br>
<hr style="border:solid #a5a5a5 0,5px;
background-color:#a5a5a5;height:0,5px;margin:20px 10px;">
</p>
    </div>


<div id="main">
    
    <?php
        $files = glob('galerie/hdr//*.{jpg,png,gif,JPG}', GLOB_BRACE);
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
      