<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFID Presence - Demo Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
    .info-cards {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap;
    }

    .card-custom {
        position: relative;
        width: 100%;
        max-width: 220px; /* Sesuaikan lebar card */
        min-height: 120px;
        padding: 15px;
        border-radius: 10px;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden;
    }

    .card-custom .number {
        font-size: 28px;
        font-weight: bold;
        margin: 0;
    }

    .card-custom .title {
        font-size: 14px;
        font-weight: 600;
        margin: 0;
    }

    .card-custom .detail-link {
        font-size: 12px;
        color: white;
        text-decoration: none;
        font-weight: bold;
    }

    .card-custom .icon-bg {
        position: absolute;
        right: 10px;
        top: 10px;
        font-size: 60px;
        opacity: 0.1;
    }

    /* Warna card */
    .card-red {
        background-color: #dc3545;
    }

    .card-green {
        background-color: #28a745;
    }

    .card-blue {
        background-color: #007bff;
    }
        .circle-icon {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 50px;
            margin: 0 auto;
        }
        .clickable-card {
            cursor: pointer;
            transition: 0.3s;
        }
        .clickable-card:hover {
            transform: scale(1.05);
        }
        html {
            scroll-padding-top: 180px;
        }
        body {
            padding-top: 30px;
        }
        .card-footer-custom {
            background-color: rgba(0, 0, 0, 0.3); /* Warna lebih gelap */
            margin: 0; /* Hilangkan margin */
            border-bottom-left-radius: 12px; /* Biar sesuai card */
            border-bottom-right-radius: 12px;
        }

        .card.bg-danger .card-footer-custom {
            background-color: rgba(0, 0, 0, 0.3); /* atau misalnya #b30000 untuk merah gelap */
        }

        .card.bg-success .card-footer-custom {
            background-color: rgba(0, 0, 0, 0.3); /* atau hijau gelap */
        }

        .card.bg-primary .card-footer-custom {
            background-color: rgba(0, 0, 0, 0.3); /* atau biru gelap */
        }

    </style>
</head>
<body>
    <x-navbar>
        <img src="/image/h-house.jpeg" alt="SMART HOME Starter Kit" class="img-fluid position-absolute end-0" style="height: 50px; margin: 10px;">
    </x-navbar>
    
    <div class="container-fluid pt-5 px-0"> 
        <div class="position-relative bg-dark text-white p-3 text-center">
            <a href="/invalid" class="btn btn-light position-absolute start-0" style="top: 13px; margin-left: 10px;">Kembali</a>
            <h4 class="m-0">RFID Presence - DEMO PRODUK</h4>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="row text-center mb-4 align-items-center">
            <div class="col-md-3 mb-3">
                <img src="image/detect.png" alt="Tap Card" width="50" id="tap-card-btn" style="cursor: pointer;">
                <p class="fw-bold mt-2">TEMPELKAN KARTU UNTUK<br>MELAKUKAN ABSENSI</p>
            </div>
            <div class="col-md-3 mb-3">
                <img src="image/rfid.png" alt="RFID" width="70">
            </div>
            <div class="col-md-3 mb-3" id="success-message" style="display: none;">
                <img src="image/ya.png" alt="Check" width="50">
                <p class="fw-bold mt-2">SELAMAT DATANG</p>
            </div>
            <div class="col-md-3 mb-3 position-relative" style="height: 100px;">
                <div id="error-message" style="display: none; position: absolute; left: 0; right: 0;">
                    <img src="image/no.png" alt="Invalid" width="50">
                    <p class="fw-bold mt-2">KARTU INVALID</p>
                </div>
            </div>
        </div>
        <hr class="border-3 border-dark my-4">
        <div class="container-fluid my-4 px-5">
    <div class="d-flex justify-content-between align-items-stretch gap-4 flex-wrap">

        <!-- CARD 1 -->
        <div class="card text-white bg-danger shadow rounded-3 flex-grow-1" style="width: 300px; height: 200px; position: relative; overflow: hidden;">
            <div class="card-body d-flex flex-column justify-content-center align-items-start text-start position-relative h-100 p-3" style="padding-bottom: 50px;">
                <div style="display: flex; flex-direction: column; gap: 2px;">
                    <h3 class="fw-bold m-0" style="transform: translateY(-5px);">6</h3> <!-- Angka naik 5px -->
                    <p class="m-0">INVALID CARD</p>
                </div>
                <div style="font-size: 80px; opacity: 0.1; position: absolute; top: 10px; right: 10px;">&#10006;</div>
            </div>
            <div class="card-footer-custom d-flex justify-content-between align-items-center px-3 py-2 rounded-bottom"
                style="background-color: rgba(0, 0, 0, 0.2); position: absolute; bottom: 0; left: 0; right: 0;">
                <a href="/invalid" class="text-white text-decoration-none fw-bold m-0">Detail</a>
                <span>&rarr;</span>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="card text-white bg-success shadow rounded-3 flex-grow-1" style="width: 300px; height: 200px; position: relative; overflow: hidden;">
            <div class="card-body d-flex flex-column justify-content-center align-items-start text-start position-relative h-100 p-3" style="padding-bottom: 50px;">
                <div style="display: flex; flex-direction: column; gap: 2px;">
                    <h3 class="fw-bold m-0" style="transform: translateY(-5px);">6</h3>
                    <p class="m-0">Sumber Daya Manusia</p>
                </div>
                <div style="font-size: 80px; opacity: 0.1; position: absolute; top: 10px; right: 10px;">&#128100;</div>
            </div>
            <div class="card-footer-custom d-flex justify-content-between align-items-center px-3 py-2 rounded-bottom"
                style="background-color: rgba(0, 0, 0, 0.2); position: absolute; bottom: 0; left: 0; right: 0;">
                <a href="/sdm" class="text-white text-decoration-none fw-bold m-0">Detail</a>
                <span>&rarr;</span>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="card text-white bg-primary shadow rounded-3 flex-grow-1" style="width: 300px; height: 200px; position: relative; overflow: hidden;">
            <div class="card-body d-flex flex-column justify-content-center align-items-start text-start position-relative h-100 p-3" style="padding-bottom: 50px;">
                <div style="display: flex; flex-direction: column; gap: 2px;">
                    <h3 class="fw-bold m-0" style="transform: translateY(-5px);">10</h3>
                    <p class="m-0">PRESENCE</p>
                </div>
                <div style="font-size: 80px; opacity: 0.1; position: absolute; top: 10px; right: 10px;">&#128421;</div>
            </div>
            <div class="card-footer-custom d-flex justify-content-between align-items-center px-3 py-2 rounded-bottom"
                style="background-color: rgba(0, 0, 0, 0.2); position: absolute; bottom: 0; left: 0; right: 0;">
                <a href="/data" class="text-white text-decoration-none fw-bold m-0">Detail</a>
                <span>&rarr;</span>
            </div>
        </div>

    </div>
</div>




    </div>
    <x-footer></x-footer>

    <script>
        document.getElementById('tap-card-btn').addEventListener('click', function () {
            const isValid = Math.random() >= 0.5;
            document.getElementById('success-message').style.display = 'none';
            document.getElementById('error-message').style.display = 'none';
            if (isValid) {
                document.getElementById('success-message').style.display = 'block';
            } else {
                document.getElementById('error-message').style.display = 'block';
            }
            setTimeout(() => {
                document.getElementById('success-message').style.display = 'none';
                document.getElementById('error-message').style.display = 'none';
            }, 5000);
        });
    </script>
</body>
</html>
