<nav class="navbar navbar-expand-lg">
    <div class="container">

        <!-- Logo -->
        <a class="logo" href="{{ url('#') }}">
            <img src="{{ asset('/themes/img/logo-light.png') }}" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ url('#') }}" role="button"
                        aria-haspopup="true" aria-expanded="false">Home</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('index.html') }}">Main Home</a>
                        <a class="dropdown-item" href="{{ url('index2.html') }}">Creative Agency</a>
                        <a class="dropdown-item" href="{{ url('index5.html') }}">Digital Agency</a>
                        <a class="dropdown-item" href="{{ url('index4.html') }}">Business One Page</a>
                        <a class="dropdown-item" href="{{ url('index3.html') }}">Corporate Business</a>
                        <a class="dropdown-item" href="{{ url('index6.html') }}">Modern Agency</a>
                        <a class="dropdown-item" href="{{ url('index7.html') }}">Freelancer</a>
                        <a class="dropdown-item" href="{{ url('index8.html') }}">Architecture</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('about.html') }}">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ url('#') }}"
                        role="button" aria-haspopup="true" aria-expanded="false">Works</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('showcase.html') }}">Showcase Parallax</a>
                        <a class="dropdown-item" href="{{ url('showcase4.html') }}">Showcase Carousel</a>
                        <a class="dropdown-item" href="{{ url('showcase3.html') }}">Showcase Circle</a>
                        <a class="dropdown-item" href="{{ url('works.html') }}">Portfolio Masonry</a>
                        <a class="dropdown-item" href="{{ url('works2.html') }}">Portfolio Filtering</a>
                        <a class="dropdown-item" href="{{ url('works3.html') }}">Portfolio Gallery</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ url('#') }}"
                        role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('blog.html') }}">Blog Standerd</a>
                        <a class="dropdown-item" href="{{ url('blog-list.html') }}">Blog List</a>
                        <a class="dropdown-item" href="{{ url('blog-grid.html') }}">Blog Grid</a>
                        <a class="dropdown-item" href="{{ url('blog-details.html') }}">Blog Details</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contact.html') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
