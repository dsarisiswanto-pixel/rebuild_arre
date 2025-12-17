document.querySelectorAll('.btnEdit').forEach(btn => {
                btn.addEventListener('click', function() {
                    const {
                        id,
                        nama,
                        deskripsi,
                        kategori,
                        tanggal,
                        gambar,
                        link
                    } = this.dataset;

                    edit_id.value = id;
                    edit_nama.value = nama;
                    edit_deskripsi.value = deskripsi;
                    edit_kategori.value = kategori;
                    edit_tanggal.value = tanggal;
                    edit_link.value = link;

                    const preview = document.getElementById('edit_preview');
                    if (gambar) {
                        preview.src = `${location.origin}/uploads/${gambar}`;
                        preview.style.display = 'block';
                    } else {
                        preview.style.display = 'none';
                    }

                    formEdit.action = `/dashboard/update/${id}`;
                    edit_file.value = '';
                });
            });
