<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- PAGE TITLE HERE -->
<title>@yield('title')</title>
<meta name="description" content="#">
<meta name="author" content="IT-RAYS">

<!-- FAVICONS ICON -->
<link rel="icon" href="{{ asset('assets/images/menuicon/oxdora.ico') }}" type="image/x-icon" />

<!-- Devices Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

{{-- Font Awesome Link --}}
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> <!--load all styles -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet"> <!--load all styles -->

<link rel="stylesheet" style="text/css" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" style="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">


@stack('css')
