<div class="section-title">
    <h2>Porjet</h2>
  </div>
    <div id="carouselExampleControls" class="carousel slide container w-100" data-ride="carousel">
        <div class="carousel-inner mx-auto">
            @foreach ($projet as $item)
                <div class="carousel-item {{$loop->iteration == 1 ? 'active' : ''}}">
                    <div class="card mx-auto" style="width: 100%;">
                        <img src="{{asset('img/' . $item->src)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{$item->nom}}</h5>
                        <p class="card-text">Coder avec {{$item->tag->tag}}</p>
                        <a href="#" class="btn btn-primary">voir</a>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>