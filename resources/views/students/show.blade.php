@extends('students.layout')
@section('content')
    <div class="card mt-5">
        <div class="card-header">Students Page</div>
        <div class="card-body">
            <div class="card-body">
                <img src="{{ asset($students->image) }}" height="100" class="img"><br>
                <h5 class="card-title">Name : {{ $students->name }} </h5>
                <p class="card-text">Address : {{ $students->address }}</p>
                <p class="card-text">Mobile : {{ $students->mobile }}</p>
            </div>
        </div>
    </div>
    <div class="card mt-5">
        <div class="card-header">Messages</div>
        <div class="card-body">
            <table class="table">
                @if (count($messages) > 0)
                <tr>
                @foreach ($messages as $item)                                    
                    <td><h5>{{ $item->msg }}</h5>
                    <small>Written on {{ $item->created_at }}</small>
                    <td>
                </tr>
                @endforeach
                @else 
                    <small>No Messages from this contact</small>
                @endif
            </table>           
        </div>
    </div>
@endsection