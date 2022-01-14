<?php include("admin-header.php"); ?>

<!-- Page Content -->

<div class="container-fluid px-4 ">

  <div class="row my-5 main">
    <div class="card-content">
      <div class="col-lg ">
        <?php
        if (isset($_GET['n'])) {
          if ($_GET['n'] == "1") {
            echo "<div class='alert alert-success' style='padding-top:10px;'>Success</div>";
          }
        }
        ?>
      </div>
    </div>
    <div class="card-content" style="padding-bottom: 20px;">
      <div class="col-lg ">
        <a href="admin-user-add.php" class="btn btn-success float-end fw-bold">Tambah Data</a>
      </div>
    </div>

    <div class="table shadow-lg">
      <table class="table caption-top table-responsive">
        <caption>List of Admin</caption>
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include("../config.php");
          $num = 0;
          $sql = "SELECT id,nama,email FROM user";
          $hasil = mysqli_query($conn, $sql) or exit("Error query: <b>" . $sql . "</b>.");

          while ($data = mysqli_fetch_assoc($hasil)) {
            $num++;
          ?>
            <tr>
              <td><?php echo $num ?></td>

              <td><?php echo $data['nama']; ?></td>
              <td><?php echo $data['email']; ?></td>
              <td>
                <div class="dropdown show">
                  <a class="btn btn-primary  fas fa-users-cog" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="admin-user-edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    <a class="dropdown-item btn-del" href="proses/delete-user.php?id=<?php echo $data['id']; ?>">Hapus</a>
                  </div>
                </div>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include("admin-footer.php"); ?>