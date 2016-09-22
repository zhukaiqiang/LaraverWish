@extends('/public/header')
@section('title')
  say something to us
@endsection 
<br/>
@if(Session::has('flash_message'))
    <div style="text-align:center;font-size: 25px;" class="alert alert-success">
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('flash_message') }}
    </div>
@endif

<br/>
<h1><a style="color:#7a43b6;"href='/suggest/add'>(告诉我们您的愿望)</a></h1>
<br/>
@foreach( $list_arr as $key => $val)
   <p class="con">{{ $key }}：<span style="color:brown;" >{{$val->info}}<br/>
   </span><span style='font-size: 12px;color:#7d7d7d'>from : @if ($val->user['name']){{$val->user['name']}}@else游客@endif</span></p>
@endforeach