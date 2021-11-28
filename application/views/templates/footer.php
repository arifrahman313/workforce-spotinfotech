    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/app.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/stripe/stripe-1.js'); ?>" data-rel-js></script>
    <script src="<?php echo base_url('assets/js/stripe/stripe-2.js'); ?>" data-rel-js></script>
    <script src="<?php echo base_url('assets/js/calculate.js'); ?>" data-rel-js></script>
    <!--<script src="<?php echo base_url('assets/js/stripe-payment.js'); ?>"></script>-->
    <!--for int-telephone-->
    <script>
      var input = document.querySelector("#phone");
      window.intlTelInput(input, {
        // any initialisation options go here
      });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        var date = new Date();
        var day = ("0" + date.getDate()).slice(-2);
        var month = ("0" + (date.getMonth() + 1)).slice(-2);
        var today = date.getFullYear() + "-" + (month) + "-" + (day);
        $('#dateid').val(today);
    </script>
    
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#myModal').modal('show');
        });
    </script>
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MXGWFHK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
      <script>
    //     $(document).ready(function(){
    //       $(window).scroll(function(){
    //       	var scroll = $(window).scrollTop();
    //     	  if (scroll > 200) {
    //     	    $(".navbar-custom").css("background" , "black");
    //     	  }else{
    //     		  $(".navbar-custom").css("background" , "black");  	
    //     	  }
    //       })
    //     })
      </script>
    
    <!--make background black in navbar when it's mobile view-->
     <script>
    //     function changeNavBackground(){
    //         elements = document.getElementsByClassName('navbar-custom');
    //         elements[0].style.backgroundColor="black";
    //     }
     </script>
    
    <!-- Messenger Chat Plugin Code Start-->
    <div id="fb-root"></div>
    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "100263274964983");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v11.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!--  Messenger Chat Plugin Code Start End-->
    
  </body>
</html>
