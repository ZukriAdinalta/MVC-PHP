<div class="container mt-3">
  <div class="row">
    <div class="col-6">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary mt-2 mb-2 " data-toggle="modal" data-target="#formModal">
        Tambah Data Mahasiswa
      </button>
      <!-- Modal -->
      <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form -->
              <form action="<?= BASEURL?>/mahasiswa/tambah" method="POST">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
                </div>

                <div class="form-group">
                  <label for="nim">Nim</label>
                  <input type="number" class="form-control" id="nim" name="nim" placeholder="Masukan Nim">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email">
                </div>

                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <select class="form-control" id="jurusan" name="jurusan">
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Matematika">Teknik Matematika</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                  </select>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah Data</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- End Modal -->

      <h3>Data Mahasiswa</h3>
      <?php foreach($data['mahasiswa'] as $mhs) :?>
      <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <?= $mhs["nama"] ?>
          <a href="<?= BASEURL?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary ">Detail</a>
        </li>
      </ul>
      <?php endforeach; ?>

    </div>
  </div>


</div>