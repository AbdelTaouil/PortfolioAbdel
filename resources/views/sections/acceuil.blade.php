

<!-- ======= Hero Section ======= -->
<div class="row">
        <div class="col-6 p-0">
            <section id="hero" class="d-flex flex-column justify-content-center">
                <div class="container" data-aos="zoom-in" data-aos-delay="100">
                    @foreach ($user as $item)
                    <h1>{{$item->nom}} {{$item->prenom}}</h1>
                    <p>I'm Developer<span class="typed"  class="typed" data-typed-items="!"></span></p>
                    <h6>Simplicité est la clé du succés<span class="typed"  class="typed" data-typed-items="!"></span></h6>

            
                @endforeach
                <div class="social-links">
                    <a href="#" class="twitter"><i class="fab fa-twitter-square"></i></a>
                    <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
                </div>
                </div>
            </section>
        </div>
        <div class="col-6 p-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('img/1.jpg')}}" class="d-block w-100" style="height: 100vh" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/2.jpg')}}" class="d-block w-100" style="height: 100vh" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/3.jpg')}}" class="d-block w-100" style="height: 100vh" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        

</div>
<!-- End Hero -->

