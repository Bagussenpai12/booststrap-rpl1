<?php require_once('components/header.php') ?>
    <div class="container-fluid">
        <div class="row">
            <?php require_once('components/nav.php') ?>
            <div class="col-10 my-3">
            <h2>Data User</h2>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Password</th>
                    <th scope="col">Roles</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row" class="align-middle">1</th>
                    <td class="align-middle">rendicustomer</td>
                    <td class="align-middle">rendicustomer</td>
                    <td class="align-middle">rendi123</td>
                    <td class="align-middle">Customer</td>
                    <td><button type="button" class="btn btn-success">Edit Produk</button>
                    <button type="button" class="btn btn-danger">Hapus Produk</button></td>
                    </tr>
                    <tr>
                    <th scope="row" class="align-middle">2</th>
                    <td class="align-middle">rendiadmin</td>
                    <td class="align-middle">rendiadmin</td>
                    <td class="align-middle">rendiadmin</td>
                    <td class="align-middle">Admin</td>
                    <td><button type="button" class="btn btn-success">Edit Produk</button>
                    <button type="button" class="btn btn-danger">Hapus Produk</button></td>
                    </tr>
                    <tr>
                    <th scope="row" class="align-middle">3</th>
                    <td class="align-middle">rendifadilah</td>
                    <td class="align-middle">rendifadilah</td>
                    <td class="align-middle">rendi123</td>
                    <td class="align-middle">Customer</td>
                    <td><button type="button" class="btn btn-success">Edit Produk</button>
                    <button type="button" class="btn btn-danger">Hapus Produk</button></td>
                    </tr>
                    <tr>
                    <th scope="row" class="align-middle">4</th>
                    <td class="align-middle">rendayadmin</td>
                    <td class="align-middle">rendayadmin</td>
                    <td class="align-middle">rendayadmin</td>
                    <td class="align-middle">Admin</td>
                    <td><button type="button" class="btn btn-success">Edit Produk</button>
                    <button type="button" class="btn btn-danger">Hapus Produk</button></td>
                    </tr>
                    <tr>
                    <th scope="row" class="align-middle">5</th>
                    <td class="align-middle">rendaycustomer</td>
                    <td class="align-middle">rendaycustomer</td>
                    <td class="align-middle">rendaycustomer</td>
                    <td class="align-middle">Customer</td>
                    <td><button type="button" class="btn btn-success">Edit Produk</button>
                    <button type="button" class="btn btn-danger">Hapus Produk</button></td>
                    </tr>
                    <tr>
                    <th scope="row" class="align-middle">6</th>
                    <td class="align-middle">renday</td>
                    <td class="align-middle">renday</td>
                    <td class="align-middle">rendi123</td>
                    <td class="align-middle">Customer</td>
                    <td><button type="button" class="btn btn-success">Edit Produk</button>
                    <button type="button" class="btn btn-danger">Hapus Produk</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require_once('components/footer.php') ?>