
<?php
include('header.php');
?>
  <section id="hero">
    <div class="hero-container">
      <h1>EXPRESS COURIER COMPANY</h1>
      <h5><i>Our delivery Service give you the ultimate in speed and security.</i></h5> 
    </div>
  </section><!-- #hero -->

  <main id="main">

   <!--
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Feedback</h3>
          <p class="section-description">Your feedback is important for us</p>
        </div>
      </div>

     <!--  <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div> -->

      <div class="container wow fadeInUp">
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" ></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" name="sendmessage">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

<?php



if(isset($_REQUEST['sendmessage']))
{
  include('connection.php');
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];

$sql=mysqli_query($conn,"INSERT INTO `testimonial` (`id`, `name`, `email`, `subject`, `message`) VALUES (NULL, '$name', '$email', '$subject', '$message')");

if($sql)
{
  echo "<script>alert('Thank you for submit your Feedback');</script>";
}



}
?>