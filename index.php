<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>POKEMON</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="Pokemon_ID">Pokemon_ID:</label>
      <input type="number" class="form-control" id="Pokemon_id" placeholder="Enter Pokemon_id" name="pkmn_id">
    </div>
    <div class="mb-3 mt-3">
      <label for="Pokemon_name">Pokemon_name:</label>
      <input type="text" class="form-control" id="Pokemon_name" placeholder="Enter Pokemon_name" name="pkmn_name">
    </div>
    <div class="mb-3">
      <label for="PKMN_type">Pokemon_type:</label>
      <input type="text" class="form-control" id="PKMN_type" placeholder="Enter Pokemon_type" name="POKEMON_type">
    </div>
    <div class="mb-3">
      <label for="PKMN_gen">Pokemon_gen:</label>
      <input type="number" class="form-control" id="PKMN_gen" placeholder="Enter Pokemon_gen" name="POKEMON_gen">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="verify"> verify me
      </label>
    </div>
    <button type="register" class="btn btn-primary">Add to pokedex</button>
  </form>
</div>

</body>
</html>

