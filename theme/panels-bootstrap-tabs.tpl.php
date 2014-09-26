<?php
/**
 * @file panels-bootstrap-tabs.tpl.php
 */
?>

<ul class="<?php print $tab_classes; ?>">
  <?php foreach($tab_titles as $tab_title) : ?>
    <?php print $tab_title; ?>
  <?php endforeach ?>
</ul>

<div class="tab-content">
  <?php foreach($tab_panes as $tab_pane) : ?>
    <?php print $tab_pane; ?>
  <?php endforeach ?>
</div>