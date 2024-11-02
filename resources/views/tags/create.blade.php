<x-nav></x-nav>

<x-layout>
    @admin
    <div class="create-box">
        <form action="{{ route('tags.store') }}" method="post" class="create-form">
            @csrf
            <div class="input-fields">
                <div class="input-field">
                    <x-input-label for="name" id="label"> Tag name </x-input-label>
                    <x-text-input name="name" id="name"> </x-text-input>
                    @error('name')
                        <span> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <x-primary-button type="submit" class="create-button"> create </x-primary-button>
        </form>
    </div>
    @endadmin
</x-layout>

<x-footer></x-footer>
