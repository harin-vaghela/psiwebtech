<?php
  if (isset($_GET['page']))
  {
      switch ($_GET['page'])
      {
          case 'about' :
          require_once("resources/templates/content-about.php");
          break; 
                  
          case 'services' :
          require_once("resources/templates/content-services.php");
          break;

          case 'careers' :
          require_once("resources/templates/content-careers.php");
          break;
          
          case 'contact' :
          require_once("resources/templates/content-contact.php");
          break;
          
          case 'terms' :
          require_once("resources/templates/content-terms.php");
          break;
          
          case 'privacy' :
          require_once("resources/templates/content-privacy.php");
          break;
                                                              
          default:
          echo $_GET['page'];          
      }
  }
?>