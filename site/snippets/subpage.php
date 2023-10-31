<section class="subpage close <?=$subpage->title()->slug() ?>">
    <div class="subpage-wrapper">
        <div class="subpage-cover">
            <?php if ($image = $subpage->cover()->toFile() ) : ?>
                <figure>
                    <img src="<?= $image->resize(1200, null)->url() ?>" alt="<?= $image->alt() ?>">
                    <?php if($image->caption()->isNotEmpty()) : ?>
                        <figcaption>
                            <?= $image->caption()->kt() ?>
                        </figcaption>
                    <?php endif ?>
                </figure>
            <?php endif ?>
        </div>
        <div class="subpage-copy page-copy">

            <div class="subpage-title">
                <?= $subpage->texttitle()->kt() ?>
            </div>

            <?= $subpage->blocks()->toBlocks() ?>
            <?php if ($audio = $subpage->audioElement()->toFile()) : ?>
                <div class="audio-component">
                    <div class="audio-player">
                        <div class="play-btn">
                            <svg class="play-icon" viewBox="0 0 27 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 25L25 13.3077L1 1V25Z" />
                            </svg>
                            <svg class="pause-icon" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 0V24M8 0V24" />
                            </svg>
                        </div>
                        <div class="stop-btn">
                            <svg class="stop-icon" viewBox="0 0 26 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L1 25L25 25L25 1L1 1Z" />
                            </svg>
                        </div>
                        <div class="audio-time">
                            <span class="audio-progress">0:00</span> / <span class="audio-duration"></span>
                        </div>
                        <input type="range" class="seek-slider" max="100" value="0">
                        <div class="audio-volume">
                            <svg class="volume-icon" viewBox="0 0 29 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M25 10V18M28 8V20M8 19H1V9H8L17 2V26L8 19Z" />
                            </svg>
                            <svg class="mute-icon" viewBox="0 0 29 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M28 11L22 17M28 17L22 11M8 19H1V9H8L17 2V26L8 19Z" />
                            </svg>

                        </div>
                    </div>
                    <audio src="<?= $audio->url() ?>" preload="metadata"></audio>
                </div>
            <?php endif ?>

            <?php if ($video = $subpage->videoElement()->toFile()) : ?>
                <figure class="video-component">
                    <video controls loop controlsList="nodownload noremoteplayback">
                        <source src="<?= $video->url() ?>">
                    </video>
                    <figcaption>
                        <?= $video->caption()->kt() ?>
                    </figcaption>
                </figure>
            <?php endif ?>
        </div>
    </div>
    <div class="popup-ui ui-close left">
        <svg viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M46.6646 1.91026L24.3291 24.2548M24.3291 24.2548L1.42822 47.1651M24.3291 24.2548L1.42822 1.34457M24.3291 24.2548L46.6646 46.5994"/>
        </svg>
    </div>
    <div class="popup-ui ui-close right">
        <svg viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M46.6646 1.91026L24.3291 24.2548M24.3291 24.2548L1.42822 47.1651M24.3291 24.2548L1.42822 1.34457M24.3291 24.2548L46.6646 46.5994"/>
        </svg>
    </div>
</section>