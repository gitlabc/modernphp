<?php
$output = '<p><script>alert("bb你好");</script>';
echo htmlentities($output, ENT_QUOTES, 'UTF-8') . PHP_EOL;
echo htmlentities($output) . PHP_EOL;
