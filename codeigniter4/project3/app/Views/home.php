<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyBlog</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

	<?= $this->include('layouts/navbar'); ?>

<!-- Hero Section -->
<div class="p-5 mb-4 rounded-3 text-center">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">Welcome to RedDevils Hub</h1>
        <p class="fs-4">Your Home for Manchester United News, History, and Glory</p>
    </div>
</div>

<!-- Main Content -->
<div class="container my-5">
    <h2 class="text-center mb-4">Latest Manchester United Highlights</h2>

    <div class="row">

        <div class="col-md-4 my-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Historic Legacy</h5>
                    <p class="card-text">
                        Manchester United stands as one of football’s greatest clubs, filled with legendary achievements, iconic players, and unforgettable victories.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Current Squad</h5>
                    <p class="card-text">
                        Explore the latest updates on Manchester United’s squad, transfer developments, and the club’s pursuit of future success.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Old Trafford Spirit</h5>
                    <p class="card-text">
                        Discover the passion of Old Trafford, where tradition, supporters, and the spirit of the Red Devils continue to thrive.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Footer -->
<div class="container py-4">
    <footer class="pt-3 mt-4 text-muted border-top text-center">
        <div class="container">
            &copy; <?= Date('Y') ?> RedDevils Hub | Manchester United Fan Website
        </div>
    </footer>
</div>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>