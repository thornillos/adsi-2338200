<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Variables"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Form post</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <main class="container">
    <div class="row">
        <div class="col-6 offset-3 text-center">
            <?php echo "<h1 class='mt-5'>Variables</h1>";?>
            <hr>
            <form action="" method="GET">
					<div class="mb-3">
						<label for="name" class="form-label">Full Name:</label>
						<input type="text" class="form-control" name="name" id="name">
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email:</label>
						<input type="email" class="form-control" name="email" id="email">
					</div>
					<div class="mb-3">
						<input type="submit" class="btn btn-success" value="Send Form">
						<input type="reset" class="btn btn-light" value="Clear Form">
					</div>
				</form>
				<?php if ($_GET): ?>
					<div class="alert alert-success">
						<strong>Full Name:</strong> <?php echo $_GET['name']; ?>
						<br>
						<strong>Email:</strong> <?php echo $_GET['email']; ?>
					</div>
				<?php endif ?>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>