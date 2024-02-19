<nav class="navbar navbar-light bg-light justify-content-between m-3">
    <a class="navbar-brand">Тестовый проект</a>
    @auth('web')
        <a href="{{route('logout')}}"><button class="btn btn-outline-success" type="submit">Выйти</button></a>
        <
    @endauth
    @guest('web')
        <a href="{{route('login')}}"><button class="btn btn-outline-success" type="submit">Войти</button></a>
        <a href="{{route('register')}}"><button class="btn btn-outline-success" type="submit">Регистрация</button></a>
    @endguest
</nav>
