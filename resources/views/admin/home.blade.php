<x-nav></x-nav>

<x-layout>
    @admin
    <div class="admin-main">
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
                <button type="submit" id="tag-create-button"> Create a new tag </button>
            </form>
        </div>

        <div class="toggle">
            <h2> Toggle ideas </h2>
            <div class="toggle-field">
                <form>
                    @csrf
                    @foreach($ideas as $idea)
                        <tr>
                            <th> {{ $idea -> name }} : </th>
                            <th> {{ $idea -> idea }}</th>
                            <th>
                                <form action="{{ route('admin.toggle', $idea -> id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="toggle-button">
                                        @if($idea -> active)
                                            Activated
                                        @else
                                            Deactivated
                                        @endif
                                    </button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </form>
            </div>
        </div>


    </div>
    @endadmin
</x-layout>

<x-footer></x-footer>
