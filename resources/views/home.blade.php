@extends('layout.main')
@section('content')
<section>
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('assets/images/1.jpg') }}" class="d-block w-100" alt="slider 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/images/2.jpg') }}" class="d-block w-100" alt="slider 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/images/3.jpg') }}" class="d-block w-100" alt="slider 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
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
</section>


<!-- product -->
 <section class="my-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0">Our top Products</h1>
            <a href="#" class="btn btn-primary">View All</a>
        </div>
        <div class="row theme-product">
            <div class="col-lg-3">
                <div class="card" >
                <a href="#"><img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to
                        build on the card title and make up the bulk of the card’s content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

             <div class="col-lg-3">
                <div class="card" >
                 <a href="#"><img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to
                        build on the card title and make up the bulk of the card’s content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

             <div class="col-lg-3">
                <div class="card" >
                 <a href="#"><img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to
                        build on the card title and make up the bulk of the card’s content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

             <div class="col-lg-3">
                <div class="card" >
                 <a href="#"><img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to
                        build on the card title and make up the bulk of the card’s content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- product -->
 <section class="my-5">
    <div class="container">
        <h1 class="mb-4">Our top Products</h1>
        <div class="row theme-product">
            <div class="col-lg-3">
                <div class="card" >
                <a href="#"><img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to
                        build on the card title and make up the bulk of the card’s content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

             <div class="col-lg-3">
                <div class="card" >
                 <a href="#"><img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to
                        build on the card title and make up the bulk of the card’s content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

             <div class="col-lg-3">
                <div class="card" >
                 <a href="#"><img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to
                        build on the card title and make up the bulk of the card’s content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

             <div class="col-lg-3">
                <div class="card" >
                 <a href="#"><img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to
                        build on the card title and make up the bulk of the card’s content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- product -->
 <section class="my-5">
    <div class="container">
        <h1 class="mb-4">Our top Products</h1>
        <div class="row theme-product">
            <div class="col-lg-3">
                <div class="card" >
                <a href="#"><img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to
                        build on the card title and make up the bulk of the card’s content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

             <div class="col-lg-3">
                <div class="card" >
                 <a href="#"><img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to
                        build on the card title and make up the bulk of the card’s content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

             <div class="col-lg-3">
                <div class="card" >
                 <a href="#"><img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to
                        build on the card title and make up the bulk of the card’s content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

             <div class="col-lg-3">
                <div class="card" >
                 <a href="#"><img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to
                        build on the card title and make up the bulk of the card’s content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- product -->
 <section class="my-5">
    <div class="container">
        <h1 class="mb-4">Our top Products</h1>
        <div class="row theme-product">
            <div class="col-lg-3">
                <div class="card" >
                <a href="#"><img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to
                        build on the card title and make up the bulk of the card’s content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

             <div class="col-lg-3">
                <div class="card" >
                 <a href="#"><img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to
                        build on the card title and make up the bulk of the card’s content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

             <div class="col-lg-3">
                <div class="card" >
                 <a href="#"><img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to
                        build on the card title and make up the bulk of the card’s content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

             <div class="col-lg-3">
                <div class="card" >
                 <a href="#"><img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to
                        build on the card title and make up the bulk of the card’s content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
