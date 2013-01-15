<!DOCTYPE HTML>             
  <head>                   
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />		                    
    <title>PSI WebTech                    
    </title>		                    
    <meta name="description" content="" />		                    
    <meta name="keywords" content="" />		                    
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
        <h1 id="logo" class="col span_4">					                                            
          <img src="assets/images/logo-large.png" alt="PSI WebTech" />
        </h1>				                                    
        <!-- telephone number -->    				                                    
        <p class="fl_right tel_number" class="col span_8">					                                            
          <a href="mailto:info@psiwebtech.co.uk?Subject=Web%20Contact">info@psiwebtech.co.uk</a> | 020 9999 9999 				                                    
        </p>	
      </header>	
      
      <!--Navigation -->                          
      <?php  
          require_once("resources/templates/navigation.php");  
      ?>                            			                            
  		
      <!-- rotating images-->                     
      <?php  
          require_once("resources/templates/header-images.php");  
      ?>       

      <!-- content-->                     
      <?php  
          require_once("resources/templates/content.php");  
      ?>       
                                
      
    <!--Services-->			                            
    <?php  
        require_once("resources/templates/services.php");  
    ?>  
                                      
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
  </body>
</html>