    <script src="<?php echo base_url('assets/js/stripe/stripe-1.js'); ?>" data-rel-js></script>
    <script src="<?php echo base_url('assets/js/stripe/stripe-2.js'); ?>" data-rel-js></script>
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

</body>
</html>