<?php snippet('header') ?>
<?php snippet('navigation') ?>
<?php snippet('menu') ?>

<section class="main" data-barba="container" data-barba-namespace="<?= $page->title()->html() ?>">
<h2><?= $page->headline()?></h2>
<ul class="gallery">
    <?php foreach ($page->images() as $image): ?>
    <li>
        <?= $image ?>
    </li>
    <?php endforeach ?>
  </ul>

  <?php if($next = $page->nextListed()): ?>
    <a href="<?= $next->url() ?>"><?= $next->headline() ?></a>
  <?php elseif ($prev = $page->prevListed()): ?>
    <a href="<?= $prev->url() ?>"><?= $prev->headline() ?></a>
  <?php endif ?>
</section>


<?php snippet('footer') ?>
