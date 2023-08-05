<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khaeril Anwar</title>
    <!-- Link Favicon -->
    <link rel="shortcut icon" href="/assets/img/logo mka.ico" type="image/x-icon">
    <!-- Link CSS TailwindCSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- link CDN Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
</head>

<body class="">

    <?= $this->include('layouts/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <?= $this->include('layouts/footer'); ?>

    <!-- link cdn Flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
</body>

</html>