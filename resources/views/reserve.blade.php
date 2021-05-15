@extends('layout')
@section('reserve')
<form id="form2">
    <div id="shema">
    <label>KundeNummer</label><br>
     <input type="text"><br>
     <label>KundeNamen</label><br>
     <input type="text"><br>
     <label>Tischnumber</label><br>
     <select>
         <option>1</option>
         <option>2</option>
         <option>3</option>
         <option>4</option>
         <option>5</option>
         <option>6</option>
         <option>7</option>
         <option>8</option>
         <option>9</option>
         <option>10</option>
     </select><br>
      <label>Date</label><br>
     <input type="date"><br>
     <label>Uhr</label><br>
     <input type="time"><br>
     <button>reservieren</button><br>
    
   </div>
 </form>
@endsection