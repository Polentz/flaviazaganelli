<?= snippet('header') ?>
<?php foreach($pages->template('project')->listed() as $project) : ?>
    <?= snippet('project', ['project' => $project]) ?>
<?php endforeach ?>
<?= snippet('contact') ?>
<?= snippet('calendar') ?>
<?= snippet('submenu') ?>
<?= snippet('background') ?>
<?= snippet('footer') ?>