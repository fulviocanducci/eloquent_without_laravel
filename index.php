<?php

require "bootstrap.php";

use Models\People;


/*$p = People::whereId(1)
           ->first();


print_r($p->created_at);*/


print_r(People::all()->toArray());

