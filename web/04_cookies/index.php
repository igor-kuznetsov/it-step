<pre><?php

// creating cookies
setcookie(
    'user_name', // name
    'Alexander',  // value
    time() + 10, // expires
    '/', // path
    'itstep.loc', // domain
    false, // secure
    true // http only
);
//setcookie('my_array', [12, 13, 14]); // Error! 2nd parameter must be string
setcookie('a[b]', 555);
setcookie('a[c]', 666);
setcookie('a[d]', 7777);

// getting cookies
print_r($_COOKIE);
echo $_COOKIE['user_name'];

// updating cookies
$_COOKIE['user_name'] = 'Ivan';
setcookie('a[b]', 'stringvalue');
print_r($_COOKIE);

// deleting cookies
//unset($_COOKIE['a']['c']);
//setcookie('a[b]', false);
//setcookie('a[d]', 7777, 1);
print_r($_COOKIE);