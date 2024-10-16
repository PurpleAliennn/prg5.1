<nav class="p-2">
    <x-navlink href="{{ route('ideas.index') }}" :active="request()->is('ideas')">Character ideas</x-navlink>
    {{--    <x-navlink href="{{ route('about') }}" :active="request()->is('about')">About</x-navlink>--}}

    @guest
        <x-navlink href="{{ route('login') }}" :active="request()->is('login')">Login</x-navlink>
        <x-navlink href="{{ route('register') }}" :active="request()->is('register')">Register</x-navlink>
    @endguest

    @auth
        <x-navlink href="{{ route('ideas.create') }}" :active="request()->is('ideas.create')">Add new character idea</x-navlink>
        <x-navlink href="{{ route('logout') }}" :active="request()->is('logout')">Logout</x-navlink>
        <x-navlink href="{{ route('profile.edit') }}" :active="request()->is('profile.edit')">Profile</x-navlink>
    @endauth
</nav>
