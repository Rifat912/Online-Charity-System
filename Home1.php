
<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: Design.php");
}

?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Charity System</title>
</head>

<body>
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#Home">
            <h1><span>H</span>elp <span>P</span>eople</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>

          <ul>
            <li><a href="Home1.php" data-after="Home">Home</a></li>
            <li><a href="Campaign.php" data-after="Campaign">Campaign</a>
			
		
            <li><a href="volunteerDetail.php"data-after="GetInvolved">Get Involved</a></li>
            <li><a href="AboutUs.php" data-after="About">AboutUs</a></li>
            <li><a href="contactus.php" data-after="Contact">Contact Us</a></li>
			<?php echo " " . $_SESSION['username'] . ""; ?>
			<li><a href="logout.php" data-after="SignIn">logout</a></li>
			
 </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="Home">
    <div class="Home container">
      <div>
        <h1>Helping <span></span></h1>
        <h1>Hands for People <span></span></h1>
        <h1> <span></span></h1>
        <a href="Donatenew.php" type="button" class="cta">DONATE</a>
      </div>
    </div>
  </section>
  <section id="Campaign">
    <div class=" Campaign container">
      <div class="service-top">
        <h1 class="section-title">Camp<span>ai</span>gn</h1>
        <p>LITTLE HEROS is a flagship program run and administrated by GIFTS FOUNDATION INDIA specially designed for help the neediest children with medical aid and support and beyond.

Not neglecting the fact that India is the second largest populated country in the world and also a nation with more than 50% of its population below the poverty line.

India as a country acknowledges the fact and as a developing country is trying very hard to better its future and curb these numbers but with the growing demand and inadequate supply, India has a lot room at the global front to improve.</p>
      
      </div>
    </div>
  </section>
  <section id="Get-Involved">
    <div class="Get-Involved container">
      <div class="Get-Involved Header">
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Get-Involved</h1>
            <p>Our volunteers are our backbone. We cannot create the community impact we desire without you. Come join us. Let us make this world a better place for all!

Write to us at recruitment@foundation.com and get involved with a noble cause. You can devote an hour/ a day a week/ a fortnight/ a month based on your interest and availability. We look forward to get applications from you and have you as part of our enthusiastic and fun-loving volunteer team.</p>
         
 
		 </div>
          <div class="project-img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Spread The Word</h1>
            <p>We rely on the generosity and sopport of private individual like you to carry out our vital work to tackle poverty.Post the Pandemic whislt everyone is still struggling to bring back momentum in their lives there is a segment of the society which is seeking assistance and is dependant . This segment is from the large slums and many of the orphanage homes spread across the city .  </p>
          </div>
          <div class="project-img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Make Donation</h1>
            <p>Buy products to encourage and support these women's independence and dignity.Post the Pandemic whislt everyone is still struggling to bring back momentum in their lives there is a segment of the society which is seeking assistance and is dependant . This segment is from the large slums and many of the orphanage homes spread across the city . </p>
          </div>
          <div class="project-img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Make People Happy</h1>
            <p>Gifting these children the power of education would be the greatest gift they will ever and cherish for life.Post the Pandemic whislt everyone is still struggling to bring back momentum in their lives there is a segment of the society which is seeking assistance and is dependant . This segment is from the large slums and many of the orphanage homes spread across the city . </p>
          </div>
          <div class="project-img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Volunteer Now</h1>
            <p>Our volunteers are our backbone. We cannot create the community impact we desire without you. Come join us. Let us make this world a better place for all!

Write to us at recruitment@foundation.com and get involved with a noble cause. You can devote an hour/ a day a week/ a fortnight/ a month based on your interest and availability. We look forward to get applications from you and have you as part of our enthusiastic and fun-loving volunteer team.</p>
          </div>
          <div class="project-img">
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+1 234 123 1234</h2>
            <h2>+1 234 123 1234</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>info@gmail.com</h2>
            <h2>abcd@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Office 1,2-3,C/3,opp.PGVora School,Mira Road</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>C</span>harity <span>S</span>ystem</h1>
      </div>
      <h2>Make People Happy</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
        </div>
        
      </div>
      <p>Copyright © 2020 foundation. All rights reserved</p>
    </div>
  </section>
  <script src="./app.js"></script>
</body>

</html>