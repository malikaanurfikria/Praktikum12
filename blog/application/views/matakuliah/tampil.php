<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>
    <script>
function hapusMatakuliah(pesan){
    if (confirm(pesan)){
        return true;
    }
    else{
        return false;
    }
}
</script>
<?php
$username = $this->session->userdata('username');
if($username){
    echo "<h2>Selamat Datang $username</h2>";
}
?>
</head>
<body>
    <div class="col-md-12">
    <h3>Daftar Matakuliah</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Sks</th>
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($matakuliah as $mkl){
            ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $mkl -> nama ?></td>
                <td><?= $mkl -> sks ?></td>
                <td><?= $mkl -> kode ?></td>
                </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    </div> 
</body>
</html>