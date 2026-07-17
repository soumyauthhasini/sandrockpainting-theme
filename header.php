<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

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
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/default.css?v=<?php echo filemtime(get_template_directory() . '/assets/css/default.css'); ?>" type="text/css" media="all">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/lightbox.css?v=2" rel="stylesheet">

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
<!-- <script>
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
      </script>  -->
<!-- end ElfSight script call for Google reviews -->
<?php wp_head();?>
</head>
<body>
<!-- start header navbar section =========================================================================================================== -->
<header class="container-fluid">
  <div class="ms-xl-5 me-xl-5">
    <div class="row">
      <?php if(!empty(get_field('header_logo', 'option'))):?>
      <div class="col-lg-3 col-xxl-2 headerLogo">
        <a href="<?=esc_url(home_url('/'));?>">
          <img src="<?=get_field('header_logo', 'option')['url']?>" alt="<?=get_field('header_logo', 'option')['alt']?>" />
        </a>
      </div>
      <?php endif; ?>
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
                    'link_class'     => 'nav-link',
                      'depth'          => 2,
                    )); 
                ?>
              </ul>
            </div>
          </div>
        </nav>
        <!-- end navbar -->
      </div>
      <?php if(!empty(get_field('phone_no', 'option'))):?>
      <div class="col-lg-9 col-xxl-2 headerPhone order-lg-2 order-xxl-3">
        <a href="<?=get_field('phone_no', 'option')['url']?>"><i class="bi bi-telephone-fill"></i> <?=get_field('phone_no', 'option')['title']?></a>
      </div>
      <?php endif; ?>
    </div>
  </div>
</header>
<!-- end header navbar section =========================================================================================================== --> 
<!-- star hero =========================================================================================================== -->