<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>APPA PROJECT | Photography</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">APPA PROJECT PHOTOGRAPHY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="#about">About</a>
            <a class="nav-link" href="#galery">Galery</a>
            <a class="nav-link" href="#contact">Contact</a>
            <a class="nav-link text-primary" href="register.php">Regist</a>
            <a class="btn btn-primary" href="login.php">Login</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- akhir navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center p-3 mt-5 text-light  bg-secondary">
      <img src="img/cam.jpg" alt="Appa Project" width="300" class="rounded-circle img-thumbnail" />
      <div class="socialmedia mt-3">
        <a href="https://www.instagram.com/dodinandi/" target="_blank" class="insta"><i class="bi bi-instagram text-danger"></i></a>
      </div>
      <h1 class="display-4">PHOTOGRAPHY</h1>
      <p class="lead">WEDDING | GRADUATION | TRAVELLING</p>
    </section>

    <!-- akhir Jumbotron -->

    <!-- About  -->
    <section id="about">
      <div class="container">
        <div class="row text-center mt-5">
          <div class="col">
            <h2>About</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-6 text-center">
          <div class="col-md-4 mb-5">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum pariatur ducimus facere iure ipsum reprehenderit nemo consequatur laudantium, veritatis dolore.</p>
          </div>
          <div class="col-md-4 mb-5">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit fuga, laudantium similique repudiandae dolor deleniti maxime non illo quas qui! Cum quam ducimus alias quo.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Akhir About -->

    <!-- Galery  -->
    <section id="galery">
      <div class="con bg-secondary text-dark mt-5">
        <div class="row text-center text-light mb-3">
          <div class="col">
            <h2>Galery</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-3 mb-3">
            <div class="card">
              <img src="img/project/w.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card">
              <img src="img/project/g.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card">
              <img src="img/project/t.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Galery  -->

    <!-- Contact -->
    <section id="contact">
      <div class="con mt-5">
        <div class="row text-center">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary mb-5">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="bg-dark text-white text-center p-3 mt-shadow navbar-dark">
      <p>Created with <i class="bi bi-instagram text-danger"></i> by <a href="https://www.instagram.com/dodinandi/" class="text-white fw-bold">Dodi Hernandi</a></p>
    </footer>
    <!-- Akhir Footer -->
  </body>
</html>
