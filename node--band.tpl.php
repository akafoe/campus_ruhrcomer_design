<article id="node-<?php print $node->nid; ?>" class="band <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>

  <?php if (!$page): ?>
    <h1<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
  <?php else: ?>
    <h1<?php print $title_attributes; ?>><?php print $title; ?></h1>
  <?php endif; ?>

  <?php print render($title_suffix); ?>
    <section>

        <div class="img-block clearfix">
          <?php print render($content['field_band_foto']); ?>
          <?php if ($display_submitted): ?>
            <span><?php print $date; ?></span>
          <?php endif; ?>
        </div>


        


        <?php if ($field_band_link_homepage || $field_band_link_facebook || $field_band_link_myspace || $field_band_link_bandcamp || $field_band_link_soundcloud) { ?>
        <div>
          <div class="span10"><?php print render($content['field_band_beschreibung']); ?></div>

          <div class="span2">
            <ul class="social-links">
              <?php if ($field_band_link_homepage): ?><li><?php print render($content['field_band_link_homepage']); ?></li><?php endif; ?>
              <?php if ($field_band_link_facebook): ?><li><?php print render($content['field_band_link_facebook']); ?></li><?php endif; ?>
              <?php if ($field_band_link_myspace): ?><li><?php print render($content['field_band_link_myspace']); ?></li><?php endif; ?>
              <?php if ($field_band_link_bandcamp): ?><li><?php print render($content['field_band_link_bandcamp']); ?></li><?php endif; ?>
              <?php if ($field_band_link_soundcloud): ?><li><?php print render($content['field_band_link_soundcloud']); ?></li><?php endif; ?>
            </ul>
          </div>
        </div>
        <?php } else { ?>
        <p><?php print render($content['field_band_beschreibung']); ?></p>
        <?php } ?>

</article>