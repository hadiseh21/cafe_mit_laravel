@extends('layout')
@section( 'kontakt')
<div class="Besch"><h1>Kontakt Wave</h1><p>hhhjkhkl</p></div>
    <div id="form" ><form id="shema"action="kontakt/bestätigung" method="post">
        @csrf
        <label>Name</label><br>
        <input type="text" name="name" @if(Auth::user())value="{{Auth::user()->name}}" @endif><br>
        @error('name')
        <h4 style="color:rgb(99, 4, 4);text-align: center;font-family: Arial, Helvetica, sans-serif;">müssen diese field ausfüllen</h4>
        @enderror
        <label>Email</label><br>
        <input type="email" placeholder="cafewave@gmail.de" name="email" value="{{old('email')}}"><br>
        @error('email')
        <h4 style="color:rgb(99, 4, 4);text-align: center;font-family: Arial, Helvetica, sans-serif;">müssen diese field ausfüllen</h4>
        @enderror
        <label>Message</label><br>
        <textarea rows="10" cols="10" name="massege" value="{{old('massege')}}"></textarea><br>
     @error('massege')
     <h4 style="color:rgb(99, 4, 4);text-align: center;font-family: Arial, Helvetica, sans-serif;">müssen diese field ausfüllen</h4>
        @enderror
        <button>schicken</button>
    </form></div>
@endsection