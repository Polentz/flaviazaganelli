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
        <div class="audio-time --txt-ui">
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
    <?php if ($file = $page->file()): ?>
        <audio src="<?= $file->url() ?>" preload="metadata"></audio>
    <?php endif ?>
</div>