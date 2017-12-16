<pre><?php

//if (isset($_COOKIE['PHPSESSID'])) {
//    unset($_COOKIE['PHPSESSID']);
//}

session_start();

if (empty($_SESSION['data'])) {
    $_SESSION['data'] = ['array', 'with', 'some', 'data'];
}

print_r($_SESSION);

?>
<br>
<a href="includes/next.php?<?php echo htmlspecialchars(SID); ?>">Next Page</a>
