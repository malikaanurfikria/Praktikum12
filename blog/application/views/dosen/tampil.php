<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOSEN</title>
    <script>
function hapusDosen(pesan){
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
    <h3>Daftar Dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor =1;
            foreach ($dosen as $dsn) {
            ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $dsn -> nama ?></td>
                <td><?= $dsn -> nidn ?></td>
                <td><?= $dsn -> pendidikan ?></td>
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