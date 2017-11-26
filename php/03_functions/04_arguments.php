<?php

function render_block($width, $height, $bg = 'red')
{
    echo "<div style='width:$width; height:$height; background:$bg;'></div>";
}

render_block('100px', '100px');

render_block('200px', '50px', 'green');

render_block('50px', '150px', 'blue');