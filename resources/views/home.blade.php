<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('contents')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Home</div>

                    <div class="card-body">
                        <h1 style="font-size: 70px;">Oi, {{ $user->name }} :)</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection