@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('USER DATA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table table-respponsive table-striped">
                        <thead>
                            <tr><th>Username</th><th>:</th><td>{{ $User->username }}</td></tr>
                            <tr><th>Name</th><th>:</th><td>{{ $User->name }}</td></tr>
                            <tr><th>Email</th><th>:</th><td>{{ $User->email }}</td></tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection