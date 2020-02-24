<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
?>

<!DOCTYPE html>
<html>

<head>
  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">

  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

  <title class ="name">GoHealthy</title>
    <script src="javascript/slide.js"></script>
    <!-- google fonts -->
<link href="https://fonts.googleapis.com/css?family=Akronim|Dancing+Script|Great+Vibes|Indie+Flower|Kaushan+Script|Lakki+Reddy|Lobster+Two|Pacifico|Satisfy&display=swap" rel="stylesheet">

  <!-- CSS FILE -->
  <link rel="stylesheet" type="text/css" href="javascript/magicslideshow/magicslideshow.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <link rel="stylesheet" type="text/css" href="css/search.css">
  <!-- <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/ionicons.min.css"> -->
  <!--icons -->
  <script src="javascript/magicslideshow/magicslideshow.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>



  <section id="title">
    <div class="container">

      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">GoHealthy</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav  ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Items
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#prod">Milk</a>
                <a class="dropdown-item" href="#prod">Fruit</a>
                <a class="dropdown-item" href="#prod">Fruit Chaat</a>
              </div>
            </li>
            <li class="nav-item"> <a class="nav-link" href="#footer">Cart</a></li>
            <li class="nav-item"> <a class="nav-link" href="about.html">About</a></li>
            <li class="nav-item"> <a class="nav-link" href="phplogin/profile.php">Profile</a></li>
						<li class="nav-item"> <a class="nav-link" href="phplogin/logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- search title -->
    <div class="search">
      <div class="search-tab">
			<!-- <form action="/search.php" method="get"> -->
      <input type="text" id="search-input" placeholder="Search Food" >
			<input type="submit" value="Go" id="search-button" onclick="CreateDiscount()" >
			<!-- Modal -->
		   <div class="modal fade" id="myModal" role="dialog">
		     <div class="modal-dialog modal-lg">
		       <div class="modal-content">
		         <div class="modal-header">
		           <button type="button" class="close" data-dismiss="modal">&times;</button>
		           <h4 class="modal-title">Modal Header</h4>
		         </div>
		         <div class="modal-body">
		           <p>This is a large modal.</p>
		         </div>
		         <div class="modal-footer">
		           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		         </div>
		       </div>
		     </div>
		   </div>

      </form>
		</div>
    </div>
  </section>

  <section id="slides">
    <div class="MagicSlideshow">
        <img src="images/salad3.jpg">
        <img src="images/salad.jpg">
    </div>
    </section>

<div class="container">

	<div id="modal123"></div>
</div>

    <section class="ftco-section">
  			<div class="container">
  				<div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services mb-md-0 mb-4">
                <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
              		<span class="flaticon-shipped"><img src="images/truck.png" class="imag" alt=""></span>
                </div>
                <div class="media-body">
                  <h3 class="heading">Free Shipping</h3>
                  <span>On order over 100 rs</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services mb-md-0 mb-4">
                <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
              		<span class="flaticon-diet"><img src="images/fruits.png" class="imag" alt=""></span>
                </div>
                <div class="media-body">
                  <h3 class="heading">Always Fresh</h3>
                  <span>Product well package</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services mb-md-0 mb-4">
                <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
              		<span class="flaticon-award"><img src="images/premium.png" class="imag" alt=""></span>
                </div>
                <div class="media-body">
                  <h3 class="heading">Superior Quality</h3>
                  <span>Quality Products</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services mb-md-0 mb-4">
                <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
              		<span class="flaticon-customer-service"><img src="images/support.png" class="imag" alt=""></span>
                </div>
                <div class="media-body">
                  <h3 class="heading">Support</h3>
                  <span>24/7 Support</span>
                </div>
              </div>
            </div>
          </div>
  			</div>
  		</section>
      <hr>

      <!-- products -->


      <section id="prod" >
        <div class="container variety" margin-top="30px">
          <h1 class="name">Products Available</h1>
          <em>enjoy the wide variety we are providing</em>
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <img src="images/milk.png" alt="">


            </div>  <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/milk.png" alt="">

              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/milk.png" alt="">

              </div>


          </div>

        </div>

      </section>
      <hr>
      <section id="footer">



<footer class="ftco-footer ftco-section  ">
      <div class="container  ">
       <div class="row mb-5 ">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">GoHealthy</h2>
              <p class="d-block">Here to Take CARE of everyone's needs</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href=".html" class="py-2 d-block">Cart</a></li>
                <li><a href=".html" class="py-2 d-block">About</a></li>
                <li><a href=".html" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Help</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Delivery Informaton</a></li>
                <li><a href="" class="py-2 d-block">Cancel &amp; Reorder</a></li>
                <li><a href="contact.html" class="py-2 d-block">Terms &amp; Conditions</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul class="cont">
	                <li><span class="icon icon-map-marker "></span><span class="text d-block">ED 16, Vindhyachal Hostel, IIT Delhi, NEW DELHI, INDIA</span></li>
	                <li><a href="#" class="d-block"><span class="icon icon-phone"></span><span class="text">7014219809</span></a></li>
	                <li><a href="#" class="d-block"><span class="icon icon-envelope"></span><span class="text">deep2023iit@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        </div>
    </footer>
      </section>
      <div class="footer-copyright main">
      <div class="container">
      <div class="row fo">
      <div class="col-md-12 text-center">
      <p> GoHealthy © 2020. All rights reserved.</p>
      </div>
      </div>
      </div>
      </div>
			<script type="text/javascript">
				console.log("Defining Function")
				function CreateDiscount() {
				  console.log("Calling API")
					var searches = document.getElementById('search-input').value
					console.log(searches)
			    var url = "https://api.nal.usda.gov/fdc/v1/search?api_key=7GUOx04j8bMKCV8L2MQkgpyObr9fq6Ti5cq8WxQg\&generalSearchInput="+searches

			    fetch(url, {method: 'get', headers: { 'Content-Type': 'application/json'}} )
					.then(res => res.json().then(data => {
						foodList = data['foods']
						fl = foodList.length
						var text = '<table>'
						text += "<thead>"
						text += "<tr>"
						text += "<td>"+'Description'+"</td>"
						text += "<td>"+'Datatype'+"</td>"
						text += "<td>"+'Ingredients'+"</td>"
						text += "<td>"+'BrandOwner'+"</td>"
						text += "</tr>"
						text += "</thead>"
						for(i=0;i<fl;i++) {
							text += "<tr>"
							text += "<td>"+foodList[i]['description']+"</td>"
							text += "<td>"+foodList[i]['dataType']+"</td>"
							text += "<td>"+foodList[i]['ingredients']+"</td>"
							text += "<td>"+foodList[i]['brandOwner']+"</td>"
							text += "</tr>"
						}
						text +='</table>'
						document.getElementById("modal123").innerHTML = JSON.stringify(text)
						console.log(data)
					}))
			    .catch(function(error) {
			      console.log("Cannot Fetch")      // If there is any error you will catch them here
			    });
			}
			</script>

       </body>
</html>
