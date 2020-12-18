


<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">
            @foreach ($user as $item)
                
            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>{{$item->info->ville}}</p>
                </div>
                
                <div class="email">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>{{$item->email}}</p>
                </div>
                
                <div class="phone">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>{{$item->info->phone}}</p>
                </div>
                
              </div>
              
            </div>
            @endforeach

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="/contact" enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
              @csrf
              <div class="form-group">
                <label for="exampleFormControlInput1">Email </label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Nom</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nom" name="nom">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Sujet</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="sujet" name="sujet">
              </div>
             
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Envoyer</button>

            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


    
  </div>
  <div class="culmn">
    <!--Home page style-->
  
  
    <nav class="navbar position-fixed text-end w-100">
        <div class="container">  
  
            <div class="attr-nav">
                <ul>
                 
                </ul>
            </div>  
  
  
            <!-- Start Header Navigation -->
            <div class="navbar-header">
  
                <a class="navbar-brand text-dark" href="#">
                  <p><span onclick="openNav()">Contactez</span><span class="typed" data-typed-items="-moi !"></span></p>
  
                </a>
  
            </div>
            <!-- End Header Navigation -->
        </div>   
  
    </nav>
 