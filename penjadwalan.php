<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap');

        body {
            background-color: #f2f2f2;
            font-family: 'Poppins', 'sans-serif';
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
        }
        th,td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #042331;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }

        body {
            background: url(/gambar/kereta_api.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100%;
            width: 100%;
        }
        
    </style>
</head>
<body>
<table>
       <thead>
         <tr>
         <th>IDKereta</th>
         <th>NamaKereta</th>
         <th>Jam</th>
         <th>Tujuan</th>
         <th>Tiba</th>
        </tr>
      </thead>
 <tbody>
<?php
    require 'koneksi.php';
    $namaKereta = $_POST['namaKereta'];
    $tujuan = $_POST['tujuan'];
    
    $query_sql = "SELECT * FROM jadwal WHERE namaKereta = '$namaKereta' AND tujuan = '$tujuan'";
    $result = mysqli_query($conn, $query_sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $idKereta = $row["idKereta"];
            $namaKereta = $row["namaKereta"];
            $jam = $row["jam"];
            $tujuan = $row["tujuan"];
            $tiba = $row["tiba"];
            
            echo "<tr>";
            echo "<td>$idKereta</td>";
            echo "<td>$namaKereta</td>";
            echo "<td>$jam</td>";
            echo "<td>$tujuan</td>";
            echo "<td>$tiba</td>";
          
            echo "</tr>";
        }
    } else {
        echo "<tr>";
        echo "<td colspan='5'>Tidak ada data</td>";
        echo "</tr>";
    }

    mysqli_close($conn);
?></tbody>
</table>
</body>
</html>