<?php
if (!empty($args)) :
    extract($args);
?>

<section class="content interior container-fluid">
		<div class="col-md-10 mx-auto">
            <?php if ($heading != '') : ?>
			    <h1><?=$heading;?></h1>
            <?php endif; ?>
            <?php if ($subheading != '') : ?>
			    <h2><?=$subheading;?></h2>
            <?php endif; ?>
			<div class="line">&nbsp;</div>
            <?php 
                if ($description != '') : 
                    echo $description;
                endif;
                if(!empty($gallery_images)):
            ?>
                <div class="d-flex justify-content-center flex-wrap gallery">
                    <?php foreach ($gallery_images as $item) : ?>
                        <a href="<?=$item['url'];?>" data-lightbox="Commercial">
                            <img src="<?=$item['url'];?>" class="img-fluid">
                        </a>
                    <?php endforeach; ?>

                </div>
            <?php endif; ?>
	</section>
<?php endif; ?>