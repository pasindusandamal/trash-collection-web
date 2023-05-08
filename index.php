<html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-7Vf/qaIuF+0sBLLzW0X9Ov2ZIVYbxTAvT/QsmwJiK/+vzwfhSAXPxp01ws2iWb1vpJv/F4Y0M3enEpP8iG81Cg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-VuX9ZaIQlZuSPTZf6FpGM6ruB8F62MupKb60hnL5he5G5oh8QGRj0zvIwV0dZzNRHt2aJt//09mzgK9j9+jYHQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<style>
.navbar-toggler {
    border: none !important;
}

.navbar-toggler-icon {

    font-size: 0.8rem;
    /* Adjust to your liking */
}

.navbar-toggler-icon::before {
    content: '';
    display: block;
    width: 20px;
    height: 2px;
    background-color: black;
    margin-top: 7px;
}

.navbar-toggler-icon::after {
    content: '';
    display: block;
    width: 20px;
    height: 2px;
    background-color: black;
    margin-top: 2px;
}

.navbar-toggler.collapsed .navbar-toggler-icon::before {
    transform: rotate(45deg);
}

.navbar-toggler.collapsed .navbar-toggler-icon::after {
    transform: rotate(-45deg);
}

.navbar {
    transition: transform 0.5s ease-out;
    transform-origin: top;
    background-color: transparent;
}

.navbar.shrink {
    background-color: #fff;
    box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.1);
    transform: scaleY(1.2);
}


.trash-container {
    position: relative;
    width: 230px;
    height: 270px;
    transition: all 0.8s ease-in-out;
}

.trash-container:hover .trash-lid {
    transform: rotate(20deg);
}

.trash-container:hover .trash-bin {
    transform: translateY(20%);
}

.trash-lid {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    margin: auto;
    width: 80%;
    height: 20%;
    border: 3px solid #333;
    border-top: none;
    border-radius: 50% 50% 0 0;
    transform-origin: center bottom;
    transition: all 0.3s ease-in-out;
}

.trash-bin {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    width: 80%;
    height: 80%;
    border: 3px solid #333;
    border-top: none;
    border-radius: 0 0 20% 20%;
    overflow: hidden;
    transition: all 0.3s ease-in-out;
}

.trash-image {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    height: 80%;
    object-fit: cover;
}

.button {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 60px;
    border: 3px solid #333;
    border-radius: 50%;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

.button:hover {
    border-color: #eee;
}

.arrow {
    position: relative;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 10px 0 10px 20px;
    border-color: transparent transparent transparent #333;
}




.image-container {
    position: relative;
    width: 400px;
    height: 300px;
}

.main-image {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.image-container:hover .overlay {
    opacity: 1;
}

.left-image {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-150%, -50%);
    width: 50px;
    height: 50px;
    object-fit: cover;
    border: 2px solid #fff;
    border-radius: 50%;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease-in-out;
}

.overlay:hover .left-image {
    transform: translate(-125%, -50%);
    border-color: #333;
}

.bottom-image {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, 150%);
    width: 50px;
    height: 50px;
    object-fit: cover;
    border: 2px solid #fff;
    border-radius: 50%;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease-in-out;
}

.overlay:hover .bottom-image {
    transform: translate(-50%, 125%);
    border-color: #333;
}


.parallax {
    background: url('https://images.pexels.com/photos/192136/pexels-photo-192136.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940') repeat fixed 100%;
    background-size: cover;
    color: aliceblue;
}


.parallax-inner {
    padding-top: 20%;
    padding-bottom: 20%;
}


footer {
    background-color: #f9f9f9;
    padding: 20px;
    text-align: center;
}

.social-icons {
    display: flex;
    justify-content: center;
    margin-bottom: 10px;
}

.social-icons a {
    display: inline-block;
    margin: 0 10px;
    color: #555;
    font-size: 24px;
    transition: color 0.3s;
}

.social-icons a:hover {
    color: #000;
}

.fab {
    font-size: inherit;
}



.dropdown:hover .dropdown-menu {
    display: block;
    width: calc(100% + 1rem);
    margin-left: -0.5rem;
    margin-right: -0.5rem;
}

.dropdown-toggle::after {
    display: none;
}



/* Footer */
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: #007b5e !important;
}
#footer h5{
	padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
	padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
	font-size:25px;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.social li:hover a i {
	font-size:30px;
	margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
	color:#ffffff;
}
#footer ul.social li a:hover{
	color:#eeeeee;
}
#footer ul.quick-links li{
	padding: 3px 0;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.quick-links li:hover{
	padding: 3px 0;
	margin-left:5px;
	font-weight:700;
}
#footer ul.quick-links li a i{
	margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
	#footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}

