@extends('layouts.app')
@section('main_content')
<div>
    Titolo:{{$comic->title}}
</div> 
<div>
    Trama:{{$comic->description}}
</div> 
<div>
   <img src="{{$comic->thumb}}" alt="">
</div>  
<div>
    Prezzo:{{$comic->price}}
</div>  
<div>
    Serie:{{$comic->series}}
</div> 
<div>
    Data:{{$comic->sale_date}}
</div> 
<div>
    Tipo:{{$comic->type}}
</div>  
    
@endsection