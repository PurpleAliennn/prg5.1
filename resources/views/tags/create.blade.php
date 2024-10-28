<x-nav></x-nav>

<x-layout>
    <div class="create-box">
        <form action="{{ route('tags.store') }}" method="post" class="create-form">
            @csrf
            <div class="input-fields">
                <div class="input-field">
                    <x-input-label for="name" id="label"> Tag name </x-input-label>
                    <x-text-input name="name" id="name"> </x-text-input>
                </div>
            </div>
            <x-primary-button type="submit" class="create-button"> create </x-primary-button>
        </form>
    </div>
</x-layout>

<x-footer></x-footer>