@extends('layout')
@section('kunde')
<form id="form2">
    <div id="shema">
     <label>Name</label><br>
     <input type="text"><br>
     <label>Email</label><br>
     <input type=email placeholder="cafewave@gmail.de"><br>
     <label>Passwort</label><br>       
      <input type="password"><br>
     <label>Passwort wiederholen</label><br>
     <input type="password"><br>
      <label style="color: brown;">für eintreten füllen ist nicht wichtig</label>
     <button>Erstellen</button><br>
     <button>eintreten</button><br>
   </div>
 </form>
@endsection