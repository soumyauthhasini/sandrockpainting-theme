<?php
if(!empty($args)): 
    extract($args);
?>
    <section class="hero container-fluid">
        <div class="textHolder col-md-8">
            <?php if($heading){ ?>
                <p><?=$heading;?></p>
            <?php } ?>
            <?php if($banner_subtitle){ ?>
                <p><?=$banner_subtitle;?></p>
             <?php } if(!empty($args['cta_one']) || !empty($args['cta_two'])):?>
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
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>