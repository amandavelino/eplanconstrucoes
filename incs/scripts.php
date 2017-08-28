<script src="./bower_components/jquery/dist/jquery.min.js"></script>
<script src="./js/smoothscroll.min.js"></script>
<script src="./bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){      
        $('.owl-home').owlCarousel({
            items: 1,
            nav: true,
            dots: true,
            navText: ['<i class="fa fa-chevron-left fa-3x" aria-hidden="true"></i>','<i class="fa fa-chevron-right fa-3x" aria-hidden="true"></i>'],
            loop: false,
            margin: 0
        });
    });//
</script> 