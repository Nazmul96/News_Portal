<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('public/frontend/dist/img/AdminLTELogo.png')}}"  class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="public\image\naz.jpg" class="img-circle elevation-2">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
            
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('category_index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('subcategory_index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subcategory</p>
                </a>
              </li>
            </ul>           
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Divisions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('division_index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Divisions</p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('district_index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Districs</p>
                  
                </a>
              </li>
            </ul>           
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Posts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('post_create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Post</p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('post_index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Post</p>
                  
                </a>
              </li>
            </ul>           
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('social_setting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Social Setting</p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('seo_setting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SEO Setting</p>
                  
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('namaz_setting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prayer Time</p>                  
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('livetv_setting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>LiveTv Setting</p>                  
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('notice_setting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notice Setting</p>                  
                </a>
              </li>

              <li class="nav-item">
                <a href="important_website" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Important Website</p>                  
                </a>
              </li>
            </ul>           
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Gallery
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('photo_index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Photo Gallery</p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('video_index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Video Gallery</p>
                  
                </a>
              </li>
            </ul>           
          </li>
         
          <li class="nav-header">PROFILE</li>
          <li class="nav-item">
            <a id="logout" href="{{route('admin_logout')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Logout</p>
            </a>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>