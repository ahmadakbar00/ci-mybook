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
<body>
	<?php if ($this->session->flashdata('flash')){ ?>
      	<div class="alert alert-primary" role="alert">
            <?= $this->session->flashdata('flash');   ?>
  		</div>
    <?php } ?>

	<a href="<?php echo base_url();?>Add" class="btn btn-primary m-4">
		Tambah Data
	</a>

	<!-- LIST BUKU -->
	<table class="table table-striped text-center">
		<thead>
			<tr>
			<th scope="col">No</th>
			<th scope="col">Judul</th>
			<th scope="col">Penulis</th>
			<th scope="col">Year</th>
			<th scope="col">Publisher</th>
			<th scope="col">Sampul</th>
			<th scope="col">action</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($books as $row): ?>
				<tr>  
					<td><?php echo $row->id;?></td>  
					<td><?php echo $row->title;?></td>  
					<td><?php echo $row->author;?></td>  
					<td><?php echo $row->year;?></td>  
					<td><?php echo $row->publisher;?></td>  
					<td>
						<img src="<?php echo $row->imagepath;?>" alt="" >
					</td>  
					<td>
						<a href="<?= base_url(),"Welcome/edit/".$row->id;?>" class="btn btn-warning btn-sm">Ubah</a>
						<a href="<?= base_url(), "Delete/hapus/".$row->id;?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin ?')">Hapus</a>

					</td>  
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
	<!-- END LIST BUKU -->

</body>
</html>
