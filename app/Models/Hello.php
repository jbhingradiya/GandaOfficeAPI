<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Model as Eloquent;


class Hello extends Eloquent
{
    protected $collection = 'mycol';
}
