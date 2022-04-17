<?= $this->extend('template'); ?>
<?= $this->section('bodycontent'); ?>
<!-- Service Section
    ================================================== -->
<section id="whatIdo">
    <div class="container">
        <!-- container -->

        <div class="section-header">
            <h2>What I <span class="highlight"><strong>Do</strong></span></h2>
            <div class="fancy"><span></span></div>
        </div>

        <div class="row">
            <!-- row -->

            <div class="col-md-6 text-right">
                <!-- Left Content Col 6 -->
                <img src="assets/img/marsha2.jpg" class="intro-logo img-responsive" alt="free-template">
            </div> <!-- End Left Content Col 6 -->

            <div class="col-md-6">
                <!-- Right Content Col 6 -->

                <div class="media service">
                    <!-- Service #4 -->
                    <div class="media-left media-middle">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Web & App Design</h4>
                        <p>App design adalah proses merancang design sebuah app yang bertujuan menghasilkan mobile app dengan design yang menarik tapi juga fungsional.</p>
                    </div>
                </div><!-- end Service #4 -->

                <div class="media service">
                    <!-- Service #5 -->
                    <div class="media-left media-middle">
                        <i class="fa fa-android"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Web Development</h4>
                        <p>Web development atau pengembangan web, adalah sebuah proses pembangunan dan pemeliharaan situs web.</p>
                    </div>
                </div> <!-- end Service #5 -->

                <div class="media service">
                    <!-- Service #6 -->
                    <div class="media-left media-middle">
                        <i class="fa fa-apple"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Mobile Development</h4>
                        <p>Mobile application development adalah istilah yang dipakai untuk menyebut proses pengembangan aplikasi yang beroperasi di perangkat mobile. </p>
                    </div>
                </div> <!-- end Service #6 -->
            </div><!-- end Right Content Col 6 -->

        </div><!-- end row -->

    </div><!-- end container -->
</section>

<!-- About Us Section
    ================================================== -->

<section id="about">
    <div class="container">
        <!-- container -->
        <div class="section-header">
            <h2>Who Am I <span class="highlight"><strong>Marsha</strong></span></h2>
            <div class="fancy"><span></span></div>
        </div>
    </div><!-- end container -->
    <div class="container">

        <div class="row">
            <div class="col-sm-4 col-sm-offset-1 scrollimation fade-right in">
                <img class="img-responsive img-circle img-center" src="assets/img/about.png" alt="">
            </div>
            <div class="col-sm-6 col-sm-offset-1 scrollimation fade-left in">
                <h1>Hello, I am Marsha Amalia Ayuningsih</h1>
                <p>Saya adalah seorang Mahasiswa Teknik Informatika semester 4. Berpengalaman mengoperasikan Microsoft Office serta Adobe Photoshop selama 2 tahun. Cepat tanggap pembuatan macam persuratan dan proposal. Mampu membuat design visual untuk berbagai kebutuhan perusahaan yang sesuai dengan guideline dan menarik. </p>

            </div>
        </div>
        <!--End row -->

    </div>
    <!--End container -->

</section>

<section id="experience">
    <div class="container">
        <!-- container -->
        <div class="section-header">
            <h2>Experience</h2>
            <div class="fancy"><span></span></div>
        </div>
    </div><!-- end container -->

    <div class="gray-bg">
        <!-- fullwidth gray background -->
        <div class="container">
            <!-- container -->
            <div id="experience" class="row">
                <!-- row -->

                <div class="col-md-10 col-md-offset-1">

                    <div class="media experience">
                        <!-- experience #1 -->
                        <div class="media-right media-middle">
                            <i class="fa fa-school"></i>
                        </div>
                        <div class="media-body"><?php foreach ($exp as $row) : ?>
                                <h4 class="media-heading"><?= $row['exp_name'] ?></h4>
                                <h5><?= $row['exp_in'] ?> <i>to</i> <?= $row['exp_out'] ?></h5>
                                <p><?= $row['exp_detail'] ?></p>
                            <?php endforeach; ?>
                        </div>
                    </div><!-- experience #1 -->

                </div>

            </div> <!-- end row -->
        </div><!-- end container -->
    </div> <!-- end fullwidth gray background -->
