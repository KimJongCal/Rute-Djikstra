<html>

<head>
  <title>Piscal Pratama Putra</title>
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <nav>
    <div class="nav-wrapper">
      <a href="index.html" class="brand-logo center">Mencari Rute Terpendek</a>
    </div>
  </nav>
  <div class="row">

    <div class="col s12 m4 l3 teal lighten-2" style="height:500px"> <!-- Note that "m4 l3" was added -->
      <form class="white">
          <div class="input-field col s12">
            <select name="ke">
              <option value="0">0 - Cicaheum</option>
              <option value="1">1 - Samsat</option>
              <option value="2">2 - Bubat</option>
              <option value="3">3 - LW Panjang</option>
              <option value="4">4 - Cicadas</option>
              <option value="5">5 - Cikutra</option>
              <option value="6">6 - Kosambi</option>
              <option value="7">7 - Alun-alun</option>
            </select>
            <label class="black-text">Dari</label>
          </div>

          <div class="input-field col s12">
            <select name="dari">
              <option value="0">0 - Cicaheum</option>
              <option value="1">1 - Samsat</option>
              <option value="2">2 - Bubat</option>
              <option value="3">3 - LW Panjang</option>
              <option value="4">4 - Cicadas</option>
              <option value="5">5 - Cikutra</option>
              <option value="6">6 - Kosambi</option>
              <option value="7">7 - Alun-alun</option>
            </select>
            <label class="black-text">Dari</label>
          </div>
        </p>
        
        <ul class="collection">
          <li class="collection-item"><input type="button" class="waves-effect waves-light btn" value="Tampilkan Rute Terdekat" onclick='dijkstra(dari.value, ke.value)'></li>
          <li class="collection-item"><input type="button" class="waves-effect waves-light btn" value="Bersihkan Map" onclick='initMap()'></li>
          <li class="collection-item"><input type="button" class="waves-effect waves-light btn" value="Tampilkan Desa" onclick='initMap();initDesa();'></li>
          <li class="collection-item"><input type="button" class="waves-effect waves-light btn" value="Tampilkan Jalur" onclick='initMap();initJalan();initDesa();'></li>
        </ul>
        <input id="debug" type="hidden" value="false">
      </form>

    </div>

    <div class="col s12 m8 l9 deep-orange lighten-2" style="height:500px"> <!-- Note that "m8 l9" was added -->
      <br>
      <br>
      <center>
        <canvas id="mycanvas" width="850" height="400" style="border:8px solid black;">
        </canvas>
      </center> 
    </div>

  </div>
  <div class="row">
      <div class="col s12 m12 l12 deep-orange lighten-2">
        <br>
        <center>
          <iframe src="JavaScript:''" style="border:1px; height:auto; width:500px; align:center"></iframe>
        </center>
      </div>
      <br>
  </div>

  <footer class="page-footer">
    
    <div class="footer-copyright">
      <div class="container">
      © 2018 Copyright Piscal Pratama Putra
      <a class="grey-text text-lighten-4 right" href="https://github.com/KimJongCal">More Links</a>
      </div>
    </div>
  </footer>
  <script src="jquery.js"></script>
  <script src="algoritma.js"></script>
  <script src="js/materialize.min.js"></script>

  <script>
    $(document).ready(function(){
      $('select').formSelect();
    });
  </script>
</body>

</html>