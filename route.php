<?php
$route = explode('/', explode('?', $_SERVER['REQUEST_URI'], 2)[0]);

// Example: http://localhost/test/route.php
// array(3) {
//     [0]=>
//     string(0) ""
//     [1]=>
//     string(4) "test"
//     [2]=>
//     string(9) "route.php"
// }
