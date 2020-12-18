<footer id="footer">
    <div class="container">
      @foreach ($user as $item)
      <h3>{{$item->nom}} {{$item->prenom}}</h3>
          
      @endforeach
      <p>La meilleure façon de prédire l'avenir est de le créer.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="fab fa-twitter-square"></i></a>
        <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
      </div>
        <div class="copyright">
          &copy; Copyright <strong><span>MyPortfolio</span></strong>. All Rights Reserved
        </div>
    </div>
</footer>
  <!-- End Footer -->
