<?php
$servername = '103.31.39.50';
$username = 'user_project5db';
$password = 'user_project5db';
$dbname = 'project5db';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// echo "berhasil";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
  <title>Kelompok 5</title>
</head>

<body>

  <center>

    <h1 class="magic-shadow">INFRASTRUKTUR PENDUKUNG APLIKASI</h1>
    <h4>Dosen : Bpk. Miftahul Fadli Muttaqin</h4>

    <h2>KELOMPOK 5</h2>
    <table class="tabel1" border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Npm</th>
      </tr>

      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
          <td><img src="img/<?= $row["Gambar"];  ?>" width="50"></td>
          <td><?= $row["Nama"];  ?></td>
          <td><?= $row["Npm"];  ?></td>
        </tr>
      <?php endwhile; ?>

    </table>

    <sub><i>2021 All Right Reserved by Kelompok 5.</i></sub>

  </center>

</body>

</html>