@extends('layout')
@section('special')
<div class="spezial-item">
    @foreach($speciales as $speciale)
    <div class="spezial-items"> 
        <img src="{{$speciale->Bild}}">
        <h1>{{$speciale->Name}}</h1>
        <p>{{$speciale->Beschreibung}}</p>
        
    </div> 
    @endforeach
</div>
@endsection