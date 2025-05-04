<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 404 Error Page</title>

    <link rel="stylesheet" href="<?= base_url('/assets/bootstrap/css/bootstrap.min.css') ?>">

</head>

<body>
<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <h1 class="display-1 fw-bold">500</h1>
        <p class="fs-3">Internal Server Error.</p>
        <p class="lead">
            <?= $error ?? ''; ?>
        </p>
        <a href="<?= base_url('/') ?>" class="btn btn-primary">Go Home</a>
    </div>
</div>
</body>

</html>