<?php

require "bootstrap.php";

use Models\People;


var_dump(People::whereId(1)->get());

