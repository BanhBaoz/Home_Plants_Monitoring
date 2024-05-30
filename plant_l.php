<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plant List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="plants.css">
  <link href="style.css" rel="stylesheet" />
  <link rel="shortcut icon" href="#">
</head>

<body>

  <?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
  
  <section id="title" class="gradient-background">

    <div class="container col-xxl-8 px-4 pt-5">
      <div class="row flex-lg-row-reverse align-items-center gx-5 pt-5">
        <div class="col-10 col-sm-8 col-lg-6">
          
        </div>
        <div class="col-lg-6">
          <h1 class="display-1 fw-bold  lh-1 mb-0 height" >Plant List</h1>

          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container px-5">
        <a class="navbar-brand" href="#page-top" class="col">Home Plants Monitoring</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="./index.html">Main Page</a></li>
                <li class="nav-item"><a class="nav-link" >Plant List</a></li>
                <li class="nav-item"><a class="nav-link" href="./sensors.html">About Sensors</a></li>
            </ul>
        </div>
    </div>
</nav>
  <!-- Features -->
  <!-- Testimonial -->
  <!--Icons
  tick: <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                          </svg>
  dots: <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
                          </svg>
  cross: <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
-->
  <section id="pricing">
    <div class="container">
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">

        <p class="fs-5 text-body-secondary">
      </div>
      <div class="row row-cols-2  row-cols-md-4 mb-4 text-center">
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./aloe1.jpg" alt="p1">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Aloe Vera</h5>
                          confirmed:
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
                          </svg>
                          
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./aloe.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./anthurium1.jpg" alt="p1">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Anthurium</h5>
                          confirmed:
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
                          </svg>
                          
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./anthurium.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./bamboo1.jpg" alt="p1">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Bamboo</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./bamboo.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./cactus1.jpg" alt="p1">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Cactus</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./cactus.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./calathea1.webp" alt="p1">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder"> Calathea</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./cathalea.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./chama1.jpg" alt="p1">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Chamaedorea</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./chama.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./cissus1.webp" alt="Cissus striata">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Cissus Striata</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./cissus.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./clove1.jpg" alt="Clove pink">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Clove pink</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./clove.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./crasula1.png" alt="Crassula">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Crassula</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./crasula.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./dracena1.jpg" alt="Dracaena">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Dracaena</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./dracena.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./ficus1.jpg" alt="Ficus">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Ficus</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./ficus.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./gremanium1.jpg" alt="Geranium">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Geranium</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./gremanium.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>

         <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./heather1.jpg" alt="Heather">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Heather</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./heather.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>

        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./ivy1.jpg" alt="Ivy">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Ivy</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./ivy.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>

        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./kala1.jpg" alt="Kalanchoe">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Kalanchoe</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./kalanchoke.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>

        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./mint1.png" alt="Mint">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Mint</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./mint.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>

         <!-- To-Do -->
         
         <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./monstera1.jpg" alt="monstera">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Monstera</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./monstera.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>

        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./orchid1.jpg" alt="orchid">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Orchid</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./orchid.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>

        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./polypodium1.jpg" alt="polypodium">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Polypodium</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./polypodium.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>

        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./polyscias1.jpg" alt="Polyscias">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Polyscias</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./polyscias.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>

        <!--To-do-->

        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./sans1.jpg" alt="Sansevieria">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Sansevieria</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./sanseviera.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>

        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./spath1.jpg" alt="Spathiphyllum">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Spathiphyllum</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./spathi.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>

        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./succ2.jpg" alt="Succulent">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Succulent</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./succulent.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>

        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./trad1.jpg" alt="Tradescantia">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Tradescantia</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./trade.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>

        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./yucca1.jpg" alt="Yucca">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Yucca</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./yucca.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>

        <!--to do-->

        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm"> 
            <div class="col">
              <div class="card h-100">
                  <img class="card-img-top" src="./zammio1.jpg" alt="Zamioculcas Zamiifolia">
                  <div class="card-body p-4">
                      <div class="text-center">
                          <h5 class="fw-bolder">Zamiokulkas</h5>
                          confirmed:
                          
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                      </div>
                  </div>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./zammio.html">View info</a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>


    </div>
  </section>
  <section id="pricing">
    <div class="container">
      <div class="pricing-header col-lg-4 p-3 pb-md-4 mx-auto text-center">

        <form action="upload.php"
              method="post"
              enctype="multipart/form-data">

              <input type="file" 
                      name="my_image">

              <input type="submit" 
                      name="submit"
                      value="Upload">       
        </form>
      </div>
    </div>
  </section>
</div>
  <!-- Footer -->
      
   <footer class="py-3 bg-black">
      <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Group nr3</p></div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--<script src="js/scripts.js"></script>-->
</body>

</html>