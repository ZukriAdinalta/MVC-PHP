<div class="container mt-4">
  <div class="row">
    <div class="col-6">
      <h3>Data Mahasiswa</h3>

      <?php foreach($data['mahasiswa'] as $mhs) :?>
      <ul>
        <li> Nama : <?= $mhs["nama"] ?> </li>
        <li> Nim : <?= $mhs["nim"] ?> </li>
        <li> Jurusan : <?= $mhs["jurusan"] ?> </li>
        <li> Email : <?= $mhs["email"] ?> </li>
      </ul>
      <?php endforeach; ?>
    </div>
  </div>


</div>