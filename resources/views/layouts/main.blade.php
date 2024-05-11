<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.header')
</head>

<body>

    <!-- Start Heading -->
    <!-- <section class="heading hidden-xs">
        <div class="heading-logo">
            <img class="img-responsive" src="img/Logo_heading.png" alt="Logo-Heading">
        </div>

        <div class="heading-profile">
            <p><span class="fa fa-map-marker" aria-hidden="true"></span> : Jl. Banda Aceh – Medan Km. 16.5, Aceh Besar, Indonesia</p>
            <p>
                <span class="fa fa-phone" aria-hidden="true"></span> Telepon : 0651-7556-100
            </p>
            <p>
                <span class="fa fa-envelope" aria-hidden="true""></span> Email : info@pesantrenimamsyafii.sch.id
            </p>
        </div>

    </section>
    <!-- End Heading -->

    <!-- Start Navigation -->
    <nav id="navigation" class="navbar navbar-inverse navbar-fixed-top" role=navigation"">
        @include('includes.navbar')
    </nav>
    <!-- /End Navigation -->

    <!-- ini buat spasi antara navbar dan greeting section -->
    <div class="margin-bottom-100"></div>

    <!-- Start Greeting -->
    <section class="greeting">

        @yield('content')

    </section>
    <!-- /End Greeting -->

    <!-- Start Footer -->
    <!-- <footer id="footer" class="footer">
        <p>&copy; copright 2017. create by Zuhri. All Right Reserved.</p>
    </footer> -->
    <!-- /End Footer -->

    <!-- Start Footer -->
    <div id="footer" class="footer">

       @include('includes.footer')

    </div>
    <!-- /End Footer -->

    <!-- Load Js Core Files -->
    @include('includes.script')
    @stack('script-addon')
</body>

</html>
