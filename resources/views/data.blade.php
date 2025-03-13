<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RFID Presence</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
    <x-navbar>
        <img src="/image/h-house.jpeg" alt="SMART HOME Starter Kit" class="img-fluid position-absolute top-10 end-0" style="height: 50px; margin-right: 10px;">
    </x-navbar>
    
    <div class="container-fluid mt-4 pt-5 px-0"> 
        <div class="position-relative bg-dark text-white p-3 text-center">
            <a href="/produkRFID" class="btn btn-light position-absolute start-0" style="top: 13px; margin-left: 10px;">Kembali</a>
            <h4 class="m-0">RFID Presence - DEMO PRODUK</h4>
        </div>
    </div>

    <div class="container mt-4">
        <!-- Header dengan Tombol Download sejajar -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold">Data Presense - RFID Presence</h4>
            <button class="btn btn-success btn-sm">
                <i class="bi bi-file-earmark-excel"></i> Unduh File Excel
            </button>
        </div>

        <!-- Baris Atas (Dropdown Show Entries & Search sejajar) -->
        <div class="d-flex justify-content-between align-items-center my-3">
            <!-- Dropdown Show Entries -->
            <div class="d-flex align-items-center">
                <label class="me-2">Show</label>
                <select class="form-select form-select-sm w-auto">
                    <option selected>10</option>
                    <option>25</option>
                    <option>50</option>
                </select>
                <label class="ms-2">Entries</label>
            </div>

            <!-- Search Input sejajar -->
            <div class="d-flex align-items-center">
                <label class="fw-bold me-2">Search</label>
                <div class="rounded-pill text-secondary px-3 py-2" style="width: 300px;">
                    <input type="text" class="form-control bg-light rounded-pill px-3 py-2" placeholder="Masukkan kata kunci pencarian di sini" style="width: 300px;">
                </div>
            </div>
        </div>

        <!-- Tabel -->
        <table class="table table-bordered text-center">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>UID</th>
                    <th>Nama Lengkap</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2345771DD</td>
                    <td>Nurjaman</td>
                    <td>07:00 WIB</td>
                    <td>12.00 WIB</td>
                    <td>Masuk</td>
                    <td>Tepat Waktu</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2345771DD</td>
                    <td>Nurjaman</td>
                    <td>07:00 WIB</td>
                    <td>12.00 WIB</td>
                    <td>Masuk</td>
                    <td>Tepat Waktu</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2345771DD</td>
                    <td>Nurjaman</td>
                    <td>07:00 WIB</td>
                    <td>12.00 WIB</td>
                    <td>Masuk</td>
                    <td>Tepat Waktu</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>2345771DD</td>
                    <td>Nurjaman</td>
                    <td>07:00 WIB</td>
                    <td>12.00 WIB</td>
                    <td>Masuk</td>
                    <td>Tepat Waktu</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>2345771DD</td>
                    <td>Nurjaman</td>
                    <td>07:00 WIB</td>
                    <td>12.00 WIB</td>
                    <td>Masuk</td>
                    <td>Tepat Waktu</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>2345771DD</td>
                    <td>Nurjaman</td>
                    <td>07:00 WIB</td>
                    <td>12.00 WIB</td>
                    <td>Masuk</td>
                    <td>Tepat Waktu</td>
                </tr>
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="d-flex justify-content-between">
            <span>Showing 1 to 6 of 6 entries</span>
            <div>
                <button class="btn btn-light btn-sm">Previous</button>
                <button class="btn btn-light btn-sm">Next</button>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>
</html>
