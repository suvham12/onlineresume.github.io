<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
img {
  border-radius: 50%;
}
</style>

	<style>
		
		.animate-show-hide.ng-hide {
  opacity: 0;
}

.animate-show-hide.ng-hide-add,
.animate-show-hide.ng-hide-remove {
  transition: all linear 0.5s;
}

.check-element {
  border: 1px solid black;
  opacity: 1;
  padding: 10px;
}
	</style>

<script >
	it('should check ngShow', function() {
  var checkbox = element(by.model('checked'));
  var checkElem = element(by.css('.check-element'));
  var x = document.getElementById("4");
  expect(checkElem.isDisplayed()).toBe(false);
  checkbox.click()
  //x.hide();
  //checkElem.show();
  expect(checkElem.isDisplayed()).toBe(true);
});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.js"></script>
</head>
<body background="images/iii.gif" ng-app="ngAnimate">
	<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
  <a class="navbar-brand text-right" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link text-light" href="index.php"><h4>Home</h6> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#about"><h4>About</h4></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#skills"><h4>Skills</h4></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#education"><h4>Edu/Experience</h4></a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link text-light" href="#projects"><h4>Projects</h4></a>
      </li>-->
      <li class="nav-item">
        <a class="nav-link text-light" href="#contact"><h4>Contact</h4></a>
      </li>
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
  </div>
</nav>
<br>
<br>
<center><img src="images/suve.jpg" alt="Avatar" style="width:200px"></center>
<center><h1><font size="72" color="white">Suvham Das</font></h1></center>
<br>

<center><div class="w3-animate-left">
	<h4 class="text-light">Programmer</h4>
	<h4 class="text-light">Developer</h4>
	<h4 class="text-light">Future Institute of Engineering and Management</h4>
</div>
</center><br>

<center><h3 class="text-light"><div class="w3-animate-fading">Hard work is the real key to success.</div></h3></center>
<center><h4 class="text-light"><div class="w3-animate-fading">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp-John Carmack</div></h4></center> 


<!--<a href="#skills"><img src="images/w1.png"></a>-->
<center><h2 class="text-light">Inspirations</h2></center>

<section>
	<center>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-xs-4">
			<div class="card w3-animate-right" style="width: 18rem;">
  <img src="images/cr7.jpg" height="430" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cristiano Ronaldo</h5>
    <p class="card-text">With hard work comes sucess.</p>
    <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-xs-4">
			<div class="card w3-animate-left" style="width: 18rem;">
  <img src="images/lm.jpeg" alt="Image" height="400" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lionel Messi</h5>
    <p class="card-text">There is always some magic within you.</p>
    <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-xs-4">
			<div class="card w3-animate-left" style="width: 18rem;">
  <img src="images/sp.jpg" alt="Image" height="400" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sundar Pichai</h5>
    <p class="card-text">It doesnot matter from where you belong.</p>
    <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
  </div>
</div>
</div>
</div>
</center>
</section><br>

<center>
	<!--<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">About us</h3>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/suve.jpg" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<h2 class="display-4 text-light">I am a 3rd Year student in FIEM mojoring in Information Technology(Expected 2021)</h2>
				</div>
			</div>
	</div>
</section>-->
<!--<div class="row">
<div class="col-lg-6">-->
	<!--<div class="row">
		<div class="fact col-md-6 col-sm-6 col-xs-6">
			<div class="count-item">
				<div class="numscroller scrollzip roller-title-number-1 isShown" data-slno="1" data-min="0" data-max="100000" data-delay="20" data-increment="1000">100000</div>
				<div class="count-name-intro">Lines of Code.</div>
				</div>
				</div>
				</div> -->
	
<section id="about"><div class="row">
	<div class="col-lg-6 col-md-6 col-xs-6">
	<div class="card w3-animate-opacity" id="4" style="width: 18rem;">
  <img src="images/me.jpg" height="250" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">About</h5>
    <p class="card-text">I am a 3rd Year student in FIEM mojoring in Information Technology(Expected 2021). Apart from Programming I love Sports, Music, Movies</p>
    Want to Know more: <input type="checkbox" ng-model="checked" aria-label="Toggle ngshow"><br />
   <!-- <a href="#" class="btn btn-primary">Go somewhere</a>-->
  </div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-xs-6">
<div class="card w3-animate-left check-element animate-show-hide" ng-show="checked"  style="width: 18rem;">
  <img src="images/me2.jpg" height="250" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">About</h5>
    <p class="card-text">Apart from these I love to spent time with my friends,family.I love travelling around. I also enjoy playing Football along with my friends.</p>
</div>
</div>
</div>
</div>
</section>


<!--<div class="col-lg-6">
	<div class="card" style="width: 18rem;">
  <img src="images/suve.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">About</h5>
    <p class="card-text">I am a 3rd Year student in FIEM mojoring in Information Technology(Expected 2021). Apart from Programming I love Sports, Music, Movies</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</div>
</div>-->
<br><br>
<section id="skills">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-xs-3">
	<div class="card w3-animate-right" style="width: 18rem;">
  <img src="images/sql.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Skills</h5>
    <p class="card-text"><label for="python">SQL</label>
<progress id="python" value="8.5" min="0" max="10">85%</progress>
	</p>
   <!-- <a href="#" class="btn btn-primary">Go somewhere</a>-->
  </div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-xs-3">
	<div class="card w3-animate-right" style="width: 18rem;">
  <img src="images/c3.png" height="270" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Skills</h5>
    <p class="card-text"><label for="python">C</label>
