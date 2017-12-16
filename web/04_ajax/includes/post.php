<div style="border:1px solid black; width:200px; height:20px; text-align:center; color:red;">
    <?php echo empty($_POST['text']) ? 'undefined' : $_POST['text']; ?>
</div>
<?php

$h = empty($_POST['h']) ? 0 : $_POST['h'];
echo '<div style="background-color:green; width:202px; height:'.$h.'px;"></div>';
exit;