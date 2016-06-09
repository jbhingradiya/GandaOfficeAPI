<?php

namespace App\Http\Controllers;

use App\Models\Hello;

class ExampleController extends Controller
{
    function hello()
    {
        $hello = new Hello();

        $hello->name = "jaydip";
        $hello->save();
        $name = $hello->all();
        return response()->json(['name' => $name]);
    }
}
