@extends('layouts.app')
@section('main_content')
    <h1>Modifica fumetto</h1>
    <div>
        <form action="{{route('comics.update' , ['comic' => $comic->id])}}" method="post">
            @csrf <!--sicurezza-->
            @method('PUT')<!--Metodo http in maiuscolo-->
            <div>
                <label for="title">Titolo Fumetto</label>
                <input type="text" id="title" name="title" value="{{old('title') ? old('title') : $comic->title}}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="description">Trama Fumetto</label>
                <textarea name="description" id="description" cols="30" rows="10">{{old('description') ? old('description') : $comic->description}}</textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="thumb">URL Fumetto</label>
                <input type="text" id="thumb" name="thumb" value="{{old('thumb') ? old('thumb') : $comic->thumb}}">
                @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="price">Prezzo Fumetto</label>
                <input type="decimal" id="price" name="price" value="{{old('price') ? old('price') :$comic->price}}">
                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="series">Serie Fumetto</label>
                <input type="text" id="series" name="series" value="{{old('series') ? old('series') :$comic->series}}">
                @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="sale_date">Data Fumetto</label>
                <input type="date" id="sale_date" name="sale_date" value="{{old('sale_date') ? old('sale_date') :$comic->sale_date}}">
                @error('ale_date')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="type">Tipo Fumetto</label>
                <input type="text" id="type" name="type" value="{{old('type') ? old('type') :$comic->type}}">
                @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          <input class="confermaModifica" type="submit" value="Salva">
        </form>
    </div>
@endsection