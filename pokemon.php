<html>
<head>
<title>Pokemon_Main</title>
<link href="bootstrap5.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<link href="dd.css" rel="stylesheet">
<script src="jquery.dd.min.js"></script>  
<script src="bootstrap5.js"></script>  
<script src="style.js"></script>
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="hero-image">
  <div class="hero-text">
    <h1>WELCOME!</h1>
    <h5>My Local Pokedex</h5>
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/pokemon.php">
      <img src="https://cdn-icons-png.flaticon.com/512/287/287221.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      POKEDEX
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/pokemon.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Redirect
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="http://localhost/pokemon.php">main_page</a></li>
            <li><a class="dropdown-item" href="http://localhost/save.php">save_page (Don't Click)</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="http://localhost/show.php">show_page</a></li>
          </ul>
          <li class="nav-item">
          <a class="nav-link" href="https://www.serebii.net/" style="color:green">Serebii</a>
        </li>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="DON'T search pls" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<br>
<form action="save.php" name="frmAdd" method="post"> <!--send to save.php -->
<table style="background-color:#000000" width="700" border="1" class="tablecenter table-dark">
  <tr>
     <!--<th width="91"> <div align="center">pokemon_id </div></th>-->
    <th width="160"> <div style="text-align:center" >pokemon_name </div></th>
    <th width="198"> <div style="text-align:center">pokemon_type </div></th>
    <th width="97"> <div style="text-align:center">pokemon_gen </div></th>
  </tr>
  <tr>
    <!--<td><div align="center"><input type="number" name="txtpokemon_id" size="5"></div></td>-->
    <td><input type="text" name="txtpokemon_name" size="20"></td>
    <td><div class="form-floating">
      <select name="txtpokemon_type" class="form-select" id="floatingSelect" aria-label="Floating label select example" required>
        <option disabled selected value="">Open this select menu</option>
        <option value="normal" title="https://www.shareicon.net/data/32x32/2016/10/18/844157_game_512x512.png">Normal</option>
        <option value="fire">Fire</option>
        <option value="water">Water</option>
        <option value="electric">Electric</option>
        <option value="grass">Grass</option>
        <option value="ice">Ice</option>
        <option value="fighting">Fighting</option>
        <option value="poison">Poison</option>
        <option value="ground">Ground</option>
        <option value="flying">Flying</option>
        <option value="psychic">Psychic</option>
        <option value="bug">Bug</option>
        <option value="rock">Rock</option>
        <option value="ghost">Ghost</option>
        <option value="dragon">Dragon</option>
      </select>
      <label for="floatingSelect">Works with selects</label>
    </div>
    </td>
    <td><div style="text-align:center"><input type="number" name="txtpokemon_gen" size="2" required></div></td>
  </tr>
  </table>
  <br>
  <div class="text-center">  
    <input type="submit" name="submit" value="submit">  
  </div>  
  </form>
</body>
<style>
  body {
    background-image: url('https://s.isanook.com/ga/0/ui/227/1135633/pokemon_scarlet_violet_8.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
</style>
</html>

 <!-- NOTE:  ไม่ต้องกรอก primary key : เจ้งง -->

  <!-- ask:  
1. align ไม่ได้? 
2. text ยัวกรอกเลขได้อยู่ ?
-->