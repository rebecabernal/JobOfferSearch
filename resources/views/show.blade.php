@extends('layouts.app')

@section('content')
    <div class="news">
        <h2 class="comments offer->feedback">Comments</h2>
        <div class="offerTime">
            <table class="newsTable">
                <th class="th">Comments</th>
                <th class="th">Created</th>
                <th class="th">Updated</th>
                @foreach ($offer->feedback as $news)
                <tr>
                    <td class="td">{{$news->news}}</td>
                    <td class="td">{{$news->updated_at}}</td>
                    <td class="td">{{$news->created_at}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="offerContent">
            <p class="offerEntry">{{$offer['entry']}}</p>
        </div>
    </div>
@endsection
