<?= snippet('header') ?>

<?php foreach($pages->template('project')->listed() as $project) : ?>
    <?= snippet('project', ['project' => $project]) ?>
<?php endforeach ?>


<?= snippet('contact') ?>
<?= snippet('calendar') ?>
<?= snippet('projects-menu') ?>
<div class="background">
    <svg viewBox="0 0 1139 841" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_f_149_272)">
            <circle cx="560.5" cy="325.5" r="125.5" fill="" fill-opacity="0.9"/>
        </g>
        <g filter="url(#filter1_f_149_272)">
            <circle cx="335" cy="541" r="135" fill="" fill-opacity="0.9"/>
        </g>
        <g filter="url(#filter2_f_149_272)">
        <circle cx="848.127" cy="303.127" r="90.1274" fill="" fill-opacity="0.85"/>
        </g>
        <defs>
            <filter id="filter0_f_149_272" x="235" y="0" width="651" height="651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_149_272"/>
            </filter>
            <filter id="filter1_f_149_272" x="0" y="206" width="670" height="670" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_149_272"/>
            </filter>
            <filter id="filter2_f_149_272" x="558" y="13" width="580.255" height="580.255" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_149_272"/>
            </filter>
        </defs>
    </svg>
</div>
<?= snippet('footer') ?>