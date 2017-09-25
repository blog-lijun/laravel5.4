<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;

class ArticalController extends Controller
{
    public function index(){
        return View::make('atical');
    }


    /*
    * 一个基础功能的测试用例。
    *
    * @return void
    */
    public function testBasicExample()
    {
        Cache::shouldReceive('get')
            ->with('key')
            ->andReturn('value');

        $this->visit('/cache')
            ->see('55555');
    }
}
