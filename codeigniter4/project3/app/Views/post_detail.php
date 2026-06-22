
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

<div class="p-5 mb-5 rounded-3 text-center">
    <div class="container py-5">
        <h1 class="display-4 fw-bold">Manchester United Blog Detail</h1>
        <p class="fs-4">
            Exclusive insights, club history, match stories, and Red Devils passion.
        </p>
    </div>
</div>

<div class="container">

    <!-- Article Section -->
    <div class="row justify-content-center">
        <div class="col-md-10 my-3">
            <div class="card shadow-sm">
                <div class="card-body">

                    <!-- Blog Title -->
                    <h2 class="fw-bold mb-3">
                        <?= $post['title'] ?>
                    </h2>

                    <!-- Meta Information -->
                    <div class="mb-4 text-muted">
                        <span>
                            By <strong><?= $post['author'] ?></strong>
                        </span>
                        |
                        <span>
                            <?= date('d F Y', strtotime($post['created_at'])) ?>
                        </span>
                    </div>

                    <!-- Divider -->
                    <hr>

                    <!-- Blog Content -->
                    <div class="mt-4">
                        <p class="fs-5" style="line-height: 1.8;">
                            <?= $post['content'] ?>
                        </p>
                    </div>

                    <!-- Closing Quote -->
                    <div class="mt-5 text-center">
                        <blockquote class="blockquote">
                            <p>"Glory Glory Man United"</p>
                        </blockquote>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Back Button -->
    <div class="row mt-4 mb-5">
        <div class="col-md-12 text-center">
            <a href="<?= base_url('/post') ?>" class="btn btn-danger">
    ← Back to Blog
</a>
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