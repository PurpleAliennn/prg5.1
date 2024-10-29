<x-nav></x-nav>

<x-layout>
    <div class="main">
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
