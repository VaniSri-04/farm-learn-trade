<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<title>FARM</title>
</head>

  <style>
    body, html {
      height: 100%;
      margin: 0;
    }
   
    #web1 {
      background-image : url('fieldgif.gif');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      height: 102vh; /* Set the height to 100% of the viewport height */
      width: 100%; /* Set the width to 100% */
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
  background-color: black;
  transform-origin: bottom right;
  transition: transform 0.25s ease-out;
}

.hover-underline-animation:hover:after {
  transform: scaleX(1);
  transform-origin: bottom left;
}


  .login-button {
  color: black;
  background-color: white;
  border: black;
  
}

.login-button:hover {
  color: white;
  border: var(--c-titan-white);
  background-color: black;
}

    .navbar {
      position: fixed;
  display: flex;
  align-items: center;
  width: 100%;
  position: relative;
  margin-top: -10px;
  background-color: rgba(245, 246, 252, 0.20);
  font-family: 'roboto',sans-serif; 

}
.navbar-logo {
    color: #023020;
  text-decoration: none;
  padding: 0px 20px;
  font-weight: bold;
  font-style:'roboto',sans-serif;
  font-size: 25px;
}
.navbar-links {
  list-style-type: none;
  display: flex;
  margin-left: 30vh;
}
/*.navbar-links li a {
  display: block;
  text-decoration: none;
  color: #023020;
  padding: 20px;
  font-weight: bolder;
  font-size: 18px;
}*/
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
  background-color: white;
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
  color: 	#212F3C;
}*/
.navbar-links li a {
  display: block;
  text-decoration: none;
  color: #023020;
  padding: 20px;
  font-weight: bolder;
  font-size: 18px;
  opacity: 1;
  transition: opacity 0.3s ease;
}


.header {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  font-family: 'poppins',sans-serif; 
}
.header-inner {
  text-align: center;
 
}
.header-inner h2 {
  font-family: courier(monospace);
  font-size: 40px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 50vh;
  margin-right: 2vh;
  color: #023020;
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0.2), rgba(255,255, 255, 0.2))
 
}
.header-inner h1 {
  font-family: 'Goudy Old Style', cursive;
  font-size: 40px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: -50vh;
  margin-right: 4vh;
  text-shadow: 0px 10px 10px rgba(0, 0, 0, .8);
  color: white;
 
}
.logo {
  width: 100px;
  height: 100px;

}
#web2 {
      margin-top: 10px;
      padding: 40px;
      height: 160vh; /* Set the height to 100% of the viewport height */
      width: 100%; /* Set the width to 100% */
      background-image: linear-gradient(45deg, #404040 25%, transparent 25%, transparent 75%, #404040 75%, #404040), linear-gradient(45deg, #404040 25%, transparent 25%, transparent 75%, #404040 75%, #404040);
    }
    
@import url("https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&display=swap");

#web2,
#web2:after,
#web2:before {
    box-sizing: border-box;
}
    .txt{
      font-family: 'poppins',sans-serif;
     
    }
    .txt p{
  font-size: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-left: 80vh;
 
    }
    .txt h1{
      font-family: 'poppins',sans-serif;  
  font-size: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
    }
    .white-text {
  color: white;
}
    .featured-images {
  width: 250px;
  height: 250px;
  position: relative;
  top: 0;
  left: 0;
  margin-top: 100rem;
  margin-left: 20vh;
  border: 1px solid black;
}

    .txt{
      font-family: 'poppins',sans-serif;
    }
    .txt p{
      
  font-size: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-left: 80vh;
  margin-top: 50px;
    }
    .txt h1{
      font-family: 'poppins',sans-serif;  
  font-size: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 30px;
    }
    .featured {
  width: 350px;
  height: 250px;
  position: absolute;
  top: 0;
  left: 0;
  margin-top: 116vh;
  margin-left: 10vh;
  border: 1px solid black;
}






:root {
    /* Basic */
    --c-white: #fff;
    --c-black: #000;

    /* Greys */
    --c-ash: #eaeef6;
    --c-charcoal: #a0a0a0;
    --c-void: #141b22;

    /* Beige/Browns */
    --c-fair-pink: #ffedec;
    --c-apricot: #fbc8be;
    --c-coffee: #754d42;
    --c-del-rio: #917072;

    /* Greens */
    --c-java: #1fcac5;

    /* Purples */
    --c-titan-white: #f1eeff;
    --c-cold-purple: #a69fd6;
    --c-indigo: #6558d3;
    --c-governor: #4133b7;
}



