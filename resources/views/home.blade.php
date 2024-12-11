@extends('layouts.app')

@section('content')


    <div class="offers">
        <table class="tableOffer">
                <tr>
                    <th class="col">Title</th>
                    <th class="col">Enterprise</th>
                    <th class="col">Description</th>
                    <th class="col">Status</th>
                    <th class="col">Applied</th>
                </tr>            
            <tb>
                @foreach ($offers as $offer)
                        <tr class="trOffer row" data-href="{{route('show', $offer->id)}}">
                            <td>{{$offer->title}}</td>
                            <td>{{$offer->enterprise}}</td>
                            <td>{{$offer->description}}</td>
                                <td>
                                    @if ($offer->status===1)
                                    ✔️
                                    @else 
                                    ❌
                                    @endif
                                </td>
                            <td>{{$offer->created_at}}</td>
                        </tr>    
                @endforeach
            </tb>
        </table>
    </div>
@endsection