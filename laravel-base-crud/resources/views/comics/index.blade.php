@extends('layouts.app')
@section('main_content')
    <h1>Fumetti</h1>
  @foreach ($comics as $comic)
        <div>
            Titolo:{{$comic['title']}}
        </div> 
        <div>
            Titolo:{{$comic['description']}}
        </div> 
        <div>
           <img src="{{$comic['thumb']}}" alt="">
        </div>  
        <div>
            Titolo:{{$comic['price']}}
        </div>  
        <div>
            Titolo:{{$comic['series']}}
        </div> 
        <div>
            Titolo:{{$comic['sale_date']}}
        </div> 
        <div>
            Titolo:{{$comic['type']}}
        </div> 
       
  @endforeach
@endsection