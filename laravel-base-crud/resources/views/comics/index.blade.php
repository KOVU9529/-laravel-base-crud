@extends('layouts.app')
@section('main_content')
   <h1>Fumetti</h1>
   <div class="container">
      @foreach ($comics as $comic)
  <div class="card">
   <div class="titolo">
      Titolo:{{$comic['title']}}
   </div> 
   <div>
      <img src="{{$comic['thumb']}}" alt="">
   </div>  
   <div >
      <a class="info" href="{{route('comics.show',['comic' => $comic ->id])}}">Dettagli fumetto</a>
   </div>  
   <div >
      <a class="modifica" href="{{route('comics.edit',['comic' => $comic ->id])}}">Modifica fumetto</a>
   </div>  
   <div >
      <form action="{{route('comics.destroy',['comic' => $comic ->id])}}" method="post">
         @csrf
         @method('DELETE')
         <input class="elimina" type="submit" value="Elimina" onClick="return confirm('Sei sicuro di voler cancellare?');">
      </form>
   </div>
  </div>
     
        
  @endforeach

   </div>
  
@endsection