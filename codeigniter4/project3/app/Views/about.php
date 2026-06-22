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

<div class="p-5 mb-4 rounded-3 text-center">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">About Manchester United</h1>
        <p class="fs-4">The Legacy, Passion, and Glory of the Red Devils</p>
    </div>
</div>

<div class="container">
    <div class="row">

        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Club History</h5>
                <p>
                    Manchester United Football Club, founded in 1878, is one of the most successful and globally recognized football clubs in the world. With countless domestic league titles, European triumphs, and legendary players, the club has built a powerful football legacy.
                </p>
            </div>
        </div>

        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Achievements & Legends</h5>
                <p>
                    From Sir Alex Ferguson’s golden era to iconic players such as George Best, Eric Cantona, Ryan Giggs, David Beckham, and Cristiano Ronaldo, Manchester United has consistently represented excellence, determination, and football greatness.
                </p>
            </div>
        </div>

        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">The Red Devils Spirit</h5>
                <p>
                    More than just a football club, Manchester United symbolizes resilience, loyalty, and an unmatched connection with millions of supporters worldwide. Old Trafford, known as the Theatre of Dreams, remains a symbol of passion and football heritage.
                </p>
            </div>
        </div>

    </div>
</div>

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