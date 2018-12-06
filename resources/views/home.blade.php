@extends('layouts.app')
{!! $map['js'] !!}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                     <a href="{{ url('/home') }}">Show all the locations</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table>
                        <tr><td> List of users:</td></tr>
                    @foreach($users as $user)
                            <tr><td><a href="/home/{{ $user->id }}">
                            {{ $user->name }}
                        </a></td></tr>
                        @endforeach
                    </table>
                </div>
                {!! $map['html'] !!}
            </div>
        </div>
    </div>
</div>
@endsection
