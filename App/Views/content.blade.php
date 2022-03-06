@extends('layout.master')
@section('content')
<main style="opacity: 1;" class="default-transition">
    <div class="container-fluid">
        @yield('user')
        @yield('userEdit')
    </div>
</main>

@endsection
