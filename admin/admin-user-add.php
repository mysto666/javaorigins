<?php include("admin-header.php"); ?>

<div class="container-fluid px-4">
    <div class="row my-5">
        <h3 class="fs-4 mb-3">Tambah User </h3>
        <div class="col">
            <table class="table bg-white rounded shadow-lg ">
                <tbody>
                    <tr>
                        <td>
                            <form action="proses/add-user.php" method="post" class="form-body ">

                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="txtNama">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="txtEmail">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="txtPassword">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Repeat Password</label>
                                    <input type="password" class="form-control" name="txtRetypepass">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="admin-user.php" class="btn btn-danger fw-bold">Cancel</a>
                                </div>


                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?php include("admin-footer.php"); ?>