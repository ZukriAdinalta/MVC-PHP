<div class="container mt-4">
  <div class="row">
    <div class="col-6">
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