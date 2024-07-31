<?php
include('./includes/config.php');
include('./includes/header.php');


?>

<body>
    <div class="wrapper pt-5">
        <div class="container">
            <div class="card">
                <form action="action.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="enter name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="enter email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="enter password">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="enter phone">
                    </div>
                    <button type="submit" name="register" class="btn btn-success">save</button>
                </form>

            </div>
        </div>
    </div>


</body><?php include('./includes/footer.php'); ?>