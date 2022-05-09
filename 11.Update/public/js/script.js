$(function () {
  $(`#tombolTambahData`).on(`click`, function () {
    $(`#judulModal`).html(`Tambah Data Mahasiswa`);
    $(`.modal-footer button[type=submit]`).html(`Tambah Data`);
  });

  $(`.tampilModelEdit`).on(`click`, function () {
    // jquery carikan saya class tampilModelEdit ketika di klik jalan kan function berikut ini
    $(`#judulModal`).html(`Ubah Data Mahasiswa`);
    $(`.modal-footer button[type=submit]`).html(`Ubah Data`);
    // jquery carikan class modal-footer di button dengan type=submit rubah htmlnya enjadi UBAH DATA
    $(`.modal-body form`).attr(`action`, `http://localhost/11.phpunpas/3.MVC/11.Update/public/mahasiswa/edit`);
    // jquery carikan class modal-body di form ubah key action menjadi "http://localhost/11.phpunpas/3.MVC/11.Update/public/mahasiswa/edit"
    const id = $(this).data(`id`); // keikata di klik maka id database kita ambil

    $.ajax({
      url: `http://localhost/11.phpunpas/3.MVC/11.Update/public/mahasiswa/getedit`,
      data: { id: id }, // id -> nama data yg dikirim : id -> isi datanya
      method: `post`,
      type: `json`,
      success: function (data) {
        var duce = jQuery.parseJSON(data);
        $(`#nama`).val(duce.nama); // jquery carikan saya id nama isi value dengan data.nama
        $(`#nim`).val(duce.nim);
        $(`#email`).val(duce.email);
        $(`#jurusan`).val(duce.jurusan);
        $(`#id`).val(duce.id);
      },
    });
  });
});
