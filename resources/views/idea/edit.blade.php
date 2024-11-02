<x-nav></x-nav>

<x-layout>

    <div class="edit">
        @if(isset(auth()-> user()-> id) && $idea -> user_id === auth()-> user()-> id)
        <div class="create-box">
            <h3> Edit your character</h3>
            <form action="{{ route('ideas.update', $idea) }}" method="post" class="create-form">
                @csrf
                @method('PATCH')
                <div class="input-fields">

                    <div class="input-field">
                        <x-input-label for="name" id="label"> Change character name </x-input-label>
                        <x-text-input name="name" id="name" value="{{ old('name') ?? $idea->name}}"> </x-text-input>
                        @error('name')
                            <span> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="input-field">
                        <x-input-label for="idea" id="label"> edit your idea </x-input-label>
                        <x-text-input name="idea" id="idea" value="{{ old('idea') ?? $idea->idea }}"></x-text-input>
                        @error('idea')
                            <span> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="checkboxes">
                        <select name="tag_id" id="tags">
                            @foreach($tags as $tag)
                                <option value="{{ old('tag') ?? $tag-> id }}"> {{ $tag -> name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <x-primary-button type="submit" class="create-button"> edit </x-primary-button>
            </form>
        </div>
        @endif
        @admin
            <div class="create-box">
                <h3> Admin controls </h3>
                <form action="{{ route('ideas.update', $idea) }}" method="post" class="create-form">
                    @csrf
                    @method('PATCH')
                    <div class="input-fields">
                        <div class="input-field">
                            <x-input-label for="name" id="label"> Change character name </x-input-label>
                            <x-text-input name="name" id="name" value="{{ old('name') ?? $idea->name}}"> </x-text-input>
                            @error('name')
                                <span> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="input-field">
                            <x-input-label for="idea" id="label"> edit your idea </x-input-label>
                            <x-text-input name="idea" id="idea" value="{{ old('idea') ?? $idea->idea }}"></x-text-input>
                            @error('idea')
                                <span> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="checkboxes">
                            <select name="tag_id" id="tags">
                                @foreach($tags as $tag)
                                    <option value="{{ old('tag') ?? $tag-> id }}"> {{ $tag -> name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <x-primary-button type="submit" class="create-button"> edit </x-primary-button>
                </form>
            </div>
        @endadmin
    </div>

</x-layout>

<x-footer></x-footer>
