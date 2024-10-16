<x-nav></x-nav>

<x-layout>
    <div class="details-page">
        <div class="details-box">
            <div class="details-content">
                <h1> {{$idea->name}} </h1>
                <p> {{$idea->idea}}</p>
                <a href="{{route('ideas.index')}}"> return </a>
            </div>

            <form action="{{route('ideas.destroy', $idea -> id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" id="delete-button"> delete </button>
            </form>
        </div>
    </div>
</x-layout>

<x-footer></x-footer>
