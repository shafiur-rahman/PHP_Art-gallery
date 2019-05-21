<?php
  require('db.php');
  require('database.php');
  session_start();
  if(isset($_SESSION['username']))
  {
  $username = $_SESSION['username'];
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cube'X</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="css/slidefolio.css" rel="stylesheet">
	<!-- Font Awesome -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- Header Area -->
    <div id="top" class="header">
      <div class="vert-text">
	  <img class="img-rounded" alt="Company Logo" src="./img/ww.png"/>
        <h2><em>Cube'X</em></h2>

		 <ul class="list-inline">
              <li><i class="fa fa-facebook fa-3x"></i></li>
              <li><i class="fa fa-twitter fa-3x"></i></li>
              <li><i class="fa fa-google-plus fa-3x"></i></li>
			  <li><i class="fa fa-linkedin fa-3x"></i></li>
			   <li><i class="fa fa-pinterest fa-3x"></i></li>
            </ul>	
			<br>
			<div class="btn btn-top"> <?php echo $username ?> </div>
      <a href="logout.php" class="btn btn-top">logout</a>
      </div>
    </div>
    <!-- /Header Area -->
	  <div id="nav">
    <!-- Navigation -->
    <nav class="navbar navbar-new" role="navigation">
   <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobilemenu">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
	<a href="#" class="navbar-brand">Cube'X Gallery</a>
  </div>
  <div class="collapse navbar-collapse" id="mobilemenu">

	  <ul class="nav navbar-nav navbar-right text-center">
	    <li><a href="#top"><i class="service-icon fa fa-home"></i>&nbsp;Home</a></li>
        <li><a href="#about"><i class="service-icon fa fa-info"></i>&nbsp;About</a></li>
        <li><a href="#services"><i class="service-icon fa fa-laptop"></i>&nbsp;Services</a></li>
        <li><a href="#portfolio"><i class="service-icon fa fa-camera"></i>&nbsp;Gallery</a></li>
        <li><a href="#contact"><i class="service-icon fa fa-envelope"></i>&nbsp;Contact</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </div>
</nav>
    <!-- /Navigation -->
</div>	
    <!-- About -->
    <div id="about" class="about_us">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h2>About Us</h2>
            <p class="lead">This website for exhibition some faboulous work from some professional artist and photographer.</p>
          </div>
        </div>
	  </div>
    </div>
    <!-- /About -->
    <!-- Services -->
    <div id="services" class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Our Services</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="service-item">
              <i class="service-icon fa fa-camera-retro fa-3x"></i>
              <h3><a href="artist.html"> Artists</a></h3>
              <p>Here you can find some excellet artists who are professional in photography.</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="service-item">
			<i class="service-icon fa fa-camera fa-3x"></i>
              <h3><a href="dark/dark.html">Collection</a></h3>
              <p>It's the world with black and white.We collect some amazing pictures for you.</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="service-item">
              <i class="service-icon fa fa-globe fa-3x"></i>
              <h3><a href="upload.php">Express yourself</a></h3>
              
              <p>Upload your fantastic art & photos to our website.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Services -->

    <!-- Portfolio -->
    <div id="portfolio" class="portfolio">
    <div class="container">
    <div class="row push50">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Our Work</h2>
			<h3>
			<span class="filter label label-default" data-filter="all">ALL</span>
	<span class="filter label label-default" data-filter="bw">B&amp;W</span>
	<span class="filter label label-default" data-filter="nature">Nature</span>
	<span class="filter label label-default" data-filter="portraits">Portraits</span>
	</h3>
            <hr>
          </div>
        </div>
		
		<div class="row">
		
		<div class="gallery">
		
    		  <ul id="Grid" class="gcontainer">
    		    <li class="col-md-4 col-sm-4 col-xs-12 mix bw portraits" data-cat="graphics">
              <a data-toggle="modal" data-target="#portrait1" class="mix-cover">
                <img class="horizontal" src="img/portrait1-sm.jpg" alt="placeholder">
      		      <span class="overlay"><span class="valign"></span><span class="title">Potrait</span></span>
              </a>                
      		  </li>
    		    <li class="col-md-4 col-sm-4 col-xs-12 mix portraits" data-cat="graphics">
                <a data-toggle="modal" data-target="#portrait2" class="mix-cover">
                  <img class="horizontal" src="img/portrait2.jpg" alt="placeholder">
        		      <span class="overlay"><span class="valign"></span><span class="title">Potrait</span></span>
                </a>                
      		  </li>
			  <li class="col-md-4 col-sm-4 col-xs-12 mix nature" data-cat="nature">
                <a data-toggle="modal" data-target="#nature1" class="mix-cover">
                  <img class="horizontal" src="img/nature1.jpg" alt="placeholder">
        		      <span class="overlay"><span class="valign"></span><span class="title">Nature</span></span>
        		    </a>
      		  </li>
      		  <li class="col-md-4 col-sm-4 col-xs-12 mix portraits" data-cat="portraits">
                <a data-toggle="modal" data-target="#portrait3" class="mix-cover">
                  <img class="horizontal" src="img/portrait3.jpg" alt="placeholder">
        		      <span class="overlay"><span class="valign"></span><span class="title">Potrait</span></span>
        		    </a>
      		  </li>
			  <li class="col-md-4 col-sm-4 col-xs-12 mix portraits" data-cat="portraits">
                <a data-toggle="modal" data-target="#portrait5" class="mix-cover">
                  <img class="horizontal" src="img/portrait5.jpg" alt="placeholder">
        		       <span class="overlay"><span class="valign"></span><span class="title">Potrait</span></span>
        		    </a>
      		  </li>
			  <li class="col-md-4 col-sm-4 col-xs-12 mix nature" data-cat="nature">
                <a data-toggle="modal" data-target="#nature" class="mix-cover">
                  <img class="horizontal" src="img/nature.jpg" alt="placeholder">
        		      <span class="overlay"><span class="valign"></span><span class="title">Nature</span></span>
        		    </a>
      		  </li>
      		  <li class="col-md-4 col-sm-4 col-xs-12 mix portraits" data-cat="portrait">
                <a data-toggle="modal" data-target="#portrait4" class="mix-cover green">
                  <img class="vertical" src="img/portrait4.jpg" alt="portrait 4">
                  <span class="overlay"><span class="valign"></span><span class="title">Potrait</span></span>           
        		    </a>
      		  </li>
			  <li class="col-md-4 col-sm-4 col-xs-12 mix bw nature all" data-cat="portrait">
                <a data-toggle="modal" data-target="#forest" class="mix-cover green">
                  <img class="vertical" src="img/forest.jpg" alt="Forest">
                   <span class="overlay"><span class="valign"></span><span class="title">Forest</span></span>                    
        		    </a>
      		  </li>
			  <li class="col-md-4 col-sm-4 col-xs-12 mix bw nature all" data-cat="bw">
                <a data-toggle="modal" data-target="#bw1" class="mix-cover green">
                  <img class="vertical" src="img/bw1.jpg" alt="Black and White">
                   <span class="overlay"><span class="valign"></span><span class="title">Black &amp; White</span></span>                  
        		    </a>
      		  </li>
    		  </ul>   
			  
<!-- Load Photo in Modal -->			  
   <div class="modal fade" id="portrait1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title text-center">life</h1>
        <h6 class="modal-title text-center"><font face="verdana" color="green"><b>Artist:</b>Shorol</font></h6>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Portrait1" src="img/portrait1-sm.jpg"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

  <div class="modal fade" id="portrait2" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title text-center">Art for life</h1>
        <h6 class="modal-title text-center"><font face="verdana" color="green"><b>Artist:</b>Bahadur</font></h6>
        
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Portrait1" src="img/portrait2.jpg"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="portrait3" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       <h1 class="modal-title text-center">Love</h1>
        <h6 class="modal-title text-center"><font face="verdana" color="green"><b>Artist:</b>Turno</font></h6>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Portrait1" src="img/portrait3.jpg"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="portrait4" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title text-center">Homesick</h1>
        <h6 class="modal-title text-center"><font face="verdana" color="green"><b>Artist:</b> Tusher</font></h6>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Portrait1" src="img/portrait4.jpg"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="portrait5" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title text-center">Creative</h1>
        <h6 class="modal-title text-center"><font face="verdana" color="green"><b>Artist:</b>Cube</font></h6>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Portrait1" src="img/portrait5.jpg"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="nature" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title text-center">Nature</h1>
        <h6 class="modal-title text-center"><font face="verdana" color="green"><b>Artist:</b>Masud</font></h6>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="nature" src="img/nature.jpg"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="nature1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title text-center">River</h1>
        <h6 class="modal-title text-center"><font face="verdana" color="green"><b>Artist:</b>Akif</font></h6>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="nature" src="img/nature1.jpg"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="forest" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title text-center">Animal's Kingdom</h1>
        <h6 class="modal-title text-center"><font face="verdana" color="green"><b>Artist:</b>Shovon</font></h6>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="forest" src="img/forest.jpg"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="bw1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title text-center">Dark</h1>
        <h6 class="modal-title text-center"><font face="verdana" color="green"><b>Artist:</b>Dhali</font></h6>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="forest" src="img/bw1.jpg"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- /Load Photo in Modal -->	
		</div>	
      </div>
		</div>
      </div>
    <!-- /Portfolio -->

    <!-- Contact -->
    <div id="contact">
      <div class="container">
        <div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
            <h2>Contact Us</h2>
			<hr>
          </div>
          <div class="col-md-5 col-md-offset-3">


		  <!-- contact form starts -->



            <form action="reg.php" method="POST" id="contact-form" class="form-horizontal">
			<fieldset>
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="name">Your Name</label>
						      <div class="col-sm-8">
						        <input type="text"  placeholder="Your Name" class="form-control" name="username" id="name">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="email">Email Address</label>
						      <div class="col-sm-8">
						        <input type="text" placeholder="Enter Your Email Address" class="form-control" name="email" id="email">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="subject">Subject</label>
						      <div class="col-sm-8">
						        <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="message">Your Message</label>
						      <div class="col-sm-8">
						        <textarea placeholder="Please Type Your Message" class="form-control" name="comment" id="message" rows="3"></textarea>
						      </div>
						    </div>
	              <div class="col-sm-offset-4 col-sm-8">
			            <button type="submit" name="reg" class="btn btn-success">Submit</button>
	    			      <button type="reset" class="btn btn-primary">Cancel</button>
	        			</div>
						</fieldset>
						</form>
				
				<!-- contact form ends -->		
          </div>
        </div>
      </div>
    </div>
    <!-- /Contact -->
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
           <h2>Thank You</h2>

<div class="alert alert-info">
    <strong>All right recieved Cube'X 2017 !</strong> <a href="home.php">Cube'X</a>!
</div>

          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer -->
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-scrolltofixed-min.js"></script>
	<script src="js/jquery.vegas.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/bootstrap.js"></script>
	
<!-- Slideshow Background  -->
	<script>
$.vegas('slideshow', {
  delay:5000,
  backgrounds:[
     { src:'./img/nature1.jpg', fade:2000 },
	 { src:'./img/bw1.jpg', fade:2000 },
    { src:'./img/portrait1.jpg', fade:2000 },
	 { src:'./img/portrait5.jpg', fade:2000 },
    { src:'./img/portrait2.jpg', fade:2000 },
    { src:'./img/portrait3.jpg', fade:2000 },
	 { src:'./img/portrait4.jpg', fade:2000 },
	   { src:'./img/forest.jpg', fade:2000 }
	   
  ]
})('overlay', {
src:'./img/overlay.png'
});

	</script>
<!-- /Slideshow Background -->

<!-- Mixitup : Grid -->
    <script>
		$(function(){
    $('#Grid').mixitup();
      });
    </script>
<!-- /Mixitup : Grid -->	

    <!-- Custom JavaScript for Smooth Scrolling - Put in a custom JavaScript file to clean this up -->
    <script>
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>
<!-- Navbar -->
<script type="text/javascript">
$(document).ready(function() {
        $('#nav').scrollToFixed();
  });
    </script>
<!-- /Navbar-->
	
  </body>

</html>
<?php
}
else
{
  header("Location: index.php");
}?>