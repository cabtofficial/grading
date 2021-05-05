
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Helpdesk - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="./main.087c8d15f89e6bbe3f9e.css" rel="stylesheet"></head>
<body>
<div class="app-container app-theme-white">
        <div class="app-top-bar bg-plum-plate top-bar-text-light">
            <div class="container fiori-container">
                <div class="top-bar-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="https://dashboardpack.com" target="_blank" class="nav-link">
                                DashboardPack.com
                            </a>
                        </li>
                        <li class="nav-item ml-1">
                            <a data-placement="top" rel="popover-focus" data-toggle="popover-custom" class="nav-link">
                                Grid Menu
                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                            </a>
                            <div class="rm-max-width">
                                <div class="d-none popover-custom-content">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark"><i class="lnr-lighter text-dark opacity-7 btn-icon-wrapper mb-2"> </i>Automation
                                                </button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger"><i class="lnr-construction text-danger opacity-7 btn-icon-wrapper mb-2"> </i>Reports
                                                </button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success"><i class="lnr-bus text-success opacity-7 btn-icon-wrapper mb-2"> </i>Activity
                                                </button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus"><i class="lnr-gift text-focus opacity-7 btn-icon-wrapper mb-2"> </i>Settings
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn d-block text-center nav-item">
                                            <button class="btn-shadow btn btn-focus btn-sm">View Details</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="top-bar-right">
                    <ul class="nav">
                        <li class="nav-item mr-1">
                            <a href="javascript:void(0);" class="nav-link">
                                Create Account
                            </a>
                        </li>
                        <li class="nav-item mr-2">
                            <a href="javascript:void(0);" class="nav-link">
                                Login
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a aria-haspopup="true" data-toggle="dropdown" aria-expanded="false" class="nav-link">
                                <i class="typcn typcn-world-outline mr-1"></i>
                                Language
                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                            </a>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                                        <div class="menu-header-image opacity-05" style="background-image: url('assets/images/dropdown-header/city2.jpg');"></div>
                                        <div class="menu-header-content text-center text-white">
                                            <h6 class="menu-header-subtitle mt-0">
                                                Choose Language
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <h6 tabindex="-1" class="dropdown-header">
                                    Popular Languages
                                </h6>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large US"></span>
                                    USA
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large CH"></span>
                                    Switzerland
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large FR"></span>
                                    France
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large ES"></span>
                                    Spain
                                </button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <h6 tabindex="-1" class="dropdown-header">Others</h6>
                                <button type="button" tabindex="0" class="dropdown-item active">
                                    <span class="mr-3 opacity-8 flag large DE"></span>
                                    Germany
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large IT"></span>
                                    Italy
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="app-header header-shadow">
            <div class="container fiori-container">
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__logo">
                    <a href="https://fiori.architectui.com" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Fiori Admin Template" class="logo-src"></a>
                </div>        <ul class="horizontal-nav-menu">
                    <li class="dropdown">
                        <a  data-toggle="dropdown" data-offset="10" data-display="static" aria-expanded="false" class="active">
                            <i class="nav-icon-big typcn typcn-directions"></i>
                            <span>Dashboards</span>
                            <i class="nav-icon-pointer icon ion-ios-arrow-down"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-lg">
                            <div class="dropdown-menu-header">
                                <div class="dropdown-menu-header-inner bg-plum-plate">
                                    <div class="menu-header-image" style="background-image: url('assets/images/dropdown-header/abstract4.jpg');"></div>
                                    <div class="menu-header-content text-left">
                                        <h5 class="menu-header-title">Dashboards</h5>
                                        <h6 class="menu-header-subtitle">This is a dropdown header example!</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-area-xs">
                                <div class="scrollbar-container">
                                    <a class="dropdown-item" href="analytics-dashboard.html">Analytics</a>
                                    <a class="dropdown-item" href="management-dashboard.html">Management</a>
                                    <a class="dropdown-item" href="advertisement-dashboard.html">Advertisement</a>
                                    <a class="dropdown-item active" href="index.html">Helpdesk</a>
                                    <a class="dropdown-item" href="monitoring-dashboard.html">Monitoring</a>
                                    <a class="dropdown-item" href="crypto-dashboard.html">Cryptocurrency</a>
                                    <a class="dropdown-item" href="pm-dashboard.html">Project Management</a>
                                    <a class="dropdown-item" href="product-dashboard.html">Product</a>
                                    <a class="dropdown-item" href="statistics-dashboard.html">Statistics</a>
                                </div>
                            </div>
                            <ul class="nav flex-column">
                                <li class="nav-item-divider nav-item"></li>
                                <li class="nav-item-btn nav-item d-block text-center">
                                    <a href="#" class="btn-wide btn-shadow btn btn-success btn-sm">Purchase</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a  data-toggle="dropdown" data-offset="10" data-display="static" aria-expanded="false">
                            <i class="nav-icon-big typcn typcn-document"></i>
                            <span>Layouts</span>
                            <i class="nav-icon-pointer icon ion-ios-arrow-down"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-rounded">
                            <div class="dropdown-mega-menu p-0">
                                <div class="grid-menu grid-menu-2col">
                                    <div class="no-gutters row">
                                        <div class="col-sm-8 pl-lg-0 pb-lg-0 pt-lg-0">
                                            <div class="nav flex-column">
                                                <a href="apps-mailbox.html" class="dropdown-item-desc dropdown-item">
                                                    <span>Mailbox</span>
                                                    <p>Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p>
                                                </a>
                                                <div class="divider mt-2 mb-2"></div>
                                                <a href="apps-chat.html" class="dropdown-item-desc dropdown-item">
                                                    <span>Chat</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                                </a>
                                                <div class="divider mt-2 mb-2"></div>
                                                <a href="apps-faq-section.html" class="dropdown-item-desc dropdown-item">
                                                    <span>FAQ Section</span>
                                                    <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat.</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="nav flex-column">
                                                <div class="nav-item-header text-primary nav-item">
                                                    User Pages
                                                </div>
                                                <a class="dropdown-item" href="pages-login.html">
                                                    Login
                                                </a>
                                                <a class="dropdown-item" href="pages-login-boxed.html">
                                                    Login Boxed
                                                </a>
                                                <a class="dropdown-item" href="pages-register.html">
                                                    Register
                                                </a>
                                                <a class="dropdown-item" href="pages-register-boxed.html">
                                                    Register Boxed
                                                </a>
                                                <a class="dropdown-item" href="pages-forgot-password.html">
                                                    Forgot Password
                                                </a>
                                                <a class="dropdown-item" href="pages-forgot-password-boxed.html">
                                                    Forgot Password Boxed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a  data-toggle="dropdown" data-offset="10" data-display="static" aria-expanded="false">
                            <i class="nav-icon-big typcn typcn-lightbulb"></i>
                            <span>Components</span>
                            <i class="nav-icon-pointer icon ion-ios-arrow-down"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-rounded p-0">
                            <div class="dropdown-mega-menu dropdown-mega-menu-sm p-0">
                                <div class="grid-menu grid-menu-3col">
                                    <div class="nav flex-column">
                                        <div class="row no-gutters">
                                            <div class="col-sm-4">
                                                <a href="components-tabs.html" class="dropdown-item">
                                                    Tabs
                                                </a>
                                                <a href="components-accordions.html" class="dropdown-item">
                                                    Accordions
                                                </a>
                                                <a href="components-notifications.html" class="dropdown-item">
                                                    Notifications
                                                </a>
                                                <a href="components-modals.html" class="dropdown-item">
                                                    Modals
                                                </a>
                                                <a href="components-loading-blocks.html" class="dropdown-item">
                                                    Loading Blockers
                                                </a>
                                                <a href="components-progress-bar.html" class="dropdown-item">
                                                    Progress Bar
                                                </a>
                                                <a href="components-tooltips-popovers.html" class="dropdown-item">
                                                    Tooltips &amp; Popovers
                                                </a>
                                                <a href="components-carousel.html" class="dropdown-item">
                                                    Carousel
                                                </a>
                                                <a href="components-calendar.html" class="dropdown-item">
                                                    Calendar
                                                </a>
                                            </div>
                                            <div class="col-sm-4">
                                                <a href="components-pagination.html" class="dropdown-item">
                                                    Pagination
                                                </a>
                                                <a href="components-count-up.html" class="dropdown-item">
                                                    Count Up
                                                </a>
                                                <a href="components-scrollable-elements.html" class="dropdown-item">
                                                    Scrollable
                                                </a>
                                                <a href="components-tree-view.html" class="dropdown-item">
                                                    Tree View
                                                </a>
                                                <a href="components-maps.html" class="dropdown-item">
                                                    Maps
                                                </a>
                                                <a href="components-ratings.html" class="dropdown-item">
                                                    Ratings
                                                </a>
                                                <a href="components-image-crop.html" class="dropdown-item">
                                                    Image Crop
                                                </a>
                                                <a href="components-guided-tours.html" class="dropdown-item">
                                                    Guided Tours
                                                </a>
                                                <a href="elements-utilities.html" class="dropdown-item">
                                                    Utilities
                                                </a>
                                            </div>
                                            <div class="col-sm-4">
                                                <a href="elements-buttons-standard.html" class="dropdown-item ">
                                                    Buttons
                                                </a>
                                                <a href="elements-dropdowns.html" class="dropdown-item">
                                                    Dropdowns
                                                </a>
                                                <a href="elements-icons.html" class="dropdown-item">
                                                    Icons
                                                </a>
                                                <a href="elements-badges-labels.html" class="dropdown-item">
                                                    Badges
                                                </a>
                                                <a href="elements-cards.html" class="dropdown-item">
                                                    Cards
                                                </a>
                                                <a href="elements-loaders.html" class="dropdown-item">
                                                    Loading Indicators
                                                </a>
                                                <a href="elements-list-group.html" class="dropdown-item">
                                                    List Groups
                                                </a>
                                                <a href="elements-navigation.html" class="dropdown-item">
                                                    Navigation Menus
                                                </a>
                                                <a href="elements-timelines.html" class="dropdown-item">
                                                    Timeline
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a  data-toggle="dropdown" data-offset="10" data-display="static" aria-expanded="false">
                            <i class="nav-icon-big typcn typcn-tags"></i>
                            <span>Widgets</span>
                            <i class="nav-icon-pointer icon ion-ios-arrow-down"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                            <div class="dropdown-mega-menu dropdown-mega-menu-sm p-0">
                                <div class="grid-menu grid-menu-3col">
                                    <div class="nav flex-column">
                                        <div class="row no-gutters">
                                            <div class="col-sm-4">
                                                <div class="nav flex-column">
                                                    <div class="nav-item-header text-primary nav-item">
                                                        Boxes
                                                    </div>
                                                    <a href="widgets-chart-boxes.html" class="dropdown-item">
                                                        Chart Boxes 1
                                                    </a>
                                                    <a href="widgets-chart-boxes-2.html" class="dropdown-item">
                                                        Chart Boxes 2
                                                    </a>
                                                    <a href="widgets-chart-boxes-3.html" class="dropdown-item">
                                                        Chart Boxes 3
                                                    </a>
                                                    <a href="widgets-profile-boxes.html" class="dropdown-item">
                                                        Profile Boxes
                                                    </a>
                                                    <div class="divider"></div>
                                                    <div class="nav-item-header text-primary nav-item">
                                                        Tables
                                                    </div>
                                                    <a href="tables-data-tables.html" class="dropdown-item">
                                                        Data Tables
                                                    </a>
                                                    <a href="tables-regular.html" class="dropdown-item">
                                                        Regular Tables
                                                    </a>
                                                    <a href="tables-grid.html" class="dropdown-item">
                                                        Grid Tables
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="nav flex-column">
                                                    <div class="nav-item-header text-primary nav-item">
                                                        Forms
                                                    </div>
                                                    <a href="forms-controls.html" class="dropdown-item">
                                                        Controls
                                                    </a>
                                                    <a href="forms-layouts.html" class="dropdown-item">
                                                        Layouts
                                                    </a>
                                                    <a href="forms-validation.html" class="dropdown-item">
                                                        Validation
                                                    </a>
                                                    <a href="forms-wizard.html" class="dropdown-item">
                                                        Wizard
                                                    </a>
                                                    <div class="divider"></div>
                                                    <a href="forms-datepicker.html" class="dropdown-item">
                                                        Datepicker
                                                    </a>
                                                    <a href="forms-range-slider.html" class="dropdown-item">
                                                        Range Slider
                                                    </a>
                                                    <a href="forms-toggle-switch.html" class="dropdown-item">
                                                        Toggle Switch
                                                    </a>
                                                    <a href="forms-wysiwyg-editor.html" class="dropdown-item">
                                                        WYSIWYG Editor
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="nav flex-column">
                                                    <div class="nav-item-header text-primary nav-item">
                                                        Charts
                                                    </div>
                                                    <a href="charts-chartjs.html" class="dropdown-item">
                                                        ChartJS
                                                    </a>
                                                    <a href="charts-apexcharts.html" class="dropdown-item">
                                                        Apex Charts
                                                    </a>
                                                    <a href="charts-sparklines.html" class="dropdown-item">
                                                        Chart Sparklines
                                                    </a>
                                                    <div class="divider"></div>
                                                    <a href="forms-input-mask.html" class="dropdown-item">
                                                        Input Mask
                                                    </a>
                                                    <a href="forms-clipboard.html" class="dropdown-item">
                                                        Clipboard
                                                    </a>
                                                    <a href="forms-textarea-autosize.html" class="dropdown-item">
                                                        Textarea Autosize
                                                    </a>
                                                    <a href="forms-input-selects.html" class="dropdown-item">
                                                        Input Selects
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>        <div class="app-header-right">
                    <div class="search-wrapper">
                        <i class="search-icon-wrapper typcn typcn-zoom-outline"></i>
                        <input type="text" placeholder="Search...">
                    </div>
                    <div class="header-btn-lg pr-0">
                        <div class="header-dots">
                            <div class="dropdown">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                    <i class="typcn typcn-th-large-outline"></i>
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-vicious-stance">
                                            <div class="menu-header-image opacity-4" style="background-image: url('assets/images/dropdown-header/city5.jpg');"></div>
                                            <div class="menu-header-content text-white">
                                                <h5 class="menu-header-title">Grid Dashboard</h5>
                                                <h6 class="menu-header-subtitle">Easy grid navigation inside dropdowns</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-menu grid-menu-xl grid-menu-3col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                    <i class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                                    Automation
                                                </button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                    <i class="pe-7s-piggy icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                    Reports
                                                </button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                    <i class="pe-7s-config icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                    Settings
                                                </button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                    <i class="pe-7s-browser icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                    Content
                                                </button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                    <i class="pe-7s-hourglass icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                    Activity
                                                </button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                    <i class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                    Contacts
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-center nav-item">
                                            <button class="btn-shadow btn btn-primary btn-sm">Follow-ups</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 btn btn-link">
                                    <i class="typcn typcn-bell"></i>
                                    <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-menu-header mb-0">
                                        <div class="dropdown-menu-header-inner bg-night-sky">
                                            <div class="menu-header-image opacity-5" style="background-image: url('assets/images/dropdown-header/city2.jpg');"></div>
                                            <div class="menu-header-content text-light">
                                                <h5 class="menu-header-title">Notifications</h5>
                                                <h6 class="menu-header-subtitle">You have <b>21</b> unread messages</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                        <li class="nav-item">
                                            <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header">
                                                <span>Messages</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header">
                                                <span>Events</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header">
                                                <span>System</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                            <div class="scroll-area-sm">
                                                <div class="scrollbar-container">
                                                    <div class="p-3">
                                                        <div class="notifications-box">
                                                            <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                                <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Build the production release
                                                                                <span class="badge badge-danger ml-2">NEW</span>
                                                                            </h4>
                                                                            <span class="vertical-timeline-element-date"></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Something not important
                                                                                <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                    <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                        <div class="avatar-icon"><img
                                                                                                src="assets/images/avatars/1.jpg"
                                                                                                alt=""></div>
                                                                                    </div>
                                                                                    <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                        <div class="avatar-icon"><img
                                                                                                src="assets/images/avatars/2.jpg"
                                                                                                alt=""></div>
                                                                                    </div>
                                                                                    <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                        <div class="avatar-icon"><img
                                                                                                src="assets/images/avatars/3.jpg"
                                                                                                alt=""></div>
                                                                                    </div>
                                                                                    <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                        <div class="avatar-icon"><img
                                                                                                src="assets/images/avatars/4.jpg"
                                                                                                alt=""></div>
                                                                                    </div>
                                                                                    <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                        <div class="avatar-icon"><img
                                                                                                src="assets/images/avatars/5.jpg"
                                                                                                alt=""></div>
                                                                                    </div>
                                                                                    <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                        <div class="avatar-icon"><img
                                                                                                src="assets/images/avatars/9.jpg"
                                                                                                alt=""></div>
                                                                                    </div>
                                                                                    <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                        <div class="avatar-icon"><img
                                                                                                src="assets/images/avatars/7.jpg"
                                                                                                alt=""></div>
                                                                                    </div>
                                                                                    <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                        <div class="avatar-icon"><img
                                                                                                src="assets/images/avatars/8.jpg"
                                                                                                alt=""></div>
                                                                                    </div>
                                                                                    <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                        <div class="avatar-icon"><i>+</i></div>
                                                                                    </div>
                                                                                </div>
                                                                            </h4>
                                                                            <span class="vertical-timeline-element-date"></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has an info state</h4><span class="vertical-timeline-element-date"></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Build the production release
                                                                                <span class="badge badge-danger ml-2">NEW</span>
                                                                            </h4>
                                                                            <span class="vertical-timeline-element-date"></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has a dark state</h4><span class="vertical-timeline-element-date"></span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab-events-header" role="tabpanel">
                                            <div class="scroll-area-sm">
                                                <div class="scrollbar-container">
                                                    <div class="p-3">
                                                        <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4>
                                                                        <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p><span class="vertical-timeline-element-date"></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                    <div class="vertical-timeline-element-content bounce-in"><p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                        <p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4>
                                                                        <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p><span
                                                                                class="vertical-timeline-element-date"></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4>
                                                                        <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4>
                                                                        <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p><span class="vertical-timeline-element-date"></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                    <div class="vertical-timeline-element-content bounce-in"><p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                        <p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4>
                                                                        <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p><span
                                                                                class="vertical-timeline-element-date"></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4>
                                                                        <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                                            <div class="scroll-area-sm">
                                                <div class="scrollbar-container">
                                                    <div class="no-results pt-3 pb-0">
                                                        <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                            <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                            <span class="swal2-success-line-tip"></span>
                                                            <span class="swal2-success-line-long"></span>
                                                            <div class="swal2-success-ring"></div>
                                                            <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                            <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                        </div>
                                                        <div class="results-subtitle">All caught up!</div>
                                                        <div class="results-title">There are no system errors!</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-center nav-item">
                                            <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded" src="assets/images/avatars/3.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-info">
                                                    <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city1.jpg');"></div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle"
                                                                         src="assets/images/avatars/3.jpg"
                                                                         alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Minnie Betts
                                                                    </div>
                                                                    <div class="widget-subheading opacity-8">A short profile description
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                    <button class="btn-pill btn-shadow btn-shine btn btn-focus">Logout
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scroll-area-xs" style="height: 150px;">
                                                <div class="scrollbar-container ps">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">Activity
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Chat
                                                                <div class="ml-auto badge badge-pill badge-info">8
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Recover Password
                                                            </a>
                                                        </li>
                                                        <li class="nav-item-header nav-item">My Account
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Settings
                                                                <div class="ml-auto badge badge-success">New
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Messages
                                                                <div class="ml-auto badge badge-warning">512
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Logs
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider mb-0 nav-item"></li>
                                            </ul>
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                            <i class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                            Message Inbox
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                            <i class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                            <b>Support Tickets</b>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item">
                                                </li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-wide btn btn-primary btn-sm">
                                                        Open Messages
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
                <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
                </div>
            </div>
        </div>    <div class="app-main">
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="container fiori-container">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div>
                                        Helpdesk
                                        <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow mr-3 dropdown-toggle btn btn-dark">
                                            <i class="fa fa-star" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"></i>
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Book
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Picture
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span>
                                                            File Disabled
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-shadow btn btn-wide btn-success">
                                            <span class="btn-icon-wrapper pr-1 opacity-7">
                                                <i class="fa fa-plus"></i>
                                            </span>
                                        Add New
                                    </button>
                                
                                </div>        </div>
                        </div>
                    </div>                <div class="app-inner-layout app-inner-layout-page">
                        <div class="app-inner-bar">
                            <div class="container fiori-container">
                                <div class="inner-bar-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link show-menu-btn">
                                                <i class="fa fa-align-left mr-2"></i>
                                                <span class="hide-text-md">Show page menu</span>
                                            </a>
                                            <a href="#" class="nav-link close-menu-btn">
                                                <i class="fa fa-align-right mr-2"></i>
                                                <span class="hide-text-md">Close page menu</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>                            <div class="inner-bar-center">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                                                <span>Overview</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-1">
                                                <span>Audiences</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-2">
                                                <span>Demographics</span>
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link opacity-8">
                                                <span>More</span>
                                                <i class="fa fa-angle-down ml-1 opacity-6"></i>
                                            </a>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-inbox"> </i><span>Menus</span></button>
                                                <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span></button>
                                                <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-book"> </i><span>Actions</span></button>
                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                <div class="p-3 text-right">
                                                    <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                                    <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="inner-bar-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link open-right-drawer">
                                                <span class="hide-text-md">Show right drawer</span>
                                                <i class="fa fa-align-right ml-2"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>                        </div>
                        </div>
                        <div class="app-inner-layout__wrapper">
                            <div class="app-inner-layout__sidebar">
                                <div class="app-layout__sidebar-inner dropdown-menu-rounded">
                                    <div class="nav flex-column">
                                        <div class="nav-item-header text-primary nav-item">
                                            Dashboards Examples
                                        </div>
                                        <a class="dropdown-item" href="analytics-dashboard.html">Analytics</a>
                                        <a class="dropdown-item" href="management-dashboard.html">Management</a>
                                        <a class="dropdown-item" href="advertisement-dashboard.html">Advertisement</a>
                                        <a class="dropdown-item active" href="index.html">Helpdesk</a>
                                        <a class="dropdown-item" href="monitoring-dashboard.html">Monitoring</a>
                                        <a class="dropdown-item" href="crypto-dashboard.html">Cryptocurrency</a>
                                        <a class="dropdown-item" href="pm-dashboard.html">Project Management</a>
                                        <a class="dropdown-item" href="product-dashboard.html">Product</a>
                                        <a class="dropdown-item" href="statistics-dashboard.html">Statistics</a>
                                    </div>                            </div>
                            </div>
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container fiori-container">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 col-xl-7">
                                                <div class="main-card mb-3 card">
                                                    <div class="rm-border card-header">
                                                        <div>
                                                            <h5 class="menu-header-title text-capitalize text-primary">Income Report</h5>
                                                        </div>
                                                        <div class="btn-actions-pane-right text-capitalize">
                                                            <div class="btn-group dropdown">
                                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-wide mr-1 dropdown-toggle btn btn-outline-focus btn-sm">Options</button>
                                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg rm-pointers dropdown-menu dropdown-menu-right">
                                                                    <div class="dropdown-menu-header">
                                                                        <div class="dropdown-menu-header-inner bg-primary">
                                                                            <div class="menu-header-image" style="background-image: url('assets/images/dropdown-header/abstract2.jpg');"></div>
                                                                            <div class="menu-header-content">
                                                                                <div><h5 class="menu-header-title">Settings</h5><h6 class="menu-header-subtitle">Example Dropdown Menu</h6></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="scroll-area-xs">
                                                                        <div class="scrollbar-container">
                                                                            <ul class="nav flex-column">
                                                                                <li class="nav-item-header nav-item">Activity</li>
                                                                                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Chat
                                                                                    <div class="ml-auto badge badge-pill badge-info">8</div>
                                                                                </a></li>
                                                                                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Recover Password</a></li>
                                                                                <li class="nav-item-header nav-item">My Account</li>
                                                                                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Settings
                                                                                    <div class="ml-auto badge badge-success">New</div>
                                                                                </a></li>
                                                                                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Messages
                                                                                    <div class="ml-auto badge badge-warning">512</div>
                                                                                </a></li>
                                                                                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Logs</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-2">
                                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                            <div style="height: 274px;">
                                                                <div id="chart-apex-stacked-commerce"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-top bg-light card-header">
                                                        <div class="actions-icon-btn mx-auto">
                                                            <div>
                                                                <div role="group" class="btn-group-lg btn-group nav">
                                                                    <button type="button" data-toggle="tab" href="#tab-content-income" class="btn-pill pl-3 active btn btn-focus">Income</button>
                                                                    <button type="button" data-toggle="tab" href="#tab-content-expenses" class="btn-pill pr-3  btn btn-focus">Expenses</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active fade show" id="tab-content-income" role="tabpanel">
                                                                <h5 class="menu-header-title">Target Sales</h5>
                                                                <h6 class="menu-header-subtitle opacity-6">Total performance for this month</h6>
                                                                <div class="mt-3 row">
                                                                    <div class="col-sm-12 col-md-6">
                                                                        <div class="card-border mb-sm-3 mb-md-0 border-light no-shadow card">
                                                                            <div class="widget-content">
                                                                                <div class="widget-content-outer">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">Orders</div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="widget-numbers line-height-1 text-primary"><span>366</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-progress-wrapper mt-1">
                                                                                        <div class="progress-bar-xs progress">
                                                                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;"></div>
                                                                                        </div>
                                                                                        <div class="progress-sub-label">
                                                                                            <div class="sub-label-left">Monthly Target</div>
                                                                                            <div class="sub-label-right">100%</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-6">
                                                                        <div class="card-border border-light no-shadow card">
                                                                            <div class="widget-content">
                                                                                <div class="widget-content-outer">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">Income</div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="widget-numbers line-height-1 text-success"><span>$2797</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-progress-wrapper mt-1">
                                                                                        <div class="progress-bar-xs progress-bar-animated progress">
                                                                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                                                                        </div>
                                                                                        <div class="progress-sub-label">
                                                                                            <div class="sub-label-left">Monthly Target</div>
                                                                                            <div class="sub-label-right">100%</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab-content-expenses" role="tabpanel">
                                                                <h5 class="menu-header-title">Tabbed Content</h5>
                                                                <h6 class="menu-header-subtitle opacity-6">Example of various options built with Fiori</h6>
                                                                <div class="mt-3 row">
                                                                    <div class="col-sm-12 col-md-6">
                                                                        <div class="card-hover-shadow-2x mb-sm-3 mb-md-0 widget-chart widget-chart2 bg-premium-dark text-left card">
                                                                            <div class="widget-chart-content text-white">
                                                                                <div class="widget-chart-flex">
                                                                                    <div class="widget-title">Sales</div>
                                                                                    <div class="widget-subtitle opacity-7">Monthly Goals</div>
                                                                                </div>
                                                                                <div class="widget-chart-flex">
                                                                                    <div class="widget-numbers text-success">
                                                                                        <small>$</small>
                                                                                        976
                                                                                        <small class="opacity-8 pl-2">
                                                                                            <i class="fa fa-angle-up"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                    <div class="widget-description ml-auto opacity-7">
                                                                                        <i class="fa fa-angle-up"></i>
                                                                                        <span class="pl-1">175%</span></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-6">
                                                                        <div class="card-hover-shadow-2x widget-chart widget-chart2 bg-premium-dark text-left card">
                                                                            <div class="widget-chart-content text-white">
                                                                                <div class="widget-chart-flex">
                                                                                    <div class="widget-title">Clients</div>
                                                                                    <div class="widget-subtitle text-warning">Returning</div>
                                                                                </div>
                                                                                <div class="widget-chart-flex">
                                                                                    <div class="widget-numbers text-warning">84
                                                                                        <small>%</small>
                                                                                        <small class="opacity-8 pl-2">
                                                                                            <i class="fa fa-angle-down"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                    <div class="widget-description ml-auto text-warning"><span class="pr-1">45</span>
                                                                                        <i class="fa fa-angle-up"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6 col-xl-5">
                                                <div class="main-card mb-3 card">
                                                    <div class="card-body">
                                                        <h6 class="text-muted text-uppercase font-size-md opacity-7 mb-3 font-weight-normal">Highlights</h6>
                                                        <div class="border-light card-border scroll-area-sm card">
                                                            <div class="scrollbar-container">
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="38" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Beck Collier</div>
                                                                                    <div class="widget-subheading mt-1 opacity-10">
                                                                                        <div class="badge badge-pill badge-primary">$152</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="fsize-2 text-success">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        <span>750</span>
                                                                                        <small class="text-success pl-2">
                                                                                            <i class="fa fa-angle-down"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="38" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Angelo Hume</div>
                                                                                    <div class="widget-subheading mt-1 opacity-10">
                                                                                        <div class="badge badge-pill badge-primary">$53</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="fsize-2 text-success">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        <span>542</span>
                                                                                        <small class="text-danger pl-2">
                                                                                            <i class="fa fa-angle-up"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="38" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Saim Melendez</div>
                                                                                    <div class="widget-subheading mt-1 opacity-10">
                                                                                        <div class="badge badge-pill badge-primary">$239</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="fsize-2 text-success">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        <span>874</span>
                                                                                        <small class="text-warning pl-2">
                                                                                            <i class="fa fa-angle-down"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="38" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Primrose Navarro</div>
                                                                                    <div class="widget-subheading mt-1 opacity-10">
                                                                                        <div class="badge badge-pill badge-primary">$21</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="fsize-2 text-success">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        348
                                                                                        <small class="text-muted pl-2">
                                                                                            <i class="fa fa-angle-up"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="38" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Finnlay Barton</div>
                                                                                    <div class="widget-subheading mt-1 opacity-10">
                                                                                        <div class="badge badge-pill badge-primary">$381</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="fsize-2 text-success">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        692
                                                                                        <small class="text-muted pl-2">
                                                                                            <i class="fa fa-angle-up"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="38" class="rounded-circle" src="assets/images/avatars/10.jpg" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Johan Corbett</div>
                                                                                    <div class="widget-subheading mt-1 opacity-10">
                                                                                        <div class="badge badge-pill badge-primary">$74</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="fsize-2 text-success">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        395
                                                                                        <small class="text-muted pl-2">
                                                                                            <i class="fa fa-angle-down"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="border-bottom-0 list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="38" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Kaja Wolfe</div>
                                                                                    <div class="widget-subheading mt-1 opacity-10">
                                                                                        <div class="badge badge-pill badge-primary">$7</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="fsize-2 text-success">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        619
                                                                                        <small class="text-muted pl-2">
                                                                                            <i class="fa fa-angle-down"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main-card mb-3 card">
                                                    <div class="rm-border card-header">
                                                        <div>
                                                            <h6 class="menu-header-title text-capitalize text-primary">Monthly Statistics</h6>
                                                        </div>
                                                    </div>
                                                    <div class="pl-3 pr-3 pb-2 slick-slider-md slick-slider-hover">
                                                        <div class="slick-slider-3">
                                                            <div>
                                                                <div class="widget-chart widget-chart2 text-left p-0">
                                                                    <div class="widget-chat-wrapper-outer">
                                                                        <div class="widget-chart-content">
                                                                            <div class="widget-chart-flex">
                                                                                <div class="widget-numbers">
                                                                                    <div class="widget-chart-flex">
                                                                                        <div>
                                                                                            <small class="opacity-5 text-success">+</small>
                                                                                            76
                                                                                        </div>
                                                                                        <div class="widget-title ml-md-2 opacity-5 font-size-lg text-muted">Revenue Increased this Quarter</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                                            <div id="dashboard-sparkline-carousel-3"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="widget-chart widget-chart2 text-left p-0">
                                                                    <div class="widget-chat-wrapper-outer">
                                                                        <div class="widget-chart-content">
                                                                            <div class="widget-chart-flex">
                                                                                <div class="widget-numbers">
                                                                                    <div class="widget-chart-flex">
                                                                                        <div>
                                                                                            <small class="opacity-5">$</small>
                                                                                            1545
                                                                                        </div>
                                                                                        <div class="widget-title ml-2 opacity-5 font-size-lg text-muted">Total Sales this Month</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                                            <div id="dashboard-sparkline-carousel-2"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="widget-chart widget-chart2 text-left p-0">
                                                                    <div class="widget-chat-wrapper-outer">
                                                                        <div class="widget-chart-content">
                                                                            <div class="widget-chart-flex">
                                                                                <div class="widget-numbers">
                                                                                    <div class="widget-chart-flex">
                                                                                        <div>
                                                                                            <small class="opacity-5">$</small>
                                                                                            <span>626</span>
                                                                                        </div>
                                                                                        <div class="widget-title ml-2 opacity-5 font-size-lg text-muted">Total Expenses Today</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                                            <div id="dashboard-sparkline-carousel-1"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-header">
                                                <div><h5 class="menu-header-title text-capitalize text-primary">Simple Table</h5></div>
                                                <div class="btn-actions-pane-right">
                                                    <div role="group" class="btn-group-sm btn-group">
                                                        <button class="active btn btn-outline-dark">Last Week</button>
                                                        <button class="btn btn-outline-dark">All Month</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">Status</th>
                                                        <th>Name</th>
                                                        <th class="text-center">Progress</th>
                                                        <th class="text-center">Sales</th>
                                                        <th class="text-center">Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-center text-muted">#345</td>
                                                        <td class="text-center">
                                                            <div class="badge badge-pill pl-2 pr-2 badge-warning">Pending</div>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="32" class="rounded" src="assets/images/avatars/1.jpg" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading">John Doe</div>
                                                                        <div class="widget-subheading opacity-7">Web Developer</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="progress-bar-xs progress">
                                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center" style="width: 150px;">
                                                            <div id="dashboard-sparkline-33"></div>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn-icon btn-icon-only btn btn-light btn-sm">
                                                                <i class="icon ion-android-apps"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center text-muted">#347</td>
                                                        <td class="text-center">
                                                            <div class="badge badge-pill pl-2 pr-2 badge-success">Completed</div>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="32" class="rounded" src="assets/images/avatars/2.jpg" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading">Ruben Tillman</div>
                                                                        <div class="widget-subheading opacity-7">Etiam sit amet orci eget</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="progress-bar-xs progress">
                                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center" style="width: 150px;">
                                                            <div id="dashboard-sparkline-22"></div>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn-icon btn-icon-only btn btn-light btn-sm">
                                                                <i class="icon ion-android-apps"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center text-muted">#321</td>
                                                        <td class="text-center">
                                                            <div class="badge badge-pill pl-2 pr-2 badge-danger">In Progress</div>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="32" class="rounded" src="assets/images/avatars/3.jpg" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading">Elliot Huber</div>
                                                                        <div class="widget-subheading opacity-7">Lorem ipsum dolor sic</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="progress-bar-xs progress">
                                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center" style="width: 150px;">
                                                            <div id="dashboard-sparkline-11"></div>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn-icon btn-icon-only btn btn-light btn-sm">
                                                                <i class="icon ion-android-apps"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center text-muted">#55</td>
                                                        <td class="text-center">
                                                            <div class="badge badge-pill pl-2 pr-2 badge-info">On Hold</div>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="32" class="rounded" src="assets/images/avatars/4.jpg" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading">Vinnie Wagstaff</div>
                                                                        <div class="widget-subheading opacity-7">UI Designer</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="progress-bar-xs progress">
                                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="bar-sparkline-2">1,2,4,6,9,4,4,3,1,7,2,4,6,9,4,4,3,1,7,5,9,10</div>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn-icon btn-icon-only btn btn-light btn-sm">
                                                                <i class="icon ion-android-apps"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="d-block clearfix card-footer">
                                                <div class="float-left">
                                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger btn-sm">Delete</button>
                                                </div>
                                                <div class="float-right">
                                                    <button class="btn-wide btn btn-link btn-sm">View All</button>
                                                    <button class="btn-wide btn-shadow btn btn-primary btn-sm">Add New Entry</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6">
                                                <div class="card mb-3 widget-chart bg-arielle-smile card-border">
                                                    <div class="widget-chart-content text-white">
                                                        <div class="icon-wrapper rounded-circle">
                                                            <div class="icon-wrapper-bg bg-white opacity-7"></div>
                                                            <i class="lnr-graduation-hat text-info"></i>
                                                        </div>
                                                        <div class="widget-numbers">63.2k</div>
                                                        <div class="widget-subheading">Bugs Fixed</div>
                                                        <div class="widget-description text-white">
                                                            <i class="fa fa-arrow-right"></i>
                                                            <span class="pl-1">175.5%</span>
                                                        </div>
                                                    </div>
                                                    <div class="widget-chart-wrapper chart-wrapper-relative">
                                                        <div id="dashboard-sparklines-transparent-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6">
                                                <div class="card-shadow-primary card-border mb-3 card">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-primary">
                                                            <div class="menu-header-image opacity-4" style="background-image: url('assets/images/dropdown-header/abstract2.jpg');"></div>
                                                            <div class="menu-header-content">
                                                                <h5 class="menu-header-title text-capitalize mb-0 fsize-3">Top Sellers</h5>
                                                                <h6 class="menu-header-subtitle mb-3">Yet another Example of Card Boxes</h6>
                                                                <div role="group" class="mb-0 btn-group">
                                                                    <button type="button" class="btn-pill pl-3 pr-3  btn btn-warning">John</button>
                                                                    <button type="button" class="pl-3 pr-3  btn btn-warning">Mary</button>
                                                                    <button type="button" class="btn-pill pl-3 pr-3  btn btn-warning">Katie</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="p-0 list-group-item">
                                                            <div class="row">
                                                                <div class="center-elem col-md-6">
                                                                    <div class="center-elem w-100">
                                                                        <canvas id="doughnut-chart-3"></canvas>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="widget-chart">
                                                                        <div class="widget-chart-content">
                                                                            <div class="widget-numbers mt-0 text-danger">
                                                                                <small>$</small>
                                                                                158
                                                                                <small class="opacity-5 pl-2">
                                                                                    <i class="fa fa-angle-up"></i>
                                                                                </small>
                                                                            </div>
                                                                            <div class="widget-subheading">Sales Today</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="divider mt-0 mb-0 mr-2"></div>
                                                                    <div class="widget-chart">
                                                                        <div class="widget-chart-content">
                                                                            <div class="widget-numbers mt-0 text-primary">
                                                                                <small>$</small>
                                                                                346
                                                                                <small class="opacity-5 pl-2">
                                                                                    <i class="fa fa-angle-down"></i>
                                                                                </small>
                                                                            </div>
                                                                            <div class="widget-subheading">Sales this Month</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="p-0 list-group-item">
                                                            <div class="grid-menu grid-menu-2col">
                                                                <div class="no-gutters row">
                                                                    <div class="col-sm-12">
                                                                        <div class="p-1">
                                                                            <button type="button" class="btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                                                <span class="text-uppercase font-weight-bold">Block Button Maybe?</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6">
                                                <div class="card mb-3 widget-chart bg-strong-bliss card-border">
                                                    <div class="widget-chart-content text-white">
                                                        <div class="icon-wrapper rounded">
                                                            <div class="icon-wrapper-bg bg-white opacity-4"></div>
                                                            <i class="lnr-graduation-hat text-white"></i>
                                                        </div>
                                                        <div class="widget-numbers">1.5M</div>
                                                        <div class="widget-subheading">Bugs Fixed</div>
                                                        <div class="widget-description text-white">
                                                            Down by
                                                            <span class="text-white pl-1 pr-1 opacity-8">
                                                <i class="fa fa-angle-down"></i>
                                                <span class="pl-1">54.1%</span>
                                            </span>
                                                            from 30 days ago
                                                        </div>
                                                    </div>
                                                    <div class="widget-chart-wrapper chart-wrapper-relative">
                                                        <div id="dashboard-sparklines-transparent-3"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6">
                                                <div class="card-shadow-primary card-border mb-3 profile-responsive-sm card">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-vicious-stance">
                                                            <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/abstract1.jpg');"></div>
                                                            <div class="menu-header-content btn-pane-right">
                                                                <div class="avatar-icon-wrapper mr-3 avatar-icon-xl btn-hover-shine">
                                                                    <div class="avatar-icon rounded-circle"><img src="assets/images/avatars/1.jpg" alt="Avatar 5"></div>
                                                                </div>
                                                                <div>
                                                                    <h5 class="menu-header-title">Ruben Tillman</h5>
                                                                    <h6 class="menu-header-subtitle">Etiam sit amet orci eget</h6>
                                                                </div>
                                                                <div class="menu-header-btn-pane">
                                                                    <button class="btn btn-success">View Profile</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <div class="widget-content pt-4 pb-4 pr-1 pl-1">
                                                                <div class="text-center">
                                                                    <h5 class="mb-0">
                                                        <span class="pr-1">
                                                            <b class="text-danger">12</b> new leads,
                                                        </span>
                                                                        <span><b class="text-success">$56.24</b> in sales</span>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="p-0 list-group-item">
                                                            <div class="grid-menu grid-menu-2col">
                                                                <div class="no-gutters row">
                                                                    <div class="d-block col-sm-6">
                                                                        <div class="p-1">
                                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                                                                <i class="lnr-lighter text-dark opacity-7 btn-icon-wrapper mb-2"> </i>
                                                                                Automation
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-block col-sm-6">
                                                                        <div class="p-1">
                                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                                                <i class="lnr-construction text-danger opacity-7 btn-icon-wrapper mb-2"> </i>
                                                                                Reports
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-md-none d-lg-block col-sm-6">
                                                                        <div class="p-1">
                                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success">
                                                                                <i class="lnr-bus text-success opacity-7 btn-icon-wrapper mb-2"> </i>
                                                                                Activity
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-md-none d-lg-block col-sm-6">
                                                                        <div class="p-1">
                                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus">
                                                                                <i class="lnr-gift text-focus opacity-7 btn-icon-wrapper mb-2"> </i>
                                                                                Settings
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="container fiori-container">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <div class="footer-dots">
                                        <div class="dropdown">
                                            <a aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dot-btn-wrapper">
                                                <i class="dot-btn-icon typcn typcn-warning-outline text-warning"></i>
                                                <div class="badge badge-dot badge-abs badge-dot-sm badge-danger">Danger</div>
                                            </a>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu">
                                                <div class="dropdown-menu-header mb-0">
                                                    <div class="dropdown-menu-header-inner bg-deep-blue">
                                                        <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                                        <div class="menu-header-content text-dark">
                                                            <h5 class="menu-header-title">Notifications</h5>
                                                            <h6 class="menu-header-subtitle">You have <b>21</b> unread messages</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header1">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header1">
                                                            <span>Events</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header1">
                                                            <span>System</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab-messages-header1" role="tabpanel">
                                                        <div class="scroll-area-sm">
                                                            <div class="scrollbar-container">
                                                                <div class="p-3">
                                                                    <div class="notifications-box">
                                                                        <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                                            <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                    <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                                        <h4 class="timeline-title">Build the production release
                                                                                            <span class="badge badge-danger ml-2">NEW</span>
                                                                                        </h4>
                                                                                        <span class="vertical-timeline-element-date"></span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                                        <h4 class="timeline-title">Something not important
                                                                                            <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                    <div class="avatar-icon"><img
                                                                                                            src="assets/images/avatars/1.jpg"
                                                                                                            alt=""></div>
                                                                                                </div>
                                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                    <div class="avatar-icon"><img
                                                                                                            src="assets/images/avatars/2.jpg"
                                                                                                            alt=""></div>
                                                                                                </div>
                                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                    <div class="avatar-icon"><img
                                                                                                            src="assets/images/avatars/3.jpg"
                                                                                                            alt=""></div>
                                                                                                </div>
                                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                    <div class="avatar-icon"><img
                                                                                                            src="assets/images/avatars/4.jpg"
                                                                                                            alt=""></div>
                                                                                                </div>
                                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                    <div class="avatar-icon"><img
                                                                                                            src="assets/images/avatars/5.jpg"
                                                                                                            alt=""></div>
                                                                                                </div>
                                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                    <div class="avatar-icon"><img
                                                                                                            src="assets/images/avatars/9.jpg"
                                                                                                            alt=""></div>
                                                                                                </div>
                                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                    <div class="avatar-icon"><img
                                                                                                            src="assets/images/avatars/7.jpg"
                                                                                                            alt=""></div>
                                                                                                </div>
                                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                    <div class="avatar-icon"><img
                                                                                                            src="assets/images/avatars/8.jpg"
                                                                                                            alt=""></div>
                                                                                                </div>
                                                                                                <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                                    <div class="avatar-icon"><i>+</i></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </h4>
                                                                                        <span class="vertical-timeline-element-date"></span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has an info state</h4><span class="vertical-timeline-element-date"></span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                    <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                                        <h4 class="timeline-title">Build the production release
                                                                                            <span class="badge badge-danger ml-2">NEW</span>
                                                                                        </h4>
                                                                                        <span class="vertical-timeline-element-date"></span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has a dark state</h4><span class="vertical-timeline-element-date"></span></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab-events-header1" role="tabpanel">
                                                        <div class="scroll-area-sm">
                                                            <div class="scrollbar-container">
                                                                <div class="p-3">
                                                                    <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4>
                                                                                    <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                                    <p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4>
                                                                                    <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p><span
                                                                                            class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4>
                                                                                    <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4>
                                                                                    <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                                    <p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4>
                                                                                    <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p><span
                                                                                            class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4>
                                                                                    <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab-errors-header1" role="tabpanel">
                                                        <div class="scroll-area-sm">
                                                            <div class="scrollbar-container">
                                                                <div class="no-results pt-3 pb-0">
                                                                    <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                        <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                                        <span class="swal2-success-line-tip"></span>
                                                                        <span class="swal2-success-line-long"></span>
                                                                        <div class="swal2-success-ring"></div>
                                                                        <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                                        <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                                    </div>
                                                                    <div class="results-subtitle">All caught up!</div>
                                                                    <div class="results-title">There are no system errors!</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-divider nav-item"></li>
                                                    <li class="nav-item-btn text-center nav-item">
                                                        <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="dots-separator"></div>
                                        <div class="dropdown">
                                            <a class="dot-btn-wrapper dd-chart-btn-2" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">
                                                <i class="dot-btn-icon typcn typcn-chart-bar-outline text-danger"></i>
                                                <div class="badge badge-dot badge-abs badge-dot-sm badge-warning">Warning</div>
                                            </a>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu">
                                                <div class="dropdown-menu-header">
                                                    <div class="dropdown-menu-header-inner bg-premium-dark">
                                                        <div class="menu-header-image" style="background-image: url('assets/images/dropdown-header/abstract4.jpg');"></div>
                                                        <div class="menu-header-content text-white">
                                                            <h5 class="menu-header-title">Users Online
                                                            </h5>
                                                            <h6 class="menu-header-subtitle">Recent Account Activity Overview
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-chart">
                                                    <div class="widget-chart-content">
                                                        <div class="icon-wrapper rounded-circle">
                                                            <div class="icon-wrapper-bg opacity-9 bg-focus">
                                                            </div>
                                                            <i class="lnr-users text-white">
                                                            </i>
                                                        </div>
                                                        <div class="widget-numbers">
                                                            <span>344k</span>
                                                        </div>
                                                        <div class="widget-subheading pt-2">
                                                            Profile views since last login
                                                        </div>
                                                        <div class="widget-description text-danger">
                                                        <span class="pr-1">
                                                            <span>176%</span>
                                                        </span>
                                                            <i class="fa fa-arrow-left"></i>
                                                        </div>
                                                    </div>
                                                    <div class="widget-chart-wrapper">
                                                        <div id="dashboard-sparkline-carousel-4-pop"></div>
                                                    </div>
                                                </div>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-divider mt-0 nav-item">
                                                    </li>
                                                    <li class="nav-item-btn text-center nav-item">
                                                        <button class="btn-shine btn-wide btn-pill btn btn-warning btn-sm">
                                                            <i class="fa fa-cog fa-spin mr-2">
                                                            </i>
                                                            View Details
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                
                                    </div>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="header-megamenu nav">
                                        <li class="nav-item">
                                            <a data-placement="top" rel="popover-focus" data-offset="300" data-toggle="popover-custom" class="nav-link">
                                                Footer Menu
                                                <div class="badge badge-success ml-0 ml-1">
                                                    <small>Old</small>
                                                </div>
                                                <i class="fa fa-angle-up ml-2 opacity-8"></i>
                                            </a>
                                            <div class="rm-max-width rm-pointers">
                                                <div class="d-none popover-custom-content">
                                                    <div class="dropdown-mega-menu dropdown-mega-menu-sm">
                                                        <div class="grid-menu grid-menu-2col">
                                                            <div class="no-gutters row">
                                                                <div class="col-sm-6 col-xl-6">
                                                                    <ul class="nav flex-column">
                                                                        <li class="nav-item-header nav-item">Overview</li>
                                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon lnr-inbox"> </i><span>Contacts</span></a></li>
                                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon lnr-book"> </i><span>Incidents</span>
                                                                            <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                                        </a></li>
                                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon lnr-picture"> </i><span>Companies</span></a></li>
                                                                        <li class="nav-item"><a disabled="" href="javascript:void(0);" class="nav-link disabled"><i class="nav-link-icon lnr-file-empty"> </i><span>Dashboards</span></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-6 col-xl-6">
                                                                    <ul class="nav flex-column">
                                                                        <li class="nav-item-header nav-item">Sales &amp; Marketing</li>
                                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Queues</a></li>
                                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Resource Groups</a></li>
                                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Goal Metrics
                                                                            <div class="ml-auto badge badge-warning">3</div>
                                                                        </a></li>
                                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Campaigns</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        </div>
        </div>
    <div class="ui-theme-settings">
        <button type="button" id="TooltipDemo" class="btn-open-options btn btn-outline-2x btn-outline-focus">
            <i class="fa fa-sync-alt icon-anim-pulse fa-2x"></i>
        </button>
        <div class="theme-settings__inner">
            <div class="scrollbar-container">
                <div class="theme-settings__options-wrapper">
                    <h3 class="themeoptions-heading">Layout Options
                    </h3>
                    <div class="p-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                <div class="switch-animate switch-off">
                                                    <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Fixed Footer
                                            </div>
                                            <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="switch has-switch switch-container-class" data-class="app-fluid-container">
                                                <div class="switch-animate switch-off">
                                                    <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Fluid Containers
                                            </div>
                                            <div class="widget-subheading">Makes the app layout full width instead on container boxed!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="switch has-switch switch-container-class" data-class="body-subnav-pills">
                                                <div class="switch-animate switch-off">
                                                    <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Pills Page Navigation Style
                                            </div>
                                            <div class="widget-subheading">Changes the page sub navigation style to pills!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h3 class="themeoptions-heading">
                        <div>
                            Header Options
                        </div>
                        <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                            Restore Default
                        </button>
                    </h3>
                    <div class="p-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h5 class="pb-2">Choose Color Scheme
                                </h5>
                                <div class="theme-settings-swatches">
                                    <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                                    </div>
                                    <div class="divider">
                                    </div>
                                    <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h3 class="themeoptions-heading">
                        <div>Top Bar Options</div>
                        <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-topBar-cs-class" data-class="bg-plum-plate top-bar-text-light">
                            Restore Default
                        </button>
                    </h3>
                    <div class="p-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h5 class="pb-2">Choose Color Scheme
                                </h5>
                                <div class="theme-settings-swatches">
                                    <div class="swatch-holder bg-primary switch-topBar-cs-class" data-class="bg-primary top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-secondary switch-topBar-cs-class" data-class="bg-secondary top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-success switch-topBar-cs-class" data-class="bg-success top-bar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-info switch-topBar-cs-class" data-class="bg-info top-bar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-warning switch-topBar-cs-class" data-class="bg-warning top-bar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-danger switch-topBar-cs-class" data-class="bg-danger top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-light switch-topBar-cs-class" data-class="bg-light top-bar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-dark switch-topBar-cs-class" data-class="bg-dark top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-focus switch-topBar-cs-class" data-class="bg-focus top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-alternate switch-topBar-cs-class" data-class="bg-alternate top-bar-text-light">
                                    </div>
                                    <div class="divider">
                                    </div>
                                    <div class="swatch-holder bg-vicious-stance switch-topBar-cs-class" data-class="bg-vicious-stance top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-midnight-bloom switch-topBar-cs-class" data-class="bg-midnight-bloom top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-night-sky switch-topBar-cs-class" data-class="bg-night-sky top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-slick-carbon switch-topBar-cs-class" data-class="bg-slick-carbon top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-asteroid switch-topBar-cs-class" data-class="bg-asteroid top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-royal switch-topBar-cs-class" data-class="bg-royal top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-warm-flame switch-topBar-cs-class" data-class="bg-warm-flame top-bar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-night-fade switch-topBar-cs-class" data-class="bg-night-fade top-bar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-sunny-morning switch-topBar-cs-class" data-class="bg-sunny-morning top-bar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-tempting-azure switch-topBar-cs-class" data-class="bg-tempting-azure top-bar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-amy-crisp switch-topBar-cs-class" data-class="bg-amy-crisp top-bar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-heavy-rain switch-topBar-cs-class" data-class="bg-heavy-rain top-bar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-mean-fruit switch-topBar-cs-class" data-class="bg-mean-fruit top-bar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-malibu-beach switch-topBar-cs-class" data-class="bg-malibu-beach top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-deep-blue switch-topBar-cs-class" data-class="bg-deep-blue top-bar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-ripe-malin switch-topBar-cs-class" data-class="bg-ripe-malin top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-arielle-smile switch-topBar-cs-class" data-class="bg-arielle-smile top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-plum-plate switch-topBar-cs-class" data-class="bg-plum-plate top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-happy-fisher switch-topBar-cs-class" data-class="bg-happy-fisher top-bar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-happy-itmeo switch-topBar-cs-class" data-class="bg-happy-itmeo top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-mixed-hopes switch-topBar-cs-class" data-class="bg-mixed-hopes top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-strong-bliss switch-topBar-cs-class" data-class="bg-strong-bliss top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-grow-early switch-topBar-cs-class" data-class="bg-grow-early top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-love-kiss switch-topBar-cs-class" data-class="bg-love-kiss top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-premium-dark switch-topBar-cs-class" data-class="bg-premium-dark top-bar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-happy-green switch-topBar-cs-class" data-class="bg-happy-green top-bar-text-light">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h3 class="themeoptions-heading">
                        <div>Main Content Options</div>
                    </h3>
                    <div class="p-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h5 class="pb-2">Color Schemes
                                </h5>
                                <div class="theme-settings-swatches">
                                    <div role="group" class="mt-2 btn-group">
                                        <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="app-theme-white">
                                            White Theme
                                        </button>
                                        <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="app-theme-gray">
                                            Gray Theme
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
<div class="app-drawer-wrapper">
    <div class="drawer-nav-btn">
        <button type="button" class="hamburger hamburger--elastic is-active">
            <span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
    </div>
    <div class="drawer-content-wrapper">
        <div class="scrollbar-container">
            <h3 class="drawer-heading">Servers Status</h3>
            <div class="drawer-section">
                <div class="row">
                    <div class="col">
                        <div class="progress-box"><h4>Server Load 1</h4>
                            <div class="circle-progress circle-progress-gradient-xl mx-auto">
                                <small></small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress-box"><h4>Server Load 2</h4>
                            <div class="circle-progress circle-progress-success-xl mx-auto">
                                <small></small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress-box"><h4>Server Load 3</h4>
                            <div class="circle-progress circle-progress-danger-xl mx-auto">
                                <small></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="mt-3"><h5 class="text-center card-title">Live Statistics</h5>
                    <div id="sparkline-carousel-3"></div>
                    <div class="row">
                        <div class="col">
                            <div class="widget-chart p-0">
                                <div class="widget-chart-content">
                                    <div class="widget-numbers text-warning fsize-3">43</div>
                                    <div class="widget-subheading pt-1">Packages</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="widget-chart p-0">
                                <div class="widget-chart-content">
                                    <div class="widget-numbers text-danger fsize-3">65</div>
                                    <div class="widget-subheading pt-1">Dropped</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="widget-chart p-0">
                                <div class="widget-chart-content">
                                    <div class="widget-numbers text-success fsize-3">18</div>
                                    <div class="widget-subheading pt-1">Invalid</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="text-center mt-2 d-block">
                        <button class="mr-2 border-0 btn-transition btn btn-outline-danger">Escalate Issue</button>
                        <button class="border-0 btn-transition btn btn-outline-success">Support Center</button>
                    </div>
                </div>
            </div>
            <h3 class="drawer-heading">File Transfers</h3>
            <div class="drawer-section p-0">
                <div class="files-box">
                    <ul class="list-group list-group-flush">
                        <li class="pt-2 pb-2 pr-2 list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left opacity-6 fsize-2 mr-3 text-primary center-elem">
                                        <i class="fa fa-file-alt"></i>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading font-weight-normal">TPSReport.docx</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                            <i class="fa fa-cloud-download-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="pt-2 pb-2 pr-2 list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left opacity-6 fsize-2 mr-3 text-warning center-elem">
                                        <i class="fa fa-file-archive"></i>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading font-weight-normal">Latest_photos.zip</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                            <i class="fa fa-cloud-download-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="pt-2 pb-2 pr-2 list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left opacity-6 fsize-2 mr-3 text-danger center-elem">
                                        <i class="fa fa-file-pdf"></i>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading font-weight-normal">Annual Revenue.pdf</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                            <i class="fa fa-cloud-download-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="pt-2 pb-2 pr-2 list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left opacity-6 fsize-2 mr-3 text-success center-elem">
                                        <i class="fa fa-file-excel"></i>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading font-weight-normal">Analytics_GrowthReport.xls</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                            <i class="fa fa-cloud-download-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <h3 class="drawer-heading">Tasks in Progress</h3>
            <div class="drawer-section p-0">
                <div class="todo-box">
                    <ul class="todo-list-wrapper list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="todo-indicator bg-warning"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox1266" class="custom-control-input">
                                            <label class="custom-control-label" for="exampleCustomCheckbox1266">&nbsp;</label></div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Wash the car
                                            <div class="badge badge-danger ml-2">Rejected</div>
                                        </div>
                                        <div class="widget-subheading"><i>Written by Bob</i></div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="border-0 btn-transition btn btn-outline-success">
                                            <i class="fa fa-check"></i>
                                        </button>
                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="todo-indicator bg-focus"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox1666" class="custom-control-input">
                                            <label class="custom-control-label" for="exampleCustomCheckbox1666">&nbsp;</label></div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Task with hover dropdown menu</div>
                                        <div class="widget-subheading">
                                            <div>By Johnny
                                                <div class="badge badge-pill badge-info ml-2">NEW</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <div class="d-inline-block dropdown">
                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="border-0 btn-transition btn btn-link">
                                                <i class="fa fa-ellipsis-h">
                                                </i>
                                            </button>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="todo-indicator bg-primary"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox4777" class="custom-control-input">
                                            <label class="custom-control-label" for="exampleCustomCheckbox4777">&nbsp;</label></div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">Badge on the right task</div>
                                        <div class="widget-subheading">This task has show on hover actions!</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="border-0 btn-transition btn btn-outline-success">
                                            <i class="fa fa-check">
                                            </i>
                                        </button>
                                    </div>
                                    <div class="widget-content-right ml-3">
                                        <div class="badge badge-pill badge-success">Latest Task</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="todo-indicator bg-info"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox2444" class="custom-control-input">
                                            <label class="custom-control-label" for="exampleCustomCheckbox2444">&nbsp;</label></div>
                                    </div>
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left"><img width="42" class="rounded" src="assets/images/avatars/1.jpg" alt=""/></div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Go grocery shopping</div>
                                        <div class="widget-subheading">A short description ...</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="border-0 btn-transition btn btn-sm btn-outline-success">
                                            <i class="fa fa-check"></i>
                                        </button>
                                        <button class="border-0 btn-transition btn btn-sm btn-outline-danger">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="todo-indicator bg-success"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox3222" class="custom-control-input">
                                            <label class="custom-control-label" for="exampleCustomCheckbox3222">&nbsp;</label></div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">Development Task</div>
                                        <div class="widget-subheading">Finish React ToDo List App</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="badge badge-warning mr-2">69</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <button class="border-0 btn-transition btn btn-outline-success">
                                            <i class="fa fa-check">
                                            </i>
                                        </button>
                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                            <i class="fa fa-trash-alt">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <h3 class="drawer-heading">Urgent Notifications</h3>
            <div class="drawer-section">
                <div class="notifications-box">
                    <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <h4 class="timeline-title">Build the production release
                                        <div class="badge badge-danger ml-2">NEW</div>
                                    </h4>
                                    <span class="vertical-timeline-element-date"></span></div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <h4 class="timeline-title">Something not important
                                        <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/1.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/2.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/3.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/4.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/5.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/6.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/7.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/8.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                <div class="avatar-icon"><i>+</i></div>
                                            </div>
                                        </div>
                                    </h4>
                                    <span class="vertical-timeline-element-date"></span></div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-info vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has an info state</h4><span class="vertical-timeline-element-date"></span></div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon is-hidden"></span>
                                <div class="vertical-timeline-element-content is-hidden"><h4 class="timeline-title">This dot has a dark state</h4><span class="vertical-timeline-element-date"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="./assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script></body>
</html>
