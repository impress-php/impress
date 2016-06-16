<?php
namespace App\Http\Controllers;

use Impress\Framework\Http\Controller;

class HelloWorld extends Controller
{
    public function index()
    {
        $name = $this->request()->get("name");
        is_null($name) && $name = "world";

        $this->response()->setCookie("test1", "123");
        $this->response()->setCookie("test2", "321");
        $this->response()->setCookie("xxxx", "ffff");
        $this->response()->setCookie("vv", "ww");
        $this->response()->removeCookie("xxxx");

        return $this->response()->view("helloworld.twig", [
            "firstname" => $name
        ]);
    }
}