</style>
</head>

<body>


    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reportDetails.php">News</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex" role="search">

                    <button class="btn btn-outline-success"><a href="Registration.php"> Register</a></button>


                    <button class="btn btn-outline-success" style="margin-left:5px;"><a href="Login.php">
                            Login</a></button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Script for navbar shrink effect -->
    <script>
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('.navbar').addClass('shrink');
        } else {
            $('.navbar').removeClass('shrink');
        }
    });
    </script>


    <div>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>


    <div class="container">

        <div class="row">
            <div class="col">
                <div class="trash-container">
                    <div class="trash-lid"></div>
                    <div class="trash-bin">
                        <img src="" alt="Trash Bin" class="trash-image">
                        <div class="button">
                            <span class="arrow"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">

                <div class="trash-container">
                    <div class="trash-lid"></div>
                    <div class="trash-bin">
                        <img src="" alt="Trash Bin" class="trash-image">
                        <div class="button">
                            <span class="arrow"></span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="trash-container">
                    <div class="trash-lid"></div>
                    <div class="trash-bin">
                        <img src="" alt="Trash Bin" class="trash-image">
                        <div class="button">
                            <span class="arrow"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="container" style="margin-top:100px;">
        <div class="row">
            <div class="col">
                <h2 style="font-weight:bold;">Experience in waste disposal management services</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Nam quis bibendum lacinia eu id in. Quisque porttitor
                    tortor blandit nunc sed ac id. Mattis in nunc libero viverra. Consectetur leo nibh ac at amet.</p>
                <ol>
                    <li>Giant Fishes Farming</li>
                    <li>Water & Plants Filtration Systems</li>
                    <li>Seafood Import Export</li>
                </ol>
                <button>Request</button>
            </div>
            <div class="col">
                <div class="image-container">
                    <img src="images/1.jpg" alt="Main Image" class="main-image">
                    <div class="overlay">
                        <img src="https://picsum.photos/50" alt="Left Image" class="left-image">
                        <img src="https://picsum.photos/50" alt="Bottom Image" class="bottom-image">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container">

        <div class="row">
            <div class="col">
                <div class="trash-container">

                    <div class="trash-bin">
                        <img src="images/1.jpg" alt="Trash Bin" class="trash-image"
                            style=" border-radius: 0 0 20px 20px;">

                    </div>
                </div>
            </div>
            <div class="col">

                <div class="trash-container">

                    <div class="trash-bin"> <img src="images/1.jpg" alt="Trash Bin" class="trash-image"
                            style=" border-radius: 0 0 20px 20px;"> <img src="" alt="Trash Bin" class="trash-image">

                    </div>
                </div>

            </div>
            <div class="col">

                <div class="trash-container">

                    <div class="trash-bin">
                        <img src="images/1.jpg" alt="Trash Bin" class="trash-image"
                            style=" border-radius: 0 0 20px 20px;">

                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="container" style="margin-top:100px;">
        <div class="row">
            <div class="col">
                <h2 style="font-weight:bold;">Why choose our waste disposal services</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Nam quis bibendum lacinia eu id in. Quisque porttitor
                    tortor blandit nunc sed ac id. Mattis in nunc libero viverra. Consectetur leo nibh ac at amet.</p>
                <ol>
                    <li>Residential waste pickup
                        Amet minim mollit no duis deserut lamo sit enim aliqua dolor do amet sint velit</li>
                    <li>Roll-off dumpsters
                        Amet minim mollit no duis deserut lamo sit enim aliqua dolor do amet sint velit</li>
                    <button>Contac</button>
                </ol>
                <button>Request</button>
            </div>
            <div class="col">
                <div class="image-container">
                    <img src="images/1.jpg" alt="Main Image" class="main-image">
                    <div class="overlay">
                        <img src="https://picsum.photos/50" alt="Left Image" class="left-image">
                        <img src="https://picsum.photos/50" alt="Bottom Image" class="bottom-image">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div>

        <section class="1">
            <section class="parallax">
                <div class="parallax-inner">
                    <br>
                    <h1>Forests</h1>
                    <br>
                </div>
            </section>
    </div>

    <div class="container" style="background: green; height:200px; margin-top:-50px;">
        <h1>Beaches</h1>
        <div class="row">
            <div class="col">
                <p>Recycle Materials
                    We collect, recycle & disposal all materials</p>
            </div>
            <div class="col"></div>
        </div>
    </div>


    <footer>
        <div class="social-icons">
            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
        <p>&copy; 2023 My Website Name. All Rights Reserved.</p>
    </footer>




    <!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
					<p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
				</div>
				<hr>
			</div>	
		</div>
	</section>


   
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</body>

</html>