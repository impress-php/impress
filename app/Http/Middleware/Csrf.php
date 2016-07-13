<?php
namespace App\Http\Middleware;

use Impress\Framework\Http\Middleware;

class Csrf extends Middleware
{
    public function handle()
    {
        if ($this->request()->get("s") != 's') {
            return $this->response()->json(['xxxx']);
        }
        return true;
    }
}