.cards {
    display: flex;
    flex-wrap: row;
    align-items: flex-start;
    justify-content: space-evenly;
    gap: 2.5rem;
    width: 90%;
    max-width: 1000px;
    margin: 10vh auto;
}

.card {
    border-radius: 16px;
    box-shadow: 0 30px 30px -25px rgba(#4133b7, 0.25);
    max-width: 300px;
}

.information {
    background-color: var(--c-white);
    padding: 1.5rem;
}

.information .tag + .element {
    display: inline-block;
    background-color: var(--c-titan-white);
    color: var(--c-indigo);
    font-weight: 600;
    font-size: 0.875rem;
    padding: 0.5em 0.75em;
    line-height: 1;
    border-radius: 6px;
        margin-top: 1rem;
  
}

.information .title + .element{
    font-size: 1.5rem;
    color: var(--c-void);
    line-height: 1.25;
        margin-top: 1rem;
    
}

.information .info + .element{
    color: var(--c-charcoal);
 margin-top: 1.25rem;
}

.information .button {
    font: inherit;
    line-height: 1;
    background-color: var(--c-white);
    border: 2px solid var(--c-indigo);
    color: var(--c-indigo);
    padding: 0.5em 1em;
    border-radius: 6px;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    justify-content: space-between;
    gap: 0.5rem;
}
    .information .button:hover,
    .information .button:focus {
        background-color: var(--c-indigo);
        color: var(--c-white);
    }


.information .details {
    display: flex;
    gap: 1rem;
}

.information .details div {
    padding: 0.75em 1em;
    background-color: var(--c-titan-white);
    border-radius: 8px;
    display: flex;
    flex-direction: column-reverse;
    gap: 0.125em;
    flex-basis: 50%;
}

.information .details dt {
    font-size: 0.875rem;
    color: var(--c-cold-purple);
}

.information .details dd {
    color: var(--c-indigo);
    font-weight: 600;
    font-size: 1.25rem;
}

.plan {
    padding: 10px;
    background-color: var(--c-white);
    color: var(--c-del-rio);
}

.plan strong {
    font-weight: 600;
    color: var(--c-coffee);
}

.plan .inner {
    padding: 20px;
    padding-top: 40px;
    background-color: var(--c-fair-pink);
    border-radius: 12px;
    position: relative;
    overflow: hidden;
}

.plan .pricing {
    position: absolute;
    top: 0;
    right: 0;
    background-color: var(--c-apricot);
    border-radius: 99em 0 0 99em;
    display: flex;
    align-items: center;
    padding: 0.625em 0.75em;
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--c-coffee);
}

.plan .pricing small {
    color: var(--c-del-rio);
    font-size: 0.75em;
    margin-left: 0.25em;
}

.plan .title + .element{
    font-weight: 600;
    font-size: 1.25rem;
    color: var(--c-coffee);
     margin-top: 0.75rem;
}

.plan .info + .element{
        margin-top: 1rem;
    }

.plan .features {
    display: flex;
    flex-direction: column;
}

.plan .features li + .element{
    display: flex;
    align-items: center;
    gap: 0.5rem;
        margin-top: 0.75rem;
}

.plan .features .icon {
    background-color: var(--c-java);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: var(--c-white);
    border-radius: 50%;
    width: 20px;
    height: 20px;
}

.plan .features .icon svg {
    width: 14px;
    height: 14px;
}

.plan button {
    font: inherit;
    background-color: var(--c-indigo);
    border-radius: 6px;
    color: var(--c-white);
    font-weight: 500;
    font-size: 1.125rem;
    width: 100%;
    border: 0;
    padding: 1em;
}
    .plan button :hover,
    .plan button :focus {
        background-color: var(--c-governor);
      }


#web3 {
    background-image: url('bg.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      padding: 30px;
  min-height: 100vh;
}
.txts h1{
  font-family: 'poppins',sans-serif;
  font-size: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
 
    }
.flip-boxes {
  display: flex; /* Update to display flex */
  justify-content: center;
  flex-wrap: wrap; 
  gap:30px;
}

.flip-box {
  flex: 0 0 25%; /* Set flex basis to 25% for four cards in a row */
  display: flex;
  align-content: stretch;
  min-height: 350px;
  width: 450px; 
  position: relative;
  border: 10px solid transparent;
  padding: 0;
  border-top: 0;
  -webkit-perspective: 1000;
  perspective: 1000;
}

