<?php include("admin-header.php"); ?>

<!-- Page Content -->

<div class="container-fluid px-4">
    <div class="row my-5 main">
        <h3 class="fs-4 mb-3">Edit User </h3>
        <div class="col">
            <table class="table bg-white rounded shadow-lg ">
                <tbody>
                    <tr>
                        <td>
                            <form action="proses/edit-user.php" method="post" class="form-body ">
                                <?php
                                include("../config.php");
                                $id = $_GET['id'];
                                $sql = "SELECT * FROM user where id='$id' and level='admin'";
                                $hasil = mysqli_query($conn, $sql) or exit("Error query: <b>" . $sql . "</b>.");
                                while ($data = mysqli_fetch_assoc($hasil)) {
                                ?>
                                    <label class="form-label">ID</label>
                                    <div class="input-group mb-3">

                                        <input type="text" class="form-control" name="txtId" value="<?php echo $data['id']; ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="txtNama" value="<?php echo $data['nama']; ?>">

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <input type="email" class="form-control" name="txtEmail" value="<?php echo $data['email']; ?>">

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" id="psw" name="txtPassword" value="<?php echo $data['password']; ?>">
                                        <input type="checkbox" onclick="myFunction()">Show Password

                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="admin-user.php" class="btn btn-danger fw-bold">Cancel</a>
                                    </div>
                                <?php
                                }
                                ?>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?php include("admin-footer.php"); ?>