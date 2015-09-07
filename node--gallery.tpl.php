
<article id="node-<?php print $node->nid; ?>" class="gallery <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h1<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
  <?php else: ?>
    <h1<?php print $title_attributes; ?>><?php print $title; ?></h1>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
    <section>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
    

  </article>