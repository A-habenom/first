<?php
include('aron.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login - M school</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css
">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="mit.png">
</head>
<body class="body_login">
  <div class="black_fill"><br><br>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <form class="login">
          <div class="text-center">
            <img src="./mit.png" width="100px">
          
          </div>
          <h3>login</h3>
          <div class="mb-3">
            <label class="form-label">username</label>
            <input type="text" class="form-control">
          </div>
          
          <div class="mb-3">
            <label class="form-label">password: </label>
            <input type="password" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">login AS </label>
            <select class="form-control">
              <option value="1">Admin</option>
              <option value="2">Student</option>
              <option value="3">teacher</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="./index.php" class="text-decoration-none">home</a>
    </form>
    <br>
      <div class="text-center text-light" >
        copyright &copy; 2018 M school . All right reserved
      </div>
    </div>
  </div>
  <h3> welcome to school registration</h3>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
