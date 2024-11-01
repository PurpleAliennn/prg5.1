<x-nav></x-nav>

<x-layout>
    <div class="details-page">
        <div class="details-box">
            <div class="details-content">
                <h1> {{$idea->name}} </h1>
                <p> {{$idea->idea}}</p>
                <div class="tag-details">
                    <p> {{$category-> name}}</p>
                </div>
                <a href="{{route('ideas.index')}}"> return </a>
            </div>
        @if(isset(auth()-> user()-> id) && $idea -> user_id === auth()-> user()-> id)
            <div class="buttons-showpage">
                <form action="{{route('ideas.destroy', $idea -> id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" id="delete-button"> delete </button>
                </form>
                <form action="{{route('ideas.edit', $idea -> id)}}" method="POST">
                    @method('GET')
                    @csrf
                    <button type="submit" id="edit-button"> edit </button>
                </form>
            </div>
        @endif
        @admin
            <div class="buttons-showpage-admin">
                <h3> admin controls</h3>
                <form action="{{route('ideas.destroy', $idea -> id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" id="delete-button"> delete </button>
                </form>
                <form action="{{route('ideas.edit', $idea -> id)}}" method="POST">
                    @method('GET')
                    @csrf
                    <button type="submit" id="edit-button"> edit </button>
                </form>
            </div>
        @endadmin
        </div>
    </div>
</x-layout>

<x-footer></x-footer>
