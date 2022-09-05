<!doctype html>
<html lang="en">

    @include('admin.layouts.header')

    <body data-topbar="dark" data-sidebar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <div id="layout-wrapper">
            
            @include('admin.layouts.navbar')

            @include('admin.layouts.sidebar')
            
            <div class="main-content">

                @yield('content')
                
                @include('admin.layouts.footer')
                
            </div>

        </div>

        @include('admin.layouts.scripts')

    </body>

</html>