<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WElcome to the M school</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css
">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="mit.png">
</head>
<body class="body_home">
  <div class="black_fill"><br><br>
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="homenav">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="./mit.png" alt="ICON" width="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav me-right mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="login.php">Log in</a>
          </li>
        </ul>
      </div>
      
        </div>
    </nav>
      <section class="welcome-text d-flex justify-content-center align-items-center flex-column">
        <img src="./mit.png" alt="">
        <h4>WElcome to the M school</h4>
        <p>welcome to our school</p>
      </section>
      <section id="about"
              class="welcome-text d-flex justify-content-center align-items-center flex-column">
          <div class="card mb-3" card-1>
            <div class="row g-0">
              <div class="col-md-4">
                <img src="./mit.png" class="img-fluid rounded-start" alt="M school">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">About</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-body-secondary">M school </small></p>
                </div>
              </div>
            </div>
          </div>
      </section>
      <section id="contact"
              class="welcome-text d-flex justify-content-center align-items-center flex-column">
          <form>
            <h3>contact us</h3>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label class="form-label">name</label>
                <input type="text" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">comment</label>
                <textarea cols="4" rows="5" class="form-control"></textarea>
              </div>
            
              <button type="submit" class="btn btn-primary">send</button>
          </form>
      </section>
      <div class="text-center text-light" >
        copyright &copy; 2018 M school . All right reserved
      </div>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>