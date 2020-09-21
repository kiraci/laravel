@extends( 'layouts.main' )

@section('content')

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0" style="color:white;">
                    <h1 >All Pizzas of Pizza House</h1>
                </div>

                <div class="justify-center"  style="color:white;">

                <!-- @for($i = 0; $i < 5; $i++)
                  <p>the value of i is {{ $i }}</p>
                @endfor -->

                <!-- @for($i = 0; $i < count($pizzas); $i++)
                  <p>{{ $pizzas[$i]['type'] }}</p>
                @endfor -->

                    @foreach($pizzas as $pizza)

                        <div>
                            <p class="mt-3"> 

                            {{ $loop->index }}: {{ $pizza['type'] }} - {{ $pizza['base'] }} - {{ $pizza['price'] }} 
                            
                            @if( $loop->first )
                                <span> --> This is faster pizza to make </span>
                            @endif

                            @if( $loop->last)
                                <span> --> This is slower pizza to make </span>
                            @endif

                            </p>
                        </div>

                    @endforeach

                </div>


            </div>
@endsection
