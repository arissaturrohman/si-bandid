<h1 class="h3 mb-4 text-gray-800">Halaman OMSPAN</h1>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#add_omspanModal">Tambah</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="bg-dark text-white">
          <tr>
            <th width="3%" class="text-center align-middle">No</th>
            <th width="5%" class="text-center  align-middle">Desa</th>
            <th class="text-center  align-middle">OMSPAN</th>
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
            <td>file omspan</td>

            <!-- Jika catatan "revisi" kolom berwarna merah kalau "diterima" warna hijau -->
            
            <td>Revisi</td>
            <td>Anggaran salah</td>
            <td>
              <!-- tombol validasi muncul jika login level admin -->
              
              <a href="#" class="btn btn-sm btn-success validasi" data-toggle="modal" data-target="#validasi_omspanModal"><i class="fas fa-edit"></i> validasi</a>

              <a href="#" class="btn btn-sm btn-info edit" data-toggle="modal" data-target="#edit_omspanModal"><i class="fas fa-edit"></i> edit</a>

              <a href="#" onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> delete</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


<!-- Modal add -->
<div class="modal fade" id="add_omspanModal" tabindex="-1" aria-labelledby="omspanModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="omspanModalLabel">Form Add OMSPAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="" enctype="multipart/form-data" >
          <div class="form-group">
            <label for="">OMSPAN</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="" name="" required="" onchange="return validasiFile()"/>
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <span class="text-danger"><small>* File ekstensi Excel, Word & pdf </small></span>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sm btn-primary" name="submit">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal edit -->
<div class="modal fade" id="edit_omspanModal" tabindex="-1" aria-labelledby="omspanModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="omspanModalLabel">Form Edit OMSPAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="">OMSPAN</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="" id=""  onchange="return validasiFile()"/>
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <span class="text-danger"><small>* File ekstensi Excel, Word & pdf </small></span>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sm btn-primary" name="update">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal validasi -->
<div class="modal fade" id="validasi_omspanModal" tabindex="-1" aria-labelledby="omspanModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="omspanModalLabel">Form Validasi OMSPAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="">
          <div class="form-group">
            <label for="validasi">Validasi</label>
            <select class="form-control" name="debug" id="valid" tabindex="-1">
              <option>-- Pilih --</option>
              <option value="Revisi">Revisi</option>
              <option value="Diterima">Diterima</option>
            </select>
          </div>
          <div class="form-group">
            <label for="catatan">Catatan</label>
            <textarea class="form-control" name="catat" id="catat" rows="3"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sm btn-primary" name="validasi">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>