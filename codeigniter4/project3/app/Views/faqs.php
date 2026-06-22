
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
        <h1 class="display-4 fw-bold">Manchester United FAQ</h1>
        <p class="fs-4">
            Discover the history, passion, and legendary legacy behind one of football’s greatest clubs.
        </p>
    </div>
</div>

<div class="container">

    <!-- Intro Section -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h3 class="fw-bold">Glory Glory Man United</h3>
                    <p>
                        Whether you're a lifelong supporter or a new fan, here are the most common questions
                        about Manchester United, Old Trafford, and the Red Devils community.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Accordion Style -->
    <div class="accordion" id="faqAccordion">

        <div class="accordion-item my-3">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                    When was Manchester United founded?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Manchester United was founded in 1878 as Newton Heath LYR Football Club before becoming Manchester United in 1902.
                </div>
            </div>
        </div>

        <div class="accordion-item my-3">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                    Why is Old Trafford called the Theatre of Dreams?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Sir Bobby Charlton gave Old Trafford this iconic nickname because of its rich football history,
                    unforgettable moments, and global significance.
                </div>
            </div>
        </div>

        <div class="accordion-item my-3">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                    Who is the club’s greatest manager?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Sir Alex Ferguson remains Manchester United’s most successful manager, delivering decades of dominance and silverware.
                </div>
            </div>
        </div>

        <div class="accordion-item my-3">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                    What is RedDevils Hub?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    RedDevils Hub is a fan-focused platform dedicated to Manchester United news, club culture,
                    historical achievements, and supporter engagement.
                </div>
            </div>
        </div>

        <div class="accordion-item my-3">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                    How can I join the community?
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Connect through our social platforms, contact channels, and regular updates to stay part of the Manchester United supporter network.
                </div>
            </div>
        </div>

    </div>

    <!-- Closing Section -->
    <div class="row mt-5 mb-4">
        <div class="col-md-12">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h4 class="fw-bold">Still Have Questions?</h4>
                    <p>
                        Reach out through our Contact page and become part of the ever-growing Red Devils legacy.
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