<nav>
    <x-navlink href="{{ route('ideas.index') }}" :active="request()->is('ideas')" id="nav-links">Character ideas</x-navlink>

    @guest
        <x-navlink href="{{ route('login') }}" :active="request()->is('login')" id="nav-links">Login</x-navlink>
        <x-navlink href="{{ route('register') }}" :active="request()->is('register')" id="nav-links">Register</x-navlink>
    @endguest

    @admin
        <p> manage posts </p>
    @endadmin

    @auth
        <x-navlink href="{{ route('ideas.create') }}" :active="request()->is('ideas.create')" id="nav-links">Add new character idea</x-navlink>
        <x-navlink href="{{ route('profile.edit') }}" :active="request()->is('profile.edit')" id="nav-links">Profile</x-navlink>

        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit" id="logout-button"> Logout</button>
        </form>
    @endauth
</nav>
