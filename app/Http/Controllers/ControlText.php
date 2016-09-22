<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Suggest;  //对表操作类进行继承

use Carbon\Carbon;

class ControlText extends Controller
{
	protected $fillable = ['title'];
    //index function test
    public Function index()
    {
		/*$name = 'kjone';
		$data = array();
		$data['one'] = 'kk';
		$data['last'] = 'jj';
        return view('welcome',$data);*/
        /*$name = 'kjone';
        return view('welcome')->with([
	         'first' => 'kjone',
	         'second' => 'QQ'
        ]);*/
        $name = 'kjone';
		$data = array();
		$one= 'kk';
		$last = 'jj';
        return view('welcome',compact('one','last'));
    }
    //index function test
    public Function contact()
    {
		$one = 'kjone';
		$last = 'happy';
		$people = ['a','b'];
		$arr['title'] = 1;
		/*$a = null;
		if(is_null($a)){
			abort(404);//返回404页面
			}*/
		//dd($arr);//larevel调试方法
        return view('contact',compact('one','last','people','arr'));
    }
    //简单项目测试
    public Function blog(Request $request,$id)
    {
		//$articles = articles::all();  获取查询articles中所有数据
		//$articles = articles::find($id);  获取查询articles中id为$id的数据
		//$articles = articles::findOrFail($id);  获取查询articles中id为$id的数据
		$input = $request -> all('a');;
		print_r($request);die;
$validator = Validator::make($input, [
    'title' => 'required|min:3',
    'body' => 'required',
]);  
		$a = '';
		$a = $request -> all('a');
		dd($a);
        return $id;
    }
     //创建文章实验
    public Function create()
    {
		$published_at['published_at']  = 1;
		$b = $this->title();
		dd($b);
		return view('create');
    }
    public function title()
	{
		//echo(Carbon::now());
		return $this->attributes['title'] =Carbon::now();
}
public function test()
	{
        $arr['title'] = '很好的导购网站：';
        $people[0] = '1,便宜';
         $people[1] = '2,老板有钱';
          $people[2] = '3,程序员用命在拼';
          $articles = Suggest::all();
	return view('test.test',compact('one','last','people','arr'));
	}
}
