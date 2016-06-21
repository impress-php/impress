<?php
namespace App\Http\Middleware;

use Impress\Framework\Http\Controller;

class Csrf extends Controller
{
    public function handle()
    {
        if ($this->request()->get("s") != 's') {
            return $this->response()->json(['xxxx']);
        }
        return true;
    }
}
