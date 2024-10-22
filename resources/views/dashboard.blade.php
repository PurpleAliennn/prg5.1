<x-nav></x-nav>

<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="main">
        <div>
            <div>
                <div class="dash-message">
                    {{ __("You're logged in!") }}
                    <form action="{{route('ideas.index')}}" method="POST">
                        @method('GET')
                        @csrf
                        <button type="submit" id="dash-button"> homepage </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>

<x-footer></x-footer>
