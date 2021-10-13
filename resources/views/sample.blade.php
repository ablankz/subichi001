<!DOCTYPE html>
<html>
    <head>
        <title>
            laravelTest
        </title>
    </head>
    <body>
        <h1>
            laravelTest
        </h1>
        <h2>
            @isset($msg) 
            <p>{{$msg}}</p>
            @else
            <p>何か書いてください</p>
            @endif
        </h2>
        @php
            $a=['a','b','c'];
        @endphp
        <ol>
            @foreach($a as $i)
            @if($loop->first)
            start
            @endif
            <li>{{'No.'.$i}}</li>
            @endforeach
        </ol>
        <form method="POST" action="/sample">
            @csrf
            
            <input type="text" name="msg">
            <input type="submit">
        </form>
    </body>
</html>