<?php
if(!empty($args)): 
    extract($args);
?>
  <section class="cta container-fluid">
      <?php if (!empty($args['title'])) : ?>
          <p><?= esc_html($args['title']); ?></p>
      <?php endif; ?>

      <?php if (!empty($args['subtitle'])) : ?>
          <p><?= wp_kses_post($args['subtitle']); ?></p>
      <?php endif; ?>
      <?php if ($args['description'] != '') { echo $args['description']; } ?>

      <?php if (!empty($args['cta_button_one'])) : ?>
          <p>
              <?= customCta($args['cta_button_one'], 'btn'); ?>
          </p>
      <?php endif; ?>
  </section>
  <?php if (!empty($cta_button_two)) : ?>
    <section class="behindBanner container-fluid">
      <p>
          <?= customCta($cta_button_two, 'btn'); ?>
      </p>
    </section>
  <?php endif; ?>
<?php endif; ?>