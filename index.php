<!DOCUMENT html>
<head>
    <title>Registration Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <br>
        <?php
            if(isset($_GET['userAdded'])){
        ?>
        <div class="alert alert-success">
            <strong>Success!</strong> User is inserted successfully.
        </div>
        <?php
            }
        ?>
        <?php
            if(isset($_GET['userNotAdded'])){
        ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> something went wrong.
            </div>
        <?php
        }
        ?>
        <h2>Sign Up here !!</h2>
        <form action="register.php" method="post">
            <div class form-group>
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" placeholder="Enter First Name" name="firstname" value="<?php echo(isset($firstname)) ? $firstname : '' ?>"">
            </div>
            <div class form-group>
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" placeholder="Enter Last Name" name="lastname">
            </div>
            <div class form-group>
                <label for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email">
            </div>
            <div class form-group>
                <label for="firstname">Password:</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="pwd">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>