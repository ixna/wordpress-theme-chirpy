
<!--
The Side Bar
-->

<div id="sidebar" class="d-flex flex-column align-items-end">
    <div class="profile-wrapper text-center">
        <div id="avatar">
            <a href="/" class="mx-auto">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatar.jpg" alt="avatar" onerror="this.style.display='none'">
            </a>
        </div>

        <div class="site-title">
            <a href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo('name'); ?></a>
        </div>
        <div class="site-subtitle"><?php echo get_bloginfo('description'); ?></div>

    </div><!-- .profile-wrapper -->

    <ul class="w-100">

        <!-- home -->
        <li class="nav-item">
            <a href="/" class="nav-link">
                <i class="fa-fw fas fa-home"></i>
                <span>Home</span>
            </a>
        </li>
        <!-- the real tabs -->

        <li class="nav-item">
            <a href="/category/tech/" class="nav-link">
                <<i class="fa-solid fa-mug-hot"></i>
                <span>Digital</span>
            </a>
        </li> <!-- .nav-item -->

        <li class="nav-item">
            <a href="/category/personal/" class="nav-link">
                <i class="fa-fw fas fa-tag"></i>
                <span>Personal</span>
            </a>
        </li> <!-- .nav-item -->

        <li class="nav-item">
            <a href="/privacy-policy/" class="nav-link">
                <i class="fa-fw fas fa-archive"></i>
                <span>Privacy Policy</span>
            </a>
        </li> <!-- .nav-item -->

        <li class="nav-item">
            <a href="/about" class="nav-link">
                <i class="fa-fw fas fa-info-circle"></i>
                <span>About</span>
            </a>
        </li> <!-- .nav-item -->


    </ul> <!-- ul.nav.flex-column -->

    <div class="sidebar-bottom mt-auto d-flex flex-wrap justify-content-center align-items-center">
      <button class="mode-toggle btn" aria-label="Switch Mode">
        <i class="fas fa-adjust"></i>
      </button>
        <span class="icon-border"></span>
      <a href="https://github.com/ixna" aria-label="github" target="_blank"
        rel="noopener noreferrer">
        <i class="fab fa-github"></i>
      </a>
      <a href="javascript:location.href = 'mailto:' + ['isna11583','gmail.com'].join('@')" aria-label="email">
        <i class="fas fa-envelope"></i>
      </a>
  </div> <!-- .sidebar-bottom -->

</div><!-- #sidebar -->
