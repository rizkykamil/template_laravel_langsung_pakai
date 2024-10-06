<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('layouts.head')

<body id="body">
    @include('layouts.sidebar')

    @include('layouts.topbar')

    <div class="page-wrapper">

        <div class="page-content-tab">

            <div class="container-fluid">
                @include('layouts.subnav')
                @yield('content')
            </div>

            @include('layouts.footer')
        </div>

    </div>

    @include('layouts.script')

</body>
<!--end body-->

</html>