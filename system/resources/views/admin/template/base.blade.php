<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Admin Dashboard</title>
@include('section-admin.assets')
</head>
<body>
<section id="container">
    <header class="header fixed-top clearfix">

    @include('section-admin.header')
    </header>

    @include('section-admin.sidebar')

    <section id="main-content">
    	<section class="wrapper">
    		@include('utils.notif')
            @yield('content')
            <!-- disini Konten -->
    		
        </section>
    	  @include('section-admin.footer')
    </section>
</section>
@include('section-admin.js')

</body>
</html>
