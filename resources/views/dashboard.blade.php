<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Dashboard — Portofolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* --- Modern UI Styling --- */
        :root{
            --primary:#0f172a; /* dark indigo */
            --accent:#2563eb;  /* blue */
            --muted:#6b7280;
            --card:#ffffff;
        }
        body{ font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; background:#f1f5f9; margin:0; }
        .navbar{ background:var(--card); }
        .sidebar{
            position:fixed; top:0; left:0; bottom:0;
            width:260px; background:var(--primary); color:#e6eefc; padding-top:80px;
            box-shadow: 0 6px 24px rgba(2,6,23,0.12);
            z-index: 1020;
        }
        .sidebar h4{ color:#fff; font-weight:700; margin-bottom:12px; }
        .sidebar a, .sidebar button{ color:#d1defa; padding:12px 20px; display:block; text-decoration:none; border-radius:8px; margin:6px 12px; }
        .sidebar a.active, .sidebar a:hover, .sidebar button:hover{ background:#12203a; color:#fff; }
        
        /* Tambahkan style untuk tombol logout di sidebar */
        .sidebar .btn-logout {
            width: 100%;
            text-align: left;
            border: none;
            background: transparent;
        }

        .main-content{ margin-left:260px; padding:30px; padding-top:90px; min-height:100vh; }

        .card-ghost{ border-radius:12px; box-shadow:0 8px 30px rgba(15,23,42,0.06); background:var(--card); }
        .kpi { border-radius:12px; padding:22px; box-shadow:0 6px 20px rgba(2,6,23,0.06); }
        .btn-accent{ background:var(--accent); border: none; color:#fff; }
        .btn-accent:hover{ background:#1e40af; }

        table img{ max-width:70px; border-radius:8px; }
        
        /* Custom styles untuk Modal Success (SKEMA WARNA BIRU) */
        .success-icon-container {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background-color: #eef4ff; /* Latar belakang biru muda */
            color: var(--accent); /* Warna ikon (Biru) */
            font-size: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
        }
        .btn-success-ok {
            background-color: var(--accent); /* Tombol biru */
            border-color: var(--accent);
            color: white;
            font-weight: 600;
        }
        .btn-success-ok:hover {
            background-color: #1e40af;
            border-color: #1e40af;
        }
        /* Responsiveness dipertahankan */
        @media (max-width: 768px){
            .sidebar{ position:relative; width:100%; height:auto; top:0; }
            .main-content{ margin-left:0; padding-top:20px; }
            .navbar{ position: relative; }
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><img src="/assets/img/logo-ws.png" alt="logo" class="logo-nav" style="height:36px;"></a>
        </div>
    </nav>

    <aside class="sidebar mt-5 pt-5">
        <div class="px-3">
            <h4 class="text-center"><i class="fas fa-chart-line me-2"></i>Dashboard</h4>
            <a href="/dashboard" class="active"><i class="fas fa-home me-2"></i>Dashboard</a>
            <a href="/"><i class="fas fa-arrow-left me-2"></i>Kembali ke Page</a>
            <hr style="border-color: #1e293b; margin: 10px 0;">

            <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin keluar (Logout)? Anda harus login kembali untuk mengakses Dashboard.');">@csrf
                <button type="submit" class="btn-logout"><i class="fas fa-sign-out-alt me-2"></i>Logout</button>
            </form>
        </div>
    </aside>

    <main class="main-content">
        <div class="card-ghost p-4 mb-4 text-center">
            <h1 class="fw-bold"><i class="fas fa-tachometer-alt me-2"></i>Selamat Datang!</h1>
            <p class="text-muted">Dashboard Admin Arre Technology</p>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-md-6">
                <div class="kpi text-center card-ghost">
                    <small class="text-muted">Total Portofolio</small>
                    <div class="d-flex justify-content-center align-items-baseline gap-2">
                        <h2 class="mb-0">{{ $items->count() }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="kpi text-center card-ghost">
                    <small class="text-muted">Total Jenis Kategori</small>
                    <h2 class="mb-0">{{ $items->unique('kategori')->count() }}</h2>
                </div>
            </div>
        </div>

        <div class="card card-ghost mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">Data Portofolio</h5>
                    <div>
                        <input id="searchInput" class="form-control d-inline-block me-2" style="width:260px" placeholder="Cari portofolio...">
                        <button class="btn btn-accent" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="fas fa-plus me-1"></i> Tambah</button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered align-middle text-center" id="portfolioTable">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Kategori</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="text-start">{{ $item->nama }}</td>
                                <td class="text-start" style="max-width:300px; white-space:normal">{{ $item->deskripsi }}</td>
                                <td>
                                    @if($item->gambar && file_exists(public_path('uploads/'.$item->gambar)))
                                    <img src="{{ asset('uploads/'.$item->gambar) }}" alt="gambar">
                                    @else
                                    <small class="text-muted">Tidak ada</small>
                                    @endif
                                </td>
                                <td>{{ $item->kategori }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}</td>
                                <td>
                                    <button type="button"
                                        class="btn btn-sm btn-warning btnEdit"
                                        data-id="{{ $item->id }}"
                                        data-nama="{{ htmlspecialchars($item->nama, ENT_QUOTES) }}"
                                        data-deskripsi="{{ htmlspecialchars($item->deskripsi, ENT_QUOTES) }}"
                                        data-kategori="{{ htmlspecialchars($item->kategori, ENT_QUOTES) }}"
                                        data-tanggal="{{ $item->tanggal }}"
                                        data-gambar="{{ $item->gambar ?? '' }}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalEdit">
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    <form action="{{ route('dashboard.portofolio.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>

    <div class="modal fade" id="SuccessModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:400px;">
            <div class="modal-content">
                <div class="modal-body text-center p-5">
                    
                    <div class="success-icon-container">
                        <i class="fas fa-check"></i>
                    </div>

                    <h4 id="successTitle" class="fw-bold mb-2">Berhasil!</h4>

                    <p id="successMessage" class="text-muted"></p>

                    <button type="button" class="btn btn-success-ok mt-3 w-50" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('dashboard.portofolio.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Portofolio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select name="kategori" class="form-select" required>
                                <option value="">Pilih kategori</option>
                                <option>MVP Development</option>
                                <option>Website Development</option>
                                <option>Mobile App Development</option>
                                <option>UI/UX Design</option>
                                <option>Custom Software Development</option>
                                <option>Specification Document & Wireframe</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="file" name="gambar" class="form-control" accept="image/*">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-accent">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEdit" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <form id="formEdit" method="POST" enctype="multipart/form-data">
                    @csrf 
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Portofolio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <input type="hidden" name="id" id="edit_id">

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" id="edit_nama" name="nama" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea id="edit_deskripsi" name="deskripsi" rows="4" class="form-control" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select id="edit_kategori" name="kategori" class="form-select" required>
                                <option value="">Pilih kategori</option>
                                <option>MVP Development</option>
                                <option>Website Development</option>
                                <option>Mobile App Development</option>
                                <option>UI/UX Design</option>
                                <option>Custom Software Development</option>
                                <option>Specification Document & Wireframe</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" id="edit_tanggal" name="tanggal" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gambar Saat Ini</label>
                            <div id="currentImageWrap" class="mb-2">
                                <img id="edit_preview" src="" alt="preview" class="rounded" width="160" style="display:none;">
                            </div>
                            <label class="form-label">Ganti Gambar (opsional)</label>
                            <input type="file" id="edit_file" name="gambar" class="form-control" accept="image/*">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-accent">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> 

    <script>
        // --- Search filter ---
        document.getElementById('searchInput').addEventListener('keyup', function(){
            const q = this.value.toLowerCase();
            document.querySelectorAll('#portfolioTable tbody tr').forEach(row=>{
                row.style.display = row.textContent.toLowerCase().includes(q) ? '' : 'none';
            });
        });

        // --- Fill edit modal with existing data ---
        document.querySelectorAll('.btnEdit').forEach(btn=>{
            btn.addEventListener('click', function(){
                const id = this.dataset.id || '';
                const nama = this.dataset.nama || '';
                const deskripsi = this.dataset.deskripsi || '';
                const kategori = this.dataset.kategori || '';
                const tanggal = this.dataset.tanggal || '';
                const gambar = this.dataset.gambar || '';

                // Set fields
                document.getElementById('edit_id').value = id;
                document.getElementById('edit_nama').value = nama;
                document.getElementById('edit_deskripsi').value = deskripsi;
                
                // Set Selected Kategori
                document.getElementById('edit_kategori').value = kategori;

                document.getElementById('edit_tanggal').value = tanggal;

                // Preview existing image if any
                const preview = document.getElementById('edit_preview');
                if (gambar) {
                    // Karena data-gambar hanya berisi nama file, kita tambahkan path:
                    preview.src = '/uploads/' + gambar; 
                    preview.style.display = 'block';
                } else {
                    preview.style.display = 'none';
                }

                // Set form action (Asumsi: Laravel menggunakan rute POST untuk update)
                const form = document.getElementById('formEdit');
                form.action = '/dashboard/update/' + id; 

                // Reset input file saat modal dibuka
                document.getElementById('edit_file').value = '';
            });
        });

        // Preview new file selection inside edit modal
        document.getElementById('edit_file').addEventListener('change', function(e){
            const file = this.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = function(ev){
                const preview = document.getElementById('edit_preview');
                preview.src = ev.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        });

        // ------------------------------------------------------------------
        // SCRIPT PENGATUR MODAL SUKSES (Menggabungkan semua notifikasi)
        // ------------------------------------------------------------------
        $(document).ready(function() {
            const successMessage = "<?php echo session('success') ?? ''; ?>";

            if (successMessage) {
                const modalElement = document.getElementById('SuccessModal');
                const modal = new bootstrap.Modal(modalElement);
                
                let title = "Berhasil!";
                let message = successMessage;

                if (successMessage.includes('Login Berhasil')) {
                    title = 'Selamat Datang!';
                } else if (successMessage.includes('diperbarui')) {
                    title = 'Data Diperbarui';
                } else if (successMessage.includes('ditambahkan')) {
                    title = 'Data Tersimpan';
                } else if (successMessage.includes('dihapus')) {
                    title = 'Data Dihapus';
                } else if (successMessage.includes('Registrasi berhasil')) {
                    title = 'Login Berhasil';
                } else {
                    title = 'Terima Kasih.'; 
                }

                $('#successTitle').text(title);
                $('#successMessage').text(message);
                
                modal.show();
            }
        });
    </script>
</body>
</html>