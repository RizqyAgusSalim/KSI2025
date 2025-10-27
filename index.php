<?php
// Data mahasiswa (dalam array)
$mahasiswa = [
    [
        'nim' => '2201001',
        'nama' => 'Ahmad Rizki',
        'jurusan' => 'Teknik Informatika',
        'semester' => 4
    ],
    [
        'nim' => '2201002',
        'nama' => 'Siti Nurhaliza',
        'jurusan' => 'Sistem Informasi',
        'semester' => 4
    ],
    [
        'nim' => '2201003',
        'nama' => 'Budi Santoso',
        'jurusan' => 'Teknik Informatika',
        'semester' => 6
    ],
    [
        'nim' => '2201004',
        'nama' => 'Dewi Kartika',
        'jurusan' => 'Sistem Informasi',
        'semester' => 2
    ],
    [
        'nim' => '2201005',
        'nama' => 'Eko Prasetyo',
        'jurusan' => 'Teknik Komputer',
        'semester' => 4
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-mortarboard-fill"></i> Data Mahasiswa
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">
                            <i class="bi bi-house-fill"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-person-fill"></i> Mahasiswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-info-circle-fill"></i> About
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center mb-4">
                    <i class="bi bi-table"></i> Daftar Mahasiswa
                </h2>
                
                <!-- Card Info -->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card text-white bg-primary">
                            <div class="card-body">
                                <h5 class="card-title">Total Mahasiswa</h5>
                                <h2><?php echo count($mahasiswa); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-info">
                            <div class="card-body">
                                <h5 class="card-title">Jurusan</h5>
                                <h2>3</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-warning">
                            <div class="card-body">
                                <h5 class="card-title">Tahun Akademik</h5>
                                <h2>2024/2025</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="card shadow">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Jurusan</th>
                                        <th>Semester</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach($mahasiswa as $mhs): 
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $mhs['nim']; ?></td>
                                        <td><?php echo $mhs['nama']; ?></td>
                                        <td><?php echo $mhs['jurusan']; ?></td>
                                        <td><?php echo $mhs['semester']; ?></td>
                                        <td>
                                            <button class="btn btn-sm btn-info">
                                                <i class="bi bi-eye"></i> Detail
                                            </button>
                                            <button class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil"></i> Edit
                                            </button>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">
                <i class="bi bi-code-slash"></i> &copy; 2025 Sistem Informasi Mahasiswa
            </p>
            <p class="mb-0">Dibuat dengan <i class="bi bi-heart-fill text-danger"></i> oleh Rizqy Agus Salim</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>