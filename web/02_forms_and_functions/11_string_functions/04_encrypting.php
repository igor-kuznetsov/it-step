<?php

echo "md5: " . md5("MyWeakPassword"."password_salt") . "<br>";
echo "sha1: " . sha1("MyWeakPassword"."password_salt") . "<br>";
echo "crypt: " . crypt("MyWeakPassword", "password_salt") . "<br>";