<script src="./bower_components/jquery/dist/jquery.min.js"></script>
<script src="./bower_components/jquery.easing/js/jquery.easing.min.js"></script>
<script src="./js/smoothscroll.min.js"></script>
<script src="./bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
<?php /* Lightview */ ?>
<script type="text/javascript" src="./js/spinners/spinners.min.js"></script>
<script type="text/javascript" src="./js/lightview/lightview.js"></script>
<script>
    $(document).ready(function(){ 

        function goToSessao(e){
            var sessao = $(e).offset().top;
            $("html, body").stop().animate({ scrollTop: sessao }, 1500, "easeInOutQuart");
        }//goToSessao

        $('.owl-home').owlCarousel({
            autoplay: true,
            autoplayTimeout: 7000,
            autoplayHoverPause: true,
            center: true,
            smartSpeed: 500,
            items: 1,
            nav: false,
            dots: true,
            navText: ['<i class="fa fa-chevron-left fa-3x" aria-hidden="true"></i>','<i class="fa fa-chevron-right fa-3x" aria-hidden="true"></i>'],
            loop: true,
            margin: 0
        });

        //goToContatoSection
        $(".contato-link").on("click", function(){

            goToSessao("#ft-principal");
            return false;

        });//

        //Menu Mobile
        $("#menu-mobile").on("click", function(){

            var menu_mobile = $(".nav-mobile"),
            menuAtivo = "menu-ativo";

            //Animação do Menu
            if(!menu_mobile.hasClass(menuAtivo))
            {
                menu_mobile.addClass(menuAtivo);
                menu_mobile.stop().animate({ height: "155px" }, 500, "easeInQuart");
            }else
            {
                menu_mobile.removeClass(menuAtivo);
                menu_mobile.stop().animate({ height: 0 }, 500, "easeOutQuart");
            }//end if
            
            return false;

        });//

    });//
</script> 