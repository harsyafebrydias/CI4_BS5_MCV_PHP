<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report PDF</title>
</head>
<body>
<h1>INI HALAMAN UNTUK SHOW DATA CHUAKZ</h1>
<p>DATA MAHASISWA BERUPA NIM, NAMA, FAKULTAS DAN ALAMAT</p>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>    
        <tr>
            <td>NIM</td>
            <td>NAMA</td>
            <td>FAKULTAS</td>
            <td>ALAMAT</td>
        </tr>
        </thead>
        <?php
            foreach ($hasil as $row){

        ?>
        <tr>
            <td><?php echo $row->nim; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->fakultas; ?></td>
            <td><?php echo $row->alamat; ?></td>
          
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>