<?php snippet('header') ?>
<?php snippet('navigation') ?>
<?php snippet('menu') ?>

<section class="main" data-barba="container" data-barba-namespace="<?= $page->title()->html() ?>">
<ul class="projects">
    <?php foreach ($page->children()->listed() as $project): ?>
    <li>
      <a href="<?= $project->url() ?>">
        <?= $project->image() ?>
        <?= $project->title() ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</section>

<?php snippet('footer') ?>
