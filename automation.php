  <?php $title=" Interior decorator course in Gurgaon, Dwarka, Delhi";
$Desc="The most common and popular career profiles after pursuing an interior design course in Gurgaon, Dwarka, Delhi are to become Interior designers and interior decorators.";?>
<?php include 'header.php'; ?>
<style>
   .contact-form .single-form input, .contact-form .single-form textarea{background:#EB3656; -webkit-text-fill-color: white;}
    .ws{width: 120px; padding-top:40px;}
    .heading{color: #EB3656;}
</style>
<section id="about" class="about-area pt-80 pb-130">
    <div class="container">
        <div class="row">
           
           
        </div> <!-- row -->
    </div> <!-- container -->
      <section class="about-area pt-80">
           <div class="container ">
           <center> <h2 class="about-welcome " style="color: #EB3656;">HOME AUTOMATION & SECURITY</h2></center>
        <div class="row text-center pt-40">
       
             <div class="col-lg-3">
                 <img src="assets/images/h1.png" class="ws" alt=""><br>
             <p class="heading">Home Automation</p>
            </div>
            <div class="col-lg-3">
            <img src="assets/images/h2.png" class="ws" alt=""><br>
            <p class="heading">Home/Office Networking</p>
            </div>
            <div class="col-lg-3">
            <img src="assets/images/h3.png" class="ws" alt=""><br>
            <p class="heading">Smart Security Cameras</p>
            </div>
            <div class="col-lg-3">
            <img src="assets/images/h4.png" class="ws" alt=""><br>
            <p class="heading">Intrusion Alarm Systems</p>
            </div>
            
            <div class="col-lg-3">
            <img src="assets/images/h5.png" class="ws" alt=""><br>
            <p class="heading">Motion Censors</p>
            </div>
            <div class="col-lg-3">
            <img src="assets/images/h6.png" class="ws" alt=""><br>
            <p class="heading">Digital Door Locks</p>
            </div>
            <div class="col-lg-3">
            <img src="assets/images/h7.png" class="ws" alt=""><br>
            <p class="heading">Motorised Curtains</p>
            </div>
            <div class="col-lg-3">
            <img src="assets/images/h8.png" class="ws" alt=""><br>
            <p class="heading">Complete Home Audio Solutions</p>
            </div>
</div></div>
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