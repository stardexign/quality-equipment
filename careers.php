<?php include ("header.php");?>
<?php include ("other-pages-banner.php");?>
<section id="categories">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="Heading">
                    <h2>Careers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="content">
                    <p>Yellow Power Construction Equipment offers talented and motivated people the opportunity to work in a dynamic working environment. You’ll have the opportunity to create a career that you can be proud of. If you think you have what it takes to work in a dynamic and challenging environment then fill out the form below and attach your resume.</p>
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
                                <input placeholder="Subject*" type="text" class="form-control" id="firstname" name="firstname"  maxlength="50">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 form-group">
                                <input required placeholder="Contact Number*" type="text" class="form-control" id="email" name="email" maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 form-group">
                                <input placeholder="Position Applying For*" type="text" class="form-control" id="firstname" name="firstname"  maxlength="50">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 form-group">
                                <input required placeholder="Years of Experience*" type="text" class="form-control" id="email" name="email" maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group">
                                <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message*" maxlength="6000" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group">
                                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
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
