<?php $indicator_colour = "#fffc3c"; $knob_colour = "#171717"; $background = "#282a2e"; $label_colour = $indicator_colour;  ?>
<div class="pedal_container">
    <h4 class="pedal_name"><?= $pedal['name']; ?></h4>

    <div class="pedal" style="background: <?= $background ?>; border-color: <?= $knob_colour ?>">
        <div class="knob_container">
            <?php $title = "Treble"; $key = 'treble'; include __DIR__ . "/../knob.blade.php"; ?>
            <?php $title = "Mid"; $key = 'mid'; include __DIR__ . "/../knob.blade.php"; ?>
            <?php $title = "Bass"; $key = 'bass'; include __DIR__ . "/../knob.blade.php"; ?>
        </div>
        <div class="knob_container w-full">
            <?php $title = "Volume"; $key = 'volume'; include __DIR__ . "/../knob.blade.php"; ?>
            <?php $title = "Gain"; $key = 'gain'; include __DIR__ . "/../knob.blade.php"; ?>
        </div>
    </div>
</div>