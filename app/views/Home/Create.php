<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>public/css/bootstrap.min.css">

    <title>Create</title>
  </head>
  <body>


    <div class="container">
      <h1 class="mt-5">Tambah Data Siswa SMK N 4 Malang</h1>
      
      <div class="row">
        <div class="col-6">
          <form action="<?= BASE_URL ?>home/store" method="post" accept-charset="utf-8">
            <div class="form-group">
              <label for="NIS">NIS</label>
              <input id="NIS" name="NIS" type="text" class="form-control" placeholder="NIS">
            </div>

            <div class="form-group">
              <label for="Nama">Nama</label>
              <input id="Nama" name="Nama" type="text" class="form-control" placeholder="Nama">
            </div>

            <div class="form-group">
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>

    </div>

    <script src="<?= BASE_URL ?>public/js/bootstrap.min.js"></script>
  </body>
</html>