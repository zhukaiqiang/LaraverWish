
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="www.1zhe.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<style>
    body,div,p,dl,dt,dd{margin:0;padding:0;}
    body{font:12px/24px Helvetica,STHeiti,Droid Sans Fallback,"\5FAE\8F6F\96C5\9ED1";-webkit-font-smoothing:antialiased;-webkit-text-size-adjust:100%;background:#fff;color:#3f3f3f;padding-bottom:20px;}
    img{display:block;max-width:100%;border:0;-webkit-tap-highlight-color:rgba(0,0,0,0)}
    .js-info,dl{padding:15px;padding-top:0;}
    .js-info{padding-top:15px;}
    .js-info strong{font-size:18px;}
    .js-info p{font-size:14px;line-height:20px;}
    dl,dt,dd{text-align:justify;text-justify:inter-ideograph}
    dl{border-top:1px dashed #f6f6f6;margin:0 auto;overflow:hidden;}
    dd img{display:block;margin:10px auto 0;}
    dl dt{font-size:12px;color:#666;line-height:16px;}
    dl dt.first{padding-left:20px;margin:10px auto 0;font-size:14px;line-height:18px;position:relative;color:#444;}
    dl dt i{background:#ff4800;width:16px;height:16px;line-height:16px;display:block;border-radius:25px;font-size:12px;color:#fff;text-align:center;position:absolute;left:0;font-style:normal;}
    dl dd img{width:100%;margin:5px auto 0;display:block;}
</style>

<body>
<div class="js-info">
    <strong>一折特卖2.4.0新功能介绍：</strong>
    <h2>{{ $arr['title'] }}</h2><br/>
    <div class="content">
                <div class="title">
					@if(count($people) > 0)
					@foreach($people as $val)
						<h3 style='coloe:red'>{{ $val }}</h3><br>
					@endforeach
					@endif
                </div>
            </div> 
    <p>一折特卖是一个专门提供限时促销信息的手机APP应用，每天汇集淘宝天猫的数万件超值商品提供给用户选择，让用户随时随地能买到性价比最好的商品。</p>
</div>
<dl>
    <dt class="first"><i>1</i>新增聚优惠频道：高性价比商品.海量优惠券.天天白菜价</dt>
    <dd><img src="{{ URL::asset('img/test/js_1.png') }}" alt="" /></dd>
</dl>
<dl>
    <dt class="first"><i>2</i>新增社区频道：大家一起来交流购物心得、如何赚Z币</dt>
    <dd><img src="{{ URL::asset('img/test/js_2.png') }}" alt="" /></dd>
</dl>
</body>
</html>



