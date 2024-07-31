<?php
include('./includes/config.php');
include('./includes/header.php');
$statusMsg = "";
?>

<body>
    <div class="wrapper pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Search Data</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <form action="" method="GET">
                                            <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                                                                        echo $_GET['search'];
                                                                                    } ?>" class="form-control" placeholder="Search here">
                                            <button type="submit" class="btn btn-primary mt-2">Search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            CRUD Operations
                            <span>
                                <a href="register.php" class="float-end btn btn-success">Register</a>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Phone</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($_GET['search']) && !empty($_GET['search'])) {
                                            $filtervalues = $_GET['search'];
                                            $query = "SELECT * FROM emp WHERE CONCAT(id,name, email,password,phone) LIKE '%$filtervalues%'";
                                        } else {
                                            $query = "SELECT * FROM emp";
                                        }

                                        $result = mysqli_query($conn, $query);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                                <tr>
                                                    <td><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['email']; ?></td>
                                                    <td><?php echo $row['password']; ?></td>
                                                    <td><?php echo $row['phone']; ?></td>
                                                    <td><a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a></td>


                                                    <td>
                                                        <form action="action.php" method="POST">
                                                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="7">No data found</td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include('./includes/footer.php'); ?>