<?php $value = setting($pedal, $key) ?>
<div class="effect">
    <label class="knob_label" style="color: <?= $label_colour ?>"><?= $title; ?></label>
    <div
        data-knob-key="<?= $key ?>"
        data-pedal-id="<?= $pedal['id'] ?>"
        data-knob-value="<?= $value; ?>"
        data-color="<?= $indicator_colour ?>"
        class="knob"
    >
    <!-- <div class="indicator" style="<?= isset($indicator_colour) ? "background-color: $indicator_colour;" : ""; ?>"></div>-->
    </div>
</div>

