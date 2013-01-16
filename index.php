<!DOCTYPE HTML>             
  <head>                   
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />		                    
    <?php  
          require_once("resources/templates/title-keywords.php");  
    ?>   

    <link rel="stylesheet" media="all" href="assets/css/ie.css" />		                                   
    <link rel="stylesheet" media="all" href="assets/css/reset.css" />		                    
    <link rel="stylesheet" media="all" href="assets/css/responsive-gs-12col.css" />		
    
    <!--Styles for Slider-->
    <link rel="stylesheet" href="assets/js/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/js/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/js/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/js/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/js/nivo-slider.css" type="text/css" media="screen" />                              
  </head>	            
  <body id="body">		                    
    <div id="black_bar"></div>		                    
    <div class="container">			 			                            
      <!--logo, nav and contact -->
      <header id="header_nav" class="row span_12">				                                    
        <!-- logo -->    				                                    
        <h1 id="logo" class="col span_4 clear">					                                            
          <img src="assets/images/logo-large.png" alt="PSI WebTech" />
        </h1>				                                    
        <!-- telephone number -->    	
        <div class="col span_8 clear">			                                    
          <p class="fl_right tel_number">					                                            
            <a href="mailto:info@psiwebtech.co.uk?Subject=Web%20Contact">info@psiwebtech.com</a> | 020 9999 9999 				                                    
          </p>	
        </div>
      </header>	
      
      <!--Navigation -->                            
      <?php  
          require_once("resources/templates/navigation.php");  
      ?>                                      			                            
		
      <!-- rotating images-->                     
      <?php  
          require_once("resources/templates/header-images.php");  
      ?>       
      
      <!--Content Home -->                   
      <?php  
          require_once("resources/templates/content-home.php");  
      ?>   
      
      <!--Services-->			                            
      <?php  
          require_once("resources/templates/services.php");  
      ?>
        
      <!-- Updates    
      <?php  
          require_once("resources/templates/updates.php");  
      ?>                                      
      -->
          		                    
      </div>                   
      <!-- Footer -->   
      <?php  
          require_once("resources/templates/footer.php");  
      ?>  
        
      <!--JS for Slider   -->
      <script type="text/javascript" src="assets/js/jquery-1.7.1.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery.nivo.slider.js"></script>
      <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
      </script>        
      <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-37719433-1']);
        _gaq.push(['_trackPageview']);
      
        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
      
      </script>    
  </body>
</html>