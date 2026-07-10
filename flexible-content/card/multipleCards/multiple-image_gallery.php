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
                if(!empty($gallery_image)):
            ?>
                <div class="d-flex justify-content-center flex-wrap gallery">
                    <?php foreach ($gallery_image as $item) : ?>
                        <a href="<?=$item['preview_image']['url'];?>" data-lightbox="Commercial">
                            <img src="<?=$item['list_image']['url'];?>" class="img-fluid">
                        </a>
                    <?php endforeach; ?>

                </div>
            <?php endif; ?>
	</section>
<?php endif; ?>