.flip-box:hover .back {
  transform: rotateY(0deg);
  z-index: 10;
}

.flip-box:hover .front {
  transform: rotateY(180deg);
  z-index: -1;
}

.flip-box .back,
.flip-box .front {
  position: relative;
  background-color: #1b2d61;
  color: white;
  display: flex;
  justify-content: center;
  align-content: center;
  flex: 0 0 100%;
  -webkit-transition: all 1s cubic-bezier(0.5, 1, 0.5, 1);
  transition: all 1s cubic-bezier(0.5, 1.3, 0.5, 1.3);
  transform-style: preserve-3d;
  background-size: cover;
  background-position: center;
}

.flip-box .back {
  background-image: linear-gradient(to top, #09203f 0%, #537895 100%);
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 100%;
  z-index: -1;
  transform: rotateY(-180deg);
}

.flip-box .back:after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 30px;
  height: 30px;
  border: 15px solid transparent;
  border-bottom-color: white;
  border-left-color: white;
}

.flip-box .front {
  z-index: 10;
}

.flip-box .front:after {
  content: "";
  position: absolute;
  bottom: 0;
  right: 0;
  width: 30px;
  height: 30px;
  border: 15px solid #cecece;
  border-bottom-color: white;
  border-right-color: white;
}

.flip-box .content {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  -webkit-transform: translateZ(50px);
  transform: translateZ(50px);
  text-shadow: 0px 0px 2px black;
  font-size: 20px;
}


    #web4 {
  height: 649px;
  width: 100%;
  margin-top: -30px;
  background-image: url('bg.jpg');
  background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
  }
  .right-side {
  display: flex;
  flex-direction: column;
  margin-left: 145vh;
  padding-top: 90px;
  align-items: center;
}

.address, .call-center, .support {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 20px;
}
.icons {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
}

.address p, .call-center p, .support p {
  margin: 5px 0;
}

    .right{
      background-image: url("about1.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  height: 649px;
  width: 900px;
  position:absolute;
  left:0;
    }

    .txt1{
      height: 100vh;
       margin-left: 145vh;
       font-family: 'Goudy Old Style', cursive;
       font-size: 30px;
    }
.txt1 h3{
  margin-top: 30px;
}
.txt1 h5{
  margin-top: 10px;
}


.contact-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #eaeaea; /* Light grey background color */
  color: #333; /* Text color */
  text-decoration: none;
  transition: background-color 0.3s ease; /* Transition effect for smooth hover */

  /* Additional styles for button appearance */
  border: none;
  border-radius: 4px;
  font-size: 16px;
}

.contact-button:hover {
  background-color: #666; /* Dark grey background color on hover */
  color: #fff; /* Text color on hover */
}

#web5{
  background-color: white;
  height: 45vh;
  width: 100%;
}
.products{
  display: flex;
      flex-direction: row;
      padding: 50px;
      gap: 20px;
}
.pro {
      position: relative;
      background-color: white;
      display: inline-block;
  width: 50%; /* Adjust this value as needed */
  
    }  
    .pro img {
      width: 100%;
      height: auto;
      border: 1px solid black;
      border-radius: 50%;
      -webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
    }
