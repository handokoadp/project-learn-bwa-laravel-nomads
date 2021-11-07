@extends('layouts.app-emptystate')

@section('title', 'Checkout Success - Nomads')

@section('content')
<!-- Main -->
<main>
    <section class="success d-flex align-items-center align-content-center">
        <div class="col text-center">
            <h1>Opps! Error</h1>
            <p>Your transaction is failde
                <br /> please contact our representative if the problem occurs</p>
            <a href="{{ route('home') }}" class="btn btn-blue mt-3 px-5">Home Page</a>
        </div>
    </section>
</main>
<!-- End-Main -->
@endsection