@extends('layouts.app')

@section('title', 'Trains | Home')

@section('content')
<main>
    <div class="container">
        @foreach ( $trains as $item )

        <div class="card">
            <h2>{{$item['arrival_station']}}</h2>
            <h4>Company: {{$item['company']}}</h4>
            <div>
                <b>Departure Station:</b>
                {{$item['departure_station']}}
            </div>
            <div>
                <b>Departure Date:</b>
                {{$item['departure_date']}}
            </div>
            <div>
                <b>Departure Time:</b>
                {{$item['departure_time']}}
            </div>
            <div>
                <b>Arrival Time:</b>
                {{$item['arrival_time']}}
            </div>
            <div>
                <b>On Time?</b>
                {{ $item['on_time'] == 1 ? 'Yes' : 'No' }}
            </div>
            <div>
                <b>Cancelled?</b>
                {{$item['cancelled'] == 1 ? 'Yes' : 'No'}}
            </div>
        </div>

        @endforeach
    </div>
</main>

@endsection
