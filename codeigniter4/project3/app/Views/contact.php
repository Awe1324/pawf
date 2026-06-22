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
			<h1 class="display-5 fw-bold">Contact RedDevils Hub</h1>
			<p class="fs-4">Connect, Explore, and Join the Red Devils Community</p>
		</div>
	</div>

	<div class="container">
		<div class="row">

			<!-- Location -->
			<div class="col-md-12 my-3 card">
    <div class="card-body text-center">
        <h5 class="h5">Our Legendary Home</h5>
        <p>
            Old Trafford, Sir Matt Busby Way, Manchester, England.<br>
            The iconic Theatre of Dreams, home to Manchester United’s historic legacy and passionate supporters worldwide.
        </p>

        <a href="https://www.google.com/maps/place/Old+Trafford/" target="_blank" class="btn btn-danger mb-3">
            View Full Location on Google Maps
        </a>

        <!-- Google Maps Embed -->
        <div class="ratio ratio-16x9">
            <iframe 
                src="https://www.google.com/maps?q=Old+Trafford+Manchester+United&output=embed"
                width="600"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>
</div>

			<!-- Email -->
			<div class="col-md-6 my-3 card">
    <div class="card-body text-center">
        <h5 class="h5">Email</h5>
        <p>
            Stay connected for news updates, collaborations, or fan discussions.
        </p>

        <a href="mailto:contact@reddevilshub.com" class="d-block mb-2">
            contact@reddevilshub.com
        </a>

        <a href="mailto:support@reddevilshub.com" class="d-block">
            support@reddevilshub.com
        </a>
    </div>
</div>

			<!-- Phone -->
			<div class="col-md-6 my-3 card">
    <div class="card-body text-center">
        <h5 class="h5">Phone</h5>
        <p>
            Reach us directly for supporter inquiries, collaborations, or community updates.
        </p>

        <a href="tel:+441616767770" class="d-block mb-2">
            +44 161 676 7770
        </a>

        <a href="https://wa.me/441616767770" target="_blank" class="d-block">
            WhatsApp Community Contact
        </a>
    </div>
</div>

			<!-- Developer / Project Links -->
			<!-- Social Media Links -->
			<div class="col-md-12 my-3 card">
				<div class="card-body text-center">
					<h5 class="h5">Connect With Us</h5>
					<p>
						Follow our community and explore project development through social platforms:
					</p>

					<div class="d-flex justify-content-center gap-4 mt-4">

						<!-- GitHub -->
						<a href="https://github.com/yourusername" target="_blank">
							<img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="GitHub" width="50"
								height="50">
						</a>

						<!-- LinkedIn -->
						<a href="https://linkedin.com/in/yourprofile" target="_blank">
							<img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn" width="50"
								height="50">
						</a>

						<!-- Instagram -->
						<a href="https://instagram.com/yourprofile" target="_blank">
							<img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram"
								width="50" height="50">
						</a>

						<!-- Facebook -->
						<a href="https://facebook.com/yourprofile" target="_blank">
							<img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" width="50"
								height="50">
						</a>

					</div>
				</div>
			</div>
		</div>

		<!-- Fan Message -->
		<div class="col-md-12 my-3 card">
			<div class="card-body text-center">
				<h5 class="h5">Glory Glory Man United</h5>
				<p>
					Join millions of passionate supporters worldwide and stay connected with the spirit of Manchester
					United.
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