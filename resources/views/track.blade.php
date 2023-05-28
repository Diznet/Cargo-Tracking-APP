@extends('layout')
@section('main')
    <section>
        <h2>Track Shipment</h2>
        <form action="/track" method="POST">
            @csrf
            <label for="trackingNumber">Enter Invoice ID:</label>
            <input type="text" id="trackingNumber" name="trackingNumber">
            <button type="submit">Track</button>
        </form>
    </section>
    @if(isset($track))
        <table>
            <tr>
                <th>ID</th>
                <th>Sender name</th>
                <th>Sender contact</th>
                <th>Receiver name</th>
                <th>Receiver contact</th>
                <th>Departure City</th>
                <th>Current Location</th>
                <th>Destination City</th>
                <th>Address</th>
                <th>Date of departure</th>
            </tr>
            <tr>
                <td>{{$track->id}}</td>
                <td>{{$track->sender->name}}</td>
                <td>{{$track->sender->contact}}</td>
                <td>{{$track->recipient->name}}</td>
                <td>{{$track->recipient->contact}}</td>
                <td>{{$track->departure->name}}</td>
                <td>{{$track->current->name}}</td>
                <td>{{$track->arrival->name}}</td>
                <td>{{$track->recipient->address}}</td>
                <td>{{$track->created_at}}</td>
            </tr>
        </table>
    @endif
@endsection
