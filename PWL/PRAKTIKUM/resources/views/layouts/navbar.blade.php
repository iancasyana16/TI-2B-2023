<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($slug === 'home') ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($slug === 'profile') ? 'active' : '' }}" href="/profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($slug === 'mahasiswa') ? 'active' : '' }}" href="/mahasiswa">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($slug === 'prodi') ? 'active' : '' }}" href="/prodi">Prodi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
