<!-- Reponsiveness & Metas -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Theme Color -->
<meta name="theme-color" content="#ffffff">

    <!-- Keywords -->
<meta name="keywords" content="Ven10"/>
<meta name="description" content="Assessment">
<meta name="referrer" content="no-referrer-when-downgrade">
<meta name="robots" content="all">
{{-- <meta content="Askfriendz-108764157516996" property="fb:profile_id"> --}}
<meta content="en_US" property="og:locale">
<meta content="en_GH" property="og:locale:alternate">
<meta content="en_US" property="og:locale:alternate">

<!-- Title -->
<title>
    @yield('title')@if(isset($title)){{$title}}@else{{ config('app.name', 'Laravel') }}@endif
</title>
<meta name="title" content="@if(isset($title)){{$title}}@else{{ config('app.name', 'Laravel') }}@endif"/>

<!-- Description -->
<meta name="description" content="Ven10 Assessment">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
