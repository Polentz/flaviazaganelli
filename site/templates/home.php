<?= snippet('header') ?>
<?php foreach($pages->template('project')->listed() as $project) : ?>
    <?= snippet('project', ['project' => $project]) ?>
<?php endforeach ?>
<?= snippet('contact') ?>
<?= snippet('calendar') ?>
<?= snippet('projects-menu') ?>
<?= snippet('background') ?>
<?= snippet('footer') ?>