<pre><?php

print_r(getdate());
print_r(getdate(1512305048));

echo date("Y-m-d H:i:s") . "<br>";
echo date("Y-m-d H:i:s", 1512305048) . "<br>";
echo date("Y-m-d H:i:s", strtotime('July 2, 2008 8.12PM')) . "<br>";