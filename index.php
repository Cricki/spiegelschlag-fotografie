<?php
    require("header.php");
?>




<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <div class="top-right text-lowercase no-caret font-weight-bolder fly-text">
            <h1 class="fly-text" style="color: #fff; font-family: 'Abril Fatface', italic;"> Spiegelschlag Fotografie</h1>   <!--font-family: 'Pacifico', cursive;   font-family: 'Abril Fatface', cursive;-->
        </div>
        <!--First slide-->
        <div class="carousel-item active">
            <img class="d-block w-100" src="startslider/image1.jpg" alt="First slide">

        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="startslider/image2.jpg" alt="Second slide">
        </div>
        <!--/Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="startslider/image3.jpg" alt="Third slide">
        </div>
        <!--/Third slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <!-- GEHEN NICHT
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a> -->
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<!-- ABOUT--><!-- ABOUT--><!-- ABOUT--><!-- ABOUT--><!-- ABOUT-->
<!-- ABOUT--><!-- ABOUT--><!-- ABOUT--><!-- ABOUT--><!-- ABOUT-->

<!--special-color-eigen-op white-text-->
<section class="aboutsection">
<div class="container aboutinfo">
<h3>Hallo . .</h3>
        <p>

. . schön das du auf meiner Seite vorbeischaust . . . oder bist Du versehentlich hier gelandet ?<br>

Ist nicht schlimm , aber wenn Du jetzt schon mal da bist , dann klick Dich doch in aller Ruhe durch die Galerie und lass Deine Seele baumeln , das Leben ist hektisch genug – also chill.<br>

Bei mir , siehst Du hauptsächlich Landschaftsfotos aus dem äußersten Südwesten Deutschlands , aus Freiburg , dem Kaiserstuhl , dem Schwarzwald , vom Bodensee und Oberrhein.<br>
Aber auch aus dem Elsaß in Frankreich , und einigen der beliebten Urlaubsländern rund um das Mittelmeer .<br>
Natürlich kannst Du auf meiner Seite auch einige spezielle Fotos bestaunen , wie zum Beispiel HDR Aufnahmen oder Nahaufnahmen/Macros bis hin zu Panoramen.<br>
<br>
Sicher wird Dir das eine oder andere Foto gefallen und gewisse positive Eindrücke , schöne Erinnerungen oder Gefühle in Dir wecken.<br>
<br>
Also viel Spaß beim durchstöbern – and have a nice day !<br>
<br>
<h4>Fotografieren . . . . weil`s Spaß macht.<h4><br>

        </p>
        <a class="btn btn-primary" href="about.php" role="button">Mehr</a>
    </div>
</section>

<!-- ABOUT--><!-- ABOUT--><!-- ABOUT--><!-- ABOUT--><!-- ABOUT-->
<!-- ABOUT--><!-- ABOUT--><!-- ABOUT--><!-- ABOUT--><!-- ABOUT-->

<!--  AKTUELL --><!--  AKTUELL --><!--  AKTUELL --><!--  AKTUELL --><!--  AKTUELL -->

<div class="aktuell">
    <div class="container">
        <h1>Aktuelles</h1>
        <p>Fruehling im Eggenertal im Markgraeflerland 22,04,2018.</p>
    </div>
    <hr>
    <div class="container">
    <div id="mainaktuell">

    <?php
        $files = glob('aktuelles//*.{jpg,png,gif,JPG}', GLOB_BRACE);
        foreach($files as $file){
            ?>

        <div class="thumbnailsak zoom">
            <a href="<?php echo $file;?>" data-fancybox="img" >
            <img src="<?php echo $file;?>" alt="<?php echo $file;?>">
        </a>
        </div>
        <?php
        }
    ?>
</div>
     </div>
</div>
<!--  AKTUELL --><!--  AKTUELL --><!--  AKTUELL --><!--  AKTUELL --><!--  AKTUELL -->




<?php
    require("footer.php");
?>
