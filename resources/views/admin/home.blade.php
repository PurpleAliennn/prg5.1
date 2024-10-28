<x-nav></x-nav>

<x-layout>
    <div class="main">
        <div class="admin-tags">
            <h2> Tags </h2>
            <form action="{{route('tags.index')}}" method="POST">
                @method('GET')
                @csrf
                <button type="submit" id="tag-create-button"> Show all tags </button>
            </form>
            <form action="{{route('tags.create')}}" method="POST">
                @method('GET')
                @csrf
                <button type="submit" id="tag-create-button"> Create new tag </button>
            </form>
        </div>
        

    </div>
</x-layout>

<x-footer></x-footer>
