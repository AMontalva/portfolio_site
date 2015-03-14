
            <div id="footer">
                <div id="footerContainer">
                    <nav id="footerNav" class="footerDivider verticleLine">
                        <h3>Navigation</h3>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="about.php">About Me</a></li>
                            <li><a href="work.php">Work</a></li>  
                        </ul>
                    </nav>

                    <nav id="footerSocialMedia" class="footerDivider verticleLine">
                        <h3>Social Media</h3>
                        <ul>
                            <li><a href="https://www.linkedin.com/pub/antonio-montalvo/96/436/b5">LinkedIn</a></li>
                            <li><a href="https://github.com/AMontalva">Github</a></li>
                        </ul>
                    </nav>
                    <div id="footerContact" class="footerDivider"> 
                        <h3>Get In Touch</h3>
                        <p>antonio.montalvo.87@gmail.com</p>
                    </div>

                </div>
                <div id="copywrite">
                    Copyright © 2015 Antonio Montalvo. All rights reserved.
                </div>
            </div>  

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="js/jquery.hcaptions.js"></script>               
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script>
            // responsive dropdown
            $(function() {
                var pull        = $('#pull');
                    menu        = $('nav ul');
                    menuHeight  = menu.height();

                $(pull).on('click', function(e) {
                    e.preventDefault();
                    menu.slideToggle();
                });

                $(window).resize(function(){
                    var w = $(window).width();
                    if(w > 320 && menu.is(':hidden')) {
                        menu.removeAttr('style');
                    }
                });
            });

        </script>

        <script>
            // hover popup on work
            $(document).ready(function() {
                $('.fade').hover(
                    function() {
                        var w = $(this).width();
                        var h = $(this).height();

                        $(".caption").css({"width": w, "height": h});
                        $(this).find('.caption').fadeIn(250);
                        console.log(w, h);
                    },
                    function() {
                        $(this).find('.caption').fadeOut(250);
                    }
                );
            });

            // hover color change on logo
            $(document).ready(function() {
                $("#logo").hover(
                    function() {
                        $("#nameText").css("color", "#FF7052");
                        $("#webText").css("color", "#FF7052");
                    },
                    function() {
                        $("#nameText").css("color", "#FFFFFF");
                        $("#webText").css("color", "#FFFFFF");
                    }
                );
            });
        </script>






        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
