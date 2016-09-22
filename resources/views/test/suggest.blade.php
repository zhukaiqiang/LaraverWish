@extends('/public/header')
@section('title')
    @if($title )
        {{ $title }}
     @else
        强哥特卖
    @endif
@endsection 
<body>
<div class="forms" id="forms" >
    <p style="font-size:14px;">可即时联系我们的在线QQ客服：<a href="http://protocol//qq//800103210">800103210</a></span></p>
    <p style="font-size:14px;padding-top:1px;">电话：4008883096</p>
    <p style="font-size:14px;padding-top:1px;">工作时间：09:00--21:00</p>
    <form action="/suggest/store" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <textarea  name="info" id="content" maxlength="50" cols="" rows="" placeholder="请将您的宝贵意见写在这里..." oninput="less()"></textarea>
        <div style="position: absolute;right: 5%;font-size: 12px"><font id="font1" color="red">0</font>/<font id="font2" color="red"></font></div>
        <p>请留下您的联系方式</p>
        <!--<p class="cf"><input class="inp_w2" maxlength="50" name="contact" id="contact" type="text" onFocus="if(value==defaultValue){value='';this.style.color='#000'}" onBlur="if(!value){value=defaultValue;this.style.color='#999'}" style="color:#999999; height:30px;" value="<{if $contact}><{$contact}><{else}>请输入QQ、邮箱或手机号码。。。 <{/if}>" /></p>-->
        <p class="cf"><input class="inp_w2" maxlength="50" autocomplete="off" name="contact" id="contact" type="text" value="" placeholder="请输入QQ或手机号"/></p>
        <p class="cf"><input class="inp_w1"  name="validate" autocomplete="off" id="validate"  type="text"><img id="vdimgck" src="validate.php?nocache=0.4125369534663288" alt="看不清？点击更换" align="absmiddle" style="cursor:pointer;margin-top: 1px;" onclick="this.src=this.src+'?'" /><span style="font-size: 12px; vertical-align:middle;"> 点击图片更换</span></p>
        <input type="submit" class="sub" value="提&nbsp;交">
</form> 
@if ($errors->any())
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
    @endif
    <br/>
{{$tip_arr['info']}}
<br/>
{{$db_suggest_one->addtime}}
@foreach( $db_suggest_all as $skey => $sval)
{{ $sval->info}}
@endforeach
@foreach( $floot_info as $key => $val)
   <p class="con">{{ $key }}：<a style="color:#aaa;" href="http://protocol//qq//800103210">{{ $val }}</a></p>
@endforeach
</div>
<div class="dialog" style="position: absolute;left: 4.5%; top: 1%;height: 70%;visibility: hidden;width: 96%; margin-left: -10px" id="div_hidden">
    <div class="dia_con" style="height: 100%" >
        <p></p>
    </div>
</div>

<div class="dialog" id="dialog" style="position: fixed;left: 4.5%; top: 20%;display: none">
    <{if $errmsg}>
    <div class="dia_con">
        <p><{$errmsg}></p>
    </div>
    <div class="dia_btn"><a onclick="old_message()">确定</a></div>
    <{elseif $msg}>
    <div class="dia_con">
        <p><{$msg}></p>
    </div>
    <div class="dia_btn"><a href="index_bak.php?m=html5&op=suggest&ac=index">确定</a></div>
    <{/if}>
</div>
</body>
</html>