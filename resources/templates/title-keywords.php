<?php
  $pageTitle="";
  $metaKeywords="";
  $metaDescription="";

  if (isset($_GET['page']))
  {
      switch ($_GET['page'])
      {
          case 'about' :
            $pageTitle="PSI WebTech - About Us";
            $metaKeywords="IT Consulting, IT Infrasstructure, Delivery, Telecoms, Project Support, Technical Consultancy, Strategic Consultancy, Application Support, Remote Desktop Support, Desktop Support, Managed Services, Infrastructure Security, Break/Fix, Remote Working, Cloud Solutions, Cloud, Cloud Services, Procurement";
            $metaDescription="PSI WebTech is a provider of strategic and techncial consultancy, project support, remote desktop monitoring and support, procurement and cloud management services. At PSI, we�re truly focused on understanding and meeting client needs, with our longstanding expertise and vendor independence underpinning our pioneering worldwide services.";
          break; 
                  
          case 'services' :
            $pageTitle="PSI WebTech - Our Services";
            $metaKeywords="IT Consulting, IT Infrasstructure, Delivery, Telecoms, Project Support, Technical Consultancy, Strategic Consultancy, Application Support, Remote Desktop Support, Desktop Support, Managed Services, Infrastructure Security, Break/Fix, Remote Working, Cloud Solutions, Cloud, Cloud Services, Procurement";
            $metaDescription="PSI WebTech is a provider of strategic and techncial consultancy, project support, remote desktop monitoring and support, procurement and cloud management services. At PSI, we�re truly focused on understanding and meeting client needs, with our longstanding expertise and vendor independence underpinning our pioneering worldwide services.";
          break;

          case 'careers' :
            $pageTitle="PSI WebTech - Work for Us";
            $metaKeywords="IT Consulting, IT Infrasstructure, Delivery, Telecoms, Project Support, Technical Consultancy, Strategic Consultancy, Application Support, Remote Desktop Support, Desktop Support, Managed Services, Infrastructure Security, Break/Fix, Remote Working, Cloud Solutions, Cloud, Cloud Services, Procurement";
            $metaDescription="PSI WebTech is a provider of strategic and techncial consultancy, project support, remote desktop monitoring and support, procurement and cloud management services. At PSI, we�re truly focused on understanding and meeting client needs, with our longstanding expertise and vendor independence underpinning our pioneering worldwide services.";
          break;
          
          case 'contact' :
            $pageTitle="PSI WebTech - Contact Us";
            $metaKeywords="IT Consulting, IT Infrasstructure, Delivery, Telecoms, Project Support, Technical Consultancy, Strategic Consultancy, Application Support, Remote Desktop Support, Desktop Support, Managed Services, Infrastructure Security, Break/Fix, Remote Working, Cloud Solutions, Cloud, Cloud Services, Procurement";
            $metaDescription="PSI WebTech is a provider of strategic and techncial consultancy, project support, remote desktop monitoring and support, procurement and cloud management services. At PSI, we�re truly focused on understanding and meeting client needs, with our longstanding expertise and vendor independence underpinning our pioneering worldwide services.";
          break;
                                          
          default:
            $pageTitle="PSI WebTech - Consulting, IT Infrastructure and Support Services";
            $metaKeywords="IT Consulting, IT Infrasstructure, Delivery, Telecoms, Project Support, Technical Consultancy, Strategic Consultancy, Application Support, Remote Desktop Support, Desktop Support, Managed Services, Infrastructure Security, Break/Fix, Remote Working, Cloud Solutions, Cloud, Cloud Services, Procurement";
            $metaDescription="PSI WebTech is a provider of strategic and techncial consultancy, project support, remote desktop monitoring and support, procurement and cloud management services. At PSI, we�re truly focused on understanding and meeting client needs, with our longstanding expertise and vendor independence underpinning our pioneering worldwide services.";            
      }
  }
  else
  {
    $pageTitle="PSI WebTech - Consulting, IT Infrastructure and Support Services";
    $metaKeywords="IT Consulting, IT Infrasstructure, Delivery, Telecoms, Project Support, Technical Consultancy, Strategic Consultancy, Application Support, Remote Desktop Support, Desktop Support, Managed Services, Infrastructure Security, Break/Fix, Remote Working, Cloud Solutions, Cloud, Cloud Services, Procurement";
    $metaDescription="PSI WebTech is a provider of strategic and techncial consultancy, project support, remote desktop monitoring and support, procurement and cloud management services. At PSI, we�re truly focused on understanding and meeting client needs, with our longstanding expertise and vendor independence underpinning our pioneering worldwide services.";
  }
 
?>

<title><?php echo $pageTitle ?></title>		                    
    
<meta name="description" content="<?php echo $metaDescription ?>" />		                    
<meta name="keywords" content="<?php echo $metaKeywords ?>" />	
<meta name="google-site-verification" content="bh5V6D4p5NyRshwydB8fvLVBs3dcSPIK1z0ETxLW2Dk" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
