@extends( 'layouts.main' )

@section('content')

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0" style="color:white;">
                    <h1 >All Pizzas of Pizza House</h1>
                </div>

                <div class="justify-center"  style="color:white; text-align:center;"> 
                    <h3 class="mt-4"> Pizza Detail - {{ $id }} </h3>
                </div>


            </div>
@endsection
