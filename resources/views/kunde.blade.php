@extends('layout')
@section('kunde')
<form id="form2" method="post" action="/kunde/login" >
    @csrf
    <div id="shema">
     <label>Name</label><br>
     <input type="text" name="Name"><br>
     <label>Email</label><br>
     <input type=email placeholder="cafewave@gmail.de" name="Email"><br>
     <label>Passwort</label><br>       
      <input type="password" name="Passwort"><br>
     <label>Passwort wiederholen</label><br>
     <input type="password" name="passwort2" ><br>
      <label style="color: brown;">für eintreten füllen ist nicht wichtig</label>
     <button >Erstellen</button>  
 </form>
 <form action="{{ route('login') }}" method=""><button>eintreten</button></form>
 <form action="" method=""><button>austreten</button></form><br>
    </div>
   
@endsection 
{{-- <script>
        public function vergleich(){
        if(document.form2.Passwort.value!=document.form2.passwort2.value) 
            alert("Die angegebenen Passwörter stimmen nicht überein!");
        }

</script> --}}