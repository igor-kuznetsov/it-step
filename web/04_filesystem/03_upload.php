<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="my_image">
    <input type="submit">
</form>
<?php

if (!empty($_FILES)) {
    print "<pre>";
    print_r($_FILES);
    print "</pre>";

    if ($_FILES['my_image']['type'] != 'image/png') {
        $error['my_image'] = 'Wrong file! Image required';
    }

    if (empty($error)) {
        if (!is_dir('upload')) {
            mkdir('upload');
        }

        $move_from = $_FILES['my_image']['tmp_name'];
        $move_to = 'upload'.DIRECTORY_SEPARATOR.$_FILES['my_image']['name'];

        move_uploaded_file($move_from, $move_to);
    }
}

//unlink('upload/*.*');
//rmdir('upload');