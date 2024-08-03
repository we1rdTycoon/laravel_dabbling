<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css'>
  <link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'>
  @vite(['resources/css/style.css'])
</head>
<body>

<div id="loader_cstm" class="forloader">
  <div class="loader">
    <div class="square"></div> 
    <div class="square"> </div>
    <div class="square last"></div>
    <div class="square clear"></div>
    <div class="square"></div>
    <div class="square last"></div>
    <div class="square clear"></div>
    <div class="square"></div> 
    <div class="square last"></div>
  </div>
</div>

<!-- partial:index.partial.html -->
<div class="layout has-sidebar fixed-sidebar fixed-header">
      <aside id="sidebar" class="sidebar break-point-sm has-bg-image">
        <a id="btn-collapse" class="sidebar-collapser"><i class="ri-arrow-left-s-line"></i></a>
        <div class="image-wrapper">
          <!--<img src="assets/images/sidebar-bg.jpg" alt="sidebar background" />-->
        </div>
        <div class="sidebar-layout">
          <div class="sidebar-header">
            <div class="pro-sidebar-logo">
              <div>P</div>
              <h5>Pro Sidebar</h5>
            </div>
          </div>
          <div class="sidebar-content">
            <nav class="menu open-current-submenu">
              <ul>
                <li class="menu-header"><span> GENERAL </span></li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-vip-diamond-fill"></i>
                    </span>
                    <span class="menu-title">Components</span>
                    <span class="menu-suffix">
                      <span class="badge primary">Hot</span>
                    </span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title">Grid</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title">Layout</span>
                        </a>
                      </li>
                      <li class="menu-item sub-menu">
                        <a href="#">
                          <span class="menu-title">Forms</span>
                        </a>
                        <div class="sub-menu-list">
                          <ul>
                            <li class="menu-item">
                              <a href="#">
                                <span class="menu-title">Input</span>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="#">
                                <span class="menu-title">Select</span>
                              </a>
                            </li>
                            <li class="menu-item sub-menu">
                              <a href="#">
                                <span class="menu-title">More</span>
                              </a>
                              <div class="sub-menu-list">
                                <ul>
                                  <li class="menu-item">
                                    <a href="#">
                                      <span class="menu-title">CheckBox</span>
                                    </a>
                                  </li>
                                  <li class="menu-item">
                                    <a href="#">
                                      <span class="menu-title">Radio</span>
                                    </a>
                                  </li>
                                  <li class="menu-item sub-menu">
                                    <a href="#">
                                      <span class="menu-title">Want more ?</span>
                                      <span class="menu-suffix">&#x1F914;</span>
                                    </a>
                                    <div class="sub-menu-list">
                                      <ul>
                                        <li class="menu-item">
                                          <a href="#">
                                            <span class="menu-prefix">&#127881;</span>
                                            <span class="menu-title">You made it </span>
                                          </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-bar-chart-2-fill"></i>
                    </span>
                    <span class="menu-title">Тренировка</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="/numerals_training">
                          <span class="menu-title">Числительные</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title">Line chart</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title">Bar chart</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-shopping-cart-fill"></i>
                    </span>
                    <span class="menu-title">E-commerce</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title">Products</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title">Orders</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title">credit card</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-global-fill"></i>
                    </span>
                    <span class="menu-title">Maps</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title">Google maps</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title">Open street map</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                     <i class="ri-paint-brush-fill"></i>
                    </span>
                    <span class="menu-title">Theme</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title">Dark</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title">Light</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="menu-header" style="padding-top: 20px"><span> EXTRA </span></li>
                <li class="menu-item">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-book-2-fill"></i>
                    </span>
                    <span class="menu-title">Documentation</span>
                    <span class="menu-suffix">
                      <span class="badge secondary">Beta</span>
                    </span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-calendar-fill"></i>
                    </span>
                    <span class="menu-title">Calendar</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-service-fill"></i>
                    </span>
                    <span class="menu-title">Examples</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="sidebar-footer">
            <div class="footer-box">
              <div>
                <img
                  class="react-logo"
                  src="https://user-images.githubusercontent.com/25878302/213938106-ca8f0485-3f30-4861-9188-2920ed7ab284.png"
                  alt="react"
                />
              </div>
              <div style="padding: 0 10px">
                <span style="display: block; margin-bottom: 10px"
                  >Pro sidebar is also available as a react package
                </span>
                <div style="margin-bottom: 15px">
                  <img
                    alt="preview badge"
                    src="https://img.shields.io/github/stars/azouaoui-med/react-pro-sidebar?style=social"
                  />
                </div>
                <div>
                  <a href="https://github.com/azouaoui-med/react-pro-sidebar" target="_blank"
                    >Check it out!</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
      <div id="overlay" class="overlay"></div>
      <div class="layout">
        <main class="content">
           <div>
             <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm">
                <i class="ri-menu-line ri-xl"></i>
              </a>
               @yield('content')
            </div>
        </main>
        <div class="overlay"></div>
      </div>
    </div>
<!-- partial -->
  <script src='https://unpkg.com/@popperjs/core@2'></script>
  @vite(['resources/js/script.js'])
  @yield('js_load')
  @vite(['resources/css/app.css'])
</body>
</html>