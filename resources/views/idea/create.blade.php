<x-layout>
    <form action="{{ route('ideas.store') }}" method="post">
        @csrf
        <div>
            <x-input-label for="name"> Name </x-input-label>
            <x-text-input name="name" id="name"> </x-text-input>
        </div>
        <div>
            <x-input-label for="idea"> type your idea </x-input-label>
            <x-text-input name="idea" id="idea"></x-text-input>
        </div>
        <x-primary-button type="submit"> create </x-primary-button>
    </form>
</x-layout>
