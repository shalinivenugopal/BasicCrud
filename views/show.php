<?php 
  include_once '../model/db.php';
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Show</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Mobile</th>
					<th>DOB</th>
					<th>Description</th>
					<th>Gender</th>

					<!-- <th colspan ="2">Action</th> -->
				</tr>
			</thead>
			<tbody>
<?php
  				$sql="SELECT * FROM form";
				$result = mysqli_query($conn, $sql);

				while ($data = mysqli_fetch_array($result)) 
				{ ?>
					<tr>
						<td><?php echo $data['name'] ?></td>
						<td><?php echo $data['mobile'] ?></td>
						<td><?php echo $data['dob'] ?></td>
						<td><?php echo $data['description'] ?></td>
						<td><?php echo $data['gender'] ?></td>

						<td>
							<a  href="../views/update.php?edit=<?php echo $data['id']; ?> ">Edit</a>
						</td>
						 <td>
							<a   href="../controller/DeleteController.php?delete=<?php echo $data['id']; ?>">Delete</a>
						</td> 
					</tr>
				<?php	} ?>

			</tbody>
		</table>
	</body>
</html>