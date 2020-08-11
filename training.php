  <?php $title=" Interior decorator course in Gurgaon, Dwarka, Delhi";
$Desc="The most common and popular career profiles after pursuing an interior design course in Gurgaon, Dwarka, Delhi are to become Interior designers and interior decorators.";?>
<?php include 'header.php'; ?>
<style>
   .contact-form .single-form input, .contact-form .single-form textarea{background:#EB3656; -webkit-text-fill-color: white;}
    
    
</style>
<section id="about" class="about-area pt-80 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-image mt-50 clearfix">
                    <div class=" ">
                        <img src="assets/images/training.jpg" alt="About" style="filter: drop-shadow(2px 4px 6px black);">
                    </div> <!-- single image -->

                 
                </div> <!-- about image -->
            </div>
            <div class="col-lg-6">
                 <div class="section-title text-center pb-20">
                       
                        
                    </div> <!-- section title -->
                <div class="about-content mt-40">
                    <h2 class="title text-center">Get Courses</h2>
                    <div class="contact-form">
                        <form  id="training" >
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="name" placeholder="Your Name" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="email" name="email" placeholder="Your Email" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="subject" placeholder="Subject" data-error="Subject is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="mobile" placeholder="mobile" data-error="Phone is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <textarea placeholder="Your Mesaage" name="message" data-error="Please,leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form form-group text-center">
                                        <button type="submit" class="main-btn">Submit </button>
                                        <p style="display:none;" class="alert alert-success shows">Success! </p>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                        
                    </div> <!-- row -->


 



                    <!--<a class="main-btn mt-25" href="#">+91 98712 79995</a>-->
                </div> <!-- about content -->
                
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
      <section class="about-area pt-80">
           <div class="container">
        <div class="row">
             <div class="col-lg-12">
   <img src="assets/images/training2.jpg" alt="" style="    filter: drop-shadow(2px 4px 6px black);">
</div></div></div>
    </section>
</section>

<section>
    <!--<div class="container">-->
    <!--    <div class="row">-->

    <!--        <div class="col-md-6">-->
    <!--            <div class="about-content mt-10 sub_services ">-->
    <!--                <h2 class="about-welcome"> Specific Design Consultancy Service</h2>-->
    <!--                        <p>-->
    <!--                        This is a category specific design consultancy service that we provide in-house for most categories, and in some categories we hire third party design experts to provide better insights. In this package, you choose a specific element of your product, project or service and we focus more on that element. </p>-->
    <!--            </div>-->

    <!--        </div>-->
    <!--        <div class="col-md-6">-->
    <!--            <div class="about-content mt-10 sub_services">-->
    <!--                <h2 class="about-welcome">Professional Design Consultancy Service</h2>-->
    <!--                <p>-->
    <!--                This is a professional design consultancy service that we usually work with design experts to improve and advance your products and services. This is a solution oriented service, unlike the specific and in-house design consultancy service, in this package we offer a more technical presentation about what needs to be done</p>-->


    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
  

</section>



<?php include 'footer.php'; ?>
<script type="text/javascript">
$("form#training").submit(function(e){
var form = $(this);
e.preventDefault();

$.ajax({
type:"POST",	
url: "send_form_email.php",
data: form.serialize(),
dataType: "html",
success : function(data){

$(".shows").show();
  $(".shows").fadeOut(6000);

}, complete: function(data){
    setTimeout(continueExecution, 3000);
function continueExecution(){
   window.location.href = 'https://perfectinterior.in/brochure.pdf';
 }  },
  error: function() { alert("Error posting feed."); }

});

	});

</script>