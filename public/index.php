<?php

require__DIR__. '../vendor/autoload';

use App\src\Wcs\Hello;

$hello = new Hello;

echo $hello->talk();