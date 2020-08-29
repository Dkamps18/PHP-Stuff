<?php
    if(isset($_SERVER['REMOTE_ADDR'])) {
        die('not runned from cli');
    }
?>