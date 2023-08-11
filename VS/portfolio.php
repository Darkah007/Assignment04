<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Horizon Nest Kunckles ranges</title>
  <link rel="stylesheet" href="style2.css"> <!-- Link to your CSS file -->
  <script src="https://kit.fontawesome.com/49157baddf.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <div id="container">
        <nav>
     
            <img src="images/horicon2.ico" alt="Logo" id="logo1">
            
         
          <ul class="navigation" id="sidemenu">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><i class="fa-regular fa-circle-xmark" onclick="closemenu()"></i></li>
          </ul>
          <i class="fa-solid fa-bars" onclick="openmenu()"></i>
        </nav>
        <div class="header-text">
            <p id="text-paragraph" onmouseover="changeColor(this)" onmouseout="resetColor(this)">
                Horizon nest cabana
            </p>
            <h1 id="text-heading" onmouseover="changeColor(this)" onmouseout="resetColor(this)">
                Hi! We provide travel expertise in<br> Knuckles mountain range
            </h1>
        </div>
    </div>
   
  </header>

<div id="about">
    <div class="contents">
        <div class="row">
            <div class="col1">
                <img src="images/KHN.jpg" onclick="showMessage(event)">
                <div id="message" style="position: absolute; display: none;"></div>
            </div>
            <div class="col2">
                <h1 class="SubT">About Us</h1>
                <p>
                    Welcome to the awe-inspiring Knuckles Mountain Range! With five years of guiding experience, I am excited to show you the wonders of this magnificent destination. 
                    <br>Our hospitality ensures a warm and friendly atmosphere throughout your journey. Convenient transportation options are available to make your travel seamless.<br>
                     Indulge in delicious meals prepared with fresh, local ingredients, catering to various tastes and dietary needs. Stay refreshed with a selection of beverages,
                      keeping you energized for your adventures. Get ready for an unforgettable experience in the breathtaking Knuckles Mountain Range!
                </p>
                <div class="titiles" >
                    <p class="tl t1" onclick="opentab('Location')">Location </p>
                    <p class="tl t2" onclick="opentab('Service')">Service</p>
                    <p class="tl t3" onclick="opentab('Packages')">Packages</p>
                </div>
                <div class="tab-content active-tab" id="Location">
                   <ul>
                    <li><span>Address</span><p>Knuclkles Horizon Nest<br>Ferndale,Rangala<br>Kandy,<br>Cental Provice,<br>Sri Lanka. </p></li>
                   </ul>

                </div>
                <div class="tab-content " id="Service">
                    <ul>
                     <li><span>Services depend on packages</span><p>Breakfirst<br>Lunch<br>Dinner<br>*Special Horizon nest tea<br>Camp fire<br>*Some services are depend on package </p></li>
                    </ul>
 
                 </div>
                 <div class="tab-content " id="Packages">
                    <ul>
                     <li><span>Package selection</span><p>Family package<br>Couple package<br>Bronze package(for 6 perple)<br>Silver package(above 6 below 10) <br>Gold package(above 10 people )</p></li>
                    </ul>
 
                 </div>
            </div>
        </div>

    </div>

</div>


 <div class="gal">
    <div class="cont">
      <div class="rowone">
        <div class="column c1">
          <img class="slider-image" src="images/gallery/gallery1.jpg" alt="campfire">
          <img class="slider-image" src="images/gallery/gallery2.jpg" alt="campfire">
          <img class="slider-image" src="images/gallery/gallery3.jpg" alt="campfire">
          <img class="slider-image" src="images/gallery/ferndale (1).jpg" alt="campfire">
          <img class="slider-image" src="images/gallery/gallery11 (1).jpg" alt="campfire">
        </div>
        <div class="column c2">
            <img class="slider-image" src="images/gallery/gallery4.jpg" alt="campfire">
            <img class="slider-image" src="images/gallery/gallery91.jpg" alt="campfire">
            <img class="slider-image" src="images/gallery/gallery5.jpg" alt="campfire">
            <img class="slider-image" src="images/gallery/gallery6.jpg" alt="campfire">
        </div>
        <div class="column c3">
            <img class="slider-image" src="images/gallery/gallery71.jpg" alt="campfire">
            <img class="slider-image" src="images/gallery/gallery81.jpg" alt="campfire">
            <img class="slider-image" src="images/gallery/gallery101.jpg" alt="campfire">
            <img class="slider-image" src="images/gallery/fern3 (1).jpg" alt="campfire">
        </div>
      </div>
      
    </div>
  </div>
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <form  class="f1" action="">
                    <h1 class="sub-title">Contact Us

                    </h1>
                    <p><i class="fa-solid fa-envelope-open-text"></i>example@outlook.com</p>
                    <p><i class="fa-solid fa-phone"></i>0112365478</p>
                    <div class="icons">
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-solid fa-envelope-open-text"></i></a>
    
                    </div>

                </form>
                

            </div>
