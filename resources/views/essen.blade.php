@extends('layout')
@section('essen')

    <div id="trinken"><div class="trinken_m">
      <p>
        <a href="./essen/{Eisbecher}">Eisbecher</a>
      </p>
    </div>
    <div class="trinken_m">
      <p>
        <a href="{{route(kategorie)}}">Kaffee & Co.</a>
      </p>
    </div>
    <div class="trinken_m">
      <p>
        <a href="./essen/{Bubble-Waffeln}">Bubble-Waffeln</a>
      </p>
    </div>
  </div>
   
    <div class="items">
        @foreach($getränks as $getränk)
        <div class="items-num">
        <img src="{{$getränk->Bild}}">
        <h1>{{$getränk->Name}}<span>{{$getränk->Kosten}}</span></h1>
        <p>{{$getränk->Beschreibung}}</p>
    </div><br>
    @endforeach
  </div>
    </div>

@endsection