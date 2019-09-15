<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>public/css/bootstrap.min.css">

    <title>Home</title>
  </head>
  <body>


    <div class="container">
      <h1 class="mt-5">Data Siswa SMK N 4 Malang</h1>
      <a href="<?= BASE_URL ?>home/create" class="btn btn-primary my-2">Tambah Data</a>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; foreach ($data as $item): ?>
            
            <tr>
              <th scope="row"><?= $no++; ?></th>
              <td><?= $item['NIS'] ?></td>
              <td><?= $item['Nama'] ?></td>
              <th>
                <a href="<?= BASE_URL?>home/detail/<?= $item['NIS'] ?>" class="btn btn-sm btn-secondary m-1">detail</a>
                <a href="<?= BASE_URL?>home/edit/<?= $item['NIS'] ?>" class="btn btn-sm btn-warning m-1">edit</a>
                <a href="<?= BASE_URL?>home/delete/<?= $item['NIS'] ?>" class="btn btn-sm btn-danger m-1">delete</a>
              </th>
            </tr>

          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <script src="<?= BASE_URL ?>public/js/bootstrap.min.js"></script>
  </body>
</html>