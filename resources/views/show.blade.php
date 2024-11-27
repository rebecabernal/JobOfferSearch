@extends('layouts.app')

@section('content')
    <div class="offer">
        <h2 class="offerTitle">Entry</h2>
        <div class="offerTime">
            <p>created: {{$offer['created_at']}}</p>
            <p>update: {{$offer['updated_at']}}</p>
        </div>
        <div class="offerContent">
            <p class="offerEntry">{{$offer['entry']}}</p>
            <img class="offerImage" src="{{$offer['emotion']}}" alt=""/>
        </div>
    </div>
@endsection
