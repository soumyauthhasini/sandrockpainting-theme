<?php
if(!empty($args)): 
    extract($args);
?>
<section class="content index container-fluid normal-single-content">
    <div class="col-md-7 mx-auto">
        <?php if($title){ ?>
            <h2><?=$title;?></h2>
        <?php } ?>
        <div class="line">&nbsp;</div>
        <?=$description;?>
        <?php if($subtitle != '' ){?><p class="callout"> <?=$subtitle;?></p><?php } ?>
        <?=$description_two;?>
    </div>
</section>
<?php endif; ?>
