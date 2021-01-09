<header>
    <h1>coder free</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}"class="{{request()->routeIs('home') ? 'active' : ''}}">home</a></li>
            <li><a href="{{route('cursos.index')}}"class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a></li>
            <li><a href="{{route('nosotros')}}"class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a></li>
            <li></li>
        </ul>
    </nav>
</header>