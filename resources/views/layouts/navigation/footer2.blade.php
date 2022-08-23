    <style>
        a{
            color: white;
        }
    </style>
    <footer class="py-3 my-4 mt-auto text-center text-white" style="background: #C4C4C4; color:white">

      <ul class="nav justify-content-center pb-2">
        <li class="nav-item text-white"><a href="#" class="nav-link px-2 text-white ">Register</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Forum</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Affiliate</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-white">FAQ</a></li>
      </ul>

      <ul class="nav justify-content-center pb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-white mx-2"><i style="font-size:2rem" class="fab fa-facebook"></i></a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-white mx-2"><i style="font-size:2rem" class="fab fa-twitter"></i></a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-white mx-2"><i style="font-size:2rem" class="fab fa-instagram"></i></a></li>
      </ul>
      @isset($page)
      @if ( visits($page)->period('month')->count() < 1)
      <h3>Visitor {{ visits($page)->period('month')->count()}}</h3>
      @elseif ( visits($page)->period('month')->count() > 1)
      <h3>Visitors {{ visits($page)->period('month')->count()}}</h3>
      @endif

      @endisset
      <p class="text-center">&copy; 2022. Oasis. All rights reserved.</p>

    </footer>
