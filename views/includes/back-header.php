<div class="container-fluid header" id="headerBox">
    <div id="left-button">
        <button type="button" ontouchend="window.location='<?= $left_url;?>'">
            <i class="fas fa-arrow-left fa-2x" id="arrowIcon"></i>
            <i class="fas fa-times fa-2x" id="quitIconLeft"></i>
        </button>
    </div>
    <div id="right-button">
        <button type="submit" name="submitBtn" id="right-btn" disabled>
            <i class="fas fa-check fa-2x" id="check"></i>
            <i class="fas fa-plus fa-2x" id="addIcon"></i>
            <i class="fas fa-times fa-2x" id="quitIconRight"></i>
        </button>
    </div>
</div>