.pro:hover img {
	-webkit-transform: scale(1.3);
	transform: scale(1.3);
}
.web5text{
  text-align: center;
}
#web6{
      background: linear-gradient(to bottom, rgba(255, 255, 255, 0.4), rgba(0, 128, 0, 0.2)),url('productbg.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      height:90vh; /* Set the height to 100% of the viewport height */
      width: 100%; /* Set the width to 100% */
      border: white;
}
.web6txt{
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
  .web6box {
    background-image: linear-gradient(to bottom, rgba(128, 128, 128, 0.2), rgba(0, 50, 0, 0.2)),url('butter.gif');
  flex: 1;
  height: 250px;
  padding: 10px;
  margin-right: 50px;
}
.web6box h1{
font-weight: lighter;
font-size: 20px;
}
.web6box 
.web6box-1 {
  width: 10%;
}

.web6box-2 {
  width: 30%;
}

.web6box-3 {
  width: 30%;
}
.addSymbol:after {
  content: ' \2724';
  font-size:48px;
  color:white;
}


:root {
  /* color type A */
  /* --line_color : #555555 ;
    --back_color : #FFECF6  ;*/

  /* color type B */
  /*--line_color : #1b1919 ;
    --back_color : #E9ECFF  ;*/

  /* color type C */
  --line_color: white;
  --back_color: #9FE2BF;
}

.button {
  position: relative;
  z-index: 0;
  width: 240px;
  height: 56px;
  text-decoration: none;
  font-size: 14px;
  font-weight: bold;
  color: var(--line_color);
  letter-spacing: 2px;
  transition: all 0.3s ease;
}
.button__text {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
}
.button::before,
.button::after,
.button__text::before,
.button__text::after {
  content: "";
  position: absolute;
  height: 3px;
  border-radius: 2px;
  background: var(--line_color);
  transition: all 0.5s ease;
}
.button::before {
  top: 0;
  left: 54px;
  width: calc(100% - 56px * 2 - 16px);
}
.button::after {
  top: 0;
  right: 54px;
  width: 8px;
}
.button__text::before {
  bottom: 0;
  right: 54px;
  width: calc(100% - 56px * 2 - 16px);
}
.button__text::after {
  bottom: 0;
  left: 54px;
  width: 8px;
}
.button__line {
  position: absolute;
  top: 0;
  width: 56px;
  height: 100%;
  overflow: hidden;
}
.button__line::before {
  content: "";
  position: absolute;
  top: 0;
  width: 150%;
  height: 100%;
  box-sizing: border-box;
  border-radius: 300px;
  border: solid 3px var(--line_color);
}
.button__line:nth-child(1),
.button__line:nth-child(1)::before {
  left: 0;
}
.button__line:nth-child(2),
.button__line:nth-child(2)::before {
  right: 0;
}
.button:hover {
  letter-spacing: 6px;
}
.button:hover::before,
.button:hover .button__text::before {
  width: 8px;
}
.button:hover::after,
.button:hover .button__text::after {
  width: calc(100% - 56px * 2 - 16px);
}





.web6-2 {
  width: 100%;
  height: 100px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin-top: 70px;
}

#page6{
  height: 50vh;
  width: 100%;
  background-color: #f7f7f7;
}
.container {
  padding-top: 20px;
  display: flex;
}
.bottom img{
  padding-left: 20px;
}
.bottom {
  width:25%;
  height: 45vh;
  padding-top: 10px;
}
.bottom ul li{
 list-style: none;
 font-size: 20px;
 font-family: 'poppins',sans-serif;
 padding: 5px;
 cursor: pointer;
}



  </style>

<body>
<section id="web1">
    <nav class="navbar">
        <a href="#" class="navbar-logo"><i class="fas fa-leaf"></i><u>Farm.Learn.Trade</u></a>
        <ul class="navbar-links">
          <li class="navbar-dropdown">
            <a href="#" class="hover-underline-animation">Home</a>

          </li>
          <li class="navbar-dropdown">
            <a href="about.php" class="hover-underline-animation">About us</a>
            
          </li>
          <li class="navbar-dropdown">
            <a href="#web3" class="hover-underline-animation">Farmstead Guide</a>
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
              <a href="http://localhost/farming/central.php?cat_id=seeds"><span>&#9752;</span> Seeds</a>
              <a href="#"><span>&#9752;</span> Fertilizers</a>
              <a href="#"><span>&#9752;</span> Pestisides</a>
              <a href="#"><span>&#9752;</span> Live Stock Feed</a>
              <a href="#"><span>&#9752;</span> Farm Machinery</a>
            </div>
          </li>
          <li class="navbar-dropdown">
            <a href="bloggg.php" class="hover-underline-animation">Blog</a>
          </li>
          <li class="navbar-dropdown">
          <a href="loginsignup.php" ><button class="login-button">Login</button></a>
          </li>
        </ul>
      </nav>
      <header class="header">
        <div class="header-inner">
          <h2>
            Empowering farmers with comprehensive<br>Farming guidance
          </h2>
          <h1>
          <img src="logo-removebg-preview.png" alt="Logo" class="logo">Farm-to-Fork
         </h1>  
      </header>      
</section>
<section id="web2">
<img src="paddy.jpg" alt="Image description" class="featured">
    <div class="txt">
    <p>Healthy, organic nutrition has never been more important than it is now.
       Every day, more people are looking to buy bioproducts and prepare
       healthy meals. If you own an agricultural or a farming business,this is the right
       time to optimize your profits.<br><br><br>

        And yet,the market won't work in your favor unless you make the right decisions.
        You are in charge, and you decide how to drive sales your way. The place to
        begin is a great website-Agronomy Central.</p><br><br>
    
        <h1>"Agronomy: where science meets the art of growing."</h1>
