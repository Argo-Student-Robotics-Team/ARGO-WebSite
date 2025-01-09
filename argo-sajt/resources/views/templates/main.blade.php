<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("css/global_font.css")}}">
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <link rel="stylesheet" href="{{asset("css/navigation.css")}}">
    <link rel="stylesheet" href="{{asset("css/footer.css")}}">
    <link rel="shortcut icon" href="{{asset("slike/Logo.svg")}}" type="image/x-icon">
    <title>Argo Student Robotics Team | {{ $title }}</title>

    @yield("head")

</head>
<body>
    <header class="navigation">
        <a class="logo-container" href="/">
            <img src="{{asset("slike/Document Logo_BLUE.svg")}}" alt="Argo Robotics">
        </a>
        <div class="navigation-container">
            <a href="/about" class="nav-item">Who we are</a>
{{--    Ceka se miha za ostale linkove        --}}
{{--            <a href="" class="nav-item">What we do</a>--}}
{{--            <a href="" class="nav-item">News</a>--}}
{{--            <a href="" class="nav-item">Events</a>--}}
            <a href="/partners" class="nav-item">Partners</a>
            <a href="https://forms.gle/JU4MhyhYA4cqPps2" class="nav-item">Join us</a>
        </div>
    </header>
    <section class="content">
        @yield("page_content")
    </section>
    <footer class="footer">
        <div class="left">
            <a class="logo-container" href="/">
                <img src="{{asset("slike/Document Logo_BLUE.svg")}}" alt="Argo Robotics">
            </a>
            <div class="info">
                <p class="copyright">© 2024 <br>
                    Argo Student Robotics Team. <br>
                    All Rights Reserved.</p>
            </div>
            <div class="links">
                <a href="/contact" class="nav-item">Contact</a>
                <a href="/privacy" class="nav-item">Privacy</a>
                <a href="/terms_of_use" class="nav-item">Terms of use</a>
            </div>
        </div>

        <div class="right">
            <div class="header">
                <p>Social media</p>
            </div>
            <div class="links">
                <a href="" class="link">
                    <img src="{{asset('icons/social/facebook-brands-solid.svg')}}" alt="Facebook" class="icon">
                </a>
                <a href="" class="link">
                    <img src="{{asset('icons/social/square-x-twitter-brands-solid.svg')}}" alt="X" class="icon">
                </a>
                <a href="" class="link">
                    <img src="{{asset('icons/social/instagram-brands-solid.svg')}}" alt="Instagram" class="icon">
                </a>
                <a href="" class="link">
                    <img src="{{asset('icons/social/youtube-brands-solid.svg')}}" alt="YouTube" class="icon">
                </a>
                <a href="" class="link">
                    <img src="{{asset('icons/social/linkedin-brands-solid.svg')}}" alt="LinkedIn" class="icon">
                </a>

            </div>
        </div>
    </footer>
</body>
</html>
