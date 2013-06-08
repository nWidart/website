@extends('base.layout')

@section('content')
<div class="container" id="pageDoc">

    <div class="sidebar">
        @yield('sidebar')
    </div>

    <div class="documentationContent">
        @yield('documentationContent')

        <ul class="PrevNextPage">
            @if($prev)
                <li class="prev"><a href="{{ $prev['URI'] }}">{{ $prev['title'] }}</a></li>
            @endif
            @if($next)
                <li class="next"><a href="{{ $next['URI'] }}">{{ $next['title'] }}</a></li>
            @endif
        </ul>
    </div>

</div>
@endsection
