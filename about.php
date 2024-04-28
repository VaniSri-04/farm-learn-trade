<!DOCTYPE html>
<html>
    <head>
        <title> ABOUT US</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <style>
body, html {
      height: auto;
      margin: 0;
      padding: 0;
  overflow-x: hidden;
    }
    
  .hover-underline-animation {
  display: inline-block;
  position: relative;
  color: #0087ca;
}

.hover-underline-animation:after {
  content: '';
  position: absolute;
  width: 100%;
  transform: scaleX(0);
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: white;
  transform-origin: bottom right;
  transition: transform 0.25s ease-out;
}

.hover-underline-animation:hover:after {
  transform: scaleX(1);
  transform-origin: bottom left;
}



    .navbar {
  position: fixed;
  display: flex;
  align-items: center;
  width: 100%;
  height: 80px;
  position: relative;
  margin-bottom: -26px;
  background-color:#282828;
 /* background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4))
  /*background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2));*/
}
.navbar-logo {
    color: white;
  text-decoration: none;
  padding: 0px 20px;
  font-weight: bold;
  font-style:times;
  font-size: 25px;
}
.navbar-links {
  list-style-type: none;
  display: flex;
  margin-left: 38vh;
}
.navbar-links li a {
  display: block;
  text-decoration: none;
  color: white;
  padding: 20px;
  font-weight: bolder;
  font-size: 18px;
}
.navbar-links li.navbar-dropdown {
  position: relative;
}

.navbar-links li.navbar-dropdown:hover .dropdown {
  visibility: visible;
  opacity: 1;
  transform: translateY(0px);
}
.navbar-links li.navbar-dropdown .dropdown {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  padding: 10px 0;
  top: 100%;
  transform: translateY(50px);
  left: 0;
  width: 200px;
  background-color: 	#080808;
  box-shadow: 0px 10px 10px 3px rgba(0, 0, 0, 0.3);
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  z-index: 111;
  transition: 0.4s all;
}
.navbar-links li.navbar-dropdown .dropdown a {
  padding-top: 10px;
  padding-bottom: 10px;
  font-weight: 400;
  background-color: rgba(245, 246, 252, 0.20);
}
.navbar-dropdown .dropdown a:hover {
  padding-left: 30px;
}
/*.navbar-links li a:hover {
  color: 	#9FE2BF;
}*/

#page1 {
      background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('out1.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      height: 100vh; /* Set the height to 100% of the viewport height */
      width: 100%; /* Set the width to 100% */
     
}
.text{
padding:none;
}
.text h1{
font-size: 30px;
font-weight: bold;
color: white;
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
padding-top: 5%;
}
.text h2{
font-size: 25px;
font-weight: bold;
color: white;
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

    .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            padding: 5% 10%;
            color: white;
            margin-left: auto;
            margin-right: auto;
            max-width: 1200px;
            
        }
  .box {
  flex: 1;
  height: 250px;
  padding: 10px;
  margin-right: 50px;
 background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4))
}
.box h1{
font-weight: lighter;
font-size: 20px;
}
.box-1 {
  width: 10%;
}

.box-2 {
  width: 30%;
}

.box-3 {
  width: 30%;
}
#page2{
    background-image: linear-gradient(to bottom, rgba(0, 50, 0, 0.4), rgba(128, 128, 128, 0.4)), url('out1.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      height: 100vh; /* Set the height to 100% of the viewport height */
      width: 100%; /* Set the width to 100% */
      display: flex;
    justify-content: center;
    align-items: center;
}
.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
.p {
    font-family: 'Open Sans' sans-serif;
    color: #FBFBFB;
    margin: 0;
}

.contact__container {
    display: block;
    padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  background-image: linear-gradient(to bottom, rgba(128, 128, 128, 0.4), rgba(0, 50, 0, 0.4))

}

.contact__title {
    display: inline-block;
}

.contact__title h2 {
    padding: 0 10px 0 0px;
    margin: 5px 0;
    color: #FBFBFB;
}

.contact__form {
    padding: 10px 10px 0 0;
}

hr {
    width: 100%;
    display: block;
    margin: 5px 0;
    height: 5px;
    border: 0;
    background-color: #FBFBFB;
}

input,
textarea {
    width: 100%;
    border: 5px solid #FFFFFF;
    border-radius: 5px;
    resize: none;
    padding: 0 5px;
    box-sizing: border-box;
    font-family: 'Open Sans' sans-serif;
    font-size: 18px;
    color: #25606f;
}

input[type="text"] {
    padding: 0;
    height: 40px;
    width: 100%;
}

input:focus,
textarea:focus {
    outline: none;
}

