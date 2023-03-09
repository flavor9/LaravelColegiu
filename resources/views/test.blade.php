@extends("layouts")


@section("content")
    <section class="content">
        <h1>TEST</h1>

        <ol>
        @foreach ($groupe as $group )
            <li class="group">{{$group}}</li>
        @endforeach
        </ol>

        <hr>
        @foreach ($groupe as $web )
            @if ($web == 'W-1942')
                <div>{{$web}} the best</div>
            @endif
        @endforeach
        <br>
        <div>Eu invat la specialitatea {{$spec}}</div>

        {{$res}}


    </section>
@endsection




