<?php require_once('components/header.php') ?>
    <div class="container-fluid">
        <div class="row">
            <?php require_once('components/nav.php') ?>
            <div class="col-10 my-3">
                <H2>Data Produk</H2>
                <div class="mb-3"><button type="button" class="btn btn-primary">Tambah Produk</button></div>
                <table class="table">
<thead>
    <tr>
     <th scope="col">No</th>
     <th scope="col">Nama Produk</th>
     <th scope="col">Harga Produk</th>
     <th scope="col">Foto Produk</th>
     <th scope="col">Aksi</th>
    </tr>
</thead>
  <tbody>
    <tr>
      <th scope="row" class="align-middle">1</th>
      <td class="align-middle">Printer HP Laserjet</td>
      <td class="align-middle">Rp.725.000</td>
      <td><img src="assets/fto1.jpg" class="image-table" alt=""></td>
      <td><button type="button" class="btn btn-success">Edit Produk</button>
          <button type="button" class="btn btn-danger">Hapus Produk</button></td>
    </tr>
    <tr>
      <th scope="row" class="align-middle">2</th>
      <td class="align-middle">Printer Deskjet</td>
      <td class="align-middle">Rp.539.000</td>
      <td><img src="assets/fto2.webp" class="image-table" alt=""></td>
      <td><button type="button" class="btn btn-success">Edit Produk</button>
          <button type="button" class="btn btn-danger">Hapus Produk</button></td>
    </tr>
    <tr>
      <th scope="row"class="align-middle">3</th>
      <td class="align-middle">Printer Epson</td>
      <td class="align-middle">Rp.699.000</td>
      <td><img src="assets/ftoke3.jpg" class="image-table" alt=""></td>
      <td><button type="button" class="btn btn-success">Edit Produk</button>
          <button type="button" class="btn btn-danger">Hapus Produk</button></td>
    </tr>
  </tbody>
</table>
            </div>
        </div>
    </div>
    <?php require_once('components/footer.php') ?>