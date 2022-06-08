<html>
<head>
<title>Pokemon_Main</title>
<link href="bootstrap5.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<script src="bootstrap5.js"></script>  
<script src="style.js"></script>
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<form action="save.php" name="frmAdd" method="post">
<table width="600" border="1" class="tablecenter">
  <tr>
     <!--<th width="91"> <div align="center">pokemon_id </div></th>-->
    <th width="160"> <div style="text-align:center">pokemon_name </div></th>
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
  <div style="text-align:center">  
    <input type="submit" name="submit" value="submit">  
  </div>  
  </form>
</body>
</html>

 <!-- NOTE:  ไม่ต้องกรอก primary key : เจ้งง -->

  <!-- ask:  
1. align ไม่ได้? 
2. text ยัวกรอกเลขได้อยู่ ?
-->