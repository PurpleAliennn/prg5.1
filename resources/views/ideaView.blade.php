<x-nav></x-nav>

<x-layout>
    <div class="main">
        <div class="search-bar">
            <form action='{{ route('ideas.index') }}' method="get">
                @csrf
                <input id="search" name="search" placeholder="cleric">
                <button type="submit" class="search-button"> search </button>
            </form>
        </div>

        <div class="filter-options">
            <form action=" {{ route('ideas.index') }}" method="get">
                @csrf
                <select name="filter" id="filter">
                    <option> -- select option --</option>
                    @foreach($tags as $tag)
                        <option value="{{ $tag-> id }}"> {{ $tag -> name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="search-button"> filter </button>
            </form>
        </div>

        <div class="all-ideas">

            @foreach ($characters as $character)
                @if($character-> active)
                <div class="idea">
                    <h3>{{$character -> name}}</h3>
                    <p>{{$character -> idea}}</p>
                    <a href="{{route('ideas.show', $character -> id)}}" class="details"> Details </a>
                </div>
                @endif
            @endforeach

        </div>
    </div>
</x-layout>

<x-footer></x-footer>
