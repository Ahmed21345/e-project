 <!-- fixed-top-->
 <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
     <div class="navbar-wrapper">
         <div class="navbar-container content">
             <div class="collapse navbar-collapse show" id="navbar-mobile">
                 <ul class="nav navbar-nav mr-auto float-left">
                     <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                     <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                         <ul class="dropdown-menu">
                             <li class="arrow_box">
                                 <form>
                                     <div class="input-group search-box">
                                         <div class="position-relative has-icon-right full-width">
                                             <input class="form-control" id="search" type="text" placeholder="Search here...">
                                             <div class="form-control-position navbar-search-close"><i class="ft-x"> </i></div>
                                         </div>
                                     </div>
                                 </form>
                             </li>
                         </ul>
                     </li>
                 </ul>
                 <ul class="nav navbar-nav float-right">
                     <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span><i class="fa fa-user"></i>John Deo</span></a>
                         <div class="dropdown-menu dropdown-menu-right">
                             <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><span class="user-name text-bold-700 ml-1">John Doe</span></span></a>

                                 <div class="dropdown-divider"></div><a class="dropdown-item" href="../logout.php"><i class="ft-power"></i> Logout</a>
                             </div>
                         </div>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </nav>

 <!-- ////////////////////////////////////////////////////////////////////////////-->


 <!-- ////////  sidebar /////// -->

 <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
     <div class="navbar-header">
         <ul class="nav navbar-nav flex-row">
             <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php">
                     <h1 style="color: #aa9166;">Kanun</h1>
                 </a></li>
             <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
         </ul>
     </div>
     <div class="main-menu-content">
         <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
             <li class="<?php if ($page == 'index') { ?> active <?php  } else { ?> nav-item <?php } ?>"><a href="index.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Users</span></a>
             </li>
             <li class="<?php if ($page == 'lawyer') { ?> active <?php  } else { ?> nav-item <?php } ?>"><a href="lawyers.php"><i class="la la-info"></i><span class="menu-title" data-i18n="">Lawyers</span></a>
             </li>
             <li class=" <?php if ($page == 'region') { ?> active <?php  } else { ?> nav-item <?php } ?>"><a href="regions.php"><i class="la la-flag-checkered"></i><span class="menu-title" data-i18n="">Regions</span></a>
             </li>
             <li class=" <?php if ($page == 'service') { ?> active <?php  } else { ?> nav-item <?php } ?>"><a href="services.php"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Services</span></a>
             </li>
             <li class=" <?php if ($page == 'appoinment') { ?> active <?php  } else { ?> nav-item <?php } ?>"><a href="appoinments.php"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Appoinments</span></a>
             </li>
         </ul>
     </div>
     <div class="navigation-background"></div>
 </div>