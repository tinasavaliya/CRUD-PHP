<?php
include('./includes/config.php');
include('./includes/header.php');

$id = $_GET['id'];
$select = mysqli_query($conn, "select * from emp where id='$id'");
if (mysqli_num_rows($select) > 0) {
    $res = mysqli_fetch_array($select);


?>

    <body>
        <div class="wrapper pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header">
                                Edit user
                            </div>
                            <div class="card-body">
                                <form action="action.php" method="post">

                                    <input type="hidden" name="update_id" class="form-control" id="update_id" value="<?php echo $res['id']; ?>">

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" value="<?php echo $res['name']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" name="email" class="form-control" id="email" value="<?php echo $res['email']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">password</label>
                                        <input type="password" name="password" class="form-control" id="password" value="<?php echo $res['password']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">phone</label>
                                        <input type="text" name="phone" class="form-control" id="phone" value="<?php echo $res['phone']; ?>">
                                    </div>
                                    <button type="submit" name="update" class="btn btn-success">update</button>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
<?php
} else {
    echo "No data found";
}
include('./includes/footer.php');
?>