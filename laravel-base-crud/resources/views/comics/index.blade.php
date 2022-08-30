@extends('layouts.app')
@section('main_content')
    <h1>Fumetti</h1>
  @foreach ($comics as $comic)
        <div>
            Titolo:{{$comic['title']}}
        </div> 
        <div>
           <img src="{{$comic['thumb']}}" alt="">
        </div>  
        <div>
           <a href="{{route('comics.show',['comic' => $comic ->id])}}">Dettagli fumetto</a>
        </div> 
  @endforeach
@endsection