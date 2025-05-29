<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="google" content="notranslate">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="{{ asset($settings->favicon) }}">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@700&display=swap" rel="stylesheet">

    <style>
        .nav-link:hover, .nav-link.active:hover {
          color: #198754;
        }

        .nav-link .active {
          color: #198754; 
        }

        .page-link.active {
          background-color: #198754;
        }

        .font-satu{
            font-family: 'Passion One';
        }
      
      @media (min-width: 992px) {
        .navbar .dropdown:hover .dropdown-menu {
          display: block;
          margin-top: 0;
          visibility: visible;
          opacity: 1;
        }
      }


    
      

      /* Hilangkan toolbar abu-abu di atas */
  .goog-te-banner-frame.skiptranslate {
    display: none !important;
  }

  body {
    top: 0px !important;
  }

  /* Hilangkan bubble tooltip */
  #goog-gt-tt, .goog-te-balloon-frame {
    display: none !important;
  }

  /* Hilangkan highlight */
  .goog-text-highlight {
    background-color: transparent !important;
    box-shadow: none !important;
  }

  /* Hilangkan frame tambahan jika muncul */
  iframe.VIpgJd-ZVi9od-ORHb-OEVmcd {
    display: none !important;
  }



    </style>




      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
      integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
      crossorigin=""/>

      <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
      integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
      crossorigin=""></script>

</head>
<body class="app">
