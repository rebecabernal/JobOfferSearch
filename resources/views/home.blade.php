@extends('layouts.app')

@section('content')
    <div class="offers">
        <table class="table">
            <th>
                <tr>
                    <th scope="col">Offer</th>
                    <th scope="col">Updates</th>
                </tr>
            </th>
            <tb>
            @foreach ($offers as $offer)
                    <tr>
                        <td>{{$offer->created_at}}</td>
                        <td>{{$offer->entry}}</td>
                    </tr>
                @endforeach
            </tb>
        </table>
    </div>
@endsection