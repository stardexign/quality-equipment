<?php include ("header.php");?>
<?php include ("other-pages-banner.php");?>
<section id="categories">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="Heading">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="content">
                    <h2>Company Address</h2>
                    <p>
                        Yellow Power L.L.C <br>
                        Sharjah, United Arab Emirates <br>
                        P.O Box 150191 <br>
                        Telephone Number: +971 6 7408719 <br>
                        Fax Number: +971 6 5667132 <br>
                        Mobile Number: +971 55 1552439 (Mr. Mohsin) <br>
                        Mobile Number: +971 55 9177829 (Mr. Ijaz) <br>
                        E-Mail Address: ali@yellowpower.ae <br>
                    </p>
                    <h2>Business Hours!</h2>
                    <p>
                        Weekdays: 9 a.m. – 6 p.m.<br>
                        Friday: Closed<br>
                    </p>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                <iframe class="PB20" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3611.9615721321607!2d55.228657999999996!3d25.136989999999997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f697dcd3143a9%3A0x30eb3803a0781645!2sQuality+Equipment+Rental+LLC!5e0!3m2!1sen!2s!4v1416848854092" width="100%" height="400" frameborder="0" style="border:0"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="content">
                    <h2>We Are Here To Assist You!</h2>
                    <form role="form" method="post" id="reused_form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 form-group">
                                <input placeholder="Your Name*" type="text" class="form-control" id="firstname" name="firstname"  maxlength="50">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 form-group">
                                <input required placeholder="Enter Your Email Address*" type="text" class="form-control" id="email" name="email" maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 form-group">
                                <input placeholder="Contact Number*" type="text" class="form-control" id="firstname" name="firstname"  maxlength="50">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 form-group">
                                <input required placeholder="Subject*" type="text" class="form-control" id="email" name="email" maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group">
                                <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message*" maxlength="6000" rows="5"></textarea>
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
                    <div id="error_message"style="width:100%; height:100%; display:none; ">
                        <h3>Error</h3>
                        Sorry there was an error sending your form.

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include ("section-b4-footer.php");?>
<?php include ("footer.php");?>