</div>
<div class="cards">

<article class="information [ card ]">
  <span class="tag">Feature</span>
  <h2 class="title">Never miss your important meetings</h2>
  <p class="info">Elemenatary tracks all the events for the day as you scheduled and you will never have to worry.</p>
  <button class="button">
    <span>Learn more</span>
    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="none">
      <path d="M0 0h24v24H0V0z" fill="none" />
      <path d="M16.01 11H4v2h12.01v3L20 12l-3.99-4v3z" fill="currentColor" />
    </svg>
  </button>
</article>
<article class="plan [ card ]">
  <div class="inner">

    <span class="pricing">
      <span>
        $56 <small>/ m</small>
      </span>
    </span>
    <h2 class="title">Professional</h2>
    <p class="info">This plan is for those who have a team already and running a large business.</p>
    <ul class="features">
      <li>
        <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
          </svg>
        </span>
        <span><strong>20</strong> team members</span>
      </li>
      <li>
        <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
          </svg>
        </span>
        <span>Plan <strong>team meetings</strong></span>
      </li>
      <li>
        <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
          </svg>
        </span>
        <span>File sharing</span>
      </li>
    </ul>
    <button class="button">
      Choose plan
    </button>
  </div>
</article>
<article class="information [ card ]">
  <h2 class="title">The only tool you need to schedule your day</h2>
  <p class="info">Always keep updated with this simple tool on the go, when and where ever you need.</p>
  <dl class="details">
    <div>
      <dt>Satisfaction</dt>
      <dd>100%</dd>
    </div>
    <div>
      <dt>Customers</dt>
      <dd>4.5K</dd>
    </div>
  </dl>
</article>
</div>
</section>

<section id="web3">
<div class="txts">
    <h1>
      𝔉𝔞𝔯𝔪𝔰𝔱𝔢𝔞𝔡 𝔊𝔲𝔦𝔡𝔢<i class="fa fa-tractor"></i>
    </h1>
    
  </div>
<div class="container">
  <div class="row flip-boxes">
    <div class="col-md-3 col-sm-4 col-8 flip-box">
      <div class="front" style="background-image:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(crop.jpg);">
        <div class="content text-center">
          Crop Management<br>
          <span class="click-for-more">
          </span>
        </div>
      </div>
      <div class="back">
        <div class="content">
        "From seed to harvest: Nurturing<br> crops through smart management." <br>
          <button onclick="window.location.href='cropmaanagement.php'">view</button>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-4 col-6 flip-box">
      <div class="front" style="background-image:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(soilhealth.jpg);">
        <div class="content" >
          Soil Health
        </div>
      </div>
      <div class="back">
        <div class="content">
        "Feed the soil, <br>feed the world"<br>
          <button onclick="window.location.href='health.php'">view</button>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-4 col-6 flip-box">
      <div class="front" style="background-image:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(pestandweed.jpg);">
        <div class="content" >
          Pest & Weed Control
        </div>
      </div>
      <div class="back">
        <div class="content">
        "Outsmarting pests, <br> outgrowing weeds"<br>
          <button onclick="window.location.href='weed.php'">view</button>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-4 col-6 flip-box">
      <div class="front" style="background-image:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(lifecycle.jpg);">
        <div class="content" >
          Farmstead Lifecycle
        </div>
      </div>
      <div class="back">
        <div class="content">
        "Each phase of farmsteadLifecycle,<br>
         breathes life into the land."<br>
          <button onclick="window.location.href='farmstead.php'">view</button>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-4 col-6 flip-box">
      <div class="front" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(market.jpg);">
        <div class="content">
          Marketing & Sales
        </div>
      </div>
      <div class="back">
        <div class="content">
        "Marketing magic. <br>Sales success."<br>
          <button onclick="window.location.href='marketing.php'">view</button>
        </div>
      </div>
    </div>
  </div>
</div>
</section>


