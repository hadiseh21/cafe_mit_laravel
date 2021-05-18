@extends('layout')
@section('essen')

    <div id="trinken"><div class="trinken_m">
      <p>
        <a href="http://127.0.0.1:8000/essen/Eisbecher">Eisbecher</a>
      </p>
    </div>
    <div class="trinken_m">
      <p>
        <a href="http://127.0.0.1:8000/essen/Kaffee & Co.">Kaffee & Co.</a>
      </p>
    </div>
  <div class="trinken_m"> 
      <p>
        <a href="http://127.0.0.1:8000/essen/Bubble-Waffeln">Bubble-Waffeln</a>
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