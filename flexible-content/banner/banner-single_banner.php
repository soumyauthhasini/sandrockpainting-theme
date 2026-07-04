<?php
if (!empty($args)):
    extract($args);
    if(!empty($banner_image)):
?>

<section
    class="titleBar container-fluid"
    style="background-image: url('<?= esc_url($banner_image['url']); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <?php if($heading){?>
        <div class="overlay">
            <?= $heading; ?>
        </div>
    <?php } ?>
</section>

<?php endif; endif; ?>