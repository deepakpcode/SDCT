<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../images/favicon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
    <link rel="stylesheet" href="../components/nav.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../components/footer.css">
    <link rel="stylesheet" href="contact.css">
    <title>SDCT - Contact Us</title>
</head>
<body>
    
    <?php include_once("../components/nav.php"); ?>

    <div id="title-hero" class="overlay">
        <div class="header-text">
            <h1>Contact Us</h1>
        </div> 
    </div>
    

    <!-- contact section -->

    <section>
        <div class="container">
          <div class="form">
            <div class="contact-info">
              <h3 class="title">Contact Information</h3>
              <p class="text">
                  Reach out today for inquiries, collaborations, or any assistance needed!
              </p>
    
              <div class="info">
                <div class="information">
                  <i class="fa-solid fa-location-crosshairs"></i>
                  <p>Sai Paradise, Daruthenga,<br> Bhubaneswar - 751024, Odisha</p>
                </div>
                <div class="information">
                  <i class="fa-solid fa-phone"></i>
                  <p>+91 9439942450 <br> sdct.official@gmail.com</p>
                </div>
                <div class="information">
                  <i class="fa-solid fa-clock"></i>
                  <p>Monday - Friday: 9:00 - 5:00<br>Sunday & Saturday: 10:30 - 1:00</p>
                </div>
              </div>
    
              <div class="social-media">
                <p>Follow us :</p>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://wa.me/9439942450"><i class="fa-brands fa-whatsapp"></i></a>
              </div>
              </div>
            </div>
    
            <div class="contact-form">
              <form action="index.html" autocomplete="off">
                <h3 class="title">Let's Get in Touch</h3>
                <div class="input-container">
                  <input type="text" name="name" class="input" placeholder="Full Name"/>
                  
                  
                </div>
                <div class="input-container">
                  <input type="email" name="email" class="input" placeholder="Email Address"/>
                  
                  
                </div>
                <div class="input-container">
                  <input type="tel" name="phone" class="input" placeholder="Phone Number"/>
                  
                  
                </div>
                <div class="input-container textarea">
                  <textarea name="message" class="input" placeholder="Your Message"></textarea>
                  
                  
                </div>
                <input type="submit" value="Send Message" class="btn" />
              </form>
            </div>
          </div>
        </div>  
      </section>
    
      <!-- contact section end -->
    
    
      <?php include_once("../components/footer.php"); ?>
    


    <script src="../script.js"></script>
</body>
</html>