<div class="container mt-3">
  <!-- Alert Notifikasi -->
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary mt-2 mb-2 tombolTambahData" data-toggle="modal"
        data-target="#formModal">
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
                  <input type="hidden" name="id" id="id">
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
                    <option value="sistem informasi">Sistem Informasi</option>
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
        <li class="list-group-item ">
          <?= $mhs["nama"] ?>
          <a href="<?= BASEURL?>/mahasiswa/delete/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1"
            onclick="return confirm('Yakin Di Hapus?')">Delete</a>

          <a href="<?= BASEURL?>/mahasiswa/edit/<?= $mhs['id']; ?>"
            class="badge badge-success float-right ml-1 tampilModelEdit" data-toggle="modal" data-target="#formModal"
            data-id="<?= $mhs['id']; ?>">Edit</a>
          <!-- data-toggle="modal" data-target="#formModal" => tambah untuk menpilkan form modal -->

          <a href="<?= BASEURL?>/mahasiswa/detail/<?= $mhs['id']; ?>"
            class="badge badge-primary float-right ml-1">Detail</a>
        </li>
      </ul>
      <?php endforeach; ?>

    </div>
  </div>


</div>