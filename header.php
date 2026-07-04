<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Northeast Ohio House Painting | Sandrock Painting</title>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RSMLFP6LFY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RSMLFP6LFY');
</script><meta name="description" content="At Sandrock Painting in Northeast Ohio, we maintain an unwavering commitment to providing premier-quality, interior and exterior house painting.">
<link rel="canonical" href="https://www.sandrockpainting.com" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=get_template_directory_uri();?>/assets/css/default.css" rel="stylesheet">

<!-- start structured data --> 
<script type="application/ld+json">
{
	"@context": "http://schema.org/",
	"@type": "HousePainter",
	"name": "Sandrock Painting",
	"image": "https://sandrockpainting.com/photos/backHero.webp",
	"priceRange": "$$-$$$",
	"telephone": "440-522-5822",
	"url": "https://sandrockpainting.com",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "795 Sharon Dr. Suite 201",
		"addressLocality": "Westlake",
		"addressRegion": "Ohio",
		"postalCode": "44145",
		"addressCountry": "United States"
	},
	"openingHoursSpecification": [
		{
			"@type": "OpeningHoursSpecification",
			"dayOfWeek": ["Sunday","Monday", "Tuesday", "Wednesday", "Thursday", "Friday","Saturday"],
			"opens": "07:00",
			"closes": "18:00"
		}
	],
	"sameAs": ["https://www.facebook.com/SandrockPaintingCLE/"]
}
</script> 
<!-- end structured data --> 

<!-- start ElfSight script call for Google reviews --> 
<script>
      javascript_deferred.prototype[get_deferred_id()] = function() {
        $.getScript('https://apps.elfsight.com/p/platform.js');
      }
      javascript_deferred.prototype[get_deferred_id()] = function() {
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TX59QH8');
      }
      </script> 
<!-- end ElfSight script call for Google reviews -->
<?php wp_head();?>
</head>
<body>
<!-- start header navbar section =========================================================================================================== -->
<header class="container-fluid">
  <div class="ms-xl-5 me-xl-5">
    <div class="row">
      <div class="col-lg-3 col-xxl-2 headerLogo">
        <a href="<?=esc_url(home_url('/'));?>"><img src="<?=get_template_directory_uri();?>/assets/graphics/logoSandrock.webp" alt="Sandrock Painting logo" /></a>
      </div>
      <div class="col-lg-12 col-xxl-8 headerNav order-lg-3 order-xxl-2">
        <!-- start navbar -->
        <nav class="navbar navbar-expand-lg navbar-light" aria-label="Main Navbar">
          <div class="container-fluid">
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMain">
              <ul class="navbar-nav ms-auto mx-lg-auto mb-2 mb-md-0">
                <?php wp_nav_menu( 
                  array(
                    'menu' => 'header_nav' , 
                    'container' => '' , 
                    'items_wrap' => '%3$s', 
                    'li_class'  => 'nav-item',
                    'link_class'     => 'nav-link'
                    )); 
                ?>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="index">Home</a>header_nav
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Residential</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="residential-interior-painting.php">Residential Interior Painting</a></li>
                    <li><a class="dropdown-item" href="residential-exterior-painting.php">Residential Exterior Painting</a></li>
                    <li><a class="dropdown-item" href="cabinet-refinishing.php">Cabinet Refinishing</a></li>
                    
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Commercial</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="commercial-interior-painting.php">Commercial Interior Painting</a></li>
                    <li><a class="dropdown-item" href="commercial-exterior-painting.php">Commercial Exterior Painting</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="reviews.php">Reviews</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="careers.php">Careers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li> -->
              </ul>
            </div>
          </div>
        </nav>
        <!-- end navbar -->
      </div>
      <div class="col-lg-9 col-xxl-2 headerPhone order-lg-2 order-xxl-3">
        <a href="tel:4404659395"><i class="bi bi-telephone-fill"></i> 440-465-9395</a>
      </div>
    </div>
  </div>
</header>
<!-- end header navbar section =========================================================================================================== --> 
<!-- star hero =========================================================================================================== -->