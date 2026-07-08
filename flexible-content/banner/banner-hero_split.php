<?php
if(!empty($args)): 
    extract($args);
?>
<section class="heroSplit container-fluid">
    <div class="row">
        <?php if(!empty($banner_image)){?>
            <div class="col-md-6 heroLeft" style="background-image: url('<?= esc_url($banner_image['url']); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="textHolder col-md-8">
                    <?php if($heading){ ?>
                        <p><?=$heading;?></p>
                    <?php } ?>
                    <?php if($banner_subtitle){ ?>
                    <p> <?=$banner_subtitle; ?></p>
                    <?php } ?>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start col-8"> 
                        <?php
                            if(!empty($args['cta_one'])):
                                echo customCta($args['cta_one'], 'btn btn-sm me-md-2');
                            endif;
                            if(!empty($args['cta_two'])):
                                echo customCta($args['cta_two'], 'btn btn-sm');
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if(!empty($extra_banner_image)){?>
            <div class="col-md-6 heroRight" style="background-image: url('<?= esc_url($extra_banner_image['url']); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="textHolder col-md-8">
                    <?php if($description != ''){ echo $description; } ?>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start col-8"> 
                        <?php
                            if(!empty($args['cta_three'])):
                                echo customCta($args['cta_three'], 'btn btn-sm me-md-2');
                            endif;
                            if(!empty($args['cta_four'])):
                                echo customCta($args['cta_four'], 'btn btn-sm');
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</section>
<?php endif; ?>