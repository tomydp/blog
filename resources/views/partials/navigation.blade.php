<nav>
   <ul>
      {{-- li*4>a emmet --}}
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('blog') }}">Blog</a></li>
      <li><a href="{{ route('about') }}">Nosotros</a></li>
      <li><a href="{{ route('contact') }}">Contacto</a></li>
      {{-- <li><a href="<?= route('contact') ?>">Contacto</a></li> Esto no se utiliza por la inyeccion de codigo, en la otra sintaxis agrega un e() --}}
   </ul>
</nav>