<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Tambah Portofolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            overflow-x: hidden;
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #ffffff;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 56px;
            left: 0;
            background-color: #1f2937;
            color: white;
            padding-top: 20px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            color: #cbd5e1;
            padding: 12px 20px;
            text-decoration: none;
            margin-bottom: 5px;
            border-radius: 8px;
            transition: all 0.2s;
            font-weight: 500;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: #374151;
            color: #ffffff;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .main-content {
            margin-left: 250px;
            padding: 30px;
            min-height: 100vh;
            padding-top: 80px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <img src="/assets/img/logo-ws.png" alt="Logo" class="w-25">
            </a>
        </div>
    </nav>

    <div class="sidebar">
        <h3 class="text-center fw-bold mb-4"><i class="fas fa-chart-line"></i> Dashboard Admin</h3>
        <a href="/dashboard"><i class="fas fa-home"></i> Dashboard</a>
        <hr style="border-color:#374151">
        <a href="/"><i class="fas fa-arrow-left"></i> Kembali ke Page</a>
    </div>
    <div class="main-content">
        <div class="card bg-white shadow-sm p-4 mb-4 text-center">
            <h2 class="fw-bold mb-2"><i class="fas fa-plus-circle"></i> Tambah Portofolio</h2>
            <p class="text-muted fs-5">Isi data portofolio baru melalui form berikut.</p>
        </div>

        <div class="card mb-4">
            <div class="card-header fw-bold">Form Portofolio</div>
            <div class="card-body">
                <form action="{{ route('dashboard.portofolio.store') }}" method="POST" enctype="multipart/form-data" id="portfolioForm">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nama Portofolio</label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gambar Proyek</label>
                        <input type="file" class="form-control" name="gambar" id="gambar" accept="image/*" onchange="previewImage(event)">
                        <img id="imgPreview" src="#" class="mt-2 rounded" style="max-width:150px; display:none;">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select class="form-control" name="kategori" id="kategori" required>
                            <option value="">Pilih kategori</option>
                            <option value="Website Development">Website Development</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value="MVP Development">MVP Development</option>
                            <option value="Custom Software Development">Custom Software Development</option>
                            <option value="UI/UX Design">UI/UX Design</option>
                            <option value="Specification Document & Wireframe">Specification Document & Wireframe</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Tambah</button>
                </form>


                <script>
                    function previewImage(event) {
                        const reader = new FileReader();
                        reader.onload = function() {
                            const output = document.getElementById('imgPreview');
                            output.src = reader.result;
                            output.style.display = 'block';
                        }
                        reader.readAsDataURL(event.target.files[0]);
                    }
                </script>

            </div>


            <script>
                $("#gambar").on("change", function() {
                    const file = this.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            $("#imgPreview").attr("src", e.target.result).show();
                        }
                        reader.readAsDataURL(file);
                    }
                });
            </script>

</body>

</html>