

<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h1<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
  <?php else: ?>
    <h1<?php print $title_attributes; ?>><?php print $title; ?></h1>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
    <section>

        <?php if (render($content['field_page_bild'])): ?>
          <div class="img-block">
            <?php print render($content['field_page_bild']); ?>
          </div>
        <?php endif; ?>

        <?php print render($content['field_page_inhalt']); ?>
        
        <?php if (render($content['webform'])): ?>
          <div class="form-wrapper">
            <?php print render($content['webform']); ?>
          </div>
        <?php endif; ?>
    </section>
  </article>