<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="gallery[]"><br>
    <input type="file" name="gallery[]"><br>
    <input type="file" name="gallery[]"><br>
    <br>
    <input type="submit">
</form>
<?php

if (!is_dir('upload')) {
    mkdir('upload');
}

if (!empty($_FILES)) {
    print "<pre>";
    print_r($_FILES);
    print "</pre>";

    foreach ($_FILES['gallery']['error'] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $move_from = $_FILES['gallery']['tmp_name'][$key];
            sleep(1);
            $move_to = 'upload'.DIRECTORY_SEPARATOR.'my_gallery_'.time().'.jpeg';

            move_uploaded_file($move_from, $move_to);
        }
    }
}

$uploaded_files = array_diff(scandir('upload'), ['.', '..']);
foreach ($uploaded_files as $uploaded_file) {
    $src = 'upload'.DIRECTORY_SEPARATOR.$uploaded_file;
    echo '<img height="100px" src="'.$src.'" alt="">';
}