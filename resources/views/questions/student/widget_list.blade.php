<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Тест</title>
    {!! HTML::script('js/superForm.js') !!}
    {!! HTML::script('js/jquery.js') !!}
    {!! HTML::style('css/font-awesome.min.css') !!}
    {!! HTML::style('css/material-design-iconic-font.min.css') !!}
    {!! HTML::style('css/materialadmin_demo.css') !!}
    {!! HTML::style('css/test_style.css') !!}
    {!! HTML::style('css/bootstrap.css') !!}
    {!! HTML::style('css/materialadmin.css') !!}

</head>
<body onload="startTimer()">
<section>
<nav class="fixed-nav">
    <div class="menu wrapper">
        <ul>
            @for ($i=0; $i<$amount; $i++)
            <li class="NotAnswered" id="{{$i}}"><a href="#form{{$i+1}}" class="SmoothScroll"> {{$i+1}} </a></li>
            @endfor
        </ul>


        <span id="my_timer" class="timer">{{$left_min}}:{{$left_sec}}</span> </div>
</nav>
<br><br><br>
<?php $i=1;?>
@foreach($widgets as $widget)
<br id="form{{$i}}">
<?php $i++;?>
{!! $widget !!}
@endforeach
{!! Form::open(['method' => 'PATCH', 'route' => 'question_checktest', 'id' => 'super-form', 'name' => 'super', 'onsubmit' => 'return sendForm(true);']) !!}
@for ($i = 0; $i < $amount; $i++)
<input id="super{{$i}}" type="hidden" name="{{$i}}" value="">
@endfor
<input id="amount" type="hidden" name="amount" value="{{ $amount }}">
<input type="hidden" name="id_test" value="{{ $id_test }}">
<input id="check" onClick="fillSuper()" class="btn btn-warning btn-lg col-md-4 col-md-offset-4 style-primary" type="submit" name="check" value="Отправить">
{!! Form::close() !!}
{!! HTML::script('js/toolbar.js') !!}
<br>
</section>
</body>
</html>