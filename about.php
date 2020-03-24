<?php
//REGISTERING TO MORUWASA DATABASE

$emailEr=null;

include('connection.php');
//include('top.php');
//Access data from post collection ,store in variables
if (isset($_POST["subscribe"])) {
	function validateFormData($formData) {
		$formData = trim(stripslashes(htmlspecialchars($formData)));
		return $formData;
}
$email="";
$emailEr="";


if (!$_POST["email"]) {
 $emailEr = "Please enter your email <br>"; 
}else{
	$email=validateFormData($_POST["email"]);
}

//inserting into database
if ($email ) {
	$query = "INSERT INTO visitor ( email) VALUES ( '$email')";
if(mysqli_query($conn, $query)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
  
}

 
        
}



	
	
	

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
	<link rel="stylesheet" href="css/boksi.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
        margin: 0px  ;
    }
</style>
  </head>
  <body style="color: #23224c;font-family:  brandon-grotesque,sans-serif;font-style: normal;font-weight: 0; background-color: silver;position:relative;top:0px">
  
    <div id="first"class="container-fluid" style=" background-color: grey;background-image:
          linear-gradient(transparent, #090909),
          linear-gradient(to bottom, #d3d9d9, rgba(211, 217, 217, 0.3) 25%, transparent),
          url('https://www.jessibaker.com/wp-content/uploads/2017/12/background-1300x1800.jpg');">
	
 	
	 <div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-transparent">
        <a href="#" class="navbar-brand"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="index.php"><div id="box" style="background:#9cf4df;border-radius: 50%;box-shadow: 0 0 2px #a6bbb6;margin-top:20px;display: inline-block;width:60px;height:60px"></div></a>&nbsp;
				<br>
                <a style="color:#23224c;text-decoration: none;cursor: pointer;touch-action: manipulation;position:relative;left:40px;margin-top:40px;background-color: transparent;font-weight: 200;" href="about.php">ABOUT</a> &nbsp;
                					<a   style="color:#23224c;text-decoration: none;cursor: pointer;position:relative;left:60px;margin-top:40px;touch-action: manipulation;background-color: transparent;font-weight: 200;" ><div id="connect" style="background:transparent;border-radius: 0%;box-shadow: 0 0 0px #a6bbb6;display: inline-block;width:60px;height:60px">CONTACT</div></a> &nbsp &nbsp;
                <a href="#" class="nav-item nav-link disabled" tabindex="-1"></a>
            </div>
            <div class="navbar-nav ml-auto">
			
							<ul class="test">
						<li style=" display: inline;margin-top:60px;">
						<a style=" margin-top:60px;"href="https://twitter.com/jessibaker" rel="noopener" target="_blank">
						<!--<div class="Svg Svg--social">-->
                            <svg style=" display: inline;position:relative;right:40px;margin-top:40px;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 50 50">
                               <path d="M44.884 14.804c.02.44.025.88.025 1.327 0 13.554-10.317 29.187-29.184 29.187-5.794 0-11.188-1.697-15.726-4.61.804.098 1.62.144 2.45.144 4.806 0 9.228-1.64 12.736-4.388-4.49-.083-8.277-3.048-9.58-7.124.623.12 1.27.185 1.93.185.934 0 1.84-.127 2.7-.36-4.693-.946-8.226-5.09-8.226-10.06v-.13c1.382.767 2.965 1.233 4.645 1.282-2.75-1.84-4.565-4.98-4.565-8.536 0-1.885.51-3.644 1.39-5.16C8.54 12.766 16.1 16.85 24.63 17.28c-.176-.75-.27-1.533-.27-2.338 0-5.666 4.594-10.257 10.258-10.257 2.95 0 5.62 1.245 7.492 3.236 2.335-.46 4.53-1.312 6.512-2.488-.765 2.396-2.393 4.406-4.51 5.676 2.073-.248 4.05-.8 5.89-1.617-1.377 2.06-3.114 3.864-5.116 5.314"/>
                          </svg>
                        <!--</div>-->
                          </a>
						  </li>
						  <li style=" display: inline">
						<a href="https://www.linkedin.com/in/jessibaker" rel="noopener" target="_blank">
						<!--<div class="Svg Svg--social">-->
                         <svg style=" display: inline;position:relative;right:40px;margin-top:40px;" height="20" viewBox="0 0 430.117 430.117" width="20" xmlns="http://www.w3.org/2000/svg">
                         <path d="M430.117 261.543V420.56h-92.188V272.193c0-37.271-13.334-62.707-46.703-62.707-25.473 0-40.632 17.142-47.301 33.724-2.432 5.928-3.058 14.179-3.058 22.477V420.56h-92.219s1.242-251.285 0-277.32h92.21v39.309c-.187.294-.43.611-.606.896h.606v-.896c12.251-18.869 34.13-45.824 83.102-45.824 60.673-.001 106.157 39.636 106.157 124.818zM52.183 9.558C20.635 9.558 0 30.251 0 57.463c0 26.619 20.038 47.94 50.959 47.94h.616c32.159 0 52.159-21.317 52.159-47.94-.606-27.212-20-47.905-51.551-47.905zM5.477 420.56h92.184V143.24H5.477v277.32z"/>
                       </svg>
                        <!--</div>-->
                       </a>
					   </li>
					   <li style=" display: inline">
                         <a href="https://instagram.com/dismasphilip" rel="noopener" target="_blank"><!--<div class="Svg Svg--social">-->
                      <svg style=" display: inline;position:relative;right:40px;margin-top:40px;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 50 50">
                        <path d="M43.182 0H6.818C3.058 0 0 3.06 0 6.818V43.18C0 46.94 3.06 50 6.818 50h36.364c3.76 0 6.818-3.058 6.818-6.817V6.82C50 3.058 46.94 0 43.182 0m2.273 6.818v7.508H34.093v-9.78h9.09c1.253 0 2.272 1.018 2.272 2.272M25 15.91c5.014 0 9.09 4.077 9.09 9.09 0 5.014-4.076 9.09-9.09 9.09s-9.09-4.076-9.09-9.09 4.076-9.09 9.09-9.09m18.182 29.544H6.818c-1.254 0-2.272-1.02-2.272-2.272V20.338h7.656c-.533 1.457-.838 3.022-.838 4.66 0 7.52 6.117 13.638 13.636 13.638 7.52 0 13.637-6.117 13.637-13.637 0-2.206-.538-4.283-1.472-6.13h8.29v24.31c0 1.256-1.02 2.274-2.273 2.274"/>
                               </svg>
                               <!--</div>-->
                            </a>
							</li>
				
					</ul>
            </div>
        </div>
    </nav>
</div>
<br>
	<br>
	<br>
	<br>
<div class="container" style="color:black ">
		<div class="row">
			<div clss="col-sm-2">
			</div>
			<div clss="col-sm-6">
				<h1 style=" padding-left:100px"><?php echo " About";?></h1>
			</div>
			<div clss="col-sm-6">
			</div>
		</div>
		<br>
		<br>
		
		
	 </div>
	
	<br>
	<br>
	<!--<div class="container" style="color: white; background-color:black;width:1300px">-->
		<div class="root"style=" background-color: transparent">
			<div class="main-branch" style=" background-color: transparent;color:#fff">
			<p class="text-justify  font-weight-light" style="font-weight: 100;max-width:100%;font-size: 0.8rem "><span style=""   >Francisco Kibasa is the founder of provenance.org. Provenance is a digital platform enabling producers, manufacturers and retailers to track the journey of people, places and ingredients behind their products. They use blockchain and smart tagging technologies to revolutionise supply chain transparency. With Provenance, businesses can drastically reduce risk in their supply chain and foster a new form of consumer trust.
				</span></p>
			
		
		
		<br>
		<br>
		
			
			<p class="text-justify  font-weight-light"  style="font-weight: 100;max-width:100%;font-size: 0.8rem"><span >The first to apply blockchain technology to supply chain in 2013, Provenance are now working with businesses in the UK and across global supply chains, including The Co-op supermarket, Sainsbury’s, Unilever, The World Bank, Greenpeace, organic certified farms across Europe and luxury brands in the fashion and food industries. They are a member of the Ellen MacArthur foundation CE100 &#8211; pioneering open traceability systems for a circular economy, and were featured in over 100 news titles in 2017.
				</span></p>
			
		
		
		<br>
		<br>
		
			<p  class="text-justify  font-weight-light"  style="font-weight: 100;max-width:100%;font-size: 0.8rem"><span >Jessi has a Master’s in Engineering (Cambridge University) and Design (Royal College of Art), she founded Provenance whilst doing a PhD in Computer Science (UCL). Across the US and Europe, she has worked with brands on technology and digital design strategy including Adidas, The Four Seasons, The Guggenheim, pop star Will.I.Am, British Airways and Louis Vuitton. She is an associate researcher at the Intel Institute for Sustainable Cities.
				</span></p>
			
		
		
		<br>
		<br>
		
	</div>
	<div class="branch1">
	</div>
    <div class="branch2">
     </div>
	</div>
	
	<!--PICHA--
	<div class="row">
			<div clss="col-sm-2">
			</div>
			<div clss="col-sm-6">
			<div class="container">
				<p>
				<img  src="images/bil.jpg" alt=""  width="640" height="527" style="width:90%;max-width:500px" class="img-fluid">
				</p>
				</div>
				</div>
			<div clss="col-sm-6">
			</div>
		</div>
	<!--&&&***-->
	<div class="banner">
  <div class="center-me">
				<img  src="images/bil.jpg" alt=""  width="640" height="527"  class="img-fluid">
				</div>
</div>
	
	</div>
	
	
	<!--SECOND-->
	<div id="second" class="call-outs-container"  >
  <div class="call-out" >
    <h4 style="color:#23224c">instagram</h4>
	 <aside id="custom_html-2" class="widget_text Widget widget_custom_html">
		   <div>
	       <section class="Social" >
	       <!--<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FBleacherReportFootball&amp;width=490&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=true&amp;header=true&amp;height=435" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:400px; height:500px; background: white; float:left; " allowTransparency="true"></iframe>-->
		   <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/18740cf79b03576084f06436c847f0c4.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
	      </section>
	     </div>
	   </aside>
   
  </div>

  <div class="call-out" >
    <h4></h4>
	 <aside id="custom_html-2" class="widget_text Widget widget_custom_html">
		<h1 class="Widget-title"></h1>
		<div class="textwidget custom-html-widget">
		<a class="twitter-timeline" href="https://twitter.com/jessibaker" data-chrome="noheader nofooter noborders transparent" data-tweet-limit="1">Tweets by Jessi Baker</a> 
		<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
		</aside>
    		    
  </div>

  <div class="call-out" >
    
   <h4 style="color:#23224c" class="Widget-title">Work with Francisco</h4>			
<p  class="text-justify  font-weight-light"  style="font-weight: 100;max-width:100%;font-size: 0.8em;color:#23224c; padding-right:0px">If you have a problem you think my team and I can help solve we&#8217;d love to hear from you. I am also sometimes available to give talks and assemble bespoke teams from my network for short consulting projects. Note all work with Jessi Baker, her team and network is currently conducted through Provenance.</p>


 
	    
  </div>
</div>

<!--THIRD-->
	<div id="third" class="mzazi " >
  <div class="kaka1">
    
    <img src="images/dis.png"  alt=""  max-width="120px" height="120px" style="border-radius: 50%">
			<br>
			<br>
			<h2 class="Contact-heading">CONTACT</h2>

      
			<p class="Contact-copy"><a style="text-decoration:underline"href="mailto:jessi@jessibaker.com">jessi@jessibaker.com</a></p>

			<h2 class="Contact-heading">CONNECT</h2>
			
			<br>
			<ul class="test">
						<li>
						<a href="https://twitter.com/jessibaker" rel="noopener" target="_blank">
						<!--<div class="Svg Svg--social">-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 50 50">
                               <path d="M44.884 14.804c.02.44.025.88.025 1.327 0 13.554-10.317 29.187-29.184 29.187-5.794 0-11.188-1.697-15.726-4.61.804.098 1.62.144 2.45.144 4.806 0 9.228-1.64 12.736-4.388-4.49-.083-8.277-3.048-9.58-7.124.623.12 1.27.185 1.93.185.934 0 1.84-.127 2.7-.36-4.693-.946-8.226-5.09-8.226-10.06v-.13c1.382.767 2.965 1.233 4.645 1.282-2.75-1.84-4.565-4.98-4.565-8.536 0-1.885.51-3.644 1.39-5.16C8.54 12.766 16.1 16.85 24.63 17.28c-.176-.75-.27-1.533-.27-2.338 0-5.666 4.594-10.257 10.258-10.257 2.95 0 5.62 1.245 7.492 3.236 2.335-.46 4.53-1.312 6.512-2.488-.765 2.396-2.393 4.406-4.51 5.676 2.073-.248 4.05-.8 5.89-1.617-1.377 2.06-3.114 3.864-5.116 5.314"/>
                          </svg>
                        <!--</div>-->
                          </a>
						  </li>
						  <li>
						<a href="https://www.linkedin.com/in/jessibaker" rel="noopener" target="_blank">
						<!--<div class="Svg Svg--social">-->
                         <svg height="20" viewBox="0 0 430.117 430.117" width="20" xmlns="http://www.w3.org/2000/svg">
                         <path d="M430.117 261.543V420.56h-92.188V272.193c0-37.271-13.334-62.707-46.703-62.707-25.473 0-40.632 17.142-47.301 33.724-2.432 5.928-3.058 14.179-3.058 22.477V420.56h-92.219s1.242-251.285 0-277.32h92.21v39.309c-.187.294-.43.611-.606.896h.606v-.896c12.251-18.869 34.13-45.824 83.102-45.824 60.673-.001 106.157 39.636 106.157 124.818zM52.183 9.558C20.635 9.558 0 30.251 0 57.463c0 26.619 20.038 47.94 50.959 47.94h.616c32.159 0 52.159-21.317 52.159-47.94-.606-27.212-20-47.905-51.551-47.905zM5.477 420.56h92.184V143.24H5.477v277.32z"/>
                       </svg>
                        <!--</div>-->
                       </a>
					   </li>
					   <li>
                         <a href="https://instagram.com/jessilbaker" rel="noopener" target="_blank"><!--<div class="Svg Svg--social">-->
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 50 50">
                        <path d="M43.182 0H6.818C3.058 0 0 3.06 0 6.818V43.18C0 46.94 3.06 50 6.818 50h36.364c3.76 0 6.818-3.058 6.818-6.817V6.82C50 3.058 46.94 0 43.182 0m2.273 6.818v7.508H34.093v-9.78h9.09c1.253 0 2.272 1.018 2.272 2.272M25 15.91c5.014 0 9.09 4.077 9.09 9.09 0 5.014-4.076 9.09-9.09 9.09s-9.09-4.076-9.09-9.09 4.076-9.09 9.09-9.09m18.182 29.544H6.818c-1.254 0-2.272-1.02-2.272-2.272V20.338h7.656c-.533 1.457-.838 3.022-.838 4.66 0 7.52 6.117 13.638 13.636 13.638 7.52 0 13.637-6.117 13.637-13.637 0-2.206-.538-4.283-1.472-6.13h8.29v24.31c0 1.256-1.02 2.274-2.273 2.274"/>
                               </svg>
                               <!--</div>-->
                            </a>
							</li>
				
					</ul>
			<br>
			<h2 class="Contact-heading">Newsletter</h2>
			<p   style="color:#23224c" class="Contact-copy Contact-copy--tightMargin">Sign up to my annual newsletter</p>
			<br>
			<div class="Contact-newsletter">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="Form js-mailchimp" method="post" name="mc-embedded-subscribe-form" novalidate>
				
				
				<div class="Form-group">
				<small class="text-danger" ><?php echo $emailEr;?></small>
              <input class="Form-control" name="email" placeholder="Enter your email..." type="email" value="">
              <input  class="Form-button Form-button--icon Form-button--iconEmail" name="subscribe" type="submit" value="Subscribe">
            </div>
            <div class="Form-message"></div>
				</form>
			</div>
			
  </div>

  <div class="dada1">
    
  </div>

  <div class="dada2">
    
  </div>
</div>
<div id="fourth" class="mama">
  <div class="mtoto1">
   
    <footer class="Footer" role="contentinfo">
		<div class="Footer-container">

			<div class="Footer-colophon">
        <a href="https://www.jessibaker.com/" rel="home">
				<div id="box" style="background:#9cf4df;border-radius: 50%;box-shadow: 0 0 2px #a6bbb6;display: inline-block;width:60px;height:60px;position:relative;top:10px"></div>
        </a>
				<div class="Footer-content"style="position:relative;top:20px">
          <p style="color:#23224c;max-width:100vw;font-weight:100">&copy; Jessi Baker 2019</p>
		  <br>
		  <br>
				</div>
			</div>

		</div>
		</footer>
  </div>

  <div class="mtoto2">
    
   
  </div>

  <div class="mtoto3">
    
    
  </div>
   </div>
	
	
	
	
	




	
    <!-- jQuery first, then Tether, then Bootstrap JS. --
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>-->
	<script src="js/jquery3.js"></script>
	<script src="js/behave.js"></script>
  </body>
</html>