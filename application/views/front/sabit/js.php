    <!--main js files-->
    <script src="<?php echo base_url ('assets/front/') ?>js/jquery_min.js"></script>
    <script src="<?php echo base_url ('assets/front/') ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url ('assets/front/') ?>js/jquery.countTo.js"></script>
    <script src="<?php echo base_url ('assets/front/') ?>js/jquery.inview.min.js"></script>
    <script src="<?php echo base_url ('assets/front/') ?>js/wow.min.js"></script>
    <script src="<?php echo base_url ('assets/front/') ?>js/owl.carousel.js"></script>
    <script src="<?php echo base_url ('assets/front/') ?>js/jquery.magnific-popup.js"></script>
    <script src="<?php echo base_url ('assets/front/') ?>js/custom.js"></script>
    <!--js code-->
    <script>
        function initMap() {
            var uluru = {
                lat: -36.742775,
                lng: 174.731559
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                scrollwheel: false,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async="" defer="" src="../../../maps/api/js?key=AIzaSyCmdG8C6ItElq5ipuFv6O9AE48wyZm_vqU&callback=initMap">
    </script>
    <!-- map Script-->