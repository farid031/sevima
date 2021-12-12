<body>
    <header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>
                <h1 class="text-center"><?php echo $this->session->userdata('nama') ?></h1>
            </div>
            <nav class="tm-nav" id="tm-nav">
                <ul>
                    <li class="tm-nav-item <?php echo $active_beranda ?>"><a href="<?php echo base_url('C_beranda') ?>" class="tm-nav-link">
                            <i class="fas fa-home"></i>
                            Beranda
                        </a></li>
                    <li class="tm-nav-item <?php echo $active_post ?>"><a href="<?php echo base_url('C_my_post') ?>" class="tm-nav-link">
                            <i class="fas fa-pen"></i>
                            Gambar Saya
                        </a></li>
                    <li class="tm-nav-item <?php echo $active_search ?>"><a href="<?php echo base_url('C_search_user') ?>" class="tm-nav-link">
                            <i class="fas fa-search"></i>
                            Search Friends
                        </a></li>
                    <li class="tm-nav-item"><a href="<?php echo base_url('C_login/logout') ?>" class="tm-nav-link" onclick="return window.confirm('Apakah Anda yakin akan logout dari InstaApp?')">
                            <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </a></li>
                </ul>
            </nav>
            <div class="tm-mb-65">
                <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon"></i>
                </a>
                <a href="https://twitter.com" class="tm-social-link">
                    <i class="fab fa-twitter tm-social-icon"></i>
                </a>
                <a href="https://instagram.com" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i>
                </a>
                <a href="https://linkedin.com" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i>
                </a>
            </div>
            <p class="tm-mb-80 pr-5 text-white">
                Xtra Blog is a multi-purpose HTML template from TemplateMo website. Left side is a sticky menu bar. Right side content will scroll up and down.
            </p>
        </div>
    </header>