</section>


<!-- experience Section
    ================================================== -->
<section id="experience">
    <div class="container">
        <!-- container -->
        <div class="section-header">
            <h2>Education</h2>
            <div class="fancy"><span></span></div>
        </div>
    </div><!-- end container -->

    <div class="gray-bg">
        <!-- fullwidth gray background -->
        <div class="container">
            <!-- container -->
            <div id="experience" class="row">
                <!-- row -->

                <div class="col-md- col-md-offset-2">
                    
                        <div class="media experience">
                            <!-- experience #1 -->
                            <div class="media-right media-middle">
                                <i class="fa fa-school"></i>
                            </div>
                            <div class="media-body"><?php foreach ($edu as $row) : ?>
                                <h4 class="media-heading"><?= $row['edu_name'] ?></h4>
                                <h5><?= $row['edu_in'] ?> <i>to</i> <?= $row['edu_out'] ?></h5>
                                <p><?= $row['edu_detail'] ?></p>
                                <?php endforeach; ?></div>
                        </div><!-- experience #1 -->

                </div>
            
            </div> <!-- end row -->
        </div><!-- end container -->
    </div> <!-- end fullwidth gray background -->
</section>


<!-- Contact Section
    ================================================== -->
<section id="contact">

    <div class="container">
        <!-- container -->
        <div class="section-header">
            <h2>Keep In Touch With ME</h2>
            <div class="fancy"><span></span></div>
        </div>
    </div><!-- end container -->

    <div class="container">
        <!-- container -->
        <div class="row">
            <!-- outer row -->
            <div class="col-md-10 col-md-offset-1">
                <!-- col 10 with offset 1 to centered -->
                <div class="row">
                    <!-- nested row -->

                    <!-- contact detail using col 4 -->
                    <div class="col-md-4">
                        <div class="contact-detail">
                            <i class="fa fa-map-marker"></i>
                            <h4>Cikaret jl. Goalpara</h4> <!-- address -->
                        </div>
                    </div>
                    <!-- contact detail using col 4 -->
                    <div class="col-md-4">
                        <div class="contact-detail">
                            <i class="fa fa-envelope-o"></i>
                            <h4>mrshaamaliaa05@gmail.com</h4><!-- email add -->
                        </div>
                    </div>

                    <!-- contact detail using col 4 -->
                    <div class="col-md-4">
                        <div class="contact-detail">
                            <i class="fa fa-phone"></i>
                            <h4>+6281219693973</h4> <!-- phone no. -->
                        </div>
                    </div>

                </div> <!-- end nested row -->
            </div> <!-- end col 10 with offset 1 to centered -->
        </div><!-- end outer row -->

        <div class="row text-center">
            <!-- contact form outer row with centered text-->
            <div class="col-md-10 col-md-offset-1">
                <!-- col 10 with offset 1 to centered -->
                <form id="contact-form" class="form" name="sentMessage" novalidate>
                    <!-- form wrapper -->

                    <div class="row">
                        <!-- nested inner row -->

                        <!-- Input your name -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <!-- Your name input -->
                                <input type="text" autocomplete="off" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <!-- Input your email -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <!-- Your email input -->
                                <input type="email" autocomplete="off" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <!-- Input your Phone no. -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <!-- Your email input -->
                                <input type="text" autocomplete="off" class="form-control" placeholder="Your Phone No. *" id="phone" required data-validation-required-message="Please enter your phone no.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                    </div><!-- end nested inner row -->

                    <!-- Message Text area -->
                    <div class="form-group">
                        <!-- Your email input -->
                        <textarea class="form-control" rows="7" placeholder="Tell Us Something..." id="message" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                        <div id="success"></div>
                    </div>
                    <button type="submit" class="btn btn-primary btn color">Send Message</button> <!-- Send button -->

                </form><!-- end form wrapper -->
            </div><!-- end col 10 with offset 1 to centered -->
        </div> <!-- end contact form outer row with centered text-->

    </div><!-- end container -->

</section>

<?= $this->endSection(); ?>