<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Poppins:wght@200;400;600&family=Ubuntu&display=swap"
        rel="stylesheet">

</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Abhijit Prakash's Tourism</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>


                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="hil.jpg" alt="Manali" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Manali</h3>
                    <p>We had such a great time in Manali</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="tr.jpg" alt="Gulmarg" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Gulmarg</h3>
                    <p>Thank you,again visit Gulmarg</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="dl3.jpg" alt="Dal Lake" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Dal Lake</h3>
                    <p>Boating in dal lake</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="dl1.jpg" alt="Dal Lake" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Dal Lake</h3>
                    <p>Enjoying in Dal Lake</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us </h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="d1.jpg" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-7">Our Team Provides Touring Packages</h2>
                    <p>Personalized Adventures : Every tour is meticulously designed to cater to your interests,
                        ensuring a personalized and immersive experience.</p>
                    <p>Local Expertise : We're not just tour guides; we're locals passionate about showcasing the hidden
                        gems and cultural richness of each destination.</p>
                    <p>Sustainable Travel : We're committed to responsible tourism, minimizing our environmental
                        footprint and contributing to the well-being of local communities.
                    </p>
                    <a href="about.php" class="btn btn-success"> check More </a>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Services </h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="enj.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Manali Trip :)</h4>
                            <p class="card-text">Price Starting at 6k.</p>
                            <a href="#" class="btn btn-primary">See Photos</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="md4.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Gulmarg Trip:)</h4>
                            <p class="card-text">Best Price at 12k Per Person</p>
                            <a href="#" class="btn btn-primary">See Photos</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="md3.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Sonmarg :)</h4>
                            <p class="card-text">Sonmarg Trip at 13k Per Person.</p>
                            <a href="#" class="btn btn-primary">See Photos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Gallery </h2>
        </div>
        
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="md5.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="md6.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="md7.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="md8.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="md9.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="md9.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="bg2.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="md18.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="md19.jpg" class="img-fluid pb-4">
            </div>
        </div>



    </section>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Form Fill </h2>
        </div>

        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email Id</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mobile No</label>
                    <input type="text" name="mobile no" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>comments</label>
                    <textarea class="form-control" name="comments">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>

    </section>

    <footer>
        <p class="p-3 bg-dark text-white text-center">@abhitourism</p>
    </footer>
            

            <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>