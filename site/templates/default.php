<?php snippet('header') ?>
<?php snippet('navigation') ?>
<?php snippet('menu') ?>

<section class="main" data-barba="container" data-barba-namespace="<?= $page->title()->html() ?>">
  <h1><?= $page->title()->html() ?>
  </h1>
  <p><?= $page->text() ?></p>
</section>

<?php snippet('footer') ?>
