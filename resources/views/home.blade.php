@extends('layouts.app')

@section('content')
    <div class="offers">
        <table class="table">
            <th>
                <tr>
                    <th scope="col">Enterprise</th>
                    <th scope="col">Workspace</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Applied</th>
                    <th scope="col">Updated</th>
                </tr>
            </th>
            <tb>
            @foreach ($offers as $offer)
                    <tr>
                        <td>{{$offer->enterprise}}</td>
                        <td>{{$offer->workspace}}</td>
                        <td>{{$offer->description}}</td>
                        <td>{{$offer->status}}</td>
                        <td>{{$offer->created_at}}</td>
                        <td>{{$offer->update}}</td>
                    </tr>
                @endforeach
            </tb>
        </table>
    </div>
@endsection