<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Dashboard — Portofolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #0f172a;
            --accent: #2563eb;
            --muted: #6b7280;
            --card: #ffffff;
            --secondary-bg: #f1f5f9;
        }

        body {
            font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            background: var(--secondary-bg);
            margin: 0;
            padding-top: 56px;
        }

        .navbar {
            background: var(--card);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1030;
        }


        .sidebar {
            position: fixed;
            top: 56px;
            left: 0;
            bottom: 0;
            width: 260px;
            background: var(--primary);
            color: #e6eefc;
            padding-top: 20px;
            box-shadow: 0 6px 24px rgba(2, 6, 23, 0.12);
            z-index: 1020;
            transition: transform 0.3s ease-in-out;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0 !important;
            }

            .sidebar-backdrop {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 1010;
                display: none;

            }
        }

        @media (min-width: 992px) {
            .main-content {
                margin-left: 260px;

            }
        }

        .sidebar h4 {
            color: #fff;
            font-weight: 700;
            margin-bottom: 12px;
            padding: 0 12px;
        }

        .sidebar a,
        .sidebar button {
            color: #d1defa;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            text-decoration: none;
            border-radius: 8px;
            margin: 6px 12px;
        }

        .sidebar a.active,
        .sidebar a:hover,
        .sidebar button:hover {
            background: #12203a;
            color: #fff;
        }

        .sidebar .btn-logout {
            width: 100%;
            text-align: left;
            border: none;
            background: transparent;
        }

        .main-content {
            padding: 20px 15px;
            min-height: calc(100vh - 56px);
        }

        .card-ghost {
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(15, 23, 42, 0.06);
            background: var(--card);
            border: none;
        }

        .kpi {
            border-radius: 12px;
            padding: 22px;
            box-shadow: 0 6px 20px rgba(2, 6, 23, 0.06);
        }

        .kpi h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--primary);
        }

        .btn-accent {
            background: var(--accent);
            border: none;
            color: #fff;
        }

        .btn-accent:hover {
            background: #1e40af;
        }

        table img {
            max-width: 50px;
            height: auto;
            border-radius: 6px;
        }


        .table-responsive {
            overflow-x: auto;
        }

        .table {
            table-layout: fixed;
            width: 100%;
        }


        .table th,
        .table td {
            vertical-align: top;
            padding: 0.5rem;
            word-wrap: break-word;
            white-space: normal;
            font-size: 0.85rem;
        }


        .table th:nth-child(1),
        .table td:nth-child(1) {
            width: 30px;
            white-space: nowrap;
        }


        .table th:nth-child(2),
        .table td:nth-child(2) {
            width: 120px;
        }

        .table th:nth-child(3),
        .table td:nth-child(3) {
            width: 150px;
            min-width: 120px;
            max-width: 180px;
        }


        .table th:nth-child(4),
        .table td:nth-child(4) {
            width: 70px;
        }

        .table th:nth-child(5),
        .table td:nth-child(5) {
            width: 120px;
        }

        .table th:nth-child(6),
        .table td:nth-child(6) {
            width: 100px;
            word-break: break-all;
            font-size: 0.8rem;
        }


        .table th:nth-child(7),
        .table td:nth-child(7) {
            width: 90px;
            white-space: nowrap;
            font-size: 0.8rem;
        }

        .table th:nth-child(8),
        .table td:nth-child(8) {
            width: 100px;
            white-space: nowrap;
        }

        .success-icon-container {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background-color: #eef4ff;
            color: var(--accent);
            font-size: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
        }

        .btn-success-ok {
            background-color: var(--accent);
            border-color: var(--accent);
            color: white;
            font-weight: 600;
        }

        .btn-success-ok:hover {
            background-color: #1e40af;
            border-color: #1e40af;
        }


        @media (max-width: 575.98px) {
            .d-flex.justify-content-between.align-items-center.mb-3 {
                flex-direction: column;
                align-items: stretch !important;
            }

            .d-flex.justify-content-between.align-items-center.mb-3>div {
                width: 100%;
                margin-top: 10px;
            }

            #searchInput {
                width: 100% !important;
                margin-right: 0 !important;
                margin-bottom: 10px;
            }

            .main-content {
                padding: 15px;
            }
        }
    </style>
</head>

