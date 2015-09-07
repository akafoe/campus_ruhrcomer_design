

<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> <?php if (!empty($content['field_location_fotos'])): ?>gallery<?php endif; ?> clearfix"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h1<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
  <?php else: ?>
    <h1<?php print $title_attributes; ?>><?php print $title; ?></h1>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
    <section>

        <div class="img-block">
          <?php print render($content['field_location_logo']); ?>
        </div>

        <?php print render($content['field_location_beschreibung']); ?>

        <?php print render($content['field_location_fotos']); ?>

        <?php print render($content['field_location_adresse']); ?>
    </section>
  </article>