<?php

if (isset($_POST['submit'])) {
    try  {
        
		# Import the file of the DBMS your are testing 
        require "../db/oracle.php";

        $connection = new PDO($dsn, $username, $password, $options);
		
		$sql = "SELECT id,productname FROM products WHERE productname LIKE '%" . $_POST['product-name'] . "%'";
        $statement = $connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();

		# For PostgreSQL stacked queries
		#$connection = pg_connect("host=host-ip port=5432 dbname=dbname user=postgres password=postgres");
		#$result = pg_fetch_all(pg_query($connection, $sql));

    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Product Catalog</title>

		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

		<div class="container">

			<div class="top">
				<h2 class="centered">Product Catalog</h2>

				<div class="form-div centered">
					<form method="post" class="buscar-form">
						<input type="text" name="product-name" id="product-name" placeholder="Product name..."/><input type="submit" name="submit" value="Search">
					</form>
				</div>
			</div>

			<div class="content">
				<?php  
					if (isset($_POST['submit'])) {
						if ($result) { ?>
							
							<h3>Results</h3>
							<table>
								<thead>
									<tr>
										<th id="product-id">#</th>
										<th id="product-name">Name</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($result as $row) { ?>
										<tr>
											<td><?php if ($name=="oracle") {echo $row["ID"];} else {echo $row["id"];} ?></td>
											<td><?php if ($name=="oracle") {echo $row["PRODUCTNAME"];} else {echo $row["productname"];} ?></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>

						<?php } else { ?>
							<blockquote class="centered">No results found for <?php echo $_POST['product-name']; ?>.</blockquote>
						<?php } 
					}
				?>
			</div>

		</div>

	</body>

</html>