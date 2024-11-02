<x-nav></x-nav>

<x-layout>
    <div class="create-box">
        <form action="{{ route('ideas.store') }}" method="post" class="create-form">
            @csrf
            <div class="input-fields">
                <div class="input-field">
                    <x-input-label for="name" id="label"> Character name </x-input-label>
                    <x-text-input name="name" id="name" value=" {{ old('name') }} "> </x-text-input>
                    @error('name')
                        <span> {{ $message }} </span>
                    @enderror
                </div>
                <div class="input-field">
                    <x-input-label for="idea" id="label"> type your idea </x-input-label>
                    <x-text-input name="idea" id="idea" value=" {{ old('idea') }} "></x-text-input>
                    @error('idea')
                        <span> {{ $message }} </span>
                    @enderror
                </div>

                <div class="checkboxes">
                    <select name="tag_id" id="tags">
                        @foreach($tags as $tag)
                                <option value="{{ $tag-> id }}"> {{ $tag -> name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <x-primary-button type="submit" class="create-button"> create </x-primary-button>
        </form>
    </div>
</x-layout>

<x-footer></x-footer>
