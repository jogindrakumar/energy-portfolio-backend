<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="description" name="description">
    <meta name="google" content="notranslate" />
    <meta content="Mashup templates have been developped by Orson.io team" name="author">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('frontend/assets/apple-icon-180x180.png')}}">
    <link href="{{asset('frontend/assets/favicon.ico')}}" rel="icon">

    <title>Title page</title>

    <link href="{{asset('frontend/main.d8e0d294.css')}}" rel="stylesheet">
</head>

<body class="">

    <!-- Add your content of header -->
    <div class="background-color-layer" style="background-image: url('{{asset('frontend/assets/images/img-01.jpg')}}')"></div>
    <main class="content-wrapper">
        <header class="white-text-container section-container">
            <div class="text-center">
                <h1>I am jogindra kumar</h1>
                <p>Web developer</p>
                <p>
                    <a class="fa-icon fa-icon-2x" href="https://facebook.com/" title="">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="fa-icon fa-icon-2x" href="https://twitter.com/" title="">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="fa-icon fa-icon-2x" href="https://dribbble.com/" title="">
                        <i class="fa fa-dribbble"></i>
                    </a>
                    <a class="fa-icon fa-icon-2x" href="https://www.linkedin.com/" title="">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a class="fa-icon fa-icon-2x" href="https://vimeo.com/" title="">
                        <i class="fa fa-vimeo"></i>
                    </a>
                </p>
            </div>
        </header>



        <!-- Add your site or app content here -->

        @yield('main_content')

    </main>
    <footer class="footer-container white-text-container text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p><img src="{{asset('frontend/assets/images/mashup-icon.svg')}}" alt=""></p>

                    <p>©All right reserved. Design <a href="" title="Create website with free html template">jkumar</a>/<a href="https://unsplash.com/" title="Beautiful Free Images">Unsplash</a></p>
                    <p>
                        <a class="fa-icon fa-icon-2x" href="https://facebook.com/" title="">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="fa-icon fa-icon-2x" href="https://twitter.com/" title="">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="fa-icon fa-icon-2x" href="https://dribbble.com/" title="">
                            <i class="fa fa-dribbble"></i>
                        </a>
                        <a class="fa-icon fa-icon-2x" href="https://www.linkedin.com/" title="">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a class="fa-icon fa-icon-2x" href="https://vimeo.com/" title="">
                            <i class="fa fa-vimeo"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            scrollRevelation('.card');
        });
    </script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

-->
    <script type="text/javascript" src="{{asset('frontend/main.bc58148c.js')}}"></script>
</body>

</html>