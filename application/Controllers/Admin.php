<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends Controller{
    public function index()
    {
        echo 'Admin';
    }

    public function show()
    {
        echo 123;
    }

//    public function _remap($method)
//    {
//        echo $method;
//    }
}