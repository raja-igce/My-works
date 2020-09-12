<?php 
include_once('header.php');
?>

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Contact Us</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>Contact Us</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End --> 

<!-- Contact us -->
<div class="inner-page">
  <div class="container">
    <div class="contact-wrap">
      <div class="title"> <span></span>
        <h2>GET IN TOUCH FAST</h2>
        <p>Whether queries, issues or feedback, send us a note, we’re waiting to hear from you</p>
      </div>
      <div class="row"> 
        <!-- Contact Info -->
        
        <div class="contact-now">
          <div class="col-md-4 column">
            <div class="contact"> <span><i class="fa fa-headphones"></i></span>
              <div class="information"> <strong>Contact us:</strong>
                <p>We Are Here For Your Help.</p>
              </div>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="col-md-4 column">
            <div class="contact"> <span><i class="fa fa-envelope"></i></span>
              <div class="information"> <strong>Email Address:</strong>
                <p>raman.kandasami@gmail.com</p>
                <p></p>
              </div>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="col-md-4 column">
            <div class="contact"> <span><i class="fa fa-phone"></i></span>
              <div class="information"> <strong>Phone No:</strong>
                <p>+971 55 914 9071</p>
                <p></p>
              </div>
            </div>
          </div>
          <!-- Contact Info --> 
        </div>
        <div class="col-md-4 column">

<img src="images/customer-services2.jpg" alt="contactus" class="img-responsive img-thumbnail">        		
          <!-- Google Map -->
         <!-- <div class="googlemap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d193572.19492844533!2d-74.11808565615137!3d40.70556503857166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1481975053066" allowfullscreen></iframe>
          </div>-->
        </div>
        
        <!-- Contact form -->
        <div class="col-md-8 column">
          <div class="contact-form">
            <div id="message"></div>
            <form method="post" name="contactform1" id="contactform1">
              <div class="row">
                <div class="col-md-6">
                  <input name="contactname" type="text" id="contactname" placeholder="Full Name">
				  <span class="help-block"></span>
                </div>
                <div class="col-md-6">
                  <input type="text" name="contactphone" id="" placeholder="Phone Number">
				  <span class="help-block"></span>
                </div>
                <div class="col-md-6">
                  <input name="contactemail" type="email" id="contactemail" placeholder="Email">
				  <span class="help-block"></span>
                </div>
				<div class="col-md-6">
                  <input name="contactsubject" type="text" id="contactsubject" placeholder="Subject">
				  <span class="help-block"></span>
                </div>
                <div class="col-md-12">
                  <textarea rows="4" name="contactcomments" id="contactcomments" placeholder="Details"></textarea>
				  <span class="help-block"></span>
                </div>
                <div class="col-md-12">
                  <button class="button" type="submit" id="submit">Submit Now</button>
				  
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include_once('footer.php');
?>