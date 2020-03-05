{{--
  Template Name: Contact Template
--}}

@extends('layouts.app')

@section('content')
    @include('partials.page-header')
        <div class="container">
            <div class="row">
                @include('partials.contact.contact-form')
                @include('partials.contact.contact-info')
            </div>
        </div>
@endsection
