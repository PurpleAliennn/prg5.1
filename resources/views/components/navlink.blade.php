@props(['active' => false])

<a class="{{$active ? 'active' : ''}}" {{$attributes}}>{{$slot}}</a>
