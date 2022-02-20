<?php 
    include 'php/function.php';
    $data = jadwalPage();

    $correct = 0;
    if($data['proposalSkripsi'] != NULL) $correct++;
    if($data['bimbinganID'] != NULL) $correct++;
    if($data['bimbinganStatus'] == 1) $correct++;
    if($data['softcoverSkripsi'] != NULL) $correct++;

    if(empty($data) || $correct != 4){
        header("Location: php/dashboard.html");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="assets/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Binus University</title>
</head>
<body>
    <div class="body-1 container d-flex height">
        <div class="body-2 d-flex flex-column w-40 bgBlue">
            <div class="m-auto">
                <div class="d-flex align-items-center flex-column">
                    <img src="assets/profile.png" alt="" width="170">
                    <div class="fs-4 fw-bold text-light"><?= $data['namaMahasiswa'] ?></div>
                    <div class="fs-5 fw-bold text-light"><?= $data['nimMahasiswa'] ?></div>
                </div>
                <div class="m-5 bgWhite text-dark p-3 rounded">
                    <div class="fw-bold fs-5">Judul Skripsi</div>
                    <div class="fs-6 py-3"><?= $data['judulSkripsi'] ?></div>
                    <a href="#" class="text-decoration-none text-light btn bgBlue w-100 fw-bold">Lihat Skripsi</a>
                </div>
            </div>
        </div>
        <div class="body-3 d-flex w-60 flex-column mx-5">
            <div class="navbar my-3 d-flex justify-content-end">
                <img src="assets/logo.png" alt="" width="150">
            </div>
            <div>
                <h2 class="text-uppercase pb-2 border-bottom border-1 border-dark mb-3">Jadwal Sidang</h2>
                <div class="my-4">
                    <div class="pb-2"><u class="fs-5">Dosen Pembimbing</u></div>
                    <div class="d-flex align-items-center">
                        <img src="assets/<?= $data['profileDosen'] ?>" alt="" width="125" class="me-4">
                        <div class="fw-bold fs-5">
                            <div class="text-uppercase"><?= $data['namaDosen'] ?></div>
                            <div><?= $data['dosenKode'] ?></div>
                        </div>
                    </div>
                </div>
                <div class="my-4">
                    <div class="pb-2"><u class="fs-5">Ruang</u></div>
                    <div class="d-flex fw-bold fs-5">
                        Virtual Class - VC
                    </div>
                </div>
                <div class="my-4">
                    <div class="pb-2"><u class="fs-5">Tanggal dan Waktu</u></div>
                    <div class="d-flex flex-column w-50">
                        <div class="w-100 d-flex">
                            <div class="w-25 text-grey fw-bold">Start</div>
                            <div class="fw-bold"><?= $data['tanggalSkripsi'] ?>, <?= $data['startTime'] ?> GMT+7</div>
                        </div>
                        <div class="w-100 d-flex">
                            <div class="w-25 text-grey fw-bold">End</div>
                            <div class="fw-bold"><?= $data['tanggalSkripsi'] ?>, <?= $data['endTime'] ?> GMT+7</div>
                        </div>
                    </div>
                </div>
                <div class="my-5">
                    <a href="#" class="btn bgBlue text-decoration-none text-light mx-4 px-3">Link Zoom</a>
                    <a href="#" class="btn bgBlue text-decoration-none text-light mx-4 px-3">Copy Link</a>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>