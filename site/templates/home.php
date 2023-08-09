<?= snippet('header') ?>
<?= snippet('contact') ?>
<?= snippet('calendar') ?>
<?= snippet('projects-menu') ?>
<?php foreach($pages->template('project')->listed() as $project) : ?>
    <?= snippet('project', ['project' => $project]) ?>
<?php endforeach ?>
<?= snippet('footer') ?>