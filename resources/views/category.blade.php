@extends('layout.main')

@section('content')
   <div class="container-fluid bg-light p-5">
       <h1 class="text-center">Category Details</h1>
     <!-- product -->
 <section class="my-5">
    <div class="container">
      
        <div class="row theme-product">
            <div class="col-lg-3 mb-5" >
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
   </div>
@endsection