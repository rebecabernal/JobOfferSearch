@extends('layouts.app')

@section('content')


    <div class="offers">
        <table class="table">
            <th>
                <tr>
                    <th>Title</th>
                    <th>Enterprise</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Applied</th>
                </tr>
            </th>
            <tb>
                @foreach ($offers as $offer)
                        <tr class="row" data-href="{{route('show', $offer->id)}}">
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