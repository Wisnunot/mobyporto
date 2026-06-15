@extends('layouts.app')

@section('content')
    @if(request()->is('/'))
        @include('cars.partials.homepage')
    @else
        @include('cars.partials.listing')
    @endif
@endsection
