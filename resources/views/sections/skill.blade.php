
 
 <!-- ======= Skills Section ======= -->

 <section id="skills" class="skills section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Skills</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row skills-content">
      @foreach ($tag as $item)
            
        <div class="col-6">
          
          <div class="progress">
            <span class="skill">{{$item->tag}} <i class="val">{{$item->niveau}}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{$item->niveau}}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>

          
        @endforeach
      </div>

      
  </section>
  
  <!-- End Skills Section -->