.contact__form-input {
    margin: 5px 0 10px 0;
}

.contact__form-textarea {
    margin: 5px 0;
    width: 100%;
    height: 100px;
}

input[type="submit"] {
    width: 100%;
    height: 50px;
    background-color:#3a5753;
    border: 0;
    color: #FBFBFB;
    border: 5px solid;
    border-radius: 5px;
    margin: 10px 0 0 0;
    font-family: 'Open Sans' sans-serif;
    font-size: 22px;
    cursor: pointer;
    transition: background-color 0.3s, border-color 0.3s;
}

input[type="submit"]:hover {
 
    transform: scale(0.9);
}
    </style>
<body>
<section id="web1">
    <nav class="navbar">
        <a href="#" class="navbar-logo"><i class="fas fa-leaf"></i><u>Farm.Learn.Trade</u></a>
        <ul class="navbar-links">
          <li class="navbar-dropdown">
            <a href="farm.php" class="hover-underline-animation">Home</a>

          </li>
          <li class="navbar-dropdown">
            <a href="about.php" class="hover-underline-animation">About us</a>
            
          </li>
          <li class="navbar-dropdown">
            <a href="http://localhost/farming/farm.php#web3" class="hover-underline-animation">Farmstead Guide</a>
            <div class="dropdown">
              <a href="http://localhost/farming/cropmaanagement.php"><span>&#9752;</span>Crop Management</a>
              <a href="http://localhost/farming/health.php"><span>&#9752;</span> Soil Health</a>
              <a href="http://localhost/farming/weed.php"><span>&#9752;</span> Weed Control</a>
              <a href="http://localhost/farming/farmstead.php"><span>&#9752;</span> Farmstead Lifecycle</a>
              <a href="http://localhost/farming/marketing.php"><span>&#9752;</span> Marketing and sales</a>
            </div>
          </li>
          <li class="navbar-dropdown">
            <a href="http://localhost/farming/central.php" class="hover-underline-animation">Wholesome Farm Fare</a>
            <div class="dropdown">
              <a href="#"><span>&#9752;</span> Seeds</a>
              <a href="#"><span>&#9752;</span> Fertilizers</a>
              <a href="#"><span>&#9752;</span> Pestisides</a>
              <a href="#"><span>&#9752;</span> Live Stock Feed</a>
              <a href="#"><span>&#9752;</span> Farm Machinery</a>
            </div>
          </li>
          <li class="navbar-dropdown">
            <a href="#" class="hover-underline-animation">Blog</a>
          </li>
          <li class="navbar-dropdown">
          <a href="loginsignup.php" class="navbar-button"><button>Login</button></a>
          </li>
        </ul>
      </nav>
</section>
    <section id="page1">
        <div class="text">
            <h1> <center>WHAT PEOPLE SAY ABOUT US</center></h1>
        </div>
        <div class="container">
            <div class="box">
                
                <h1><i class="fa fa-quote-left" style="font-size:48px;color:white"></i> &nbsp; <strong>ABOUT US</strong></h1>
                <p>Welcome to FARM.LEARN.TRADE, your trusted source for farming guidance and high-quality farming products. We are dedicated to supporting farmers in their journey to success by providing them with comprehensive resources and top-notch products.</p>
              </div>
              <div class="box">
                <h1><i class="fa fa-quote-left" style="font-size:48px;color:white"></i> &nbsp; <strong>OUR MISSION</strong></h1>
                <p>At Farm.Learn.Trade, our mission is to empower farmers with the knowledge and tools they need to achieve optimal productivity, sustainability, and profitability. We strive to be a reliable partner for farmers, offering valuable guidance and quality products that meet their specific needs.</p>
              </div>
              <div class="box">
                <h1><i class="fa fa-quote-left" style="font-size:48px;color:white"></i> &nbsp; <strong>WHAT WE OFFER</strong></h1>
                <p>We offer a wide range of services and products designed to assist farmers at every stage of their farming operations:</p>
                <h4>  &#x269C;&nbsp; Farming Guidance and Education</h4>
                <h4>  &#x269C;&nbsp; Farming Products</h4>
        </div>
    </section>
    <section id="page2">
    <div class="wrapper">
      <div class="contact__container">
          <div class="contact__title">
              <h2>Contact us<hr></h2>
  
          </div>
          <form class="contact__form" action="contacts.php" method="post">
    <p>Name</p>
    <input class="contact__form-input" type="text" name="name">

    <p>Email</p>
    <input class="contact__form-input" type="text" name="email">

    <p>Message</p>
    <textarea class="contact__form-textarea" name="message"></textarea>

    <input type="submit" value="Send message">
</form>
      </div>
  </div>
</section>
</body>
</html>