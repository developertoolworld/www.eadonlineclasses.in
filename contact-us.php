<!DOCTYPE html>
<html>
<head>
  <title>Contact Us | EAD ONLINE CLASSES</title>
  <?php include("common/head.php");?>
</head>
<body>

<?php include("common/header.php");?>
<!-- ======= Contact Section ======= -->
<br> <br><br> <br>
    <section id="contact" class="contact">
      <div class="container mt-4">

        <div class="section-title">
          <h2>Contact Us</h2>
          <p>Academy starts online classes from 2018 atYOUTUBEand becomes very famous in the field of Engineering Coaching. To promote the free Education Academy also start the FREE ONLINE CLASSES in the field of Non-Technical Examination like SSC-CGL SSC-CHSL,Banking and other sectors. </p>
        </div>
      </div>
      <br>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3444.739992454524!2d77.99244171512117!3d30.301462781789574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390929daaaaaaaab%3A0xec9d765f01ea433e!2sENGINEERING%20ACADEMY%20DEHRADUN!5e0!3m2!1sen!2sin!4v1618378658481!5m2!1sen!2sin"
          frameborder="0" allowfullscreen></iframe>
          
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Shimla by Pass Road Pithuwala Opposite Uttarakhand Jal Sansthan Near Government Polytechnic Pithuwal </p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:engineeringacademyddn@gmail.com">Engineeringacademyddn@gmail.com</a></p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+91-8449597123, +91-8057871234 </p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                    data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                  data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required"
                  data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    <?php include("common/footer.php");?>
</body>