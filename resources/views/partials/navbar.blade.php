<nav class="navbar navbar-dark navbar-expand-lg bg-danger">
    <div class="container">
        <a class="navbar-brand" href="/">Dreamer Tech</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link {{ ($active === 'home') ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($active === 'about') ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($active === 'blog') ? 'active' : '' }}" href="/blog">Blog</a>
            </li>
            <li class="nav-item">
            <a href="/user" class="nav-link {{ ($active === 'user') ? 'active' : '' }}">User</a>
            </li>
            <li class="nav-item">
                <a href="/categories" class="nav-link {{ ($active === 'categories') ? 'active' : '' }}">Categories</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="/login" class="text-white text-decoration-none nav-link {{ ($active === 'categories') ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a></li>
        </ul>
        </div>
    </div>
    </nav>