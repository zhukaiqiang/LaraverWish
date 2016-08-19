<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
   public function test()
	{
        $arr['title'] = '很好的导购网站：';
        $people[0] = '1,便宜';
         $people[1] = '2,老板有钱';
          $people[2] = '3,程序员用命在拼';
	return view('test.test',compact('one','last','people','arr'));
	}
}
