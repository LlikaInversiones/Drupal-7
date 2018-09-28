<?php if ($page): ?>
<div class="node-full <?php print $type; ?>-full">
  <div class="content">
    <?php
      hide($content['links']);
      print render($content);
    ?>
  </div>
</div>
<?php else: ?>
<div class="node-teaser <?php print $type; ?>-teaser">
  
</div>
<?php endif; ?> 