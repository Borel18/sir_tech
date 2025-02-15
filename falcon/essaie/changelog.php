<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  
<!-- Mirrored from prium.github.io/falcon/v3.4.0/changelog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 May 2022 07:55:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Falcon | Dashboard &amp; Web App Template</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="assets/js/config.js"></script>
    <script src="vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="vendors/prism/prism-okaidia.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <?php
        require_once 'dashbord.php'

        ?>
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="index.html">
            <div class="d-flex align-items-center"><img class="me-2" src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
          </a>
          <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
            <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="index.html">Default</a><a class="dropdown-item link-600 fw-medium" href="dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="dashboard/project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="dashboard/saas.html">SaaS</a></div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                  <div class="card navbar-card-app shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-md-5">
                          <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="app/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="app/chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="app/kanban.html">Kanban</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="app/email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="app/email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="app/email/compose.html">Compose</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="app/events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="app/events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="app/events/event-list.html">Event list</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="app/social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="app/social/activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="app/social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="app/social/followers.html">Followers</a>
                          </div>
                        </div>
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/invoice.html">Invoice</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
                  <div class="card navbar-card-pages shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="#authentication-modal" data-bs-toggle="modal">Modal</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a class="nav-link py-1 link-600 fw-medium" href="pages/miscellaneous/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="pages/miscellaneous/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">User</p><a class="nav-link py-1 link-600 fw-medium" href="pages/user/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="pages/user/settings.html">Settings</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a class="nav-link py-1 link-600 fw-medium" href="pages/pricing/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="pages/pricing/pricing-alt.html">Pricing alt</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a class="nav-link py-1 link-600 fw-medium" href="pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="pages/errors/500.html">500</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="pages/starter.html">Starter</a><a class="nav-link py-1 link-600 fw-medium" href="pages/landing.html">Landing</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
                  <div class="card navbar-card-components shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="modules/components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/carousel/bootstrap.html">Bootstrap carousel</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="modules/components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/draggable.html">Draggable</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/vertical-navbar.html">Vertical navbar</a></div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/top-navbar.html">Top navbar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/combo-navbar.html">Combo navbar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/placeholder.html">Placeholder</a></div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pagination.html">Pagination</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/treeview.html">Treeview<span class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/videos/embed.html">Embed</a></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/validation.html">Validation</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="modules/tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="modules/tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="modules/tables/bulk-select.html">Bulk select</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/chartjs.html">Chartjs</a>
                            <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/how-to-use.html">How to use</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="modules/components/videos/plyr.html">Plyr</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/overlayscrollbars.html">Overlayscrollbars</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/vertical-align.html">Vertical align</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-xxl-4 pt-xxl-1">
                            <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/material-icons.html">Material icons</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="modules/maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="modules/maps/leaflet-map.html">Leaflet map</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/styling.html">Styling</a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/dark-mode.html">Dark mode<span class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="changelog.html">Changelog</a></div>
                </div>
              </li>
            </ul>
          </div>
          <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <li class="nav-item">
              <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label></div>
            </li>
            <li class="nav-item">
              <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification" aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none">
                  <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <h6 class="card-header-title mb-0">Notifications</h6>
                      </div>
                      <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                    </div>
                  </div>
                  <div class="scrollbar-overlay" style="max-height:19rem">
                    <div class="list-group list-group-flush fw-normal fs--1">
                      <div class="list-group-title border-bottom">NEW</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <div class="avatar-name rounded-circle"><span>AB</span></div>
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                            <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-title border-bottom">EARLIER</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                              <img class="rounded-circle" src="assets/img/logos/oxford.png" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="border-bottom-0 notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                              <img class="rounded-circle" src="assets/img/team/10.jpg" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-center border-top"><a class="card-link d-block" href="app/social/notifications.html">View all</a></div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                  <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                  <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#!">Set status</a>
                  <a class="dropdown-item" href="pages/user/profile.html">Profile &amp; account</a>
                  <a class="dropdown-item" href="#!">Feedback</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                  <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="index.html">
              <div class="d-flex align-items-center"><img class="me-2" src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
            </a>
            <ul class="navbar-nav align-items-center d-none d-lg-block">
              <li class="nav-item">
                <div class="search-box" data-list='{"valueNames":["title"]}'>
                  <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                  </form>
                  <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none" data-bs-dismiss="search">
                    <div class="btn-close-falcon" aria-label="Close"></div>
                  </div>
                  <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                    <div class="scrollbar list py-3" style="max-height: 24rem;">
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs--1 px-card py-1 hover-primary" href="app/events/event-detail.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs--2"></span>
                          <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Events</div>
                        </div>
                      </a>
                      <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="app/e-commerce/customers.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs--2"></span>
                          <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Customers</div>
                        </div>
                      </a>
                      <hr class="bg-200 dark__bg-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-card py-1 fs-0" href="app/e-commerce/customers.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-warning">customers:</span>
                          <div class="flex-1 fs--1 title">All customers list</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="app/events/event-detail.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-success">events:</span>
                          <div class="flex-1 fs--1 title">Latest events in current month</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="app/e-commerce/product/product-grid.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-info">products:</span>
                          <div class="flex-1 fs--1 title">Most popular products</div>
                        </div>
                      </a>
                      <hr class="bg-200 dark__bg-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Files</h6><a class="dropdown-item px-card py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="border h-100 w-100 fit-cover rounded-3" src="assets/img/products/3-thumb.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">iPhone</h6>
                            <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="img-fluid" src="assets/img/icons/zip.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Falcon v1.8.2</h6>
                            <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                          </div>
                        </div>
                      </a>
                      <hr class="bg-200 dark__bg-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Members</h6><a class="dropdown-item px-card py-2" href="pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l status-online me-2">
                            <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Anna Karinina</h6>
                            <p class="fs--2 mb-0 d-flex">Technext Limited</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Antony Hopkins</h6>
                            <p class="fs--2 mb-0 d-flex">Brain Trust</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Emma Watson</h6>
                            <p class="fs--2 mb-0 d-flex">Google</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="text-center mt-n3">
                      <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label></div>
              </li>
              <li class="nav-item">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                      <div class="list-group list-group-flush fw-normal fs--1">
                        <div class="list-group-title border-bottom">NEW</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <div class="avatar-name rounded-circle"><span>AB</span></div>
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                              <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-title border-bottom">EARLIER</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="assets/img/logos/oxford.png" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="assets/img/team/10.jpg" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="app/social/notifications.html">View all</a></div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="pages/user/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                    <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;" data-move-target="#navbarVerticalNav" data-navbar-top="combo">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="index.html">
              <div class="d-flex align-items-center"><img class="me-2" src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
            </a>
            <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
              <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                  <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="index.html">Default</a><a class="dropdown-item link-600 fw-medium" href="dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="dashboard/project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="dashboard/saas.html">SaaS</a></div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                  <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                    <div class="card navbar-card-app shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-md-5">
                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="app/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="app/chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="app/kanban.html">Kanban</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="app/email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="app/email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="app/email/compose.html">Compose</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="app/events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="app/events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="app/events/event-list.html">Event list</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="app/social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="app/social/activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="app/social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="app/social/followers.html">Followers</a>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/invoice.html">Invoice</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                  <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
                    <div class="card navbar-card-pages shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="#authentication-modal" data-bs-toggle="modal">Modal</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a class="nav-link py-1 link-600 fw-medium" href="pages/miscellaneous/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="pages/miscellaneous/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">User</p><a class="nav-link py-1 link-600 fw-medium" href="pages/user/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="pages/user/settings.html">Settings</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a class="nav-link py-1 link-600 fw-medium" href="pages/pricing/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="pages/pricing/pricing-alt.html">Pricing alt</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a class="nav-link py-1 link-600 fw-medium" href="pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="pages/errors/500.html">500</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="pages/starter.html">Starter</a><a class="nav-link py-1 link-600 fw-medium" href="pages/landing.html">Landing</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                  <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
                    <div class="card navbar-card-components shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="modules/components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/carousel/bootstrap.html">Bootstrap carousel</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="modules/components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/draggable.html">Draggable</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/vertical-navbar.html">Vertical navbar</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/top-navbar.html">Top navbar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/combo-navbar.html">Combo navbar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/placeholder.html">Placeholder</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pagination.html">Pagination</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/treeview.html">Treeview<span class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/videos/embed.html">Embed</a></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/validation.html">Validation</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="modules/tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="modules/tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="modules/tables/bulk-select.html">Bulk select</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/chartjs.html">Chartjs</a>
                              <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/how-to-use.html">How to use</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="modules/components/videos/plyr.html">Plyr</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/overlayscrollbars.html">Overlayscrollbars</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/vertical-align.html">Vertical align</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1">
                              <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/material-icons.html">Material icons</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="modules/maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="modules/maps/leaflet-map.html">Leaflet map</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
                  <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/styling.html">Styling</a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/dark-mode.html">Dark mode<span class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="changelog.html">Changelog</a></div>
                  </div>
                </li>
              </ul>
            </div>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label></div>
              </li>
              <li class="nav-item">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                      <div class="list-group list-group-flush fw-normal fs--1">
                        <div class="list-group-title border-bottom">NEW</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <div class="avatar-name rounded-circle"><span>AB</span></div>
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                              <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-title border-bottom">EARLIER</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="assets/img/logos/oxford.png" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="assets/img/team/10.jpg" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="app/social/notifications.html">View all</a></div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="pages/user/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                    <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          <script>
            var navbarPosition = localStorage.getItem('navbarPosition');
            var navbarVertical = document.querySelector('.navbar-vertical');
            var navbarTopVertical = document.querySelector('.content .navbar-top');
            var navbarTop = document.querySelector('[data-layout] .navbar-top');
            var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');
            if (navbarPosition === 'top') {
              navbarTop.removeAttribute('style');
              navbarTopVertical.remove(navbarTopVertical);
              navbarVertical.remove(navbarVertical);
              navbarTopCombo.remove(navbarTopCombo);
            } else if (navbarPosition === 'combo') {
              navbarVertical.removeAttribute('style');
              navbarTopCombo.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopVertical.remove(navbarTopVertical);
            } else {
              navbarVertical.removeAttribute('style');
              navbarTopVertical.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopCombo.remove(navbarTopCombo);
            }
          </script>
          <div class="card mb-3">
            <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-4.png);"></div>
            <!--/.bg-holder-->
            <div class="card-body position-relative">
              <div class="row">
                <div class="col-lg-8">
                  <h3>Changelog</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-body">
              <div class="alert alert-warning p-4 mb-0" role="alert">
                <div class="d-flex"><span class="fab fa-intentionally-kept fs-3"></span>
                  <div class="flex-1 ms-3">
                    <h4 class="alert-heading">Before you update!</h4>
                    <p class="mb-0">Backup your files and read the changelog before updating Falcon on your project. If you come across with any problems with Falcon template during the update, feel free to contact us at <a href="mailto:support@themewagon.com">support@themewagon.com</a>.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.4.0</code> - Laggar falcon</h5>
              <p class="mb-0">19 September, 2021</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>PAGE: <code>public/modules/components/treeview.html</code></li>
                <li>SCSS: <code>src/scss/theme/_treeview.scss</code></li>
                <li>JS: <code>src/js/treeview.js</code></li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>JS: <code>src/js/theme.js</code></li>
                <li>JS: <code>src/js/dropzone.js</code></li>
                <li>JS: <code>src/js/charts/echarts/returning-customer-rate.js</code></li>
                <li>SCSS: <code>src/scss/theme/_theme.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_variables.scss</code></li>
                <li>SCSS: <code>src/scss/theme/plugins/_dropzone.scss</code></li>
                <li>SCSS: <code>src/scss/theme/plugins/_full-calendar.scss</code></li>
                <li>SCSS: <code>src/scss/theme/root/_dark.scss</code></li>
                <li>SCSS: <code>src/scss/theme/root/_light.scss</code></li>
              </ul>
              <h6>Fix </h6>
              <ul class="bullet-inside ps-0">
                <li>Returning Customer Rate chart legend issue</li>
                <li>Other minor bugs</li>
              </ul>
            </div>
          </div><!-- ------------------------------------------------------------------->
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.3.0</code> - Lanner falcon</h5>
              <p class="mb-0">23 August, 2021</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>PAGE: <code>public/modules/components/placeholder.html</code></li>
                <li>PAGE: <code>public/modules/components/offcanvas.html  </code></li>
                <li>JS: <code>src/js/charts/echarts/bandwidth-saved.js  </code></li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>Bootstrap to <code>v5.1.0  </code></li>
                <li>Plugin: Removed <code>progressbar.js</code></li>
                <li>Bandwidth Saved progressbar is converted to <code>echarts </code>from <code>progressbar.js </code></li>
                <li>Settings Panel is converted to <code>offcanvas </code>from <code>modal</code></li>
                <li>Removed <code>Side Panel </code>component</li>
                <li>Removed <code>Advance Progessbar </code>component</li>
                <li>JS: Removed <code>src/js/settings-panel.js</code></li>
                <li>JS: Removed <code>src/js/progressbar.js</code></li>
                <li>JS: <code>src/js/config.js</code></li>
                <li>JS: <code>src/js/theme.js</code></li>
                <li>JS: <code>src/js/utils.js</code></li>
                <li>SCSS: Removed <code>src/scss/theme/_modal.scss</code></li>
                <li>SCSS: Removed <code>src/scss/theme/plugins/_progressbar.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_variables.scss</code></li>
                <li>SCSS: <code>src/scss/theme/root/_light.scss</code></li>
                <li>SCSS: <code>src/scss/_bootstrap.scss</code></li>
                <li>SCSS: <code>src/scss/theme/plugins/_echarts.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_chat.scss</code></li>
                <li>SCSS: <code>src/scss/theme/plugins/_choices.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_avatar.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_functions.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_popover.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_plugins.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_settings-panel.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_theme.scss</code></li>
                <li>SCSS: <code>src/scss/theme/mixins/_utilities.scss</code></li>
              </ul>
              <h6>Fix</h6>
              <ul class="bullet-inside ps-0">
                <li>Search box dropdown menu hr color in dark mode.</li>
                <li>Search box close button color in dark mode.</li>
                <li>SCSS compiling deprecated warning.</li>
                <li>Other minor bugs</li>
              </ul>
            </div>
          </div><!-- ------------------------------------------------------------------->
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.2.0</code> - Aplomado falcon</h5>
              <p class="mb-0">23 June, 2021</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>Added multiple echarts example</li>
                <li>PAGE: <code>public/dashboard/crm.html</code></li>
                <li>JS: <code>public/assets/data/world.js</code></li>
                <li>JS: <code>public/assets/data/usa.js</code></li>
                <li>JS: <code>src/js/charts/echarts/closed-vs-goal.js</code></li>
                <li>JS: <code>src/js/charts/echarts/line-payment.js</code></li>
                <li>JS: <code>src/js/charts/echarts/real-time-users.js</code></li>
                <li>JS: <code>src/js/charts/echarts/lead-conversion.js</code></li>
                <li>JS: <code>src/js/charts/echarts/crm-revenue.js</code></li>
                <li>JS: <code>src/js/charts/echarts/deal-storage-funnel.js</code></li>
                <li>JS: <code>src/js/charts/echarts/location-by-session-crm.js      </code></li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>Bootstrap to <code>v5.0.2</code></li>
                <li>Plugin: <code>echarts </code></li>
                <li>Plugin: <code>chart.js</code></li>
                <li>Line payment chart is converted from <code>chart.js </code>to <code>echarts</code></li>
                <li>Real time user chart is converted from <code>chart.js </code>to <code>echarts</code></li>
                <li>JS: <code>src/js/popover.js</code></li>
                <li>JS: <code>src/js/charts/echarts/traffic-channels.js</code></li>
                <li>JS: <code>src/js/tinymce.js</code></li>
                <li>JS: <code>src/js/charts/echarts/echarts-utils.js</code></li>
                <li>JS: <code>src/js/charts/echarts/session-by-country-map.js</code></li>
                <li>JS: <code>src/js/charts/echarts/total-order.js</code></li>
                <li>JS: <code>src/js/charts/echarts/weekly-sales.js</code></li>
                <li>JS: <code>src/js/charts/echarts/returning-customer-rate.js</code></li>
                <li>JS: <code>src/js/charts/echarts/gross-revenue.js</code></li>
                <li>JS: <code>src/js/charts/echarts/traffic-channels.js</code></li>
                <li>JS: <code>src/js/theme-control.js</code></li>
                <li>JS: <code>src/js/theme.js</code></li>
                <li>JS: <code>gulp/watch.gulp.js</code></li>
                <li>JS: <code>gulp/script.gulp.js</code></li>
                <li>SCSS: <code>src/scss/theme/mixins/_button.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_buttons.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_dropdown.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_variables.scss</code></li>
                <li>SCSS: <code>src/scss/theme/plugins/_echarts.scss</code></li>
                <li>SCSS: <code>src/scss/theme/plugins/_list.scss</code></li>
                <li>SCSS: <code>src/scss/theme/root/_dark.scss</code></li>
                <li>SCSS: <code>src/scss/theme/root/_light.scss</code></li>
                <li>SCSS: <code>src/scss/theme/plugins/_flatpickr.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_dashboard.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_forms.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_navbar-top.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_notification.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_hover.scss</code></li>
                <li>SUSS: <code>src/scss/theme/plugins/_tinymce.scss</code></li>
                <li>JSON: <code>package.json</code></li>
                <li>JSON: <code>vendors.json</code></li>
                <li>JSON: <code>gulp/gulp.json</code></li>
              </ul>
              <h6>Fix</h6>
              <ul class="bullet-inside ps-0">
                <li>Tinymce dark mode issue</li>
                <li>Table dropdown issue in ipad</li>
                <li>Disabled button color issue</li>
                <li>Other minor bugs</li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.1.0</code> - Saker falcon</h5>
              <p class="mb-0">2 June, 2021</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>HTML: <code>public/modules/forms/floating-labels.html</code></li>
                <li>Added support for Apple M1 chip</li>
                <li>Add <code>@mr-hope/gulp-sass </code>package for compiling SCSS</li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>Plugin: <code>@fortawesome/fontawesome-free</code></li>
                <li>Plugin: <code>@joeattardi/emoji-button</code></li>
                <li>Plugin: <code>@popperjs/core</code></li>
                <li>Plugin: <code>anchor-js</code></li>
                <li>Plugin: <code>dropzone</code></li>
                <li>Plugin: <code>fullcalendar</code></li>
                <li>Plugin: <code>glightbox</code></li>
                <li>Plugin: <code>leaflet.markercluster</code></li>
                <li>Plugin: <code>list.js</code></li>
                <li>Plugin: <code>lottie-web</code></li>
                <li>Plugin: <code>plyr</code></li>
                <li>Plugin: <code>swiper</code></li>
                <li>Plugin: <code>tinymce</code></li>
                <li>Plugin: <code>typed.js</code></li>
                <li>Remove <code>gulp-sass </code>package</li>
                <li>JS: <code>gulp/style.gulp.js</code></li>
                <li>JS: <code>src/js/calendar/template.js</code></li>
                <li>JS: <code>src/js/chat.js</code></li>
                <li>JS: <code>src/js/search.js</code></li>
                <li>JS: <code>src/js/list.js</code></li>
                <li>SCSS: <code>src/scss/theme/_navbar-top.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_calendar.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_chat.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_notification.scss</code></li>
                <li>SCSS: <code>src/scss/theme/plugins/_full-calendar.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_icon.scss</code></li>
                <li>SCSS: <code>src/scss/theme/root/_dark.scss</code></li>
                <li>SCSS: <code>src/scss/theme/root/_light.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_forms.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_reboot.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_variables.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_dashboard.scss</code></li>
                <li>JSON: <code>vendors.json</code></li>
                <li>JSON: <code>package.json</code></li>
              </ul>
              <h6>Fix</h6>
              <ul class="bullet-inside ps-0">
                <li>Search suggestion toggle issue in top navbar</li>
                <li>Notification dropdown height in Firefox</li>
                <li>Other minor bugs.</li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.0.0</code> - Prairie falcon</h5>
              <p class="mb-0">23 May, 2021</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>HTML: <code>public/dashboard/analytics.html</code></li>
                <li>HTML: <code>public/dashboard/e-commerce.html</code></li>
                <li>HTML: <code>public/dashboard/project-management.html</code></li>
                <li>HTML: <code>public/dashboard/saas.html</code></li>
                <li>JS: <code>src/js/charts/echarts/audience.js</code></li>
                <li>JS: <code>src/js/charts/echarts/active-users-report.js</code></li>
                <li>JS: <code>src/js/charts/echarts/basic-echarts.js</code></li>
                <li>JS: <code>src/js/charts/echarts/bounce-rate.js</code></li>
                <li>JS: <code>src/js/charts/echarts/candle-chart.js</code></li>
                <li>JS: <code>src/js/charts/echarts/gross-revenue.js</code></li>
                <li>JS: <code>src/js/charts/echarts/market-share-ecommerce.js</code></li>
                <li>JS: <code>src/js/charts/echarts/report-for-this-week.js</code></li>
                <li>JS: <code>src/js/charts/echarts/returning-customer-rate.js</code></li>
                <li>JS: <code>src/js/charts/echarts/sales-by-pos-location.js</code></li>
                <li>JS: <code>src/js/charts/echarts/session-by-country-map.js</code></li>
                <li>JS: <code>src/js/charts/echarts/session-by-country.js</code></li>
                <li>JS: <code>src/js/charts/echarts/session-by-browser.js</code></li>
                <li>JS: <code>src/js/charts/echarts/total-sales-ecommerce.js</code></li>
                <li>JS: <code>src/js/charts/echarts/traffic-channels.js</code></li>
                <li>JS: <code>src/js/charts/echarts/users-by-time.js</code></li>
                <li>JS: <code>src/js/calendar/management-calendar.js</code></li>
                <li>JS: <code>src/js/calendar/management-events.js</code></li>
                <li>JS: <code>gulp/link.gulp.js</code></li>
                <li>JS: <code>src/js/charts/chartjs/product-share-doughnut.js</code></li>
                <li>SCSS: <code>src/scss/theme/_audience-tab.scss</code></li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>Bootstrap to <code>v5.0.1</code></li>
                <li>JS: <code>src/js/theme.js</code></li>
                <li>JS: <code>src/js/utils.js</code></li>
                <li>JS: <code>src/js/navbar-darken-on-scroll.js</code></li>
                <li>JS: <code>src/js/fullcalendar.js</code></li>
                <li>JS: <code>src/js/navbar-top.js</code></li>
                <li>JS: <code>src/js/calendar/index.js</code></li>
                <li>JS: <code>src/js/calendar/template.js</code></li>
                <li>JS: <code>src/js/calendar/events.js</code></li>
                <li>JS: <code>src/js/charts/echarts/echarts.js</code></li>
                <li>JS: <code>src/js/charts/chartjs/chart-line-payment.js</code></li>
                <li>JS: <code>src/js/list.js</code></li>
                <li>JS: <code>src/js/search.js</code></li>
                <li>JS: <code>src/js/charts/echarts/total-sales.js</code></li>
                <li>JS: <code>gulp/product.gulp.js</code></li>
                <li>JS: <code>gulp/pug.gulp.js</code></li>
                <li>SCSS: <code>src/scss/theme/_theme.scss</code></li>
                <li>SCSS: <code>src/scss/theme/plugins/_full-calendar.scss</code></li>
                <li>SCSS: <code>src/scss/theme/plugins/_echarts.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_mixed.scss</code></li>
                <li>SCSS: <code>src/scss/theme/helpers/_background.scss</code></li>
                <li>SCSS: <code>src/scss/theme/root/_dark.scss</code></li>
                <li>SCSS: <code>src/scss/theme/root/_light.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_avatar.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_calendar.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_forms.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_dashboard.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_card.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_variables.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_timeline.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_utilities.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_calendar.scss</code></li>
                <li>JSON: <code>vendors.json</code></li>
                <li>JSON: <code>gulp/gulp.json</code></li>
                <li>JSON: <code>package.json</code></li>
              </ul>
              <h6>Fix</h6>
              <ul class="bullet-inside ps-0">
                <li>Other minor bugs</li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.0.0-beta7</code> - Taita falcon</h5>
              <p class="mb-0">24 April, 2021</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>JS: <code>gulp/product.gulp.js</code></li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>JS: <code>src/js/list.js</code></li>
                <li>JS: <code>src/js/rater.js</code></li>
                <li>JS: <code>src/js/tinymce.js</code></li>
                <li>JS: <code>src/js/googleMap.js</code></li>
                <li>JS: <code>src/js/navbar-darken-on-scroll.js</code></li>
                <li>JS: <code>src/js/wizard.js</code></li>
                <li>JS: <code>gulp/pug.gulp.js</code></li>
                <li>JS: <code>gulpfile.js</code></li>
                <li>JSON: <code>gulp/gulp.json</code></li>
                <li>JSON: <code>package.json</code></li>
                <li>SCSS: <code>src/scss/theme/plugins/_tinymce.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_landing.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_navbar-vertical.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_search-box.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_buttons.scss</code></li>
                <li>SCSS: <code>src/scss/theme/helpers/_background.scss</code></li>
                <li>SCSS: <code>src/scss/theme/plugins/_flatpickr.scss</code></li>
                <li>SCSS: <code>src/scss/theme/plugins/_full-calendar.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_browser-support.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_kanban.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_notification.scss</code></li>
                <li>SCSS: <code>src/scss/theme/plugins/_choices.scss</code></li>
              </ul>
              <h6>Fix</h6>
              <ul class="bullet-inside ps-0">
                <li>Other minor bugs</li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.0.0-beta6</code> - Merlin falcon</h5>
              <p class="mb-0">8 April, 2021</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>JS: <code>src/js/charts/chartjs/chart-bar.js</code></li>
                <li>JS: <code>src/js/charts/chartjs/chart-combo.js</code></li>
                <li>JS: <code>src/js/charts/chartjs/chart-doughnut.js</code></li>
                <li>JS: <code>src/js/charts/chartjs/chart-line-payment.js</code></li>
                <li>JS: <code>src/js/charts/chartjs/chart-pie.js</code></li>
                <li>JS: <code>src/js/charts/chartjs/chart-polar.js</code></li>
                <li>JS: <code>src/js/charts/chartjs/chart-radar.js</code></li>
                <li>JS: <code>src/js/charts/chartjs/chart-real-time-user.js</code></li>
                <li>JS: <code>src/js/charts/chartjs/chart-scatter.js</code></li>
                <li>JS: <code>src/js/charts/chartjs/chartjs-utils.js</code></li>
                <li>JS: <code>src/js/dropdown-menu.js</code></li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>HTML: <code>public/modules/charts/chartjs.html</code></li>
                <li>HTML: <code>public/modules/tables/basic-tables.html</code></li>
                <li>HTML: <code>public/modules/forms/basic/layout.html</code></li>
                <li>HTML: <code>public/modules/forms/basic/form-control.html</code></li>
                <li>JS: <code>src/js/utils.js</code></li>
                <li>JS: <code>src/js/theme.js</code></li>
                <li>JS: <code>src/js/flatpickr.js</code></li>
                <li>JS: <code>gulp/pug.gulp.js</code></li>
                <li>SCSS: <code>src/scss/theme/_nav-tab.scss</code></li>
                <li>SCSS: <code>src/scss/theme/root/_dark.scss</code></li>
                <li>SCSS: <code>src/scss/theme/root/_light.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_variables.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_card.scss</code></li>
                <li>SCSS: <code>src/scss/theme/helpers/_flex.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_navbar-top.scss</code></li>
                <li>JSON: <code>package.json</code></li>
              </ul>
              <h6>Fix</h6>
              <ul class="bullet-inside ps-0">
                <li>Dropdown clipping on table</li>
                <li>Other minor bugs</li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.0.0-beta5</code> - Sooty falcon</h5>
              <p class="mb-0">25 March, 2021</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>Multiple icons set added with example</li>
                <li>Page: <code>public/plugins/Overlayscrollbars.html</code></li>
                <li>JS: <code>src/js/icons.js</code></li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li> <strong>Bootsrap</strong> version updated from <code>v5.0.0-beta2</code> to <code>v5.0.0-beta3</code></li>
                <li>File structure updated</li>
                <li>JS: <code>src/js/navbar-vertical.js</code></li>
                <li>JS: <code>src/js/toast.js</code></li>
                <li>JS: <code>src/js/list.js</code></li>
                <li>JS: <code>src/js/tooltip.js</code></li>
                <li>JS: <code>src/js/theme.js</code></li>
                <li>JS: <code>gulp/pug.gulp.js</code></li>
                <li>SCSS: <code>src/scss/theme/_settings-panel.scss</code></li>
                <li>SCSS: <code>src/scss/theme/plugins/_echarts.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_navbar-vertical.scss</code></li>
                <li>JSON: <code>gulp/gulp.json</code></li>
                <li>JSON: <code>package.json</code></li>
              </ul>
              <h6>Fix</h6>
              <ul class="bullet-inside ps-0">
                <li>Other minor bugs</li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.0.0-beta4</code> - Bat falcon</h5>
              <p class="mb-0">15 March, 2021</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>Page: <code>public/plugins/Overlayscrollbars.html</code></li>
                <li>JS: <code>src/js/scrollbar.js</code></li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>Scrollbar plugin updated to OverlayScrollbars from Simplebar.</li>
                <li>SCSS: <code>src/scss/theme/_functions.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_scrollbar.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_navbar-top.scss</code></li>
                <li>JS: <code>src/js/dropdown-on-hover.js</code></li>
                <li>JS: <code>src/js/theme.js</code></li>
              </ul>
              <h6>Fix</h6>
              <ul class="bullet-inside ps-0">
                <li>Scrollbar on top navbar</li>
                <li>Other minor bugs</li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.0.0-beta3</code> - Pied</h5>
              <p class="mb-0">9 March, 2021</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>Page: <code>public/plugins/simplebar.html </code></li>
                <li>Page: <code>public/forms/form-wizard.html </code></li>
                <li>SCSS: <code>src/scss/theme/_form-wizard.scss</code></li>
                <li>JS: <code>src/js/simplebar.js</code></li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>SCSS: <code>src/scss/theme/_functions.scss </code></li>
                <li>SCSS: <code>src/scss/theme/_navbar-vertical.scss </code></li>
                <li>SCSS: <code>src/scss/theme/mixins/_navbar-vertical.scss</code></li>
                <li>SCSS: <code>src/scss/theme/_scrollbar.scss </code></li>
                <li>SCSS: <code>src/scss/theme/_variables.scss </code></li>
                <li>SCSS: <code>src/scss/theme/_theme.scss</code></li>
                <li>JS: <code>src/js/wizard.js</code></li>
              </ul>
              <h6>Fix</h6>
              <ul class="bullet-inside ps-0">
                <li>Scrollbar style</li>
                <li>Icons jumping issue when navbar collapsed</li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.0.0-beta2</code> - Greater Kestrels </h5>
              <p class="mb-0">23 February, 2021</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>Page: <code>public/plugins/chartjs.html </code></li>
                <li>JS: <code>src/js/form-validation.js </code></li>
                <li>JS: <code>src/js/charts/chart-bar.js </code></li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>Feature: Reposition the settings panel toggler</li>
                <li>SCSS: <code>src/scss/theme/_settings-panel.scss </code></li>
                <li>Bootstrap: updated to <strong>bootstrap-beta2 </strong>- <a href="https://getbootstrap.com/docs/5.0/migration/#v500-beta2">see migration</a></li>
              </ul>
              <h6>Fix</h6>
              <ul class="bullet-inside ps-0">
                <li>Bootstrap form validation</li>
                <li>Flatpicker enable in mobile device</li>
                <li>Dropzone preview icon other file</li>
                <li>TinyMCE: text color issue in mobile device </li>
                <li>Some minor issues</li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.0.0-beta1</code> - Red-necked </h5>
              <p class="mb-0">02 February, 2021</p>
            </div>
            <div class="card-body bg-light">
              <div class="alert alert-success" role="alert">
                <div class="d-flex"><span class="fas fa-exclamation-triangle fs-1"></span>
                  <div class="flex-1 ms-3">This is a massive update.</div>
                </div>
              </div>
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>Feature: Redesign navbar-vertical, navbar-top </li>
                <li>Page: <code>public/documentation/configuration.html </code></li>
                <li>Page: <code>public/documentation/styling.html </code></li>
                <li>JS: <code>src/js/dropdown-on-hover.js </code></li>
                <li>Bootstrap: updated to bootstrap-beta1 - <a href="https://getbootstrap.com/docs/5.0/migration/#v500-beta1">see migration</a></li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>SCSS: <code>src/scss/theme/_navbar-vertical.scss  </code></li>
                <li>SCSS: <code>src/scss/theme/_navbar-top.scss  </code></li>
                <li>SCSS: <code>src/scss/mixins/_navbar-vertical.scss  </code></li>
                <li>SCSS: <code>src/scss/theme/_navbar.scss  </code></li>
                <li>SCSS: <code>src/scss/theme/_function.scss  </code></li>
                <li>SCSS: <code>src/scss/theme/_mixins.scss  </code></li>
                <li>SCSS: <code>src/scss/theme/_mixed.scss  </code></li>
                <li>SCSS: <code>src/scss/theme/_mixed.scss  </code></li>
                <li>SCSS: <code>src/scss/theme/_theme.scss  </code></li>
                <li>SCSS: <code>src/scss/theme.scss  </code></li>
                <li>SCSS: <code>src/scss/theme/_variables.scss  </code></li>
                <li>SCSS: Remove underscore from <code>src/scss/_user.scss  </code></li>
                <li>JS: <code>src/js/config.js  </code></li>
                <li>Gulp: <code>gulp/gulp.json  </code></li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.0.0-alpha11</code> - Banded kestrel </h5>
              <p class="mb-0">17 January, 2021</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>Feature: Dark Mood <a href="documentation/customization/dark-mode.html"> (Documentation)</a></li>
                <li>Introduced CSS variables</li>
                <li>SCSS: <code>.dark__bg-{colors}</code>, <code>.dark__text-{colors}</code>, <code>.dark</code>, <code>.light</code></li>
                <li>JS: <code> src/js/theme-control.js</code></li>
                <li>HTML: Replace all the bootstrap-alpha2 classes with bootstrap-alpha3 classes - <a href="https://getbootstrap.com/docs/5.0/migration/#v500-alpha3">see migration</a></li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>SCSS: Almost all scss file </li>
                <li>JS: <code>src/js/config.js </code></li>
                <li>JS: <code>src/js/charts/**/*.js </code></li>
                <li>JS: <code>src/js/leaflet-active-user.js </code></li>
                <li>JS: <code>src/js/googleMap.js </code></li>
                <li>JS: <code>src/js/emoji-button.js </code></li>
                <li>JS: <code>src/js/list.js </code></li>
                <li>JS: <code>src/js/utils.js </code></li>
                <li>JS: <code>src/js/navbar-darken-on-scroll.js </code></li>
                <li>JS: <code>src/js/progressbar.js </code></li>
                <li>Gulp: <code>src/gulp/gulp.json </code></li>
                <li>Gulp: <code>src/gulp/watch.gulp.js </code></li>
                <li>Gulp: <code>src/gulp/script.gulp.js </code></li>
                <li>page: <code>public/home/*.html </code></li>
                <li>page: <code>public/email/*.html </code></li>
                <li>page: <code>public/authentication/**/*.html </code></li>
                <li>page: <code>public/calendar.html </code></li>
                <li>page: <code>public/chat.html </code></li>
                <li>page: <code>public/kanban.html </code></li>
                <li>page: <code>public/widgets.html </code></li>
                <li>page: <code>public/pages/event-create.html</code></li>
                <li>page: <code>public/pages/event-detail.html</code></li>
                <li>page: <code>public/pages/invoice.html</code></li>
                <li>page: <code>public/pages/people.html</code></li>
                <li>page: <code>public/pages/privacy-policy.html</code></li>
                <li>page: <code>public/pages/notifications.html</code></li>
                <li>page: <code>public/utilities/clearfix.html</code></li>
                <li>page: <code>public/utilities/borders.html</code></li>
                <li>page: <code>public/utilities/colors.html</code></li>
                <li>page: <code>public/utilities/embed.html</code></li>
                <li>page: <code>public/components/background.html</code></li>
                <li>page: <code>public/components/badges.html</code></li>
                <li>page: <code>public/components/buttons.html</code></li>
                <li>page: <code>public/components/toasts.html</code></li>
                <li>page: <code>public/components/hoverbox.html</code></li>
                <li>page: <code>public/components/dropdowns.html</code></li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.0.0-alpha10</code> - Merlin </h5>
              <p class="mb-0">11 November, 2020</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>page: <code>pages/privacy-policy.html  </code></li>
                <li>page: <code>pages/faq/faq-basic.html  </code></li>
                <li>page: <code>pages/faq/faq-alt.html  </code></li>
                <li>page: <code>pages/faq/faq-accordion.html  </code></li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>SCSS: <code>_full-calendar.scss  </code></li>
                <li>SCSS: <code>_mixed.scss  </code></li>
                <li>Docs: Add dropcap and text transformation in typography.html </li>
                <li>Docs: modals.html</li>
                <li>Docs: tables.html</li>
                <li>Docs: page-headers.html</li>
                <li>Page: Add order and customer page links in dashboard-alt.html</li>
              </ul>
              <h6>Fix</h6>
              <ul class="bullet-inside ps-0">
                <li>Progress bar animation</li>
                <li>Margin bottom in forms and component pages</li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.0.0-alpha9</code> - Fox kestrel </h5>
              <p class="mb-0">2 November, 2020</p>
            </div>
            <div class="card-body bg-light">
              <h6>Add</h6>
              <ul class="bullet-inside ps-0">
                <li>Testimonial section in landing page</li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>SCSS: <code>_colored-link.scss </code></li>
                <li>SCSS: <code>_browser-support.scss </code></li>
                <li>SCSS: <code>_button.scss  </code></li>
                <li>JS:<code> navbar-vertical.js </code></li>
                <li>Docs: Add brand colors in colors.html </li>
                <li>Docs: Navbar vertical event</li>
                <li>Button right align in orders.html</li>
                <li>Page: <code>checkout.html page</code></li>
                <li>Page: class name of links in footer of landing.html</li>
                <li>Class name of dropdown link in navbar top </li>
              </ul>
              <h6>Fix</h6>
              <ul class="bullet-inside ps-0">
                <li>Navbar vertical toggle hover</li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.0.0-alpha8 </code>- Brown </h5>
              <p class="mb-0">25 October, 2020</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>Autocomplete search</li>
                <li>Component: <code>components/cookie-notice.html</code></li>
                <li>JS: <code>search.js</code></li>
                <li>JS: <code>cookie-notice.js</code></li>
                <li>SCSS: <code>_cookie-notice.scss</code></li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>SCSS: <code>_search-box.scss</code></li>
                <li>SCSS: <code>_swiper.scss</code></li>
                <li>SCSS: Rename <code>_fullcalendar.scss </code>to <code>_full-calendar.scss</code></li>
                <li>SCSS: <code>_hover.scss</code></li>
                <li>JS: <code>swiper.js</code></li>
                <li>JS: <code>list.js</code></li>
              </ul>
              <h6>Fix</h6>
              <ul class="bullet-inside ps-0">
                <li>Swiper slider width issue when navbar vertical collapsed</li>
                <li>Product slider height with relative to content</li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.0.0-alpha7 </code>- Spotted kestrel</h5>
              <p class="mb-0">13 October, 2020</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>Page: <code>calendar.html</code></li>
                <li>Page: <code>authentication/wizard.html</code></li>
                <li>Page: <code>e-commerce/product-grid.html</code></li>
                <li>Page: <code>e-commerce/product-details.html</code></li>
                <li>Plugin: <code>fullCalendar </code>JavaScript plugin</li>
                <li>Plugin: <code>dayjs </code>JavaScript plugin</li>
                <li>Plugin: <code>lottie </code>JavaScript plugin</li>
                <li>Plugin: <code>Swiper </code>JavaScript plugin</li>
                <li>Plugin: <code>Rater </code>JavaScript plugin</li>
                <li>SCSS: <code>_fullcalendar.scss</code></li>
                <li>SCSS: <code>_wizard.scss</code></li>
                <li>SCSS: <code>_lottie.scss</code></li>
                <li>SCSS: <code>_rater.scss</code></li>
                <li>JS: <code>rater.js</code></li>
                <li>JS: <code>fullcalendar.js</code></li>
                <li>JS: <code>calendar/index.js</code></li>
                <li>JS: <code>calendar/events.js</code></li>
                <li>JS: <code>calendar/template.js</code></li>
                <li>JS: <code>swiper.js</code></li>
                <li>JS: <code>wizard.js</code></li>
                <li>JS: <code>lottie.js</code></li>
                <li> <code>transform-middle</code>, <code>transform-middle-x</code>, <code>transform-middle-y </code>classes with responsive support</li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>Bootstrap to <code>v5.0.0-alpha2 </code></li>
                <li>Removed <code>t-0</code>, <code>r-0</code>, <code>b-0 </code>, <code>t-0 </code>classes. </li>
                <li>Removed <code>absolute-centered</code>, <code>absolute-vertical-centered</code>, <code>absolute-sm-vertical-centered </code>classes.</li>
                <li> <code>.close </code>to <code>.btn-close </code>class.</li>
                <li>SCSS: <code>_anchor.scss</code></li>
                <li>SCSS: <code>_variables.scss</code></li>
                <li>SCSS: <code>_position.scss</code></li>
                <li>SCSS: <code>_utilities.scss</code></li>
                <li>SCSS: <code>_mixed.scss</code></li>
                <li>SCSS: <code>.a-0 </code>to <code>.all-0</code></li>
                <li>SCSS: <code>_borders.scss</code></li>
                <li>SCSS: <code>_buttons.scss</code></li>
                <li>SCSS: Removed<code>.border-2x </code>class.</li>
                <li>SCSS: Replace<code>.border-{top|right|bottom|left}-2x </code>to <code>.border-{top|right|bottom|left}-2 </code></li>
                <li>JS: <code>navbar-vertical.js</code></li>
                <li>JS: <code>echarts.js</code></li>
                <li>HTML: <code>widget.html</code></li>
                <li>HTML: Updated source link of <code>flatpickr.js </code>from HTML file</li>
              </ul>
              <h6>Fix</h6>
              <ul class="bullet-inside ps-0">
                <li>Removed <code>_tiny-slider.scss</code></li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.0.0-alpha6 </code>- Mauritius kestrel</h5>
              <p class="mb-0">16 September, 2020</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>Page: <code>chat.html</code></li>
                <li>Page: <code>kanban.html</code></li>
                <li>Plugin: <code>draggable </code>JavaScript plugin</li>
                <li>Plugin: <code>Emoji Button </code>JavaScript plugin</li>
                <li>SCSS: <code>_chat.scss </code></li>
                <li>SCSS: <code>_kanban.scss</code></li>
                <li>JS: <code>chat.js</code></li>
                <li>JS: <code>draggable.js</code></li>
                <li>JS: <code>emoji-button.js</code></li>
                <li>JS: <code>kanban.js</code></li>
                <li>Large border radius of different corners</li>
                <li>Grays link colors</li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>SCSS: <code>_variables.scss</code></li>
                <li>SCSS: <code>_utilities.scss</code></li>
                <li>SCSS: <code>_hover.scss</code></li>
                <li>SCSS: <code>_mixed.scss</code></li>
                <li>SCSS: Rename <code>_pointer.scss </code>to <code>_cursor.scss</code></li>
                <li>Utilities: <code>border.html</code></li>
                <li>Utilities: <code>colored-link.html</code></li>
                <li> <code>package.json</code></li>
              </ul>
              <h6>Fix </h6>
              <ul class="bullet-inside ps-0">
                <li>Negative margin issue</li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.0.0-alpha5</code>- Eurasian hobby</h5>
              <p class="mb-0">9 September, 2020</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>Page: <code>e-commerce/checkout.html</code></li>
                <li>Page: <code>e-commerce/customers.html</code></li>
                <li>Page: <code>e-commerce/orders.html</code></li>
                <li>Page: <code>e-commerce/product-list.html</code></li>
                <li>Page: <code>e-commerce/shopping-cart.html</code></li>
                <li>Plugin: <code>List.js </code>JavaScript plugin</li>
                <li>Layout: <strong>Navbar Top</strong></li>
                <li>Layout: <strong>Navbar Combo</strong></li>
                <li>Navbar Vertical Variations</li>
                <li>JS: <code>navbar-combo.js</code></li>
                <li>JS: <code>list.js</code></li>
                <li>JS: <code>quantity.js</code></li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>Improve Pug codes</li>
                <li>JS: <code>demo-mode.js</code></li>
                <li>SCSS: <code>_navbar-vertical.scss</code></li>
                <li>SCSS: <code>_mixed.scss</code></li>
                <li>SCSS: <code>_variables.scss</code></li>
                <li>SCSS: <code>_functions.scss</code></li>
                <li>SCSS: <code>_mixins.scss</code></li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"> <code class="fw-bold fs-1">v3.0.0-alpha4 </code>- Seychelles kestrel</h5>
              <p class="mb-0">24 August, 2020</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>Page: <code>home/landing.html</code></li>
                <li>Page: <code>email/inbox.html</code></li>
                <li>Page: <code>email/email-details.html</code></li>
                <li>Page: <code>email/compose.html</code></li>
                <li>Authentication: Split Layout</li>
                <li>Plugin: <code>type.js </code>JavaScript plugin</li>
                <li>Plugin: <code>tinymce.js </code>JavaScript plugin</li>
                <li>JS: <code>bulk-select.js</code></li>
                <li>JS: <code>navbar-darken-on-scroll.js</code></li>
                <li>JS: <code>node.js</code></li>
                <li>JS: <code>scroll-to-top.js</code></li>
                <li>JS: <code>tinymce.js</code></li>
                <li>JS: <code>typed.js</code></li>
                <li>SCSS:<code> _landing.scss</code></li>
                <li>SCSS: <code>_navbar-standard.scss</code></li>
                <li>SCSS: <code>plugins/_tinymce.scss</code></li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>SCSS: <code>_mixed.scss</code></li>
                <li>SCSS: <code>_variables.scss</code></li>
                <li>SCSS: <code>_hover.scss</code></li>
              </ul>
              <h6>Fix</h6>
              <ul class="bullet-inside ps-0">
                <li>Scroll padding top issue</li>
                <li>Switch input color</li>
                <li>Popover file location from node_modules</li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"><code class="fw-bold fs-1">v3.0.0-alpha3</code> - Malagasy's kestrel</h5>
              <p class="mb-0">13 August, 2020</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>Settings Panel</li>
                <li>Page: <code>dashboard-alt.html</code></li>
                <li>Page: <code>event-create.html</code></li>
                <li>Page: <code>event-detail.html</code></li>
                <li>Page: <code>InvitePeople.html</code></li>
                <li>Page: <code>invoice.html</code></li>
                <li>Page: <code>pricing.html</code></li>
                <li>Page: <code>pricing-alt.html</code></li>
                <li>Plugin: <code>CountUp.js </code></li>
                <li>Plugin: <code>Choices</code></li>
                <li>Plugin: <code>Dropzone</code></li>
                <li>Plugin: <code>Leaflet</code></li>
                <li>Plugin: <code>Google Map </code></li>
                <li>JS: <code>config.js</code></li>
                <li>JS: <code>demo-mode.js</code></li>
                <li>JS: <code>dropzone.js</code></li>
                <li>JS: <code>choices.js</code></li>
                <li>JS: <code>countup.js</code></li>
                <li>JS: <code>settings-panel.js</code></li>
                <li>JS: <code>googleMap.js</code></li>
                <li>JS: <code>copy-link.js</code></li>
                <li>JS: <code>charts/chart-line-payment.js</code></li>
                <li>JS: <code>charts/chart-real-time-user.js</code></li>
                <li>SCSS: <code>plugins/_choices.scss</code></li>
                <li>SCSS: <code>plugins/_dropzone.scss</code></li>
                <li>SCSS: <code>plugins/_glightbox.scss</code></li>
                <li>SCSS: <code>plugins/_leaflet.scss</code></li>
                <li>Design File(Figma)</li>
                <li> <code>README.md</code></li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>JS: <code>utils.js</code></li>
                <li>JS: <code>navbar-vertical.js</code></li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"><code class="fw-bold fs-1">v3.0.0-alpha2</code> - Dickinson's kestrel</h5>
              <p class="mb-0">6 August, 2020</p>
            </div>
            <div class="card-body bg-light">
              <h6>New</h6>
              <ul class="bullet-inside ps-0">
                <li>Page: <code>feed.html</code></li>
                <li>Page: <code>billing.html</code></li>
                <li>Plugin: <code>glightbox</code></li>
                <li>Plugin: <code>Plyr</code></li>
                <li>SCSS: <code>_plyr.scss</code></li>
                <li>JS: <code>glightbox.js</code></li>
                <li>JS: <code>plyr.js</code></li>
              </ul>
              <h6>Update</h6>
              <ul class="bullet-inside ps-0">
                <li>SCSS: <code>_flex.scss</code></li>
                <li>SCSS:<code>_dropdown.scss</code></li>
                <li>SCSS:<code>_position.scss</code></li>
                <li>JS: <code>src/js/theme.js</code></li>
              </ul>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-2"><code class="fw-bold fs-1">3-alpha</code> - Initial Release</h5>
              <p class="mb-0">24 July, 2020</p>
            </div>
            <div class="card-body bg-light">
              <p class="mb-0">Nothing to see here.</p>
            </div>
          </div>
          <footer class="footer">
            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy; <a href="https://themewagon.com/">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v3.4.0</p>
              </div>
            </div>
          </footer>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
          <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
              <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-index-1 light">
                  <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                  <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
                </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body py-4 px-5">
                <form>
                  <div class="mb-3"><label class="form-label" for="modal-auth-name">Name</label><input class="form-control" type="text" autocomplete="on" id="modal-auth-name" /></div>
                  <div class="mb-3"><label class="form-label" for="modal-auth-email">Email address</label><input class="form-control" type="email" autocomplete="on" id="modal-auth-email" /></div>
                  <div class="row gx-2">
                    <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-password">Password</label><input class="form-control" type="password" autocomplete="on" id="modal-auth-password" /></div>
                    <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-confirm-password">Confirm Password</label><input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" /></div>
                  </div>
                  <div class="form-check"><input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" /><label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label></div>
                  <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button></div>
                </form>
                <div class="position-relative mt-5">
                  <hr class="bg-300" />
                  <div class="divider-content-center">or register with</div>
                </div>
                <div class="row g-2 mt-2">
                  <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                  <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
      <div class="offcanvas-header settings-panel-header bg-shape">
        <div class="z-index-1 py-1 light">
          <h5 class="text-white"> <span class="fas fa-palette me-2 fs-0"></span>Settings</h5>
          <p class="mb-0 fs--1 text-white opacity-75"> Set your own customized style</p>
        </div><button class="btn-close btn-close-white z-index-1 mt-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body scrollbar-overlay px-card" id="themeController">
        <h5 class="fs-0">Color Scheme</h5>
        <p class="fs--1">Choose the perfect color mode for your app.</p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/falcon-mode-default.jpg" alt=""/></span><span class="label-text">Light</span></label></div>
            <div class="col-6"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/falcon-mode-dark.jpg" alt=""/></span><span class="label-text"> Dark</span></label></div>
          </div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-start"><img class="me-2" src="assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
            <div class="flex-1">
              <h5 class="fs-0">RTL Mode</h5>
              <p class="fs--1 mb-0">Switch your language direction </p><a class="fs--1" href="documentation/customization/configuration.html">RTL Documentation</a>
            </div>
          </div>
          <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-rtl" type="checkbox" data-theme-control="isRTL" /></div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-start"><img class="me-2" src="assets/img/icons/arrows-h.svg" width="20" alt="" />
            <div class="flex-1">
              <h5 class="fs-0">Fluid Layout</h5>
              <p class="fs--1 mb-0">Toggle container layout system </p><a class="fs--1" href="documentation/customization/configuration.html">Fluid Documentation</a>
            </div>
          </div>
          <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" /></div>
        </div>
        <hr />
        <div class="d-flex align-items-start"><img class="me-2" src="assets/img/icons/paragraph.svg" width="20" alt="" />
          <div class="flex-1">
            <h5 class="fs-0 d-flex align-items-center">Navigation Position </h5>
            <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
            <div>
              <div class="form-check form-check-inline"><input class="form-check-input" id="option-navbar-vertical" type="radio" name="navbar" value="vertical" data-theme-control="navbarPosition" /><label class="form-check-label" for="option-navbar-vertical">Vertical</label></div>
              <div class="form-check form-check-inline"><input class="form-check-input" id="option-navbar-top" type="radio" name="navbar" value="top" data-theme-control="navbarPosition" /><label class="form-check-label" for="option-navbar-top">Top</label></div>
              <div class="form-check form-check-inline me-0"><input class="form-check-input" id="option-navbar-combo" type="radio" name="navbar" value="combo" data-theme-control="navbarPosition" /><label class="form-check-label" for="option-navbar-combo">Combo</label></div>
            </div>
          </div>
        </div>
        <hr />
        <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
        <p class="fs--1 mb-0">Switch between styles for your vertical navbar </p>
        <p> <a class="fs--1" href="modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">See Documentation</a></p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="assets/img/generic/default.png" alt="" /><span class="label-text"> Transparent</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="assets/img/generic/inverted.png" alt="" /><span class="label-text"> Inverted</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img class="img-fluid img-prototype" src="assets/img/generic/card.png" alt="" /><span class="label-text"> Card</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img class="img-fluid img-prototype" src="assets/img/generic/vibrant.png" alt="" /><span class="label-text"> Vibrant</span></label></div>
          </div>
        </div>
        <div class="text-center mt-5"><img class="mb-4" src="assets/img/icons/spot-illustrations/47.png" alt="" width="120" />
          <h5>Like What You See?</h5>
          <p class="fs--1">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class="mb-3 btn btn-primary" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a>
        </div>
      </div>
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
      <div class="card-body d-flex align-items-center py-md-2 px-2 py-1">
        <div class="bg-soft-primary position-relative rounded-start" style="height:34px;width:28px">
          <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></span></div>
        </div><small class="text-uppercase text-primary fw-bold bg-soft-primary py-2 pe-2 ps-1 rounded-end">customize</small>
      </div>
    </a>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/prism/prism.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="assets/js/theme.js"></script>
  </body>


<!-- Mirrored from prium.github.io/falcon/v3.4.0/changelog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 May 2022 07:55:12 GMT -->
</html>