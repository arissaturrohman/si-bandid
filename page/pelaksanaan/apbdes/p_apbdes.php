<h1 class="h3 mb-4 text-gray-800">Halaman Realisasi APBDes</h1>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#add_p_apbdesModal">Tambah</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="bg-dark text-white">
          <tr>
            <th width="3%" class="text-center  align-middle">No</th>
            <th width="5%" class="text-center  align-middle">Desa</th>
            <th class="text-center  align-middle">Realisasi APBDes</th>
            <th class="text-center  align-middle">Foto Kegiatan</th>
            <th width="5%" class="text-center  align-middle">Validasi</th>
            <th class="text-center  align-middle">Catatan</th>
            <!-- Kolom action tampil jika user sudah login -->
            <th width="18%" class="text-center  align-middle">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">1</td>
            <td>Mranggen</td>
            <!-- Bisa di download untuk di koreksi, muncul link jika user sudah login jika belum login jangan tampilkan linknya-->
            <td><a href="#">Realisasi APBDes Mranggen</a></td>
            <td>
              <!-- foto kegiatan dengan gallery lightbox 1-->
              <a href="asset/img/undraw_posting_photo.svg" data-toggle="lightbox" data-title="Foto Kegiatan">        
              <img src="asset/img/undraw_posting_photo.svg" width="30%" height="30%" class="img-fluid" alt="" ></a>

              <!-- foto kegiatan dengan gallery lightbox 2-->
              <a href="asset/img/undraw_profile_1.svg" data-toggle="lightbox" data-title="Foto Kegiatan">        
              <img src="asset/img/undraw_profile_1.svg" width="30%" height="30%" class="img-fluid" alt="" ></a> <br>

              <!-- foto kegiatan dengan gallery lightbox 3-->
              <a href="asset/img/undraw_posting_photo.svg" data-toggle="lightbox" data-title="Foto Kegiatan">        
              <img src="asset/img/undraw_posting_photo.svg" width="30%" height="30%" class="img-fluid" alt="" ></a>

              <!-- foto kegiatan dengan gallery lightbox 4-->
              <a href="asset/img/undraw_profile_1.svg" data-toggle="lightbox" data-title="Foto Kegiatan">        
              <img src="asset/img/undraw_profile_1.svg" width="30%" height="30%" class="img-fluid" alt="" ></a>
            </td>

            <!-- Jika catatan "revisi" kolom berwarna merah kalau "diterima" warna hijau -->
            <td class="bg-danger text-white">Revisi</td>
            <td>Anggaran Tidak sesuai </td>
            
            <td>
              <!-- tombol validasi muncul jika login level admin -->
              <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#p_apbdesModal"><i class="fas fa-check"></i> validasi</a>
              <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit_p_apbdesModal"><i class="fas fa-edit"></i> edit</a>
              <a href="#" onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> delete</a>
            </td>
          </tr>
          <tr>
            <td class="text-center">2</td>
            <td>Banyumeneng</td>
            <!-- Bisa di download untuk di koreksi, muncul link jika user sudah login jika belum login jangan tampilkan linknya-->
            <td><a href="#">Realisasi APBDes Banyumeneng</a></td>
            <td>
              <!-- foto kegiatan dengan gallery lightbox 1-->
              <a href="asset/img/undraw_posting_photo.svg" data-toggle="lightbox" data-title="Foto Kegiatan">        
              <img src="asset/img/undraw_posting_photo.svg" width="30%" height="30%" class="img-fluid" alt="" ></a>

              <!-- foto kegiatan dengan gallery lightbox 2-->
              <a href="asset/img/undraw_profile_1.svg" data-toggle="lightbox" data-title="Foto Kegiatan">        
              <img src="asset/img/undraw_profile_1.svg" width="30%" height="30%" class="img-fluid" alt="" ></a> <br>

              <!-- foto kegiatan dengan gallery lightbox 3-->
              <a href="asset/img/undraw_posting_photo.svg" data-toggle="lightbox" data-title="Foto Kegiatan">        
              <img src="asset/img/undraw_posting_photo.svg" width="30%" height="30%" class="img-fluid" alt="" ></a>

              <!-- foto kegiatan dengan gallery lightbox 4-->
              <a href="asset/img/undraw_profile_1.svg" data-toggle="lightbox" data-title="Foto Kegiatan">        
              <img src="asset/img/undraw_profile_1.svg" width="30%" height="30%" class="img-fluid" alt="" ></a>
            </td>

            <!-- Jika catatan "revisi" kolom berwarna merah kalau "diterima" warna hijau -->
            <td class="bg-success text-white">Diterima</td>
            <td>Anggaran Tidak sesuai </td>
            <td>
              <!-- tombol validasi muncul jika login level admin -->
              <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#p_apbdesModal"><i class="fas fa-check"></i> validasi</a>
              <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit_p_apbdesModal"><i class="fas fa-edit"></i> edit</a>
              <a href="#" onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> delete</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


