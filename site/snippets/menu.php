<?php
// main menu items
$items = $pages->listed();
// only show the menu if items are available
if($items->isNotEmpty()):

?>
<nav>
  <ul id="menu">
    <?php foreach($items as $item): ?>
    <li class="targetable"><a <?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
    <?php endforeach ?>
  </ul>
</nav>
<?php endif ?>