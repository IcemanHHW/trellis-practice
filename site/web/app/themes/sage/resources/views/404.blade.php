@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <div class="alert alert-warning mb-3">
      {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
    </div>
    <img src="https://kampmeijer.nl/wp-content/uploads/error-404.png" alt="404">
</div>

@endsection
