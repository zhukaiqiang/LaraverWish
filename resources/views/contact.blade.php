@extends('app')
@section('content')   
<h1>{{ $arr['title'] }}</h1>
<h2>{{ $people[0] }}</h2><br/>
<a href="{{ url('blog',2)}}">跳槽测试</a>推荐这种跳槽方式<br/>
<a href="{{ action('ControlText@blog',[3])}}">再次跳槽测试</a><br/>
            <div class="content">
                <div class="title">
					@if(count($people) > 0)
					@foreach($people as $val)
						<span style='coloe:red'>{{ $val }}</span><br>
					@endforeach
					@endif
                </div>
            </div> 
@stop
@section('footer')   

<script> 
@if($one == 'kjone')
	alert('true');
@else
	alert('false');
@endif
</script>

@stop
