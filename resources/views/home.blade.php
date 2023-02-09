    @extends("layouts")

    @php
        $elev = ['Seva', 'Evelina', 'Marius', 'Nicu', 'Dorin'];
        $result = 0;
    @endphp

    @section("content")
        <section class="content">
            This is Home Page
            <button id="ceiti" class="btn btn-danger">CEITI THE BEST</button>
        </section>

    @foreach ($elev as $item)
        {{$item}}

    @if ($item == 'Seva')
        {{"Nota 10"}}
    @endif

    @endforeach


    @for ($i = 0; $i < 100; $i++)
        @if ($i % 2 == 0)
            @php ($result =+ $i)
        @endif
    @endfor

        {{$result}}

    @endsection

