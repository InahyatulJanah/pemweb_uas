<header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          <h1>Sekolah Akuntansi</h1>
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Serach Start ***** -->
                      <div class="search-input">
                          <form id="search" action="#">
                              <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword"
                                  onkeypress="handle" />
                              <i class="fa fa-search"></i>
                          </form>
                      </div>
                      <!-- ***** Serach Start ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                          <li><a href="{{ url('/siswa') }}">Courses</a></li>
                          <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
                      </ul>
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>