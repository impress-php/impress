<?php
namespace App\Http\Controllers;

use Impress\Framework\Http\Controller;

class HelloWorld extends Controller
{
    public function __construct()
    {
    }

    public function getIndex()
    {
        $this->session_start();

        $name = $this->request()->get("name");
        is_null($name) && $name = "world";

        $this->response()->setCookie("test1", "123");
        $this->response()->setCookie("test2", "321");
        $this->response()->setCookie("xxxx", "fsfsd");
        $this->response()->setCookie("vv", "xvcsdf2");
        $this->response()->removeCookie("xxxx");
        var_dump($this->request()->getCookie("vv"));
        var_dump($this->session()->get("ss"));

        return $this->response()->view("helloworld.twig", [
            "firstname" => $name
        ]);
    }

    public function login()
    {
        $this->response()->setContent("Login success");
        $this->session_start("session.long", true);
        $this->session()->set("ss", serialize(['s', 'd']) . time());
        $this->session()->set("ff", "ff" . time());

        return $this->response();
    }

    public function getAbc()
    {
        return 'xxxxxx';
    }

    public function abcAbc()
    {
        return 'abcAbc';
    }

    public function config()
    {
        $c = config("database.master.host");
        $s = $this->request()->getSession();
        return env("SESSION_DRIVER_CONFIG");
    }
}