<section id="web4">
  <div class="right">
  </div>
  <div class="right-side">
     <div class="address">
     <i style='font-size:24px' class="fas fa-address-card">&nbsp;&nbsp;Address</i><br>
      <p><center>LionTech Solutions Private Limited 235,<br>
       Raijinagar. Near Agriculture University.<br>
       Junagadh-362001.</center> </p>
    </div>
    
    <div class="call-center">
      <!-- Call center logo and information lines -->
      <i style='font-size:24px' class='fas'>&#xf87b;&nbsp;&nbsp;Call-Center</i><br>
      <p>80808 80858</p>
      <p>(Monday - Saturday)</p>
      <p>🕓09 AM to 1 PM</p>
      <p>🕓03 PM to 8 PM</p>
    </div>
    
    <div class="support">
    <i style="font-size:24px" class="fa">&#xf0c0;&nbsp;&nbsp;Support</i><br>
      <p>Email: agrowala@gmail.com</p>
    </div>
    <h1>We'd love to hear from you &#10087;<h1>
    <a href="http://localhost/farming/contact.php" class="contact-button">Contact Us</a>
  </div>
  </section>
  <section id="web5">
  <div class="products">

  <div class="pro">
  <figcaption><h4>OFFERS</h4></figcaption>
  <img src="offers.jpg" class="img" alt="Image">
  </div>

  <div class="pro">
  <figcaption><h4>SEEDS</h4></figcaption>
  <a href="http://localhost/farming/central.php?cat_id=seeds"><img src="seeds.jpg" class="img" alt="Image"></a>
  </div>

  <div class="pro">
  <figcaption><h4>INSECTICIDES</h4></figcaption>
  <img src="insecticides.jpg" class="img" alt="Image">
  </div>

  <div class="pro">
  <figcaption><h4>FUNGICIDES</h4></figcaption>
  <img src="fungi.jpg" class="img" alt="Image">
  </div>

  <div class="pro">
  <figcaption><h4>GROWTH PRO</h4></figcaption>
  <img src="growth.jpeg" class="img" alt="Image">
  </div>

  <div class="pro">
  <figcaption><h4>HERBICIDES</h4></figcaption>
  <img src="herbicides.jpg" class="img" alt="Image">
  </div>

  <div class="pro">
  <figcaption><h4>IMPLEMENTS</h4></figcaption>
  <img src="implement.jpg" class="img" alt="Image">
  </div>

  <div class="pro">
  <figcaption><h4>KNOWLEDGE</h4></figcaption>
  <img src="knowledge.jpg" class="img" alt="Image">
  </div>
</div>
</section>
<section id="web6">
<div class="web6txt">
            <div class="web6box">                
                <h1><div class="addSymbol"></div> &nbsp; <strong>"Your Farming Solutions, Our Expertise!"</strong></h1>
                <h4>save upto 70% on super effective solutions against the problems with our farming products</h4>
               </div>
              <div class="web6box">
                <h1><div class="addSymbol"></div> &nbsp; <strong>"Redefining Farming Success: We've Got You Covered!"</strong></h1>
                <h4> protect your farms from sucking pests</h4>
              </div>
              <div class="web6box">
                <h1><div class="addSymbol"></div> &nbsp; <strong>"Thriving Crops, Resilient Farms: Our Promise to You!"</strong></h1>
                <h4>Avail upto 38% Off on top fungicides</h4>
        </div>
        <div class="web6-2">

<a href="http://localhost/farming/central.php" class="button">
  <div class="button__line"></div>
  <div class="button__line"></div>
<span class="button__text">SHOP NOW</span>
  <div class="button__drow1"></div>
  <div class="button__drow2"></div>
</a>
</div>
</section>
<section id="page6">
    <div class="container">
    <div class="bottom">
    <img src="logo.png" alt="">   
    </div>
    <div class="bottom">
    <ul>
    <li>Home</li> 
    <li>Guidance</li>
    <li>Products</li>
    </ul> 
    </div>
    <div class="bottom">
      <ul>
      <li>Login</li>
      <li>Signup</li>
   </ul>
      
    </div>
    <div class="bottom">
      <ul>
      <li>Facebook</li> 
      <li>Whatsapp</li> 
      <li>Instagram</li> 
   </ul>
      
    </div>
    <div class="bottom">
      <ul>
     <li> 2335 Geyser Road, Geyserville CA 95441</li>
      <li>(707) 433-8345</li>
     <li> Email</li>
      <li>Map</li>
    </ul>
      
    </div>
    <div class="bottom">
   <ul>
    <li>
      Blog
    </li>
   </ul>  
      
    </div>
  </div>
  </section>
</body>
</html>