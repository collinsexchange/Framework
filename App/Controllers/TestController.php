<?php
namespace App\Controllers;

use Silver\Core\Controller;
use Silver\Http\View;

/**
* test controller
*/
class TestController extends Controller
{

    protected $name = "test";

    public function get()
    {
        //echo "Welcome in test controller. This file is on App/Controllers/";
        return View::make('test')->with('name', $this->name);
    }

    public function post()
    {
        echo 'Method: post';
    }

    public function put()
    {
        echo 'Method: put';
    }

    public function delete()
    {
        echo 'Method: delete';
    }
}
