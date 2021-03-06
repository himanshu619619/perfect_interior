<?php include 'header.php'; ?>
<section id="about" class="about-area pt-80 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-image mt-50 clearfix">
                    <div class=" ">
                        <img src="assets/images/design_consultancy.png" alt="About" style="filter: drop-shadow(2px 4px 6px black);">
                    </div> <!-- single image -->

                 
                </div> <!-- about image -->
            </div>
            <div class="col-lg-6">
                <div class="about-content mt-40">
                    <div class="banner-image bg_cover" style="background-image: url(assets/images/banner/banner-image.png)">
                
                <div class="floating_from">

                <h3>Looking for Design Consultancy Service?</h3>
                <form action="send_form_email.php" Method="POST" class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                <input type="text" name="email" class="form-control" placeholder="Your Email" required>
                <input type="text" name="mobile" class="form-control" placeholder="Your Phone" required>
                <input type="text" name="Subject" class="form-control" placeholder="Your Subject" required>
                <textarea name="message" id="" cols="43" rows="2" placeholder="Your Message" required></textarea>
                <input type="submit" class="btn btn-primary btn-block main-btn" value="Get Design Consultation ">
            </form>
            </div>
                
            </div>






                    <!--<a class="main-btn mt-25" href="#">+91 98712 79995</a>-->
                </div> <!-- about content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<section>
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="about-content mt-10 sub_services ">
                    <h2 class="about-welcome"> Specific Design Consultancy Service</h2>
                            <p>
                            This is a category specific design consultancy service that we provide in-house for most categories, and in some categories we hire third party design experts to provide better insights. In this package, you choose a specific element of your product, project or service and we focus more on that element. </p>
                </div>

            </div>
            <div class="col-md-6">
                <div class="about-content mt-10 sub_services">
                    <h2 class="about-welcome">Professional Design Consultancy Service</h2>
                    <p>
                    This is a professional design consultancy service that we usually work with design experts to improve and advance your products and services. This is a solution oriented service, unlike the specific and in-house design consultancy service, in this package we offer a more technical presentation about what needs to be done</p>


                </div>
            </div>
        </div>
    </div>
    <section class="about-area pt-80">
    <img src="assets/images/design2.jpg" alt="" style="    filter: drop-shadow(2px 4px 6px black);">

    </section>

</section>



<?php include 'footer.php'; ?>