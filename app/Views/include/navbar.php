<nav class="navbar navbar-expand-lg" style="background: rgba(255, 255, 255, 0.05); box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#" style="font-size: 1.5rem; font-weight: bold;">Navbar</a>
        <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#" style="transition: color 0.3s ease;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#" style="transition: color 0.3s ease;">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="transition: color 0.3s ease;">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" style="background-color: #252733; border-radius: 8px;">
                        <li><a class="dropdown-item text-light" href="#" style="transition: background-color 0.3s ease;">Action</a></li>
                        <li><a class="dropdown-item text-light" href="#" style="transition: background-color 0.3s ease;">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider" style="border-top: 1px solid #c0c0c0;">
                        </li>
                        <li><a class="dropdown-item text-light" href="#" style="transition: background-color 0.3s ease;">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled text-light" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="background-color: #252733; color: #eaeaea; border: 1px solid #c0c0c0; border-radius: 8px;">
                <button class="btn btn-custom" type="submit" style="background-color: #0b8793; color: white; border-radius: 30px;">Search</button>
            </form>
            <!-- Add the logout link -->
            <a href="<?= base_url('index/logout'); ?>" class="btn btn-custom" style="background-color: #f44336; color: white; border-radius: 30px; margin-left: 15px;">
                Logout
            </a>
        </div>
    </div>
</nav>