<body>
    @if(session('success'))
    <div class="modal fade" id="globalSuccessModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg rounded-4">

                <div class="modal-body text-center px-4 py-5">


                    <div class="mx-auto mb-3"
                        style="width:80px;height:80px;
                            background:#eef4ff;
                            border-radius:50%;
                            display:flex;
                            align-items:center;
                            justify-content:center;">
                        <i class="fas fa-check text-primary fs-2"></i>
                    </div>


                    <h4 class="fw-bold mb-2">Berhasil</h4>


                    <p class="text-muted mb-4">
                        {{ session('success') }}
                    </p>


                    <button type="button"
                        class="btn btn-primary px-5 py-2 rounded-3"
                        data-bs-dismiss="modal">
                        OK
                    </button>

                </div>
            </div>
        </div>
    </div>
    @endif
    @if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let modal = new bootstrap.Modal(
                document.getElementById('globalSuccessModal')
            );
            modal.show();
        });
    </script>
    @endif



    <div class="sidebar-backdrop" onclick="toggleSidebar()"></div>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <button class="btn d-lg-none me-2" type="button" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i>
            </button>

            <a class="navbar-brand fw-bold" href="#"><img src="/assets/img/logo-ws.png" alt="logo" class="logo-nav"
                    style="height:36px;"></a>

            <div class="ms-auto">
            </div>
        </div>
    </nav>

    <aside class="sidebar" id="sidebarMenu">
        <div class="px-3">
            <h4 class="text-center"><i class="fas fa-chart-line me-2"></i>Dashboard</h4>
            <a href="/dashboard" class="active"><i class="fas fa-home me-2"></i>Dashboard</a>
            <a href="/"><i class="fas fa-arrow-left me-2"></i>Kembali ke Page</a>
            <hr style="border-color: #1e293b; margin: 10px 0;">

            <form action="{{ route('logout') }}" method="POST"
                onsubmit="return confirm('Apakah Anda yakin ingin keluar (Logout)? Anda harus login kembali untuk mengakses Dashboard.');">@csrf
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
            <div class="col-md-6 col-sm-12">
                <div class="kpi text-center card-ghost">
                    <small class="text-muted">Total Portofolio</small>
                    <div class="d-flex justify-content-center align-items-baseline gap-2">
                        <h2 class="mb-0">{{ $items->total() }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="kpi text-center card-ghost">
                    <small class="text-muted">Total Jenis Kategori</small>
                    <h2 class="mb-0">{{ $totalKategori }}</h2>
                </div>
            </div>
        </div>

        <div class="card card-ghost mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">Data Portofolio</h5>
                    <div>
                        <input id="searchInput" class="form-control d-inline-block me-2"
                            style="width:260px" placeholder="Cari portofolio...">
                        <button class="btn btn-accent mt-2 mt-sm-0"
                            data-bs-toggle="modal" data-bs-target="#modalTambah">
                            <i class="fas fa-plus me-1"></i> Tambah
                        </button>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                    <form method="GET" action="{{ route('dashboard') }}" class="d-flex align-items-center gap-2">
                        <span>Tampilkan</span>
                        <select name="per_page"
                            class="form-select form-select-sm w-auto"
                            onchange="this.form.submit()">
                            <option value="5" {{ request('per_page', 5) == 5 ? 'selected' : '' }}>5</option>
                            <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                            <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                        </select>
                        <span>data</span>
                    </form>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered align-middle text-center" id="portfolioTable">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th style="width:280px;">Deskripsi</th>
                                <th>Gambar</th>
                                <th>Kategori</th>
                                <th>Link</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($items as $item)
                            <tr>
                                <td>{{ $items->firstItem() + $loop->index }}</td>

                                <td class="text-start fw-semibold">
                                    {{ $item->nama }}
                                </td>

                                <td class="text-start">
                                    <span
                                        data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        title="{{ $item->deskripsi }}">
                                        {{ \Illuminate\Support\Str::limit($item->deskripsi, 80) }}
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex flex-wrap gap-2 justify-content-center" style="max-width:180px">
                                        @php
                                        $images = json_decode($item->gambar, true);
                                        @endphp

                                        @if(is_array($images) && count($images))
                                        @foreach($images as $img)
                                        @if(file_exists(public_path('uploads/'.$img)))
                                        <img src="{{ asset('uploads/'.$img) }}"
                                            style="width:60px;height:60px;object-fit:cover;border-radius:6px;">
                                        @endif
                                        @endforeach
                                        @else
                                        <small class="text-muted">Tidak ada</small>
                                        @endif
                                    </div>
                                </td>

                                <td>{{ $item->kategori }}</td>

                                <td class="text-start">
                                    @if($item->link)
                                    <a href="{{ $item->link }}" target="_blank">
                                        {{ \Illuminate\Support\Str::limit($item->link, 30) }}
                                    </a>
                                    @else
                                    <small class="text-muted">Tidak ada</small>
                                    @endif
                                </td>

                                <td>
                                    {{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}
                                </td>

                                <td>
                                    <button type="button"
                                        class="btn btn-sm btn-warning edit-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalEdit"
                                        data-id="{{ $item->id }}"
                                        data-nama="{{ $item->nama }}"
                                        data-deskripsi="{{ $item->deskripsi }}"
                                        data-kategori="{{ $item->kategori }}"
                                        data-tanggal="{{ $item->tanggal }}"
                                        data-link="{{ $item->link ?? '' }}"
                                        data-gambar-json='@json(json_decode($item->gambar))'>
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    <form action="{{ route('dashboard.portofolio.destroy', $item->id) }}"
                                        method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin hapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-muted text-center">
                                    Data belum tersedia
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-3 flex-wrap gap-2">
                    <div class="text-muted small">
                        Menampilkan {{ $items->firstItem() }} – {{ $items->lastItem() }}
                        dari {{ $items->total() }} data
                    </div>

                    <div>
                        {{ $items->links('pagination::bootstrap-5') }}
                    </div>
                </div>


            </div>
        </div>

    </main>
    <div class="modal fade" id="modalTambah" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <form action="{{ route('dashboard.portofolio.store') }}"
                    method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Portofolio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">


                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text"
                                name="nama"
                                value="{{ old('nama') }}"
                                class="form-control @error('nama') is-invalid @enderror"
                                required>
                            @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="deskripsi"
                                rows="4"
                                class="form-control @error('deskripsi') is-invalid @enderror"
                                required>{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select name="kategori"
                                class="form-select @error('kategori') is-invalid @enderror"
                                required>
                                <option value="">Pilih kategori</option>
                                <option value="MVP Development">MVP Development</option>
                                <option value="Website Development">Website Development</option>
                                <option value="Mobile App Development">Mobile App Development</option>
                                <option value="UI/UX Design">UI/UX Design</option>
                                <option value="UI/UX Design">Custom Software Development</option>
                                <option value="UI/UX Design">Specification Document Wireframe</option>
                            </select>
                            @error('kategori')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date"
                                name="tanggal"
                                value="{{ old('tanggal') }}"
                                class="form-control @error('tanggal') is-invalid @enderror"
                                required>
                            @error('tanggal')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Link</label>
                            <input type="url"
                                name="link"
                                value="{{ old('link') }}"
                                class="form-control @error('link') is-invalid @enderror"
                                placeholder="https://example.com">
                            @error('link')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Upload Gambar</label>
                            <input type="file"
                                name="gambar[]"
                                id="tambah_gambar"
                                class="form-control @error('gambar') is-invalid @enderror"
                                accept="image/jpeg,image/png"
                                multiple
                                required>

                            @error('gambar')<div class="invalid-feedback">{{ $message }}</div>@enderror

                            <small class="text-muted">
                                Bisa upload lebih dari satu gambar (JPG / PNG, max 2MB).
                            </small>


                            <div id="tambah_image_preview_container"
                                class="d-flex flex-wrap gap-2 mt-2"></div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-accent">Simpan</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEdit" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <form id="formEdit" action="" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" id="edit_id">

                    <input type="hidden" name="hapus_gambar" id="hapus_gambar">

                    <div class="modal-header">
                        <h5 class="modal-title">Edit Portofolio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="nama" id="edit_nama" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" id="edit_deskripsi" rows="4"
                                class="form-control" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label>Kategori</label>
                            <select name="kategori" id="edit_kategori"
                                class="form-select" required>
                                <option value="">Pilih</option>
                                <option value="MVP Development">MVP Development</option>
                                <option value="Website Development">Website Development</option>
                                <option value="Mobile App Development">Mobile App Development</option>
                                <option value="UI/UX Design">UI/UX Design</option>
                                <option value="Custom Software Development">Custom Software Development</option>
                                <option value="Specification Document Wireframe">Specification Document Wireframe</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" id="edit_tanggal"
                                class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Link</label>
                            <input type="url" name="link" id="edit_link"
                                class="form-control"
                                placeholder="https://example.com">
                        </div>

                        <div class="mb-3">
                            <label>Gambar Lama</label>
                            <div id="edit_image_preview_container"
                                class="d-flex flex-wrap gap-2"></div>
                        </div>


                        <div class="mb-3">
                            <label>Gambar Baru</label>
                            <input type="file" name="gambar[]"
                                class="form-control"
                                multiple
                                accept="image/jpeg,image/png">

                            <div class="form-check mt-2">
                                <input class="form-check-input"
                                    type="checkbox"
                                    name="replace_gambar"
                                    id="replace_gambar">
                                <label class="form-check-label"
                                    for="replace_gambar">
                                    Ganti semua gambar lama
                                </label>
                            </div>

                            <small class="text-muted">
                                Kosongkan jika tidak ingin mengubah gambar.
                            </small>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit"
                            class="btn btn-primary">
                            Simpan
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="notifModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:420px;">
            <div class="modal-content text-center p-4">

                <div id="notifIcon"
                    class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                    style="width:90px;height:90px;">
                    <i class="fas fa-check"></i>
                </div>

                <h4 id="notifTitle" class="fw-bold mb-2">Berhasil</h4>
                <p id="notifMessage" class="text-muted mb-4"></p>

                <button type="button"
                    class="btn btn-success-ok mt-3 px-5 d-block mx-auto"
                    data-bs-dismiss="modal">
                    OK
                </button>


            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    function validateImages(input) {
        const allowed = ['image/jpeg', 'image/png', 'image/jpg'];
        const maxSize = 2 * 1024 * 1024;

        for (let file of input.files) {
            if (!allowed.includes(file.type)) {
                alert('Hanya JPG, JPEG, PNG!');
                input.value = '';
                return false;
            }
            if (file.size > maxSize) {
                alert('Ukuran maksimal 2MB!');
                input.value = '';
                return false;
            }
        }
        return true;
    }

 
    const tambahInput = document.getElementById('tambah_gambar');
    if (tambahInput) {
        tambahInput.addEventListener('change', function () {
            if (!validateImages(this)) return;

            const container = document.getElementById('tambah_image_preview_container');
            container.innerHTML = '';

            Array.from(this.files).forEach(file => {
                const reader = new FileReader();
                reader.onload = e => {
                    container.innerHTML += `
                        <div class="border p-1">
                            <img src="${e.target.result}" style="width:120px;height:120px;object-fit:cover;">
                        </div>`;
                };
                reader.readAsDataURL(file);
            });
        });
    }

    let deletedImages = [];

    $('#modalEdit').on('show.bs.modal', function (event) {
        const btn = $(event.relatedTarget);
        const modal = $(this);

        deletedImages = [];
        modal.find('#hapus_gambar').val('');

        const id = btn.data('id');
        modal.find('#formEdit').attr('action', `/dashboard/update/${id}`);

        modal.find('#edit_nama').val(btn.data('nama'));
        modal.find('#edit_deskripsi').val(btn.data('deskripsi'));
        modal.find('#edit_kategori').val(btn.data('kategori'));
        modal.find('#edit_tanggal').val(btn.data('tanggal'));
        modal.find('#edit_link').val(btn.data('link'));

        const container = modal.find('#edit_image_preview_container');
        container.empty();

        let images = btn.data('gambar-json') || [];

        if (!images.length) {
            container.html('<small class="text-muted">Tidak ada gambar</small>');
            return;
        }

        images.forEach(img => {
            container.append(`
                <div class="image-preview position-relative" data-name="${img}">
                    <img src="/uploads/${img}"
                        class="rounded border"
                        style="width:120px;height:120px;object-fit:cover;">
                    <button type="button"
                        class="btn-close position-absolute top-0 end-0 remove-preview"
                        style="background:white;border-radius:50%">
                    </button>
                </div>
            `);
        });
    });


    $(document).on('click', '.remove-preview', function () {
        const wrapper = $(this).closest('.image-preview');
        deletedImages.push(wrapper.data('name'));
        $('#hapus_gambar').val(JSON.stringify(deletedImages));
        wrapper.remove();
    });

    $('#formEdit').on('submit', function (e) {
        const oldCount = $('#edit_image_preview_container .image-preview').length;
        const newFiles = $('input[name="gambar[]"]')[0].files.length;

        if (oldCount === 0 && newFiles === 0) {
            e.preventDefault();
            alert('Minimal harus ada 1 gambar!');
        }
    });
    const type = @json(session('notif_type'));
    const message = @json(session('notif_message'));

    if (message) {
        const modal = new bootstrap.Modal(document.getElementById('notifModal'));
        const icon = document.getElementById('notifIcon');
        const title = document.getElementById('notifTitle');
        const text = document.getElementById('notifMessage');

        title.innerText = 'Berhasil';
        text.innerText = message;

        if (type === 'add') {
            title.innerText = 'Berhasil Ditambahkan';
            icon.innerHTML = '<i class="fas fa-plus"></i>';
            icon.style.background = '#ecfdf5';
            icon.style.color = '#16a34a';
        }
        if (type === 'edit') {
            title.innerText = 'Berhasil Diperbarui';
            icon.innerHTML = '<i class="fas fa-edit"></i>';
            icon.style.background = '#eef4ff';
            icon.style.color = '#2563eb';
        }
        if (type === 'delete') {
            title.innerText = 'Berhasil Dihapus';
            icon.innerHTML = '<i class="fas fa-trash"></i>';
            icon.style.background = '#fee2e2';
            icon.style.color = '#dc2626';
        }

        modal.show();
    }

});
</script>
    

</body>

</html>