<progress id="python" value="8" min="0" max="10">80%</progress>
	</p>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a>-->
  </div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-xs-3">
	<div class="card w3-animate-right" style="width: 18rem;">
  <img src="images/h.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Skills</h5>
    <p class="card-text"><label for="python">Html5...</label>
<progress id="python" value="7" min="0" max="10">70%</progress>
	</p>
   <!-- <a href="#" class="btn btn-primary">Go somewhere</a>-->
  </div>
</div>
</div>

<div class="col-lg-3 col-md-3 col-xs-3">
	<div class="card w3-animate-right" style="width: 18rem;">
		<img src="images/j2.jpg" height="270" class="card-img-top" alt="..."-->
  <div class="card-body">
    <h5 class="card-title">Skills</h5>
    <p class="card-text"><label for="python">Results</label>
<progress id="python" value="6" min="0" max="10">60%</progress>
	</p>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a>-->
</div>
</div>
</div>

</section>
<br><br>
<section id="education">
<center>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-xs-6">
	<div class="card w3-animate-opacity" style="width: 18rem;">
  <!--<img src="images/j2.jpg" class="card-img-top" alt="..."-->
  <div class="card-body">
    <h5 class="card-title">Education</h5>
    <img src="images/linkdin.jpg" class="card-img-top" alt="..."-->
    <a href="http://linkedin.com/in/suvham-das-326b281a5 " class="btn btn-primary">MY Education details</a>
  </div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-xs-6">
	<div class="card w3-animate-opacity" style="width: 18rem;">
  <!--<img src="images/j2.jpg" class="card-img-top" alt="..."-->
  <div class="card-body">
    <h5 class="card-title">Experience</h5>
    <img src="images/exp.jpg" height="250" class="card-img-top" alt="..."-->
    <a href="https://www.linkedin.com/feed/update/urn:li:activity:6667832422345908224/ " class="btn btn-primary">MY Experience</a>
  </div>
</div>
</div>
</div>
</center>
</section><br><br>
<!--<section id="projects">
	<center>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-xs-12">
	<div class="card w3-animate-opacity" style="width: 18rem;">
  <!--<img src="images/j2.jpg" class="card-img-top" alt="..."-
  <div class="card-body">
    <h5 class="card-title">Projects</h5>
    <img src="images/git.png" height="250" class="card-img-top" alt="..."-
    <a href="https://github.com/users/suvhamdas12/projects/1#column-8940573 " class="btn btn-primary">MY Projects</a>
  </div>
</div>
</div>
</div><br><br>-->
<section id="contact">
<footer>
	<h3 class="p-1 bg-dark text-center text-light"><p>Contact</p>
		E-mail:&nbspsuvhamdas2016@gmail.com<br>
		Mobile:&nbsp7872589.08<br>

		Location:<a href="https://www.google.co.in/maps/place/Garia,+Kolkata,+West+Bengal/@22.4624836,88.3726606,14z/data=!3m1!4b1!4m5!3m4!1s0x3a0271a00d52ca53:0x84c91e76a182e37a!8m2!3d22.4660129!4d88.3928446?hl=en&authuser=0">&nbsp <i class='fas fa-map-marker-alt' style='font-size:48px;color:red'></i></a><br>
		<!--<a href="https://goo.gl/maps/JQnnKQDe4CzvjSeEA"></a>-->
		
		<!--<div class="w-50 m-auto">
	<form action="first.php" method="post">

		<label><h3 class="text-light"> Username</h3></label><br>
		<input type="text" name="i" placeholder="name!!!" class="form-control" autocomplete="off">
		<label><h3 class="text-light"> mobile no</h3></label><br>
		 <input type="text" name="ii" placeholder="+923********" class="form-control" autocomplete="off"><br>

		<label><h3 class="text-light">email</h3></label><br>
		<input type="text" name="iii" placeholder="email!!!" class="form-control" autocomplete="off">
		<label><h3 class="text-light"> comments</h3></label><br>
		<textarea rows="4" cols="40" name="iiii" placeholder="comments!!!" class="form-control" autocomplete="off"></textarea>
		<br><br>
		<button type ="submit" class="btn btn-success">Send me</button>

	</form>-->
</div>
<br>


		<a href="https://www.facebook.com/suvham.das.7"><img src="images/face.png" height="35"></a></div>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		
		<a href="https://www.instagram.com/suvhamdas/"><img src="images/insta.webp" height="35"></a></div>
		
		
</footer>



<!-- The core Firebase JS SDK is always required and must be listed first -->
<!--<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

 TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app 

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyBK-juZ6krPJCHHELQgOW9sFUXsS9h3wHI",
        authDomain: "fir-web-b823f.firebaseapp.com",
        databaseURL: "https://fir-web-b823f.firebaseio.com",
        projectId: "fir-web-b823f",
        storageBucket: "fir-web-b823f.appspot.com",
        messagingSenderId: "463332404757",
        appId: "1:463332404757:web:68d04d3fdeeb333f"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script src="NumberAuthentication.js" type="text/javascript"></script>

<script>
function phoneAuth() {
  document.getElementById("iii").disabled = false;
}
</script>
-->





	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>


</body>
</html>