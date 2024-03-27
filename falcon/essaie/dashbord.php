
<nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            </div><a class="navbar-brand" href="index.php">
              <div class="d-flex align-items-center py-3"><span class="font-sans-serif">sir_techshop </span></div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span></div>
                  </a>
                  <ul class="nav collapse show" id="dashboard">
                    <li class="nav-item"><a class="nav-link active" href="index.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Default</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="dashboard/analytics.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Analytics</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="dashboard/crm.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">CRM</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="dashboard/e-commerce.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">E commerce</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="dashboard/project-management.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Management</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="dashboard/saas.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">SaaS</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">App</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages-->
                  
                  <a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Email</span></div>
                  </a>
                  <ul class="nav collapse false" id="email">
                    <li class="nav-item">
                      <a class="nav-link" href="app/email/inbox.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Inbox</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="app/email/email-detail.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Email detail</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="app/email/compose.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Compose</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="events">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-day"></span></span><span class="nav-link-text ps-1">Events</span></div>
                  </a>
                  <ul class="nav collapse false" id="events">
                    <li class="nav-item"><a class="nav-link" href="app/events/create-an-event.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create an event</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="app/events/event-detail.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event detail</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="app/events/event-list.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event list</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-shopping-cart"></span></span><span class="nav-link-text ps-1">E commerce</span></div>
                  </a>
                  <ul class="nav collapse false" id="e-commerce">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#product" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse false" id="product">
                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/product/product-list.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product list</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/product/product-grid.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product grid</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/product/product-details.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product details</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#orders" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Orders</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse false" id="orders">
                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/orders/order-list.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order list</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/orders/order-details.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order details</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="app/e-commerce/customers.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customers</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <!--  -->
                  </ul><!-- parent pages--><a class="nav-link" href="app/kanban.php" role="button" aria-expanded="false">
                    
                  
                  <ul class="nav collapse false" id="social">
                    <li class="nav-item"><a class="nav-link" href="app/social/feed.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feed</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="app/social/activity-log.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Activity log</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="app/social/notifications.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Notifications</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="app/social/followers.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Followers</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Pages</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages-->
                  
                  <a class="nav-link dropdown-indicator" href="#authentication" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-lock"></span></span><span class="nav-link-text ps-1">Add admin</span></div>
                  </a>
                  <ul class="nav collapse false" id="authentication">
                    
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#card" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Card</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse false" id="card">
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/login.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/logout.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/register.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/forgot-password.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/confirm-mail.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/reset-password.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/lock-screen.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#split" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                        
                      </a><!-- more inner pages-->
                      <ul class="nav collapse false" id="split">
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/split/login.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/split/logout.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/split/register.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/split/forgot-password.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/split/confirm-mail.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/split/reset-password.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/split/lock-screen.php" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/authentication/wizard.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Wizard</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#authentication-modal" data-bs-toggle="modal" aria-expanded="false">
                        <!-- <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modal</span></div> -->
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages-->
                  
                  <ul class="nav collapse false" id="user">
                    <li class="nav-item"><a class="nav-link" href="pages/user/profile.html" aria-expanded="false">
                        <!-- <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profile</span></div> -->
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/user/settings.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Settings</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages-->
                  
                  <ul class="nav collapse false" id="pricing">
                    <li class="nav-item"><a class="nav-link" href="pages/pricing/pricing-default.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing default</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/pricing/pricing-alt.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing alt</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages-->
                  
                  <ul class="nav collapse false" id="miscellaneous">
                    <li class="nav-item"><a class="nav-link" href="pages/miscellaneous/associations.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Associations</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/miscellaneous/invite-people.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invite people</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/miscellaneous/privacy-policy.php" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Privacy policy</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul>
                </li>
               
              </ul>
              
            </div>
          </div>
        </nav>