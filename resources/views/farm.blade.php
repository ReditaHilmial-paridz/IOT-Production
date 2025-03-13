<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMART HOME - DEMO PRODUK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <style>
        .status-card {
            border: 2px solid #007bff;
            padding: 15px;
            text-align: center;
            border-radius: 10px;
            width: 220px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .status-title {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .status-badge {
            margin-top: 10px;
            padding: 5px 10px;
            font-weight: bold;
            border-radius: 20px;
        }
        .status-container {
            border: 2px solid #007bff;
            padding: 15px;
            border-radius: 10px;
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .btn-siram {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
        }
        .info-wrapper {
        display: flex;
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .info-left {
        background-color: #007bff; /* Warna biru */
        color: white;
        padding: 10px 20px;
        font-weight: bold;
        border: 1px solid #007bff;
        width: 30%; /* Bisa disesuaikan */
        box-sizing: border-box;
    }

    .info-middle {
        background-color: #ffffff;
        color: black;
        padding: 10px 20px;
        flex-grow: 1;
        border-top: 1px solid #007bff;
        border-bottom: 1px solid #007bff;
        box-sizing: border-box;
    }

    .info-right {
        background-color: #0d6efd; /* Biru muda */
        color: white;
        padding: 10px 20px;
        text-align: right;
        width: 30%; /* Bisa disesuaikan */
        border: 1px solid #0d6efd;
        box-sizing: border-box;
    }

    /* Hapus margin & padding body */
    body, .container-fluid {
        margin: 0;
        padding: 0;
    }
    </style>
</head>
<body>

<x-navbar>
    <img src="/image/h-house.jpeg" alt="SMART HOME Starter Kit" class="img-fluid position-absolute top-10 end-0" style="height: 50px; margin-right: 10px;">
</x-navbar>

<div class="container-fluid mt-4 pt-5 px-0"> 
    <div class="position-relative bg-dark text-white p-3 text-center">
        <a href="/" class="btn btn-light position-absolute start-0" style="top: 13px; margin-left: 10px;">Kembali</a>
        <h4 class="m-0">SMART HOME - DEMO PRODUK</h4>
    </div>
</div>

<!-- STATUS CARD -->
<div class="container mt-4">
    <div class="row justify-content-center gap-3">
        <!-- Waktu -->
        <div class="status-card">
            <p class="status-title">07:00 WIB</p>
            <p>Selasa 12/03/2025</p>
            <img src="image/kalender.png" alt="Kalender" width="80">
        </div>

        <!-- Kelembaban -->
        <div class="status-card">
            <p class="status-title">KELEMBABAN</p>
            <img src="image/lembab.png" alt="Kelembaban" width="80">
            <div class="status-badge bg-primary text-white">80%</div>
        </div>

        <!-- Kondisi Pompa -->
        <div class="status-card">
            <p class="status-title">KONDISI POMPA</p>
            <img src="image/pompa.png" alt="Pompa" width="80">
            <div class="status-badge bg-danger text-white">MATI</div>
        </div>
    </div>
</div>

<!-- STATUS DAN BUTTON (Tanpa Border Biru, Full Width) -->
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center bg-white rounded-3 p-3">
        <p class="m-0">Terakhir Menyala Pada <b>07:01 WIB Selasa 12/03/2025</b></p>
        <button class="btn btn-success fw-bold rounded-3">
            <i class="bi bi-droplet"></i> KLIK UNTUK SIRAM SEKARANG
        </button>
    </div>
</div>

<!-- INFO SISTEM -->
<div class="container-fluid p-0 m-0">
    <div class="info-wrapper">
        <!-- Bagian Kiri -->
        <div class="info-left">
            Keterangan Sistem
        </div>

        <!-- Bagian Tengah (Penjelasan) -->
        <div class="info-middle">
            Sistem ini menggunakan sensor <b>SOIL MOISTURE</b> untuk mendeteksi kadar kelembaban tanah. 
            Jika kelembaban tanah berada di bawah ambang batas, maka pompa air otomatis menyala untuk menyiram tanaman.
        </div>

        <!-- Bagian Kanan (Status) -->
        <div class="info-right">
            <div>Status Kelembaban Tanah: <b>80%</b></div>
            <div>POMPA: <b>MATI</b></div>
        </div>
    </div>
</div>
<x-footer></x-footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
