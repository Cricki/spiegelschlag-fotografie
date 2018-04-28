    <!--Footer-->
    <footer class="page-footer font-small special-color-eigen-bright pt-4 mt-4">
        <!--Social buttons-->
        <div class="text-center">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                    <a href="https://www.facebook.com/spiegelschlag" class="btn-floating btn-sm btn-fb mx-1">
                        <i class="fa fa-facebook"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-sm btn-tw mx-1">
                        <i class="fa fa-twitter"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://plus.google.com/u/0/+WernerBre" class="btn-floating btn-sm btn-gplus mx-1">
                        <i class="fa fa-google-plus"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.pinterest.de/spiegelschlag" class="btn-floating btn-sm btn-pn mx-1">
                        <i class="fa fa-pinterest"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-sm btn-in mx-1">
                        <i class="fa fa-instagram"> </i>
                    </a>
                </li>
            </ul>
        </div>
        <!--/.Social buttons-->
    
        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                Copyright © 2018:
                <a href="impressum.php"> Spiegelschlag Fotografie </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DESIGN by brento
                
            </div>
        </div>
        <!--/.Copyright-->
    
    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!--Fancyboy-->
    <script type="text/javascript" src="jquery.fancybox.min.js"></script>

<!-- SCROLLREVEAL--><!-- SCROLLREVEAL--><!-- SCROLLREVEAL--><!-- SCROLLREVEAL--><!-- SCROLLREVEAL-->

    <script>
        if(window.matchMedia("(min-width:1000px)").matches){

        window.sr = ScrollReveal();
        sr.reveal('.bottom-right', {
          duration: 4000,
          distance: "500px",
          origin:'top'
        });
        sr.reveal('.top-right', {
          duration: 4000,
          distance: "500px",
          origin:'bottom'
        });
        sr.reveal('.center-right', {
          duration: 4000,
          distance: "500px",
          origin:'left'
        });

        sr.reveal('.bottom-left', {
          duration: 4000,
          distance: "500px",
          origin:'top'
        });
        sr.reveal('.top-left', {
          duration: 4000,
          distance: "500px",
          origin:'bottom'
        });
        sr.reveal('.center-left', {
          duration: 4000,
          distance: "500px",
          origin:'right'
        });
        sr.reveal(".thumbnails:nth-child(odd)",{
            duration: 4000,
            distance: "400px",
            origin: "bottom"
        });
        sr.reveal(".thumbnails:nth-child(even)",{
            duration: 3000,
            distance: "300px",
            origin: "left"
        });
        sr.reveal(".thumbnails:nth-child(3n+1):nth-child(even)",{
            duration: 2000,
            distance: "300px",
            origin: "right"
        });
        } else{
        window.sr = ScrollReveal();
        sr.reveal('.bottom-right', {
          duration: 4000,
          distance: "500px",
          origin:'top'
        });
        sr.reveal('.top-right', {
          duration: 4000,
          distance: "500px",
          origin:'bottom'
        });
        sr.reveal('.center-right', {
          duration: 4000,
          distance: "500px",
          origin:'left'
        });

        sr.reveal('.bottom-left', {
          duration: 4000,
          distance: "500px",
          origin:'top'
        });
        sr.reveal('.top-left', {
          duration: 4000,
          distance: "500px",
          origin:'bottom'
        });
        sr.reveal('.center-left', {
          duration: 4000,
          distance: "500px",
          origin:'right'
        });

        }
    </script>
    



<!-- RIGHT CLICK DISABLE --><!-- RIGHT CLICK DISABLE --><!-- RIGHT CLICK DISABLE --><!-- RIGHT CLICK DISABLE -->

<script>
    $(document).bind("contextmenu",function(e){
  e.preventDefault()
});
</script>

<script>
    $('img').bind('contextmenu', function(e) {
    return false;
}); 
</script>


        <script>
            $('#nearestStaticContainer').on('contextmenu', 'img', function(e){ 
  return false; 
});
        </script>

<!-- RIGHT CLICK DISABLE -->
<!--SCROLLREVEAL -->
        <script>
    $(function() {
      // Smooth Scrolling
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
    </script>
</body>

</html>