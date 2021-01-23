
@extends('layouts.app')
@section('title')
  Car Owners -
@endsection

@section('content')

{{-- Intro --}}
<section id="gallery-intro">
    <div class="container-fluid">
        <div class="row justify-content-center text-center">
            <div class="col-md-4">
                <h2>All Car Owners</h2>
            </div>
        </div>
    </div>
</section>

{{-- Main --}}
<section id="galleryNav">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 gallery-nav">
                {{-- Filters --}}
                @include('widgets.filters')
            </div>
            <div class="col-md-9">
                <div class="container-fluid">

                    {{-- Filters Header --}}
                    @include('widgets.filters_header')


                    {{-- Pagination --}}
                    @include('widgets.pagination')


                    {{-- Table --}}
                    @include('widgets.table')

                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
    <script defer>
        $(function() {
            $('#scroll').animate({
                scrollTop: $('.scrollTo').offset().top/2.5}, 1000);
            });
    </script>
@endsection
