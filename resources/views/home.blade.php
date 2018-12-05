@extends('layouts.app')
{!! $map['js'] !!}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Map and Localizations of {{ auth()->user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        {!! $map['html'] !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
