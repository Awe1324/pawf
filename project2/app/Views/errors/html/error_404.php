<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= lang('Errors.pageNotFound') ?></title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            height: 100vh;
            background: #f4f7f6;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            color: #444;
            display: flex;
            align-items: center;
            justify-content: center;
            line-height: 1.6;
        }
        .container {
            text-align: center;
            padding: 2rem;
            max-width: 500px;
            width: 90%;
        }
        .error-code {
            font-size: 8rem;
            font-weight: 900;
            color: #2d3436;
            line-height: 1;
            margin-bottom: 1rem;
            text-shadow: 10px 10px 0px rgba(0,0,0,0.05);
        }
        .error-message {
            font-size: 1.5rem;
            font-weight: 600;
            color: #636e72;
            margin-bottom: 1.5rem;
        }
        .description {
            background: #fff;
            padding: 1.5rem;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
            border-bottom: 4px solid #dd4814;
        }
        .description p {
            font-size: 1rem;
            color: #7f8c8d;
        }
        code {
            background: #f1f1f1;
            padding: 0.2rem 0.5rem;
            border-radius: 4px;
            font-family: monospace;
            color: #d63031;
        }
        .btn-back {
            display: inline-block;
            padding: 0.8rem 2rem;
            background-color: #dd4814;
            color: #fff !important;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(221, 72, 20, 0.3);
        }
        .btn-back:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(221, 72, 20, 0.4);
            background-color: #bf3e11;
        }
        /* Dekorasi Tambahan */
        .ghost-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <span class="ghost-icon">👻</span>
        <h1 class="error-code">404</h1>
        <p class="error-message">Oops! Halaman Tidak Ditemukan</p>

        <div class="description">
            <p>
                <?php if (ENVIRONMENT !== 'production') : ?>
                    <code><?= nl2br(esc($message)) ?></code>
                <?php else : ?>
                    <?= lang('Errors.sorryCannotFind') ?>
                <?php endif; ?>
            </p>
        </div>

        <a href="<?= base_url() ?>" class="btn-back">Kembali ke Beranda</a>
    </div>
</body>
</html>