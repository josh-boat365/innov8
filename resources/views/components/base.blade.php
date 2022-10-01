<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head />


<body class="default-bg">
    {{-- hero --}}
    @if (URL::current() == route('/'))
        <div class="hero">
            <div class=" main-width ">
                <div class="hero-bg container">
                    {{-- main - navbar --}}
                    <x-navbar />
                    {{-- hero-welcome-message --}}
                    <x-hero />
                @else
                    {{-- Display this when not on '/'-> welcome route --}}
                    @if (URL::current() == route('login') or URL::current() == route('register'))
                        <div class="" style="background-color: white" style="display: none !important">
                        @else
                            <div class="" style="background-color: white">
                                <div class=" main-width ">
                                    <div class="container">
                                        {{-- main - navbar --}}
                                        <x-navbar />
                    @endif


    @endif
    </div>

    </div>

    </div>

    <main>
        {{ $slot }}
    </main>


    @if (URL::current() != route('login') and URL::current() != route('register'))
        <x-footer />
    @else
        <div></div>
    @endif



    {{-- Bootstrap - JS --}}
    {{-- <script src="{{ asset('boostrap/bootstrap.bundle.min.js') }}"></script> --}}
    {{-- Bootsrap CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/37067f30ad.js" crossorigin="anonymous"></script>
    {{-- Main - JS --}}
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
