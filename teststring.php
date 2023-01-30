<?php

$foo = "<script>alert(1)</script>";

$string = (string)$foo;

echo $string;