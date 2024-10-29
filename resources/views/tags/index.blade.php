<x-nav></x-nav>

<x-layout>
    @admin
    <div class="main">
        <form action="{{route('admin')}}" method="POST">
            @method('GET')
            @csrf
            <button type="submit" id="back-button"> Go back </button>
        </form>
        <div class="all-tags">

            @foreach ($tags as $tag)
                <div class="tag">
                    <h3>{{$tag -> name}}</h3>
                </div>
            @endforeach

        </div>
    </div>
    @endadmin
</x-layout>

<x-footer></x-footer>
