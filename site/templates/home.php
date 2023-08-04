<?= snippet('header') ?>
<?= snippet('contact') ?>
<?= snippet('calendar') ?>
<?= snippet('projects-menu') ?>
<?php foreach($page->children()->listed() as $project) : ?>
    <?= snippet('project', ['project' => $project]) ?>
<?php endforeach ?>
<?= snippet('footer') ?>