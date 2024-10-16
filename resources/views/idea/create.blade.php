<x-nav></x-nav>

<x-layout>
    <div class="create-box">
        <form action="{{ route('ideas.store') }}" method="post" class="create-form">
            @csrf
            <div class="input-fields">
                <div class="input-field">
                    <x-input-label for="name" id="label"> Character name </x-input-label>
                    <x-text-input name="name" id="name"> </x-text-input>
                </div>
                <div class="input-field">
                    <x-input-label for="idea" id="label"> type your idea </x-input-label>
                    <x-text-input name="idea" id="idea"></x-text-input>
                </div>
            </div>
            <x-primary-button type="submit" class="create-button"> create </x-primary-button>
        </form>
    </div>
</x-layout>

<x-footer></x-footer>
