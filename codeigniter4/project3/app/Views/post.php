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
			<h1 class="display-4 fw-bold">Manchester United Blog</h1>
			<p class="fs-4">
				Latest news, match analysis, club legends, and everything from the world of the Red Devils.
			</p>
		</div>
	</div>




	<!-- Google-Style Live Search -->
	<form class="mb-5 position-relative" autocomplete="off">
		<div class="input-group shadow-sm">
			
			<input type="text" id="liveSearch" class="form-control border-start-0"
				placeholder="Search Manchester United news...">
				<button type="submit" class="btn btn-danger">
            Search
        </button>
		</div>

		<!-- Suggestion Dropdown -->
		<div id="suggestions" class="list-group position-absolute w-100 shadow"
			style="z-index: 9999; top: 100%; border-radius: 0 0 10px 10px;">
		</div>
	</form>

	<script>
		const searchInput = document.getElementById("liveSearch");
		const suggestions = document.getElementById("suggestions");

		const posts = [
			<?php foreach ($posts as $post): ?>
		{
					title: "<?= addslashes($post['title']) ?>",
					slug: "<?= $post['slug'] ?>"
				},
			<?php endforeach; ?>
		];

		searchInput.addEventListener("input", function () {
			const query = this.value.toLowerCase().trim();
			suggestions.innerHTML = "";

			if (!query) {
				suggestions.style.display = "none";
				return;
			}

			const matches = posts.filter(post =>
				post.title.toLowerCase().includes(query)
			);

			if (matches.length === 0) {
				suggestions.innerHTML = `
			<div class="list-group-item text-muted">
				No results found
			</div>
		`;
				suggestions.style.display = "block";
				return;
			}

			matches.slice(0, 8).forEach(post => {
				const item = document.createElement("a");
				item.href = "/post/" + post.slug;
				item.className = "list-group-item list-group-item-action";

				item.innerHTML = `
			<div class="d-flex align-items-center">
				<span class="me-2 text-secondary">></span>
				<span>${post.title}</span>
			</div>
		`;

				suggestions.appendChild(item);
			});

			suggestions.style.display = "block";
		});

		// Hide dropdown when clicking outside
		document.addEventListener("click", function (e) {
			if (!searchInput.contains(e.target) && !suggestions.contains(e.target)) {
				suggestions.style.display = "none";
			}
		});

		// Show again when refocusing
		searchInput.addEventListener("focus", function () {
			if (suggestions.innerHTML.trim() !== "") {
				suggestions.style.display = "block";
			}
		});
	</script>

	

	<div class="container">

		<!-- Featured Section -->
		<div class="row mb-4">
			<div class="col-md-12">
				<div class="card shadow-sm">
					<div class="card-body text-center">
						<h3 class="fw-bold">Red Devils Stories & Updates</h3>
						<p>
							Stay informed with exclusive Manchester United content, from iconic history
							to modern-day performances.
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Blog Posts -->
		<div class="row">
			<?php foreach ($posts as $post): ?>
				<div class="col-md-6 col-lg-4 my-3">
					<div class="card h-100 shadow-sm">
						<div class="card-body d-flex flex-column">

							<h5 class="card-title fw-bold">
								<a href="/post/<?= $post['slug'] ?>" class="text-decoration-none">
									<?= $post['title'] ?>
								</a>
							</h5>

							<p class="card-text">
								<?= substr(strip_tags($post['content']), 0, 150) ?>...
							</p>

							<div class="mt-auto">
								<a href="/post/<?= $post['slug'] ?>" class="btn btn-danger btn-sm">
									Read More
								</a>
							</div>

						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>

		<!-- Closing Banner -->
		<div class="row mt-5 mb-4">
			<div class="col-md-12">
				<div class="card text-center shadow-sm">
					<div class="card-body">
						<h4 class="fw-bold">Glory Glory Man United</h4>
						<p>
							Explore every story, every victory, and every chapter of Manchester United's football
							legacy.
						</p>
					</div>
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