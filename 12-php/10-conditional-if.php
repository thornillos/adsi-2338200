<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Conditional if"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP & Bootstrap 5</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <main class="container">
    <div class="row">
        <div class="col-6 offset-3 text-center">
            <?php echo "<h1 class='mt-5'>Conditional if</h1>";?>
            <hr>
            <?php $day = date('D'); ?>
				    <?php if ($day == "Mon"): ?>
				    	<span class="badge rounded-pill text-bg-warning ">Today is moonday </span>
				    <?php elseif ($day == "Tue"): ?>
				    	<span class="badge rounded-pill text-bg-warning ">Today is tuesday</span>
				    <?php elseif ($day == "Wed"): ?>
				    	<span class="badge rounded-pill text-bg-warning ">Today is wednesday</span>
				    <?php elseif ($day == "Thu"): ?>
				    	<span class="badge rounded-pill text-bg-warning ">Today is thursday</span>
				    <?php elseif ($day == "Fri"): ?>
				    	<span class="badge rounded-pill text-bg-warning ">Today is  Friday</span>
				    <?php else: ?>
				    	<span class="badge badge-pill text-bg-succes">Happy weekend!</span>
				    <?php endif ?>
		

        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>