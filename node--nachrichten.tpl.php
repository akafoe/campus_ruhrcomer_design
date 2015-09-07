

<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h1<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
  <?php else: ?>
    <h1<?php print $title_attributes; ?>><?php print $title; ?></h1>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
    <section>

      <?php if (!$page): // Frontpage --> Teaser?>

        <div class="img-block">
          <?php print render($content['field_news_bild']); ?>
          <?php if ($display_submitted): ?>
            <span><?php print $date; ?></span>
          <?php endif; ?>
        </div>

        <p>
          <?php print render($content['field_news_teaser']); ?>    
          <a href="<?php print $node_url; ?>" class="more">Weiterlesen</a>
        </p>

      <?php else: // Node --> Full Content?>

        <div class="img-block">
          <?php print render($content['field_news_bild']); ?>
          <?php if ($display_submitted): ?>
            <span><?php print $date; ?></span>
          <?php endif; ?>
        </div>

        <p><?php print render($content['field_news_teaser']); ?></p>

        <?php print render($content['field_news_text']); ?>

      <?php endif; ?>
    </section>
  </article>