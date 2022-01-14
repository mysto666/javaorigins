<?php include("admin-header.php") ?>
<div class="container-fluid px-4">
    <div class="row my-5 main">

        <div class="col">
            <?php
            if (isset($_GET['n'])) {
                if ($_GET['n'] == "1") {
                    echo "<div class='alert alert-success' style='padding-top:10px;'>Success</div>";
                }
            }
            ?>
            <table class="table bg-white rounded shadow-lg">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Item</th>
                        <th>Harga</th>
                        <th>Images</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("../config.php");
                    $num = 0;
                    $sql = "SELECT * FROM katalog";
                    $hasil = mysqli_query($conn, $sql) or exit("Error query: <b>" . $sql . "</b>.");

                    while ($data = mysqli_fetch_assoc($hasil)) {
                        $num++;
                    ?>
                        <tr>
                            <td><?php echo $num ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['harga']; ?></td>
                            <td><img width="100px" height="100px" class="row my-5 rounded" src="../assets/katalog/<?php echo $data['gambar']; ?>" alt=" ">
                                <figcaption class="figure-caption "><?php echo $data['gambar']; ?></figcaption>
                            </td>
                            <td>
                                <a class="btn btn-danger fw-bold btn-del" href="proses/delete-katalogphp?gambar=<?php echo $data['gambar']; ?>">Hapus</a>
        </div>
        </td>
        </tr>
    <?php
                    }
    ?>
    </tbody>
    </table>

    <!-- ABOUT IMG INS -->
    <table class="table bg-white rounded shadow-lg ">
        <tbody>
            <tr>
                <td>
                    <form action="proses/add-katalog.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Tambah Item</label>
                                <input type="file" name="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama </label>
                                <input class="form-control" type="text" name="txtNama">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga </label>
                                <input class="form-control" type="text" name="txtHarga">
                            </div>
                            <div class="mb-3">
                                <input class="btn btn-primary" type="submit" value="Submit" name="submit">
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

    </div>
</div>
<?php include("admin-footer.php") ?>