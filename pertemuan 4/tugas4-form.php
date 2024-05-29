<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class ="container my-5">
    <h1>Form Product</h1>
<form action="tugas4-hasil.php" method="post">
  <div class="form-group">
    <label for="barang">Nama Barang :</label>
    <input id="barang" name="barang" type="text" required="required" class="form-control">
  </div>
  <div class="form-group">
    <label for="Harga">Harga :</label>
    <input id="Harga" name="Harga" type="text" required="required" class="form-control">
  </div>
  <div class="form-group">
    <label for="Deskripsi">Deskripsi :</label>
    <textarea id="Deskripsi" name="Deskripsi" cols="40" rows="5" required="required" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="Stok">Stok :</label>
    <input id="Stok" name="Stok" type="text" required="required" class="form-control">
  </div>
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</body>
</html>