@extends('layout')
@section('main')
    <figure class="wrapper">
    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Sender name</th>
                <th scope="col">Sender contact</th>
                <th scope="col">Receiver name</th>
                <th scope="col">Receiver contact</th>
                <th scope="col">Departure City</th>
                <th scope="col">Current Location</th>
                <th scope="col">Destination City</th>
                <th scope="col">Address</th>
                <th scope="col">Date of departure</th>
            </tr>
        </thead>
{{--            @dd(\Illuminate\Support\Facades\Auth::user())--}}
        @foreach(Auth::user()->invoices as $invoice)
            <tr>
                <td>{{$invoice->id}}</td>
                <td>{{$invoice->sender->name}}</td>
                <td>{{$invoice->sender->contact}}</td>
                <td>{{$invoice->recipient->name}}</td>
                <td>{{$invoice->recipient->contact}}</td>
                <td>{{$invoice->departure->name}}</td>
                <td>{{$invoice->current->name}}</td>
                <td>{{$invoice->arrival->name}}</td>
                <td>{{$invoice->recipient->address}}</td>
                <td>{{$invoice->created_at}}</td>
            </tr>
        @endforeach
    </table>
    </figure>
    <form action="/generate" method="POST">
        @csrf
        <input type="submit" value="Generate invoice">
    </form>
@endsection
