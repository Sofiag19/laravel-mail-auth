<header>
  <div class="title"><a href="{{ route('doc.index') }}">NOWZARADAN CLINIC</a></div>
  <a href="{{ route('home') }}">LOG IN</a>
  <p>
    UTENTE
    @auth
      {{ Auth::user()-> name }}
    @else
      (GUEST)
    @endauth
  </p>
</header>