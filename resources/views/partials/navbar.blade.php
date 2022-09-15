<nav class="navbar navbar-dark navbar-expand-lg bg-danger">
    <div class="container">
        <a class="navbar-brand" href="/">Dreamer Tech</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($title === 'Blog') ? 'active' : '' }}" href="/blog">Blog</a>
            </li>
            <li class="nav-item">
            <a href="/user" class="nav-link {{ ($title === 'User') ? 'active' : '' }}">User</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>