--TEST--
ini_restore strcmp NULL new_val
--FILE--
<?php

ini_set('error_log','ini_set_works');
ini_restore('error_log');

?>
--EXPECT--
