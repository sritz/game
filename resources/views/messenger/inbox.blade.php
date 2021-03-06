@extends('layouts.app')

@section('content')
    @include("alerts") {{-- Include the template for alerts. This checks if there's something needed to display --}}
    <h1 class="text-center">Inbox</h1>
    <a href="{{ url("/account/inbox/create") }}">
        <button class="btn btn-primary">Compose</button>
    </a>
    @if ($threads->count() > 0)
        <table class="table table-striped table-hover">
            <tr>
                <th>Timestamp</th>
                <th>Subject</th>
                <th>Recipient</th>
            </tr>
            @foreach ($threads as $thread)
                <tr>
                    <td>{{ $thread->updated_at }}</td>
                    <td><a href="{{ url("/account/messages"."/$thread->id") }}">{{ $thread->subject }}</a></td>
                    <td>{{-- TODO this doesn't work after updating to Laravel 5.3 $thread->participantsString(Auth::id()) --}}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>:/ Sorry, no one loves you</p>
    @endif
@endsection