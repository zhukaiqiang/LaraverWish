<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\DB;

//use Illuminate\Http\Request;
//use App\Http\Requests;
use Request;
use App\Http\Requests\CreateSuggestRequest;

use App\Suggest;

use App\User;

use Carbon\Carbon;

class TestController extends Controller
{
     public function __construct(){
         //中间件
        //除了指定页之外
        //$this->middleware('auth', ['except' => ['index'，'show']]);
        //只有指定页
        //$this->middleware('suggest', ['only' => 'form']);
    }
    public function index()
    {
      //$list_arr = Suggest::LimitInfo()->get()->sortByDesc('id')->toarray();
     //$list_arr =  Suggest::find(1)->user()->orderBy('id')->get()->toarray();
      //dd($list_arr);
      
      //$list_arr = Suggest::with('user')->LimitInfo()->orderBy('id', 'desc')->get()->toarray();
      $list_arr = Suggest::with(['user' => function ($query) {$query->where('name', '!=', '');}])->LimitInfo()->orderBy('id', 'desc')->get();
      
      /*foreach ($list_arr as $key => $val)  {
          $arr = array();
          if ($val->user_id) {
                //$arr = User::find($val->user_id)->toarray();
               //$arr = Suggest::find($val->id)->user->toarray(); //需要查询多次
                $arr['name'] = $val->user->name; //需要查询多次
                //dd($arr);
               //使用预加载只需要几次
                $list_arr[$key]['name']= $arr['name'];
           }else{
               $list_arr[$key]['name']= '匿名';
           }
}*/
            //$queries = DB::getQueryLog();
           //dd($queries);
      //$list_json = Suggest::LimitInfo()->OrderBy('id','desc')->get(); //和上面等价
       //$list_json = Suggest::first()->user->toarray();   //意见反馈对应用户表的关系模型
       
       //$list_json = User::first()->suggest->toarray(); //用户表对应意见反馈表的关系模型
       //dd($list_json);
       //$list_json = Suggest::where('info','!=','')->get(); //这个方法也可以进行过滤
       //dd($list_json);
        return view('/test/suggestIndex',compact('list_arr'));
    }
   public function form()
	{

        $title = '意见反馈';
        $floot_info['客服QQ'] = '800103210';
        $floot_info['客服电话'] = '4008883096';
        $floot_info['工作时间'] = '09:00--21:00';
         $tip_arr['info'] = '身体健康，万事如意。';
        $db_suggest_all = DB::table('suggest')
                                                    ->where('id','=',1)
                                                    ->orderBy('id', 'desc')
                                                    ->get();
        Suggest::find(1)->toArray();
        Suggest::where('id','=',1)
                                ->first()
                                ->toArray();
        $b = Suggest::latest()->limitid()->get()->toArray();
       // dd($b);
        $c = Suggest::find(9);
        //dd($c);

        //dd($c->addtime->diffForHumans());
        $c->contact = 1;//将被set处理

        $db_suggest_one = DB::table('suggest')->first();
	return view('/test/suggest',compact('floot_info','title','db_suggest_all','tip_arr','db_suggest_one'));
}
public function store(CreateSuggestRequest   $request)
	{
        //$input = Request::all();
        $input = $request -> all();//会进入路由类进行必要参数检测
        //依赖于Request的验证方式
         //$this->validate($request, ['info' => 'required|min:3', 'contact' =>'required']);
        //dd($input);
        $input['addtime'] = Carbon::now();
        $input['ua'] = $_SERVER['HTTP_USER_AGENT'];
        Suggest::create($input);
        \Session::flash('flash_message', '意见发布成功');
        return redirect('suggest/index');
}

}
