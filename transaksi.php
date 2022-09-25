<?php require_once('components/header.php') ?>
    <div class="container-fluid">
        <div class="row">
            <?php require_once('components/nav.php') ?>
            <div class="col-10 my-3">
            <h2>Transaksi</h2>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Harga Produk</th>
                    <th scope="col">Foto Produk</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row" class="align-middle">1</th>
                    <td class="align-middle">rendicustomer</td>
                    <td class="align-middle">Printer HP Laserjet</td>
                    <td class="align-middle">Jl.Konoha</td>
                    <td class="align-middle">Rp.725.000</td>
                    <td><img src="assets/fto1.jpg" class="image-table" alt=""></td>
                    <td class="align-middle">dikirim</td>
                    <td><button type="button" class="btn btn-success">Detail Transaksi</button>
                    </tr>
                    <tr>
                    <th scope="row" class="align-middle">2</th>
                    <td class="align-middle">rendicustomer</td>
                    <td class="align-middle">Printer Deskjet</td>
                    <td class="align-middle">Jl.Konoha</td>
                    <td class="align-middle">Rp.839.000</td>
                    <td><img src="assets/fto2.webp" class="image-table" alt=""></td>
                    <td class="align-middle">dikirim</td>
                    <td><button type="button" class="btn btn-success">Detail Transaksi</button>
                    </tr>
                    <tr>
                    <th scope="row" class="align-middle">3</th>
                    <td class="align-middle">rendicustomer</td>
                    <td class="align-middle">Printer Epson</td>
                    <td class="align-middle">Jl.Konoha</td>
                    <td class="align-middle">Rp.699.000</td>
                    <td><img src="assets/ftoke3.jpg" class="image-table" alt=""></td>
                    <td class="align-middle">dikirim</td>
                    <td><button type="button" class="btn btn-success">Detail Transaksi</button>
                    </tr>
                    <tr>
                    <th scope="row" class="align-middle">4</th>
                    <td class="align-middle">caca maritza</td>
                    <td class="align-middle">Printer Epson</td>
                    <td class="align-middle">Jl.Konoha</td>
                    <td class="align-middle">Rp.789.000</td>
                    <td><img src="assets/ftoke3.jpg" class="image-table" alt=""></td>
                    <td class="align-middle">dikirim</td>
                    <td><button type="button" class="btn btn-success">Detail Transaksi</button>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require_once('components/footer.php') ?>