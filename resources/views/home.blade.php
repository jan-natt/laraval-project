<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
  <body>
   <nav class="navbar navbar-expand-lg theme-navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h1>E-commarce</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div>
         <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-light theme-green-btn  text-secondary" type="submit">Search</button>
      </form>
    </div>
    
    <div class="ms-5"> 
      <a href="#" class="text-decoration-none text-light">Become seller</a>
      <a href="#" class="btn theme-blue-btn btn-sm text-light"><i class="fa-solid fa-cart-shopping"></i>cart</a>
      <a href="#" class="btn theme-orange-btn btn-sm text-light"><i class="fa-solid fa-right-to-bracket"></i>login</a>

    </div>
  </div>
</nav>
<div>
    <h2>Welcome to the Home Page</h2>
</div>
<footer class="bg-primary text-light py-3 mt-5">
    <div class="container text-center">
        &copy; 2025 E-commerce. All rights reserved.
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>