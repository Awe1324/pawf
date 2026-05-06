<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore MU | KING MU</title>

    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

<?= $this->include('layouts/navbar'); ?>

<!-- Hero Section -->
<div class="p-5 mb-5 text-white text-center rounded-3"
     style="background: url('<?= base_url('uploads/image.png') ?>') center/cover no-repeat;">
    <div class="container py-5" style="background: rgba(0,0,0,0.6); border-radius: 15px;">
        <h1 class="display-3 fw-bold text-danger">Explore Manchester United</h1>
        <p class="fs-3">The Theatre of Dreams. Home of Legends.</p>
        <p class="lead">
            Discover the rich history, iconic players, unforgettable moments,
            and glorious achievements of the Red Devils.
        </p>
    </div>
</div>

<div class="container">

    <!-- Club History -->
    <section id="history" class="mb-5">
        <div class="card shadow border-0">
            <img src="<?= base_url('uploads/club history.png') ?>" class="card-img-top" alt="Manchester United History">
            <div class="card-body">
                <h2 class="fw-bold text-danger">Club History</h2>
                <p class="fs-5">
                    Since 1878, Manchester United has risen from humble beginnings
                    to global football royalty. Through triumph, tragedy,
                    and resilience, the club’s legacy continues to inspire millions.
                </p>
            </div>
        </div>
    </section>

    <!-- Legendary Players -->
    <section id="legends" class="mb-5">
        <div class="card shadow border-0">
            <div class="card-body">
                <h2 class="fw-bold text-danger text-center mb-4">Legendary Players</h2>

                <div class="row text-center">

                    <div class="col-md-3">
                        <img src="<?= base_url('uploads/sir boby.png') ?>" class="img-fluid rounded mb-3" alt="Sir Bobby Charlton">
                        <h5>Sir Bobby Charlton</h5>
                    </div>

                    <div class="col-md-3">
                        <img src="<?= base_url('uploads/cantona.png') ?>" class="img-fluid rounded mb-3" alt="Eric Cantona">
                        <h5>Eric Cantona</h5>
                    </div>

                    <div class="col-md-3">
                        <img src="<?= base_url('uploads/beckham.png') ?>" class="img-fluid rounded mb-3" alt="David Beckham">
                        <h5>David Beckham</h5>
                    </div>

                    <div class="col-md-3">
                        <img src="<?= base_url('uploads/ronaldo.png') ?>" class="img-fluid rounded mb-3" alt="Cristiano Ronaldo">
                        <h5>Cristiano Ronaldo</h5>
                    </div>

                </div>
            </div>
        </div>
    </section>


   <!-- Featured Modern Stars -->
<section id="squad" class="mb-5">
    <div class="card shadow border-0">
        <img src="<?= base_url('uploads/current_squad.png') ?>" class="card-img-top" alt="Modern Manchester United Stars">
        <div class="card-body">
            <h2 class="fw-bold text-danger">Featured Modern Stars</h2>
            <p class="fs-5">
                Manchester United’s modern era continues to be shaped by exceptional talent,
                determined leadership, and rising stars who embody the spirit of Old Trafford.
            </p>

            <div class="row text-center mt-4">

                <div class="col-md-3">
                    <h5 class="fw-bold">Bruno Fernandes</h5>
                    <p>Creative leader and midfield engine.</p>
                </div>

                <div class="col-md-3">
                    <h5 class="fw-bold">Marcus Rashford</h5>
                    <p>Academy graduate with pace and passion.</p>
                </div>

                <div class="col-md-3">
                    <h5 class="fw-bold">Casemiro</h5>
                    <p>Elite experience and midfield dominance.</p>
                </div>

                <div class="col-md-3">
                    <h5 class="fw-bold">Alejandro Garnacho</h5>
                    <p>Emerging young talent for the future.</p>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- Historic Achievements -->
<section id="trophies" class="mb-5">
    <div class="card shadow border-0">
        <img src="<?= base_url('uploads/trophies.png') ?>" class="card-img-top" alt="Manchester United Historic Achievements">
        <div class="card-body text-center">
            <h2 class="fw-bold text-danger">Historic Achievements</h2>

            <p class="fs-5">
                Manchester United stands among football’s most decorated institutions,
                with a legacy defined by domestic supremacy, European success,
                and worldwide recognition.
            </p>

            <div class="row mt-4">

                <div class="col-md-3">
                    <h3 class="fw-bold">20</h3>
                    <p>English League Titles</p>
                </div>

                <div class="col-md-3">
                    <h3 class="fw-bold">3</h3>
                    <p>UEFA Champions League Titles</p>
                </div>

                <div class="col-md-3">
                    <h3 class="fw-bold">12</h3>
                    <p>FA Cup Victories</p>
                </div>

                <div class="col-md-3">
                    <h3 class="fw-bold">Global</h3>
                    <p>Football Legacy</p>
                </div>

            </div>

            <blockquote class="blockquote mt-4">
                <p>"Built on history. Driven by greatness."</p>
            </blockquote>

        </div>
    </div>
</section>

    <!-- About -->
    <section id="about" class="mb-5">
        <div class="card shadow-lg border-0 text-white"
             style="background: url('<?= base_url('uploads/fans.jpg') ?>') center/cover no-repeat;">
            <div class="card-body text-center py-5" style="background: rgba(0,0,0,0.7);">
                <h2 class="fw-bold text-danger">The Red Devils Spirit</h2>
                <p class="fs-5">
                    More than football. Manchester United is tradition,
                    pride, loyalty, and worldwide passion.
                </p>

                <blockquote class="blockquote mt-4">
                    <p class="fs-3">"Glory Glory Man United"</p>
                </blockquote>
            </div>
        </div>
    </section>

</div>

<!-- Footer -->
<div class="container py-4">
    <footer class="pt-3 mt-4 text-muted border-top text-center">
        <div class="container">
            &copy; <?= Date('Y') ?> KING MU | Manchester United Fan Website
        </div>
    </footer>
</div>

<script src="<?= base_url('js/jquery.min.js') ?>"></script>
<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>