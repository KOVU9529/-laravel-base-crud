@extends('layouts.app')
@section('main_content')
    <h1>
        Crea il tuo nuovo fumetto
    </h1>
    <form action="{{route('comics.store')}}" method="post">
        @csrf <!--sicurezza-->
        <div>
            <label for="title">Titolo Fumetto</label>
            <input type="text" id="title" name="title" value="{{old('title')}}">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description">Trama Fumetto</label>
            <textarea name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="thumb">URL Fumetto</label>
            <input type="text" id="thumb" name="thumb" value="{{old('thumb')}}">
            @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="price">Prezzo Fumetto</label>
            <input type="decimal" id="price" name="price" value="{{old('price')}}">
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="series">Serie Fumetto</label>
            <input type="text" id="series" name="series" value="{{old('series')}}">
            @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="sale_date">Data Fumetto</label>
            <input type="date" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
            @error('ale_date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="type">Tipo Fumetto</label>
            <input type="text" id="type" name="type" value="{{old('type')}}">
            @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
      <input type="submit" value="Salva">
    </form>
@endsection