<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />


    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('admin_assets/css/font-face.css')}}" rel="stylesheet" media="all" />
    <link
      href="{{ asset('admin_assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}"
      rel="stylesheet"
      media="all"
    />
    <link
      href="{{asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}"
      rel="stylesheet"
      media="all"
    />
    <link
      href="{{ asset('admin_assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}"
      rel="stylesheet"
      media="all"
    />

    <!-- Bootstrap CSS-->
    <link
      href="{{ asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.css')}}"
      rel="stylesheet"
      media="all"
    />

    <!-- Vendor CSS-->
    <link
      href="{{ asset('admin_assets/assets/vendor/animsition/animsition.min.css')}}"
      rel="stylesheet"
      media="all"
    />
    <link
      href="{{ asset('admin_assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}"
      rel="stylesheet"
      media="all"
    />
    <link href="{{ asset('admin_assets/vendor/wow/animate.css')}}" rel="stylesheet" media="all" />
    <link
      href="{{ asset('admin_assets/vendor/css-hamburgers/hamburgers.min.css')}}"
      rel="stylesheet"
      media="all"
    />
    <link href="{{ asset('admin_assets/vendor/slick/slick.css')}}" rel="stylesheet" media="all" />
    <link href="{{ asset('admin_assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all" />
    <link
      href="{{ asset('admin_assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}"
      rel="stylesheet"
      media="all"
    />

    <!-- Main CSS-->
    <link href="{{ asset('admin_assets/css/theme.css')}}" rel="stylesheet" media="all" />
  </head>

  <body class="animsition">
    <div class="page-wrapper">
      <div class="page-content--bge5">
        <div class="container">
          <div class="login-wrap">
            <div class="login-content">
              <div class="login-logo">
                <a href="#">
                  <img src="{{ asset('admin_assets/images/icon/logo.png')}}" alt="CoolAdmin" />
                </a>
              </div>
            @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
	            <button type="button" class="close" data-dismiss="alert">×</button>
                   <strong>{{ $message }}</strong>
              </div>
            @endif
             @if ($message = Session::get('fail'))
             <div class="alert alert-danger alert-block">
	            <button type="button" class="close" data-dismiss="alert">×</button>
                   <strong>{{ $message }}</strong>
              </div>
              @endif
              <div class="login-form">
                <form action="{{ route('admin.auth') }}" method="post">
                  @csrf

                  <div class="form-group">
                    <label>Email Address</label>
                    <input
                      class="au-input au-input--full"
                      type="email"
                      name="email"
                      placeholder="Email"
                    />
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input
                      class="au-input au-input--full"
                      type="password"
                      name="password"
                      placeholder="Password"
                    />
                  </div>
                  <button
                    class="au-btn au-btn--block au-btn--green m-b-20"
                    type="submit"
                  >
                    sign in
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('admin_assets/vendor/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('admin_assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{ asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin_assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{ asset('admin_assets/js/main.js')}}"></script>
  </body>
</html>
<!-- end document-->