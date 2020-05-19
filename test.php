<?php

require "DateToTurkish.php";

$dtt = new DateToTurkish("j F l, Y", date("j F l, Y"));

echo $dtt->dateToTurkish();