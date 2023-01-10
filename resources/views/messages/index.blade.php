@extends('students.layout')
@section('content')
    <div class="card mt-5">
        <div class="card-header"><h2>Messages</h2></div>
        <div class="card-body">
            @foreach ($students as $item)
                @foreach ($item->message as $msg)
                <table class="table">
                    <tr>
                        <td>
                            <h4>{{ $msg->msg }}</h4>
                            {{ $item->created_at }}
                            {{ $item->name }}
                        </td>
                    </tr>
                </table>
                @endforeach
            @endforeach
        </div>
    </div>
    
@endsection