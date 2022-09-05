<?php
$url = 'https://api.banghasan.com/quran/format/json/acak';
$api = file_get_contents($url);
$data = json_decode($api, true);
$data_ar = $data['acak']['ar'];
$data_id = $data['acak']['id'];
$data_surat = $data['surat'];

// var_dump($data);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Satu Ayat.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container d-flex flex-column justify-content-center align-items-center ">

        <div class="row">
            <div class="col mt-3">
                <h1 class="brand">satu ayat.</h1>
            </div>
        </div>
    <!-- <div class="css"></div> -->
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card text-center">
                    <div class="card-header">
                        <h5 class="card-title"><?= $data_surat['nama']; ?> <span class="card-title arabic-text">( <?= $data_surat['asma']; ?> )</span> <?= $data_surat['nomor']; ?>:<?= $data_surat['ayat']; ?></h5>
                    </div>
                    <div class="card-body">
                        <h1 class="card-text fw-bold arabic-text"><?= $data_ar['teks']; ?></h1>
                        <p class="card-text mt-3"><i>"<?= $data_id['teks']; ?>"</i></p>
                        <button class="btn btn-primary" onClick="window.location.reload();">Refresh Page</button>
                    </div>
                    <div class="card-footer">
                        <a href="https://github.com/teddynanta" target="__blank"> <i class="bi bi-github"></i> </a>
                        <a href="https://instagram.com/teddynantaa" target="__blank"> <i class="bi bi-instagram"></i> </a>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>
</body>

</html>