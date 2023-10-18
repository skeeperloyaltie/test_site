<!-- Update the user ID retrieval in the Cart and Checkout sections -->
<?php
// Start the session (add this at the beginning of your HTML file)
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Selling</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Add your custom CSS file if needed -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/logo.png" height="80px" width="100px" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                User Actions
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="login.php">Login</a></li>
                                <li><a class="dropdown-item" href="#aboutus">About Us</a></li>

                            </ul>
                        </li>
                        <ul class="navbar-nav">
                            <span style="float: right;">
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>
                            </span>
                        </ul>
                        <ul class="navbar-nav">
                            <span style="float: right;">
                                <li class="nav-item">
                                    <a class="nav-link" href="register.php">register</a>
                                </li>
                            </span>
                        </ul>

                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/image_2.png" class="d-block w-100" alt="...">
                    <!-- <div class="carousel-caption d-none d-md-block text-black-50">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div> -->
                </div>
                <div class="carousel-item">
                    <img src="img/image_1.png" class="d-block w-100" alt="...">
                    <!-- <div class="carousel-caption d-none d-md-block text-black-50">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div> -->
                </div>
                <div class="carousel-item">
                    <img src="img/image_3.png" class="d-block w-100" alt="...">
                    <!-- <div class="carousel-caption d-none d-md-block text-black-50">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div> -->
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Hero Section -->
        <div class="container mt-5">
            <div class="jumbotron">
                <p class="lead">Discover and share shoe types from around the world.</p>
                <hr class="my-4">
                <p>Ready to explore? Check out our featured shoe types or submit your own!</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Explore Recipes</a>
            </div>
        </div>


        <!-- Product Cards Section -->

        <!-- Product Cards Section -->
        <div class="container mt-5">
            <h2 class="mb-4">Product Listing</h2>

            <div class="row">
                <!-- Product Card 1 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/wengang-zhai-_fOL6ebfECQ-unsplash-removebg-preview.png" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">

                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/trendest-studio-XZ3EmAIWuz0-unsplash-removebg-preview.png" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">

                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/luis-felipe-lins-LG88A2XgIXY-unsplash-removebg-preview.png" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">

                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/jaclyn-moy-ugZxwLQuZec-unsplash-removebg-preview.png" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">Description of Product 1.</p>
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="img/domino-164_6wVEHfI-unsplash-removebg-preview.png" class="card-img-top" alt="Product Image 1">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">Description of Product 1.</p>
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div> -->

            </div>

        </div>

        <div id="aboutus" class="container mt-5">
            <div class="row">
                <!-- About Section (Left Side) -->
                <div class="col-md-6 mb-4">
                    <h2>About Us</h2>
                    <p>
                        We are the best, we deliver, supply and customize your artiliary based on your own thoughts,
                        We are moved by what you wear, we aould like to suprise you.
                    </p>
                </div>

                <!-- Testimonial Carousel (Right Side) -->
                <div class="col-md-6">
                    <h2>Testimonials</h2>
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

                        <div id="carouselExampleCaptions" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <blockquote class="blockquote">
                                        <p class="mb-0">"Great service! I'm very satisfied with their products."<br /></p>
                                        <footer class="blockquote-footer">Winter</footer>
                                    </blockquote>
                                </div>
                                <div class="carousel-item">
                                    <blockquote class="blockquote">
                                        <p class="mb-0">"Great service! I'm very satisfied with their products."<br /></p>
                                        <footer class="blockquote-footer">Charles</footer>
                                    </blockquote>
                                </div>
                                <div class="carousel-item">
                                    <blockquote class="blockquote">
                                        <p class="mb-0">"Good Delivery."<br /></p>
                                        <footer class="blockquote-footer">Skeeper</footer>
                                    </blockquote>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <!-- Footer Section -->
        <footer class="footer mt-5">
            <div class="container  text-center">
                <span class="text-muted">Recipe Sharing &copy; 2023</span>
            </div>
        </footer>

        <!-- Add Bootstrap JS and Popper.js scripts here -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>