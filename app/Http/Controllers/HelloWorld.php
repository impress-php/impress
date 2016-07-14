<?php
namespace App\Http\Controllers;

use Gregwar\Captcha\CaptchaBuilder;
use Impress\Framework\Http\Controller;

class HelloWorld extends Controller
{
    public function __construct()
    {
        $this->middleware(['csrf', 'base'], ['only' => ['getIndex']]);
    }

    public function index($page, $c=80)
    {
        var_dump($c);
        return $this->response()->view("helloworld.twig", [
            "firstname" => 'xxxxxxxxxx'
        ]);
    }

    public function getPic()
    {
        $builder = new CaptchaBuilder("31+8");
        $builder->build();
        return $this->response()->raw($builder->get(), 200, ['Content-type' => 'image/jpeg']);
    }

    public function getIndex()
    {
        var_dump($this->request()->getLanguages());
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
