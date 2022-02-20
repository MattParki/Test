@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        {{ __('You are now logged in!') }}
                    </div><br />

                    <br />
                    <p><a href="/videos">View all videos that have been submitted</a></p>
                    <p><a href="/videos/createthevideo">Click to create new videos</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
