<!DOCTYPE html>
<html>
<head>
    <title>cafe wave</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel=stylesheet href="/stylsheet.css" type="text/css">
</head>
<body>
  <div class="container">
   <div class="wrapp">
       <div id="menu_title"><img src="/img/th.jpg" ><p id="titr">Wave Cafe</p></div>
    <div class="menue">
        <div class="nav"><p><a href="/essen">Getränke</a></p></div>
        <div class="nav"><p><a href="/special/{Eisspezialitäten}">Special</a></p></div>
        <div class="nav"><p><a href="/reserve">Rerservieren</a></p></div>
        <div class="nav"><p><a href="/login">Anmelden und login</a></p></div>
        <div class="nav"><p><a href="/kontakt">Kontakt</a></p></div>
        <div class="nav"><p><a href="/about">Über uns</a></p></div>
    </div> 
   </div>
    @yield('about')
    @yield('essen')
    @yield('kontakt')
    @yield('kunde')
    @yield('reserve')
    @yield('special')

  </div>
   
</body>

</html>