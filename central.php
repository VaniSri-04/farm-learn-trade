<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>FARM</title>
</head>
  <style>
    body, html {
      background-image : url('.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      height: 100vh; /* Set the height to 100% of the viewport height */
      width: 99.5%; /* Set the width to 100% */
    }
   
    .navbar {
  display: flex;
  align-items: center;
  width: 100%;
  position: relative;
  margin-top: -10px;
  background-color: rgba(245, 246, 252, 0.20);
}
.navbar-logo {
    color: #023020;
  text-decoration: none;
  padding: 0px 20px;
  font-weight: bold;
  font-style:times;
  font-size: 25px;
}
.navbar-links {
  list-style-type: none;
  display: flex;
  margin-left: 47vh;
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

.navbar-links li a:hover {
  opacity: 0.5;
}

/*.navbar-links li a:hover {
  color: 	#9FE2BF;
}*/
 /* Secondary Navigation Bar */
    .secondary-nav {
      background-color:  rgba(245, 246, 252, 0.20);
      position: fixed;
  display: flex;
  align-items: center;
  width: 100%;
  position: relative;
  margin-top: -10px;
    }
    .navbar-link{
  list-style-type: none;
  display: flex;
  margin-left: 10vh;
}
.navbar-link li a {
  display: block;
  text-decoration: none;
  color: #023020;
  padding: 20px;
  font-weight: bolder;
  font-size: 18px;
  opacity: 1;
  transition: opacity 0.3s ease;
}
.navbar-link li.navbar-dropdown {
  position: relative;
}

.navbar-link li.navbar-dropdown:hover .dropdown {
  visibility: visible;
  opacity: 1;
  transform: translateY(0px);
}
.navbar-link li.navbar-dropdown .dropdown {
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
.navbar-link li.navbar-dropdown .dropdown a {
  padding-top: 10px;
  padding-bottom: 10px;
  font-weight: 400;
  background-color: rgba(245, 246, 252, 0.20);
}
.navbar-dropdown .dropdown a:hover {
  padding-left: 30px;
}
.navbar-link li a:hover {
  opacity: 0.5;
}
.menu {
    background-color: rgba(245, 246, 252, 0.20);
    position: fixed;
    display: flex;
    align-items: baseline;
    width: 100%;
    position: relative;
    margin-top: -10px;
  }

  .menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .menu ul li {
    display: inline-block;
  }

  .menu ul li a {
    display: block;
    padding: 10px;
    color: #023020;
    text-decoration: none;
    font-weight: bolder;
    font-size: 18px;
  }

  .menu ul li:hover > .sub-menu {
    visibility: visible;
    opacity: 1;
    transform: translateY(0px);
  }

  .menu .sub-menu {
    visibility: hidden;
    opacity: 0;
    position: absolute;
    padding: 10px 0;
    top: 0%;
    right: 200px;
    width: 200px;
    background-color: white;
    box-shadow: 0px 10px 10px 3px rgba(0, 0, 0, 0.3);
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
    z-index: 111;
    transition: 0.4s all;
  }

  .menu .sub-menu li {
    display: block;
  }

  .menu .sub-menu li a {
    padding: 10px;
    font-weight: 400;
    background-color: rgba(245, 246, 252, 0.20);
  }

  .menu .sub-menu li a:hover {
    padding-left: 30px;
  }

  .menu ul li a:hover {
    color: #343434;
  }
    /* Add your custom CSS styles here */
    .products-container {
      display: flex;
      flex-wrap: wrap;
      padding: 10px;
      gap: 10vh;
      justify-content: flex-start;
    }

    .products-single {
      width: 20%;  
      height: 380px;
      border: 0.5px solid black;
      background-image: url('.gif');
    }

    .box-img-hover {
      position: relative;
      padding: 0px;
    }
    .box-img-hover img {
  width: 293px;
  height: 250px;
  object-fit: cover;
}
    .mask-icon {
      position: absolute;
      right: 10px;
    }

    .mask-icon ul {
      list-style: none;
      padding: 0;
      margin-top: -10vh;
      display: flex;
      flex-direction: column;
      align-items: flex-end;
    }

    .mask-icon ul li {
      margin-bottom: 10px;
    }

    .mask-icon a {
      color: white;
      text-decoration: none;
      padding: 5px;
      font-size: 16px;
    }

    .mask-icon a:hover {
      color: blue;
    }

    .mask-icon a i {
      margin-right: 5px;
    }
    .quantity{
      display: flex;
  flex-direction: column;
  align-items: flex-end;
  margin: 0 5px;
  border: black;
  border-radius: 5px;
    }
.quantity input{
  width:45px;
}
.cart{
  margin-top: 15px;
  cursor: pointer;
}
.view-button{
    position: absolute;
    top: 111.3%;
    left: 93%;
    transform: translate(-50%, -50%);
    cursor: pointer;
    font-size: 15px;
    color: #301934;
    padding: 0;

}    
.view-button:hover {
      color:#AA336A;
    }



.why-text h5{
  margin-top: -0.6vh;
  width: 89.8%;
  height: 9vh;
  background-color: rgba(50, 50, 50, 0.8);
  margin-right: 30px;
  display: flex;
  align-items: center;
  padding: 0;
  padding-left: 30px;
  font-size: 20px;
  color: white; /* Optional: Set the text color to white */
}
    
.name{
  margin-top: -5vh;
  display: flex;
  height: 9.8vh;
  align-items: center;
  padding: 0;
  padding-left: 30px;
  font-size: 20px;
  background-color: rgba(50, 50, 50, 0.2);
}
.name ul{
  padding-left: 160px;
  list-style: none; 
  position: absolute;
  
}
.name a{
  color: #301934;
      text-decoration: none;
      padding: 5px;
      font-size: 16px;
}
    .name a:hover {
      color:#AA336A;
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
  <!--script for details page migration
  <script>
function handleClick(productId) {
    // Redirect to the details.php page with the product ID as a query parameter
    window.location.href = "details.php?id=" + productId;
}
</script>-->
<body>
<section id="web1">
    <nav class="navbar">
        <a href="#" class="navbar-logo"
          ><i class="fas fa-leaf"></i>Farm.Learn.Trade</a>
        <ul class="navbar-links">
          <li class="navbar-dropdown">
            <a href="farm.php">Home</a>
          </li>
          <li class="navbar-dropdown">
            <a href="about.php">About us</a>       
          </li>
          <li class="navbar-dropdown">
            <a href="http://localhost/farming/farm.php#web3">Farmstead Guide</a>
            <div class="dropdown">
              <a href="http://localhost/farming/cropmaanagement.php"><span>&#9752;</span>Crop Management</a>
              <a href="http://localhost/farming/health.php"><span>&#9752;</span> Soil Health</a>
              <a href="http://localhost/farming/weed.php"><span>&#9752;</span> Weed Control</a>
              <a href="http://localhost/farming/farmstead.php"><span>&#9752;</span> Farmstead Lifecycle</a>
              <a href="http://localhost/farming/marketing.php"><span>&#9752;</span> Marketing and sales</a>
            </div>
          </li>
          <li class="navbar-dropdown">
            <a href="#">Blog</a>
          </li>
          <li class="navbar-dropdown">
            <a href="carts.php">Cart</a>
          </li>
          <li class="navbar-dropdown">
            <a href="wishlist.php">Wishlist</a>
          </li>
          <li class="navbar-dropdown">
          <a href="loginsignup.php" class="navbar-button"><button>Login</button></a>
          </li>
        </ul>
      </nav>
      <div class="secondary-nav">
            <a href="#" class="navbar-logo"><i class='fas fa-tasks'></i>Wholesome Farm Fare</a>
            <ul class="navbar-link">
              <li class="navbar-dropdown">
                <a href="central.php?cat_id=seeds">SEEDS</a>
                <div class="dropdown">
                <div class="menu">
                <ul>
                <li>
                <a href="central.php?cat_id=seeds&sub_id=horticulture"><span>&#9752;</span>Horticulture</a>
                <ul class="sub-menu">
                <li><a href="central.php?cat_id=seeds&sub_id=horticulture&under_id=flowerseeds">&#10087;Flower Seeds</a></li>
                <li><a href="central.php?cat_id=seeds&sub_id=horticulture&under_id=vegetableseeds">&#10087;Vegetable Seeds</a></li>
                <li><a href="central.php?cat_id=seeds&sub_id=horticulture&under_id=fruits">&#10087;Fruits</a></li>
                </ul>
                </li>
                </div>
                <div class="dropdown">
                <div class="menu">
                <ul>
                <li>
                <a href="central.php?cat_id=seeds&sub_id=fieldcrops"><span>&#9752;</span>Field Crops</a>
                <ul class="sub-menu">
                <li><a href="central.php?cat_id=seeds&sub_id=fieldcrops&under_id=maizeorcorn">&#10087;Maize/Corn</a></li>
                <li><a href="central.php?cat_id=seeds&sub_id=fieldcrops&under_id=paddy">&#10087;Paddy</a></li>
                <li><a href="central.php?cat_id=seeds&sub_id=fieldcrops&under_id=mustard">&#10087;Mustard</a></li>
                <li><a href="central.php?cat_id=seeds&sub_id=fieldcrops&under_id=jowar">&#10087;Jowar</a></li>
                <li><a href="central.php?cat_id=seeds&sub_id=fieldcrops&under_id=cotton">&#10087;Cotton</a></li>
                </ul>
                </li>
                </div>
                <div class="dropdown">
                <div class="menu">
                <ul>
                <li>
                <a href="central.php?cat_id=seeds&sub_id=specialcategories"><span>&#9752;</span>Special Categories</a>
                <ul class="sub-menu">
                <li><a href="central.php?cat_id=seeds&sub_id=specialcategories&under_id=exotics">&#10087;Exotics</a></li>
                <li><a href="central.php?cat_id=seeds&sub_id=specialcategories&under_id=polyhouse">&#10087;Poly House</a></li>
                <li><a href="central.php?cat_id=seeds&sub_id=specialcategories&under_id=forages">&#10087;Forages</a></li>
                <li><a href="central.php?cat_id=seeds&sub_id=specialcategories&under_id=microgreens">&#10087;Microgreens</a></li>
                <li><a href="central.php?cat_id=seeds&sub_id=specialcategories&under_id=homegarden">&#10087;Homegarden</a></li>
                </ul>
                </li>
                </div>
                <div class="dropdown">
                <div class="menu">
                <ul>
                <li>
                <a href="central.php?cat_id=seeds&sub_id=saplings"><span>&#9752;</span>Saplings</a>
                <ul class="sub-menu">
                <li><a href="central.php?cat_id=seeds&sub_id=saplings&under_id=papaya">&#10087;Papaya</a></li>
                <li><a href="central.php?cat_id=seeds&sub_id=saplings&under_id=coconut">&#10087;Coconut</a></li>
                </ul>
                </li>
                </div>
                </div>
              </li>
              <li class="navbar-dropdown">
                <a href="central.php?cat_id=cropprotection">CROP PROTECTION</a>
           
                <div class="dropdown">
                <div class="menu">
                <ul>
                <li>
                <a href="central.php?cat_id=cropprotection&sub_id=chemicals"><span>&#9752;</span>Chemicals</a> 
                <ul class="sub-menu">
                <li><a href="central.php?cat_id=cropprotection&sub_id=chemicals&under_id=insecticides">&#10087;Insecticides</a></li>
                <li><a href="central.php?cat_id=cropprotection&sub_id=chemicals&under_id=fungicides">&#10087;Fungicides</a></li>
                <li><a href="central.php?cat_id=cropprotection&sub_id=chemicals&under_id=herbicides">&#10087;Herbicides</a></li>
                </ul>
                </li>
                </div>
                <div class="dropdown">
                <div class="menu">
                <ul>
                <li>
                <a href="central.php?cat_id=cropprotection&sub_id=trapsandlures"><span>&#9752;</span>Traps and Lures</a> 
                <ul class="sub-menu">
                <li><a href="central.php?cat_id=cropprotection&sub_id=trapsandlures&under_id=traps">&#10087;Traps</a></li>
                <li><a href="central.php?cat_id=cropprotection&sub_id=trapsandlures&under_id=lures">&#10087;Lures</a></li>
                </ul>
                </li>
                </div>

                <div class="dropdown">
                <div class="menu">
                <ul>
                <li>
                <a href="central.php?cat_id=cropprotection&sub_id=others"><span>&#9752;</span>Others</a> 
                <ul class="sub-menu">
                <li><a href="central.php?cat_id=cropprotection&sub_id=others&under_id=mulchingsheet">&#10087;Mulching Sheet</a></li>
                <li><a href="central.php?cat_id=cropprotection&sub_id=others&under_id=tarpaulins">&#10087;Tarpaulins</a></li>
                </ul>
                </li>
                </div>
    
                </div>
              </li>
              <li class="navbar-dropdown">
                <a href="central.php?cat_id=machinery">MACHINERY</a>

                <div class="dropdown">
                <div class="menu">
                <ul>
                <li>
                <a href="central.php?cat_id=machinery&sub_id=farmaccessories"><span>&#9752;</span>Farm Accessories</a> 
                <ul class="sub-menu">
                <li><a href="central.php?cat_id=machinery&sub_id=farmaccessories&under_id=farmimplements">&#10087;Farm Implements</a></li>
                <li><a href="central.php?cat_id=machinery&sub_id=farmaccessories&under_id=farmmachineries">&#10087;Farm Machineries</a></li>
                </ul>
                </li>
                </div>
                <div class="dropdown">
                <div class="menu">
                <ul>
                <li>
                <a href="central.php?cat_id=machinery&sub_id=postharvestaccessories"><span>&#9752;</span>Post Harvest Accessories</a> 
                <ul class="sub-menu">
                <li><a href="central.php?cat_id=machinery&sub_id=postharvestaccessories&under_id=chaff cutters">&#10087;Chaff Cutters</a></li>
                <li><a href="central.php?cat_id=machinery&sub_id=postharvestaccessories&under_id=tarpaulins">&#10087;Tarpaulins</a></li>
                </ul>
                </li>
                </div>
                </div>
              </li>


              <li class="navbar-dropdown">
                <a href="central.php?cat_id=machinery&sub_id=animalhusbandary">ANIMAL HUSBANDARY</a>
                <div class="dropdown">
                  <a href="central.php?cat_id=machinery&sub_id=animalhusbandary"><span>&#9752;</span>Cattle Products</a>
                  <a href="central.php?cat_id=machinery&sub_id=animalhusbandary"><span>&#9752;</span>Poultry Products</a>
                </div>
              </li>
             </ul>
        </div>

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
  <a href="http://localhost/farming/central.php?cat_id=cropprotection&sub_id=chemicals&under_id=insecticides"><img src="insecticides.jpg" class="img" alt="Image"></a>
  </div>

  <div class="pro">
  <figcaption><h4>FUNGICIDES</h4></figcaption>
  <a href="http://localhost/farming/central.php?cat_id=cropprotection&sub_id=chemicals&under_id=fungicides"><img src="fungi.jpg" class="img" alt="Image"></a>
  </div>

  <div class="pro">
  <figcaption><h4>GROWTH PRO</h4></figcaption>
  <a href="http://localhost/farming/central.php?cat_id=cropprotection&sub_id=chemicals"><img src="growth.jpeg" class="img" alt="Image"></a>
  </div>

  <div class="pro">
  <figcaption><h4>HERBICIDES</h4></figcaption>
  <a href="http://localhost/farming/central.php?cat_id=cropprotection&sub_id=chemicals&under_id=herbicides"><img src="herbicides.jpg" class="img" alt="Image"></a>
  </div>

  <div class="pro">
  <figcaption><h4>IMPLEMENTS</h4></figcaption>
  <a href="http://localhost/farming/central.php?cat_id=machinery&sub_id=farmaccessories&under_id=farmimplements"><img src="implement.jpg" class="img" alt="Image"></a>
  </div>

  <div class="pro">
  <figcaption><h4>KNOWLEDGE</h4></figcaption>
  <a href="http://localhost/farming/farm.php#web3"><img src="knowledge.jpg" class="img" alt="Image"></a>
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
</section>


         <!--/*script for dropdown*/-->
         <script>
        function handleDropdownClick(itemText) {
            // Perform the desired action based on the clicked dropdown item
            console.log("Clicked dropdown item:", itemText);
            // Add your logic here, such as redirecting to a specific page or performing an AJAX request
        }
    </script>


        <div class="products-container">
   
        <?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "medical";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the table
if (isset($_GET['cat_id']) && isset($_GET['sub_id']) && isset($_GET['under_id'])) {
    $cat_id = $_GET['cat_id'];
    $sub_id = $_GET['sub_id'];
    $under_id = $_GET['under_id'];

    // Fetch products from the database
    $sql = "SELECT * FROM `products` WHERE `category` = '$cat_id' AND `subcategory` = '$sub_id' AND `undercategory` = '$under_id'";

    $result = $conn->query($sql);

    // Loop through the retrieved product data
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Generate product card dynamically
            echo '<div class="products-single fix" onclick="handleClick(' . $row["id"] . ')">';
            echo '<div class="box-img-hover">';
            echo '<img src="' . $row["image"] . '"  alt="Image">';
            // Display the view button with the product image
            echo '<a href="details.php?id=' . $row["id"] . '" class="view-button"><i class="fas fa-eye"></i></a>';
            echo '<div class="mask-icon">';
            echo '<form method="POST" action="add_to_cart.php" onsubmit="addToCart(event, this); return false;">';
            echo '<input type="hidden" name="product_id" value="' . $row["id"] . '">';
            echo '<button type="submit" class="cart">Add <i class="fa-solid fa-cart-shopping fa-beat fa-xs" style="color: #507163;"></i></button>';
            echo '</form>';
            echo '</div>';
            echo '<div class="why-text">';
            echo '<h5>₹' . $row["price"] . '</h5>';
            echo '</div>';
            echo '</div>';
            echo '<div class="name">';
            echo '<h5>' . $row["name"] . '</h5>';  
            echo '<ul>';
            echo '<li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist" onclick="addToWishlist(' . $row["id"] . '); return false;"><i class="far fa-heart"></i></a></li>';
            echo '</ul>';
            echo '</div>';
            echo '</div>';
            
        }
    } else {
        echo "No products found.";
    }
} 

elseif (isset($_GET['cat_id']) && isset($_GET['sub_id'])) {
    $cat_id = $_GET['cat_id'];
    $sub_id = $_GET['sub_id'];

    // Fetch products from the database using category and subcategory
    $sql = "SELECT * FROM `products` WHERE `category` = '$cat_id' AND `subcategory` = '$sub_id'";

    $result = $conn->query($sql);

    // Loop through the retrieved product data
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Generate product card dynamically
            echo '<div class="products-single fix" onclick="handleClick(' . $row["id"] . ')">';
            echo '<div class="box-img-hover">';
            echo '<img src="' . $row["image"] . '"  alt="Image">';
            // Display the view button with the product image
            echo '<a href="details.php?id=' . $row["id"] . '" class="view-button"><i class="fas fa-eye"></i></a>';
            echo '<div class="mask-icon">';
            echo '<form method="POST" action="add_to_cart.php" onsubmit="addToCart(event, this); return false;">';
            echo '<input type="hidden" name="product_id" value="' . $row["id"] . '">';
            echo '<button type="submit" class="cart">Add <i class="fa-solid fa-cart-shopping fa-beat fa-xs" style="color: #507163;"></i></button>';
            echo '</form>';
            echo '</div>';
            echo '<div class="why-text">';
            echo '<h5>₹' . $row["price"] . '</h5>';
            echo '</div>';
            echo '</div>';
            echo '<div class="name">';
            echo '<h5>' . $row["name"] . '</h5>';  
            echo '<ul>';
            echo '<li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist" onclick="addToWishlist(' . $row["id"] . '); return false;"><i class="far fa-heart"></i></a></li>';
            echo '</ul>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "No products found.";
    }
} elseif (isset($_GET['cat_id']) && !empty($_GET['cat_id'])) {


    $cat_id = $_GET['cat_id'];
     

    // Fetch products from the database using category
    $sql = "SELECT * FROM `products` WHERE `category` = '$cat_id'";

    $result = $conn->query($sql);

    // Loop through the retrieved product data
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '<div class="products-single fix" onclick="handleClick(' . $row["id"] . ')">';
            echo '<div class="box-img-hover">';
            echo '<img src="' . $row["image"] . '"  alt="Image">';
            // Display the view button with the product image
            echo '<a href="details.php?id=' . $row["id"] . '" class="view-button"><i class="fas fa-eye"></i></a>';
            echo '<div class="mask-icon">';
            echo '<form method="POST" action="add_to_cart.php" onsubmit="addToCart(event, this); return false;">';
            echo '<input type="hidden" name="product_id" value="' . $row["id"] . '">';
            echo '<button type="submit" class="cart">Add <i class="fa-solid fa-cart-shopping fa-beat fa-xs" style="color: #507163;"></i></button>';
            echo '</form>';
            echo '</div>';
            echo '<div class="why-text">';
            echo '<h5>₹' . $row["price"] . '</h5>';
            echo '</div>';
            echo '</div>';
            echo '<div class="name">';
            echo '<h5>' . $row["name"] . '</h5>';  
            echo '<ul>';
            echo '<li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist" onclick="addToWishlist(' . $row["id"] . '); return false;"><i class="far fa-heart"></i></a></li>';
            echo '</ul>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "No products found.";
    }
    
} 
else {
  echo '<script>window.onload = function() { alert("please select the category"); }</script>';
}

// Close the database connection
$conn->close();
?>

<script>
function addToCart(event, form) {
    event.preventDefault(); // Prevent the form from submitting traditionally

    // Serialize form data
    var formData = $(form).serialize();

    // Perform an AJAX request to add the product to the cart
    $.ajax({
        type: "POST",
        url: form.action,
        data: formData,
        success: function(response) {
            // Process the response if needed
            alert("Product added to cart.");
        },
        error: function(xhr, status, error) {
            // Handle errors if any
            console.log(xhr.responseText);
            alert("Failed to add product to cart. Please try again.");
        }
    });
}
</script>
<script>
function addToWishlist(productId) {
    // Perform an AJAX request to add the product to the wishlist
    $.ajax({
        type: "POST",
        url: "add_to_wishlist.php",
        data: { product_id: productId },
        success: function(response) {
            // Process the response if needed
            alert("Product added to wishlist.");
        },
        error: function(xhr, status, error) {
            // Handle errors if any
            console.log(xhr.responseText);
            alert("Failed to add product to wishlist. Please try again.");
        }
    });
}
</script>

</div>
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