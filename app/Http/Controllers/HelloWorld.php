<?php
namespace App\Http\Controllers;

use Impress\Framework\Http\Controller;

class HelloWorld extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->session_start();
        $this->session()->set("ss", serialize(['s', 'd']) . time());
        $this->session()->set("ff", "ff" . time());
        var_dump(unserialize($this->session()->get("ss")));

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

    public function config()
    {
        $c = config("database.master.host");
        $s = $this->request()->getSession();
        return env("SESSION_DRIVER_CONFIG");
    }
}
