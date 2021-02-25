<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- PAGE TITLE HERE -->
<title>@yield('title')</title>
<meta name="description" content="#">
<meta name="author" content="IT-RAYS">

<!-- FAVICONS ICON -->
<link rel="icon" href="{{ asset('assets/images/menuicon/oxdora.ico') }}" type="image/x-icon" />

<!-- Devices Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

{{-- bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<link rel="stylesheet" style="text/css" href="{{ asset('assets/css/style.css') }}">


@stack('css')