<!-- Modal add p_apbdes -->
<div class="modal fade" id="add_p_apbdesModal" tabindex="-1" aria-labelledby="p_apbdesModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="p_apbdesModalLabel">Form Add Realisasi APBDes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="">File Realisasi APBDes</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          <span class="text-danger"><small>* File APBDes ekstensi Excel, Word & pdf </small></span>
          </div>
          <div class="form-group">
            <label for="">Foto Kegiatan</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Foto 1</label>
            </div>
          </div>
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Foto 2</label>
            </div>
          </div>
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Foto 3</label>
            </div>
          </div>
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Foto 4 (opsional)</label>
            </div>
          <span class="text-danger"><small>* File foto ekstensi jpg, jpeg,& png </small></span><br>
          <span class="text-danger"><small>* Ukuran file maksimal 5mb</small></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal edit p_apbdes -->
<div class="modal fade" id="edit_p_apbdesModal" tabindex="-1" aria-labelledby="p_apbdesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="p_apbdesModalLabel">Form Edit Realisasi APBDes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-row">
            <div class="form-group col-6">
              <label for="">File Realisasi APBDes</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
              <span class="text-danger"><small>* File APBDes ekstensi Excel, Word & pdf </small></span>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-6">
              <label for="">Foto Kegiatan</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Foto 1</label>
              </div>
            </div>
            <div class="form-group col-6">
            <label for="">Preview</label>
              <img src="asset/img/undraw_posting_photo.svg" alt="" width="100%">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-6">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Foto 2</label>
              </div>
            </div>
            <div class="form-group col-6">
            <label for="">Preview</label>
              <img src="asset/img/undraw_posting_photo.svg" alt="" width="100%">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-6">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Foto 3</label>
              </div>
            </div>
            <div class="form-group col-6">
            <label for="">Preview</label>
              <img src="asset/img/undraw_posting_photo.svg" alt="" width="100%">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-6">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Foto 4</label>
              </div>
            </div>
            <div class="form-group col-6">
            <label for="">Preview</label>
              <img src="asset/img/no-image.png" alt="" width="100%">
            </div>          
          </div>
          <span class="text-danger"><small>* File foto ekstensi jpg, jpeg,& png </small></span><br>
          <span class="text-danger"><small>* Ukuran file maksimal 5mb</small></span>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal validasi p_apbdes -->
<div class="modal fade" id="p_apbdesModal" tabindex="-1" aria-labelledby="p_apbdesModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="p_apbdesModalLabel">Form Validasi Realisasi APBDes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Validasi</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>-- Pilih --</option>
              <option value="Revisi">Revisi</option>
              <option value="Diterima">Diterima</option>
            </select>
          </div>
          <div class="form-group">
            <label for="catatan">Catatan</label>
            <textarea class="form-control" id="catatan" rows="3"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>