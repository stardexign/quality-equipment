<section id="footer">
    <div class="container">
        <div class="row PT30 PB30">
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="footertext">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias assumenda beatae cumque ea eaque exercitationem facilis itaque nisi nobis pariatur possimus quaerat quia quibusdam recusandae repellat repellendus, suscipit voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorum nemo quod sit velit? Blanditiis dolorum harum itaque necessitatibus neque numquam quae sapiente tempore. Dolorum non numquam recusandae! Consequatur, dolores.</p>
                    <div class="BtmSocialIcons">
                        <span class="Facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                        <span class="linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a></span>
                        <span class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></span>
                        <span class="gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="footertext">
                    <h2>News & Updates</h2>
                    <h3>24-Feb-2018</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <h3>24-Feb-2018</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <h3>24-Feb-2018</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="footertext">
                    <h2>Location Map</h2>
                    <iframe class="PT20" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3611.9615721321607!2d55.228657999999996!3d25.136989999999997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f697dcd3143a9%3A0x30eb3803a0781645!2sQuality+Equipment+Rental+LLC!5e0!3m2!1sen!2s!4v1416848854092" width="100%" height="250" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
        </div>
        <div class="row PB30">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="footertext">
                    <h2>Contact Us</h2>
                    <p>Quality Equipment Rental LLC<br>
                        Warehouse # 21 Street # 23 - Dubai<br>United Arab Emirates. <br>
                        P.O.Box:- 35947 <br>
                        Telephone Number:- 800 737 (QER) <br>
                        Fax Number:- +9712 554 3210 <br>
                        Weekday: 9am to 6pm <br>
                        Friday: closed
                    </p>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="footertext">
                    <form role="form" method="post" id="reused_form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 form-group">
                                <input placeholder="Your Name.." type="text" class="form-control" id="firstname" name="firstname"  maxlength="50">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 form-group">
                                <input required placeholder="Enter Your Email Address.." type="text" class="form-control" id="email" name="email" maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group">
                                <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group">
                                <button type="submit" class="btn submitbtn" id="btnContactUs">Submit</button>
                            </div>
                        </div>

                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; ">
                        <h3>Sent your message successfully!</h3>
                    </div>
                    <div id="error_message"
                         style="width:100%; height:100%; display:none; ">
                        <h3>Error</h3>
                        Sorry there was an error sending your form.

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <p class="copyrights">
                    Copyright © 2018 All Rights Reserved by Quality Equipment Trading FZCO <br>
                    <a href="#">Web Developers: 800Wisdom</a>
                </p>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="resources/js/jquery-1.9.1.min.js"></script>
<script src="resources/js/owl.carousel.js"></script>
<script src="resources/js/lightbox.min.js"></script>
<script src="resources/js/retina.min.js"></script>
<script src="resources/js/script.js"></script>
<script src="resources/js/fotorama.js"></script>
<script src="resources/js/bootstrap.js"crossorigin="anonymous"></script>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

    $(document).ready(function() {

        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds
            navigation : true, // Show next and prev buttons
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]

        });

        $("#owl-demo1").owlCarousel({
            navigation : true, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true
        });

        $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
        $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');

    });

    $(function() {
        var pgurl = window.location.href.substr(window.location.href
                .lastIndexOf("/")+1);
        $(".topnav a ").each(function(){
            if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
                $(this).addClass("active");
        })
    });


    /* Open the sidenav */
    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
    }

    /* Close/hide the sidenav */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }



</script>

</html>