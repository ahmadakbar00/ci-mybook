<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>My Book</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="container p-5">

    <h3>Halaman Tambah buku</h3>

    <form role="form" method="post" action="<?php echo base_url();?>Add/insert">
        <div class="form-group">
            <label >Judul</label>
            <input type="text" name ="title" class="form-control" >
        </div>
        <div class="form-group">
            <label >Penulis</label>
            <input type="text" name ="author" class="form-control" >
        </div>
        <div class="form-group">
            <label >Tahun</label>
            <input type="number" name ="year" class="form-control" >
        </div>
        <div class="form-group">
            <label >Penerbit</label>
            <input type="text" name ="publisher" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
