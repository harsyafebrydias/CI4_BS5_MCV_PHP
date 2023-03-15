<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <style>
		body {
			font-family: Arial, sans-serif;
		}
		
		h1 {
			font-family: Verdana, Geneva, sans-serif;
		}
		
		p {
			font-family: Verdana, Geneva, sans-serif;
		}
	</style>
    <title>REPORT PDF</title>
</head>
<img src="C:\Users\lenovo\Downloads\codeigniter4 - Copy\app\Views\041086.png"  width="50" height="30">
<h1>INI HALAMAN UNTUK REPORT SHOW DATA CHUAKZ</h1>
<p>DATA MAHASISWA BERUPA NIM, NAMA, FAKULTAS DAN ALAMAT</p>
<table id="example" class="table table-striped table-bordered" style="width:100%" table border="2">
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