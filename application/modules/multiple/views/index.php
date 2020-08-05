<html>
<head>
  <title>Multiple Insert</title>
</head>
<body>
  <h1>Data Siswa</h1>
  <a href="<?php echo base_url("multiple/form"); ?>">Tambah Data</a>
  <a style="margin-left: 50px;" href="<?php echo site_url("contoh"); ?>">Contoh 2</a><br><br>
  <style>
    table {
      border-collapse: collapse;
    }
    table, td, th {
      border: 1px solid black;
    }
  </style>
  <table border="1" cellpadding="5">
    <tr>
      <th>No</th>
      <th>NIS</th>
      <th>Nama</th>
      <th>Telepon</th>
      <th>Alamat</th>
    </tr>
    <?php
    if( ! empty($siswa)){
      $no = 1;
      foreach($siswa as $data){
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$data->nis."</td>";
        echo "<td>".$data->nama."</td>";
        echo "<td>".$data->telp."</td>";
        echo "<td>".$data->alamat."</td>";
        echo "</tr>";
        $no++;
      }
    }
    ?>
  </table>
</body>
</html>