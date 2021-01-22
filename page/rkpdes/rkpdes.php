<h1 class="h3 mb-4 text-gray-800">Halaman RKPDes</h1>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#add_rkpdesModal">Tambah</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="bg-dark text-white">
          <tr>
            <th width="3%" class="text-center">No</th>
            <th width="5%" class="text-center">Desa</th>
            <th class="text-center">RKPDes</th>
            <th class="text-center">Perdes</th>
            <th width="5%" class="text-center">Validasi</th>
            <th class="text-center">Catatan</th>
            <!-- Kolom action tampil jika user sudah login -->
            <th width="18%" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">1</td>
            <td>Mranggen</td>
            <!-- Bisa di download untuk di koreksi, muncul link jika user sudah login jika belum login jangan tampilkan linknya-->
            <td><a href="#">RKPDes Mranggen</a></td>
            <td><a href="#">Perdes RKPDes Mranggen</a></td>

            <!-- Jika catatan "revisi" kolom berwarna merah kalau "diterima" warna hijau -->
            <td class="bg-danger text-white">Revisi</td>
            <td>Anggaran Tidak sesuai </td>
            <td>
              <!-- tombol validasi muncul jika login level admin -->
              <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#rkpdesModal"><i class="fas fa-check"></i> validasi</a>
              <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit_rkpdesModal"><i class="fas fa-edit"></i> edit</a>
              <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> delete</a>
            </td>
          </tr>
          <tr>
            <td class="text-center">2</td>
            <td>Banyumeneng</td>
            <!-- Bisa di download untuk di koreksi, muncul link jika user sudah login jika belum login jangan tampilkan linknya-->
            <td><a href="#">RKPDes Banyumeneng</a></td>
            <td><a href="#">Perdes RKPDes Banyumeneng</a></td>

            <!-- Jika catatan "revisi" kolom berwarna merah kalau "diterima" warna hijau -->
            <td class="bg-success text-white">Diterima</td>
            <td>Anggaran Tidak sesuai </td>
            <td>
              <!-- tombol validasi muncul jika login level admin -->
              <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#rkpdesModal"><i class="fas fa-check"></i> validasi</a>
              <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit_rkpdesModal"><i class="fas fa-edit"></i> edit</a>
              <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> delete</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


<!-- Modal add rkpdes -->
<div class="modal fade" id="add_rkpdesModal" tabindex="-1" aria-labelledby="rkpdesModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rkpdesModalLabel">Form Add RKPDes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="">File RKPDes</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
          <div class="form-group">
            <label for="">Perdes RKPDes</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
          <span class="text-danger"><small>* File yang diperbolehkan Excel, Word & pdf </small></span><br>
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

<!-- Modal edit rkpdes -->
<div class="modal fade" id="edit_rkpdesModal" tabindex="-1" aria-labelledby="rkpdesModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rkpdesModalLabel">Form Edit RKPDes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
          <label for="">File RKPDes</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
          <div class="form-group">
          <label for="">Perdes RKPDes</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
          <span class="text-danger"><small>* File yang diperbolehkan Excel, Word & pdf </small></span><br>
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

<!-- Modal validasi rkpdes -->
<div class="modal fade" id="rkpdesModal" tabindex="-1" aria-labelledby="rkpdesModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rkpdesModalLabel">Form Validasi RKPDes</h5>
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