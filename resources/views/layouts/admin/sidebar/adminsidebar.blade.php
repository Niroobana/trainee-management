<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="assets/images/faces/face1.jpg" alt="profile">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">MDTU</span>
            <span class="text-secondary text-small">Admin</span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <body data-spy="scroll" data-target="navbar" data-offset="50">
      <li class="nav-item">
          <a class="nav-link" href="{{route('admindashboard')}}">
            <span class="menu-title">Dashboard</span>
            <i class="mdi mdi-home menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../courses">
            <span class="menu-title">Courses</span>
            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../../target_group">
              <span class="menu-title">Target_Group</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../department">
              <span class="menu-title">Department</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="../../training_programs">
            <span class="menu-title">Training_programs</span>
            <i class="mdi mdi-calendar menu-icon"></i>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../../trainee">
            <span class="menu-title">Officers</span>
            <i class="mdi mdi-table-large menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../../feedback">
            <span class="menu-title">Feedbacks</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-comment-check menu-icon"></i>
          </a>
        </li>
       <li class="nav-item">
            <a class="nav-link" href="../../gallery">
              <span class="menu-title">Galleries</span>
              <i class="mdi mdi-image-filter menu-icon"></i>
            </a>
          </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">User_Account</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-medical-bag menu-icon"></i>
        </a>
        <div class="collapse" id="general-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="../../resource">
                  <span class="menu-title">Admin</span>
                  <i class="mdi mdi-human-male-female menu-icon"></i>
                </a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="../../resource">
                  <span class="menu-title">Resources</span>
                  <i class="mdi mdi-human-male-female menu-icon"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../coordinator">
                  <span class="menu-title">Coordinators</span>
                  <i class="mdi mdi-human-male menu-icon"></i>
                </a>
              </li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