<div class="contact-right">
    <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
  
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
  
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
  
        <button class="btn " type="submit">Send</button>
      </form>
</div>
        </div>
    </div>

</div>
  <footer>
    <p>&copy; 2023 Sandaruwan Ekanayake</p>
  </footer> 
<script>
    var tablinks = document.getElementsByClassName("tl");
    var tabcontents = document.getElementsByClassName("tab-content");
    function opentab(tabname){
        for(tablink of tablinks)
        {
            tablink.classList.remove("t1");
        }
        for(tabcontent of tabcontents)
        {
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("t1");
        document.getElementById(tabname).classList.add("active-tab");
    }
</script>
<script>
    var sidemenu = document.getElementById("sidemenu");
    
    function openmenu(){
        sidemenu.style.right="0";

    }
    function closemenu(){
        sidemenu.style.right="-200px";
        
    }


</script>
<script>
    // Gallery slides
    var sliderImages = document.querySelectorAll(".column.c1 .slider-image");
    createSlider(sliderImages);

    var sliderImages = document.querySelectorAll(".column.c2 .slider-image");
    createSlider2(sliderImages);

    var sliderImages = document.querySelectorAll(".column.c3 .slider-image");
    createSlider3(sliderImages);

    function createSlider(images) {
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        for (var i = 0; i < images.length; i++) {
          images[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > images.length) {
          slideIndex = 1;
        }
        images[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 3000); // Change slide every 3 seconds
      }
    }
    function createSlider2(images) {
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        for (var i = 0; i < images.length; i++) {
          images[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > images.length) {
          slideIndex = 1;
        }
        images[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 5000); // Change slide every 5 seconds
      }
    }
    function createSlider3(images) {
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        for (var i = 0; i < images.length; i++) {
          images[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > images.length) {
          slideIndex = 1;
        }
        images[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 7000); // Change slide every 7 seconds
      }
    }
  </script>
  <script>
    // Smooth scrolling for navigation links
    document.querySelectorAll('nav a').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
  
        const target = document.querySelector(this.getAttribute('href'));
        const offsetTop = target.offsetTop;
  
        window.scrollTo({
          top: offsetTop,
          behavior: 'smooth'
        });
      });
    });
  </script>
  <script>
   function changeColor(element) {
        element.style.color = 'green';
        element.style.backgroundColor = '';
    }

    // Function to reset the text color and background color
    function resetColor(element) {
        element.style.color = '';
        element.style.backgroundColor = '';
    }
</script>
<script>
   function showMessage(event) {
    var messageElement = document.getElementById("message");
    messageElement.innerHTML = "This is a message close to the image!";
    messageElement.style.display = "block";
    messageElement.style.top = event.target.offsetTop + "px";
    messageElement.style.left = (event.target.offsetLeft + event.target.offsetWidth) + "px";
}

document.addEventListener("click", function(event) {
    var messageElement = document.getElementById("message");
    if (event.target !== messageElement && event.target !== document.getElementById("message")) {
        messageElement.style.display = "none";
    }
});
}
</script>
</body>
<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "portfolio";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Prepare and execute the SQL query
$stmt = $conn->prepare("INSERT INTO your_table_name (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);
$stmt->execute();

// Close the statement and connection
$stmt->close();
$conn->close();
?>

</html>
