<?php

include './inc/database.php';
$customerObj = new database();

if (isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
  $deleteId = $_GET['deleteId'];
  $customerObj->deleteRecord($deleteId);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN</title>
  <meta name="description" content="This week we will be building a CREATE and READ CRUD system with PDO">
  <meta name="robots" content="noindex, nofollow">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body style="background-color: grey;">
  <main class="container">
    <?php
    if (isset($_GET['msg1']) == "insert") {
    ?>
      <a href="index.php">Click Here</a>
    <?php
    }
    if (isset($_GET['msg2']) == "update") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='.btn-primary' data-dismiss='alert'>X</button>
              Your Registration updated successfully
            </div>";
    ?>
      <a href="admin.php">Click Here</a>
    <?php
    }
    if (isset($_GET['msg3']) == "delete") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='.btn-danger' data-dismiss='alert'>X</button>
              Record deleted successfully
            </div>";
    ?>
      <a href="index.php">Click Here</a>
    <?php
    }

    ?>
    <section>
      <h2>View Data <br>
        <a href="login.php" target="_blank" style="float:left;"><button class="btn btn-success"><i class="fas fa-plus"></i></button></a>
      </h2>
      <table class="table table-hover table-dark table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $users = $customerObj->displayData();
          foreach ($users as $user) {
          ?>
            <tr>
              <td><?php echo $user['ID'] ?></td>
              <td><?php echo $user['fname'] ?></td>
              <td><?php echo $user['lname'] ?></td>
              <td><?php echo $user['email'] ?></td>
              <td><?php echo $user['pass'] ?></td> <br>
              <td>
                <button class="btn btn-primary mr-2"><a target="_blank" href="edit.php?editId=<?php echo $user['ID'] ?>">
                    <i" class="fa fa-pencil text-white" aria-hidden="true"></i>
                  </a></button>
                <button class="btn btn-danger"><a href="admin.php?deleteId=<?php echo $user['ID'] ?>" onclick="confirm('Click OK to confirm')">
                    <i class="fa fa-trash text-white" aria-hidden="true"></i>
                  </a></button>
              </td>   
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </section>
  </main>
</body>

</html>