
 

 <!-- ======= About Section ======= -->
 <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
        @foreach ($user as $item)
        <div class="col-lg-4">
          <img src="{{asset('img/' . $item->info->src)}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content">
          <h3>Web Developer.</h3>
          <p class="font-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Date de naissance :</strong> {{$item->info->date}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Numeros :</strong> {{$item->info->phone}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Ville :</strong> {{$item->info->ville}}</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Email :</strong> {{$item->email}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Freelance :</strong> {{$item->info->etat}}</li>
              </ul>
            </div>
          </div>
          @endforeach
          <p>
            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->
