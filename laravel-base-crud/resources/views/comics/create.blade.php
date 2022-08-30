@extends('layouts.app')
@section('main_content')
    <h1>
        Crea il tuo nuovo fumetto
    </h1>
    <form action="{{route('comics.store')}}" method="post">
        @csrf <!--sicurezza-->
        <div>
            <label for="title">Titolo Fumetto</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="description">Trama Fumetto</label>
           <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="thumb">URL Fumetto</label>
            <input type="text" id="thumb" name="thumb">
        </div>
        <div>
            <label for="price">Prezzo Fumetto</label>
            <input type="decimal" id="price" name="price">
        </div>
        <div>
            <label for="series">Serie Fumetto</label>
            <input type="text" id="series" name="series">
        </div>
        <div>
            <label for="sale_date">Data Fumetto</label>
            <input type="text" id="sale_date" name="sale_date">
        </div>
        <div>
            <label for="type">Tipo Fumetto</label>
            <input type="text" id="type" name="type">
        </div>
      <input type="submit" value="Salva">
    </form>
@endsection