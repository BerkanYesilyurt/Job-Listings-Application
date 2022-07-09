<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel='stylesheet' id='bootstrap-theme-css'  href='{{asset('css/bootstrap.min7404.css?ver=5.9.3')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='megamenu-css'  href='{{asset('css/mega_menu.min7404.css?ver=5.9.3')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href='{{asset('css/font-awesome.min7404.css?ver=5.9.3')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='jobListing-theme-slug-fonts-css'  href='https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CSans+Serif:400,500,700%7CQuicksand:400,500,700&amp;subset=latin,latin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='jobListing-theme-style-css'  href='{{asset('css/theme7404.css?ver=5.9.3')}}' type='text/css' media='all' />

</head>
<body class="home page-template page-template-page-home page-template-page-home-php page page-id-202 theme-jobListing woocommerce-no-js wpb-js-composer js-comp-ver-6.8.0 vc_responsive">
<nav id="menu-1" class="mega-menu mega-menu fa-change-black">
    <section class="menu-list-items">
        <div class="container">        <ul class="menu-logo">
                <li><a href="/"><img src="{{asset('img/logo.png')}}" class="img-responsive" alt="logo" ></a>
                </li>
            </ul>
            <ul class="menu-button">
                @auth
                    <li class="n-login-header"><b>WELCOME {{auth()->user()->name}}</b></li>
                <li><a href="/manage" class="n-login-header"><i class="fa fa-cogs"></i>Manage Listings</a></li>
                    <li><a href="/logout" class="n-login-header"><i class="fa fa-sign-out"></i>Logout</a></li>
                @else
                <li><a href="/login" class="n-login-header"><i class="fa fa-sign-in"></i>Login</a></li>
                <li><a href="/register" class="n-login-header"><i class="fa fa-user-plus"></i>Register</a></li>
                @endauth
                <li>
                    <a href="/create" class="btn n-btn-flat"><i class="fa fa-plus-square"></i>Job Post</a>
                </li>
            </ul>

        </div>
    </section>
</nav>



@yield('content')

</div>
</div>
</section></div></div></div></div>
</div>
</div>
</div>


@if(session('message'))
    <script>alert('{{session('message')}}')</script>
@endif
</body>
</html>
