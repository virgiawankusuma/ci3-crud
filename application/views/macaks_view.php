<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?= $title; ?></title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1>
                    <?= $title; ?>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Prodi</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($mahasiswa as $mhs => $m) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $m->nim; ?></td>
                                        <td><?= $m->nama; ?></td>
                                        <td><?= $m->prodi; ?></td>
                                        <td><?= $m->alamat; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?><?= $m->id; ?>" class="badge bg-success">Detail</a>
                                            <a href="<?= base_url(); ?>edit/<?= $m->id; ?>" class="badge bg-warning">Edit</a>
                                            <a href="<?= base_url(); ?>delete/<?= $m->id; ?>" class="badge bg-danger" onclick="return confirm('yakin ingin menghapus?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- add mahasiswa link -->
                        <div class="mt-3">
                            <a href="<?= base_url(); ?>add" class="btn btn-primary">Tambah Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>