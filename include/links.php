<script src="assests/js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="assests/js/popper.min.js"></script>
<script src="assests/js/slick.min.js"></script>
<script src="assests/js/fontawesome.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="assests/js/custom.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js'></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script> 
<script>
      jQuery(function() {
    jQuery("#servtabs").tabs({
      show: { effect: "blind", direction: "right", duration: 300 }
    });
    jQuery("#servaccordion").accordion();

    var servbtn = jQuery('#servaccordion li a');
    var servtabLineImg = jQuery('.servtab-line img');

    servbtn.on('click', function() {
      servbtn.removeClass('active');
      servbtn.parent().find('.servaddon').removeClass('fadein');

      jQuery(this).addClass('active');
      jQuery(this).parent().find('.servaddon').addClass('fadein');

      // Check if the clicked tab is the fifth one
      if (jQuery(this).attr('href') === '#servtabs-5') {
        servtabLineImg.css('height', '280px'); // Set your reduced height here
      } else {
        servtabLineImg.css('height', '415px'); // Set the original height here
      }
    });
  });
</script>
<!-- Start of designpriestssupport Zendesk Widget script -->
<!-- <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=53ab3abc-8454-4754-bc70-c3dcf9434dca"> </script> -->
 <!-- End of designpriestssupport Zendesk Widget script  -->
</body>
</html>