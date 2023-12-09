<?php

// Include database file
include './inc/database.php';

$customerObj = new database();

// Edit customer record
if (isset($_GET['editId']) && !empty($_GET['editId'])) {
  $editId = $_GET['editId'];
  $customer = $customerObj->displyaRecordById($editId);
}


// Update Record in customer table
if (isset($_POST['update'])) {
  $customerObj->updateRecord($_POST);
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EDIT</title>
  <meta name="description" content="This week we will be building a CREATE and READ CRUD system with PDO">
  <meta name="robots" content="noindex, nofollow">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./css/csslogin.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>
  <section class="container">
    <div class="row">
      <div class="col-md-5 mx-auto">
        <div class="card">
          <div class="card-header bg-primary">
            <h4 class="text-white">Update</h4>
          </div>
          <div class="card-body bg-light">
            <form action="edit.php" method="POST">
              <div class="form-group">
                <label for="ufname">First Name</label>
                <input type="text" class="form-control" name="ufname" value="<?php echo $customer['ufname']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="ulname">Last Name</label>
                <input type="text" class="form-control" name="ulname" value="<?php echo $customer['ulname']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="uemail">Email</label>
                <input type="email" class="form-control" name="uemail" value="<?php echo $customer['uemail']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="upass">Password</label>
                <input type="password" class="form-control" name="upass" value="<?php echo $customer['upass']; ?>" required="">
              </div>

              <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $customer['ID']; ?>">
                <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">

                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>