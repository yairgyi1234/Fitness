@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @foreach($stocks as $stock)
        <div class="col-md-4" style="margin-bottom:10px;">
            <div class="card">
                <div class="card-header" style="background-color:#2fc945;"> {{$stock->name}}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('banks.store') }}">
                        @csrf
                        <center> <img src="{{$stock->photo}}" width="150px" height="150px"> </center>
                        <br>
                        <b> Description: </b>
                        {{$stock->description}}
                        <br>
                        <br>
                        <b> Price: </b>
                        {{$stock->price}} Kyats

                        <input hidden type="text" id="stockid" name="stockid" value="{{$stock->id}}">
                        <br>
                        <hr>
                        @guest
                            <font color="red"> You Must Log-in To Buy Our Products </font>
                            <br>
                            <a href="{{ route('login') }}"> Log-in Here </a> | <a href="{{ route('register') }}"> Register Here </a>
                        @else
                            <button type="submit" style="color:#ffffff; background-color:#148324; font-weight: bold; margin-top:10px; padding: 7px 105px 7px 105px;">
                                {{ __('Buy') }}
                            </button> 
                        @endguest
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection