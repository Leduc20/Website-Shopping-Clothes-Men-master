
 
 <!-- <div class=" w-[70px] h-[800px]  bg-gray-200 rounded-r-3xl ">
 <div class="sticky top-0 ">
     <a href="" class="icon ">
         <i class="fa-solid fa-house"></i>
         <span class="tooltip"> </span></a>

     <a href="" class="icon ">
         <i class="fa-solid fa-store"></i>
         <span class="tooltip"> </span></a>

     <a href="" class="icon ">
         <i class="fa-solid fa-list"></i>
         <span class="tooltip"> </span></a>

     <a href="" class="icon ">
         <i class="fa-solid fa-cart-shopping"></i>
         <span class="tooltip"> </span></a>

     <a href="" class="icon ">
         <i class="fa-solid fa-users"></i>
         <span class="tooltip"> </span></a>

     <a href="" class="icon ">
         <i class="fa-solid fa-comments"></i>
         <span class="tooltip"> </span></a>

     <a href="" class="icon ">
         <i class="fa-solid fa-chart-simple"></i>
         <span class="tooltip"> </span></a>

     <a href="" class="icon ">
         <i class="fa-solid fa-arrow-right-from-bracket"></i>
         <span class="tooltip"> </span></a>
    </div>
 </div> -->
 <div class="wrapper ">
    <div class="sidebar" data-color="blue | green | orange | red | yellow">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          ,
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Admin
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="">
            <a href="<?= SITE_URL . "?list-danh-muc"?>">
              <i class="now-ui-icons design_app"></i>
              <p>Home</p>
            </a>
          </li>
          <li >
            <a href="<?= ADMIN_BASE . "?danh-muc" ?>">
              <i class="now-ui-icons education_atom"></i>
              <p>Category</p>
            </a>
          </li>
          <li>
            <a href="<?= ADMIN_BASE . "?san-pham"?>">
              <i class="now-ui-icons location_map-big"></i>
              <p>Product</p>
            </a>
          </li>
          <li>
            <a href="<?= ADMIN_BASE . "?khach-hang"?>">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Customer</p>
            </a>
          </li>
          <li>
            <a href="./user.html">
              <i class="now-ui-icons users_single-02"></i>
              <p>Comment</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Statistical </p>
            </a>
          </li>
          
          <li class="index.php?act=thoat">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Log Out</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->