<?php get_header();?>
<?php
$home = get_field('home');

?>
<section>
	<div class="banner">
		<div class="banner-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="banner-heading"><?php echo $home['banner_heading'] ?></h1>
					<p style="font-size: 40px;"class="banner-text"><?php echo $home['banner_text'] ?></p>					
				</div>
			</div>
		</div>
	</div>

  <!--- why choose -->
  <div class="why_choose text-center py-5">    
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="amr-font">who we are?</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
      </div>
    </div>
  </div>
  </div>

  <div class="seprator"></div>

  <!--- what we do -->
  <div class="what_do text-center py-5">    
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="amr-font">What we do?</h1>
        <p>Our Team works to grow your business, Help get you found online & attract new customers!</p>
      </div>
    </div>
  </div>
  </div>
  <!------ cards --->
  <div class="cards text-center">
    <div class="container">
      <div class="row d-md-flex flex-row justify-content-center">
      <div class="card-content"></div>        
      <div class="card-content"></div>        
      <div class="card-content"></div>        
      </div>
    </div>
    <a href="#" class="btn btn-contact bt-pink">Contact us</a>
  </div>



<!--- artical -->
  <div class="artical_one text-center py-5">    
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="amr-font">take the step to first page results!</h1>
        <p>Free consultation   |   Friendly team of experts   |   Results for your business</p>
      </div>
    </div>
  </div>
  </div>


  <!---- double section , contact form--->

  <div class="container py-5">
    <div class="row">
      <div class="col-md-6 col-sm-12 side_artical text-left">
        <p>Check the health of your online business information with help from our listings scan. Instantly see how your most critical location data appears on Google, Yelp, Facebook and dozens more maps, apps, search engines, and directories.</p>
      </div>
      <div class="col-md-6 col-sm-12 contact_form">
        <h2>How is Your Business Listing?</h2>
        <p>Enter business information to scan below.</p>
        <?php echo $home['contact_form'] ?>

      </div> 
      </div>
    </div>
  </div>

  <div class="seprator"></div>

  <!--- Happy Clients -->
  <div class="happy_clients text-center py-5">    
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="amr-font">Happy Clients</h1>
        <p>A few of our more recent projects. Please check them out!</p>
        <img src="<?php echo get_template_directory_uri();?>/images/projects.jpg" class="img-fluid">
      </div>
    </div>
  </div>
  <a href="#" class="btn bt-pink">Show Me The Sites</a>
    </div>

  

<!------- Pre footer --->
  <div class="pre-footer ">
    <div class="pre-overlay"></div>
    <div class="container">
    <div class="row">
      <div class="col-md-12 py-5 text-center">
        <h2 class="amr-font">I want to learn more</h2>
      <a href="#" class="btn bt-pink">Take Me the Lead Horse</a>
      </div>
    </div>
  </div>    
  </div>
</section>
  </div>
<?php get_footer();?>


