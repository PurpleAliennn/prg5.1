<x-nav></x-nav>

<x-layout>
    <div class="create-box">
        <form action="{{ route('ideas.update', $idea) }}" method="post" class="create-form">
            @csrf
            @method('PATCH')
            <div class="input-fields">
                <div class="input-field">
                    <x-input-label for="name" id="label"> Change character name </x-input-label>
                    <x-text-input name="name" id="name" value="{{ old('name') ?? $idea->name}}"> </x-text-input>
                </div>
                <div class="input-field">
                    <x-input-label for="idea" id="label"> edit your idea </x-input-label>
                    <x-text-input name="idea" id="idea" value="{{ old('idea') ?? $idea->idea }}"></x-text-input>
                </div>
            </div>
            <x-primary-button type="submit" class="create-button"> edit </x-primary-button>
        </form>
    </div>
</x-layout>

<x-footer></x-footer>
