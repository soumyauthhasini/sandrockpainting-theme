<?php
if(!empty($args)): 
    extract($args);
?>
<section class="heroSplit container-fluid">
    <div class="row">
        <div class="col-md-6 heroLeft">
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
        <div class="col-md-6 heroRight">
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
    </div>
</section>
<?php endif; ?>