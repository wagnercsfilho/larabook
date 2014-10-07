<aside class="social-sidebar sidebar-full">
<!-- BEGIN USER SETTINGS -->
<div class="user-settings">
    <div class="arrow"></div>
    <h3 class="user-settings-title">Settings shortcuts</h3>
    <div class="user-settings-content">
        <a href="basic-user-profile.html">
            <div class="icon">
                <i class="icon-user"></i>
            </div>
            <div class="title">My Profile</div>
            <div class="content">View your profile</div>
        </a>
        <a href="chat-inbox.html">
            <div class="icon">
                <i class="icon-envelope"></i>
            </div>
            <div class="title">View Messages</div>
            <div class="content">You have <strong>17</strong> new messages</div>
        </a>
        <a href="#view-pending-tasks">
            <div class="icon">
                <i class="icon-tasks"></i>
            </div>

            <div class="title">View Tasks</div>
            <div class="content">You have <strong>8</strong> pending tasks</div>
        </a>
    </div>
    <div class="user-settings-footer">
        <a href="#more-settings">See more settings</a>
    </div>
</div>
<!-- END USER SETTINGS -->
<!-- BEGIN SIDEBAR CONTENT -->
<div class="social-sidebar-content">
<div class="scrollable">
<!-- BEGIN USER INFO SECTION -->
<div class="user">
    <img class="avatar" src="{{ $currentUser->present()->avatarFb() }}" alt="{{ $currentUser->username }}">
    <span>{{ $currentUser->username }}</span>
    <i class="icon-user trigger-user-settings"></i>
</div>
<!-- END USER INFO SECTION -->
<!-- BEGIN NAVIGATION CONTROLS -->
<div class="navigation-sidebar">
    <i class="switch-sidebar-icon icon-align-justify"></i>
</div>
<!-- END NAVIGATION CONTROLS -->
<!-- BEGIN SEARCH SIDEBAR FORM -->
<div class="search-sidebar">
    <img src="/assets/img/icons/stuttgart-icon-pack/32x32/search.png" alt="Search">


    <form class="search-sidebar-form">
        <input type="text" class="search-query input-block-level" placeholder="Search">
    </form>
</div>
<!-- END SEARCH SIDEBAR FORM -->
<!-- BEGIN MENU SECTION -->
<section class="menu">
<!-- BEGIN ACCORDION SECTION -->
<div class="accordion" id="accordion2">

<!-- BEGIN MULTI LEVEL ACCORDION GROUP -->
<!-- END MULTI LEVEL ACCORDION GROUP -->


<!-- BEGIN ACCORDION GROUP -->
<div class="accordion-group ">
    <!-- BEGIN ACCORDION HEADING -->
    <div class="accordion-heading">
        <a class="accordion-toggle " href="../dashboard.html">

            <img src="/assets/img/icons/stuttgart-icon-pack/32x32/home.png" alt="Dashboard">


            <span>Dashboard </span><span class="badge">9</span>
        </a>
    </div>
    <!-- END ACCORDION HEADING -->
</div>
<!-- END ACCORDION GROUP -->

<!-- BEGIN MULTI LEVEL ACCORDION GROUP -->
<div class="accordion-group">
    <!-- BEGIN ACCORDION HEADING -->
    <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse-multi-level">
            <i class="icon-sitemap icon-2"></i>
            <span>Multi Level </span><span class="arrow"></span>
        </a>
    </div>
    <!-- END ACCORDION HEADING -->
    <!-- BEGIN MENU LIST ITEMS -->
    <!-- You need to add the class .sub-menu whe you want more than 2 levels -->
    <ul id="collapse-multi-level" class="accordion-body nav nav-list collapse sub-menu">
        <li>
            <!-- Those sub-multi-level trigers must have the
                  property data-toggle="sub-menu-collapse"
                  and the property data-target with a selector
                  the refers the element that this collapses
            -->
            <a href="#" data-toggle="sub-menu-collapse" data-target="#collapse-2-level">
                <span>4-Level</span>
                <span class="arrow"></span>
            </a>
        </li>
        <!-- BEGIN 3-LEVEL -->
        <!-- The class .collapse is important -->
        <ul id="collapse-2-level" class="nav nav-list collapse">
            <li>
                <!-- Those sub-multi-level trigers must have the
                    property data-toggle="sub-menu-collapse" and
                    the property data-target with a selector the
                    refers the element that this collapses
                -->
                <a href="#" data-toggle="sub-menu-collapse" data-target="#collapse-3-level">
                    <span>Sub Element 1</span>
                    <span class="arrow"></span>
                </a>
            </li>
            <!-- BEGIN 4-LEVEL -->
            <!-- The class .collapse is important -->
            <ul id="collapse-3-level" class="nav nav-list collapse">
                <li><a href="#">Element 1</a></li>
                <li><a href="#">Element 2</a></li>
                <li><a href="#">Element 3</a></li>
            </ul>
            <!-- END 4-LEVEL -->
            <li><a href="#">Sub Element 2</a></li>
            <li><a href="#">Sub Element 3</a></li>
            <li><a href="#">Sub Element 4</a></li>
        </ul>
        <!-- END 3-LEVEL -->
        <li>
            <!-- Those sub-multi-level trigers must have the
                property data-toggle="sub-menu-collapse" and
                the property data-target with a selector the
                refers the element that this collapses
            -->
            <a href="#" data-toggle="sub-menu-collapse" data-target="#collapse-2-level2">
                <span>3-Level</span>
                <span class="arrow"></span>
            </a>
        </li>
        <!-- BEGIN 3-LEVEL -->
        <!-- The class .collapse is important -->
        <ul id="collapse-2-level2" class="nav nav-list collapse">
            <li>
                <a href="#">
                    <span>Sub Element 1</span>
                </a>
            </li>
            <li><a href="#">Sub Element 2</a></li>
        </ul>
        <!-- END 3-LEVEL -->
        <li><a href="#">2-Level</a></li>
    </ul>
    <!-- END MENU LIST ITEMS -->
</div>
<!-- END MULTI LEVEL ACCORDION GROUP -->


<!-- BEGIN ACCORDION GROUP -->
<div class="accordion-group ">
    <!-- BEGIN ACCORDION HEADING -->
    <div class="accordion-heading">
        <a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion2" href="#collapse-ui-elements">

            <img src="/assets/img/icons/stuttgart-icon-pack/32x32/database.png" alt="UI Elements">


            <span>UI Elements </span><span class="arrow"></span>
        </a>
    </div>
    <!-- END ACCORDION HEADING -->
    <!-- BEGIN MENU LIST ITEMS -->
    <ul id="collapse-ui-elements" class="accordion-body nav nav-list collapse ">
        <li><a href="../ui-elements/general.html">General</a></li>
        <li><a href="../ui-elements/jquery-ui.html">jQuery UI</a></li>
        <li><a href="../ui-elements/buttons.html">Buttons</a></li>
        <li><a href="../ui-elements/social-boxes.html">Social Boxes</a></li>
        <li><a href="../ui-elements/extra-plugins.html">Extra Plugins</a></li>
        <li><a href="../ui-elements/tabs-accordions.html">Tabs &amp; Accordions</a></li>
        <li><a href="../ui-elements/typography.html">Typography</a></li>
    </ul>
    <!-- END MENU LIST ITEMS -->
</div>
<!-- END ACCORDION GROUP -->

<!-- BEGIN MULTI LEVEL ACCORDION GROUP -->
<!-- END MULTI LEVEL ACCORDION GROUP -->


<!-- BEGIN ACCORDION GROUP -->
<div class="accordion-group ">
    <!-- BEGIN ACCORDION HEADING -->
    <div class="accordion-heading">
        <a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion2" href="#collapse-form-stuff">

            <img src="/assets/img/icons/stuttgart-icon-pack/32x32/sitemap.png" alt="Form Stuff">


            <span>Form Stuff </span><span class="arrow"></span>
        </a>
    </div>
    <!-- END ACCORDION HEADING -->
    <!-- BEGIN MENU LIST ITEMS -->
    <ul id="collapse-form-stuff" class="accordion-body nav nav-list collapse ">
        <li><a href="../form-stuff/elements.html">Form elements</a></li>
        <li><a href="../form-stuff/validation.html">Form validation</a></li>
        <li><a href="../form-stuff/wizards.html">Wizards</a></li>
        <li><a href="../form-stuff/wysiwyg.html">WYSIWYG</a></li>
    </ul>
    <!-- END MENU LIST ITEMS -->
</div>
<!-- END ACCORDION GROUP -->

<!-- BEGIN MULTI LEVEL ACCORDION GROUP -->
<!-- END MULTI LEVEL ACCORDION GROUP -->


<!-- BEGIN ACCORDION GROUP -->
<div class="accordion-group ">
    <!-- BEGIN ACCORDION HEADING -->
    <div class="accordion-heading">
        <a class="accordion-toggle " href="../charts.html">

            <img src="/assets/img/icons/stuttgart-icon-pack/32x32/statistics.png" alt="Charts">


            <span>Charts </span><span class="badge">6</span>
        </a>
    </div>
    <!-- END ACCORDION HEADING -->
</div>
<!-- END ACCORDION GROUP -->

<!-- BEGIN MULTI LEVEL ACCORDION GROUP -->
<!-- END MULTI LEVEL ACCORDION GROUP -->


<!-- BEGIN ACCORDION GROUP -->
<div class="accordion-group  hidden-desktop">
    <!-- BEGIN ACCORDION HEADING -->
    <div class="accordion-heading">
        <a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion2" href="#collapse-layouts">

            <img src="/assets/img/icons/stuttgart-icon-pack/32x32/archives.png" alt="Layouts">


            <span>Layouts </span><span class="arrow"></span>
        </a>
    </div>
    <!-- END ACCORDION HEADING -->
    <!-- BEGIN MENU LIST ITEMS -->
    <ul id="collapse-layouts" class="accordion-body nav nav-list collapse ">
        <li><a href="../layouts/blank-page.html">Blank Page</a></li>
        <li><a href="../layouts/full-width-page.html">Full Width Page</a></li>
        <li><a href="../layouts/font-icon-sidebar.html">Font Icon Sidebar</a></li>
        <li><a href="../layouts/expanded-sidebar.html">Expanded Sidebar</a></li>
        <li><a href="../layouts/sticky-footer.html">Sticky footer</a></li>
        <li><a href="../layouts/auto-hide-sidebar.html">Auto-Hide Sidebar</a></li>
    </ul>
    <!-- END MENU LIST ITEMS -->
</div>
<!-- END ACCORDION GROUP -->

<!-- BEGIN MULTI LEVEL ACCORDION GROUP -->
<!-- END MULTI LEVEL ACCORDION GROUP -->


<!-- BEGIN ACCORDION GROUP -->
<div class="accordion-group active hidden-desktop">
    <!-- BEGIN ACCORDION HEADING -->
    <div class="accordion-heading">
        <a class="accordion-toggle opened" data-toggle="collapse" data-parent="#accordion2" href="#collapse-pages">

            <img src="/assets/img/icons/stuttgart-icon-pack/32x32/star.png" alt="Pages">


            <span>Pages </span><span class="arrow"></span>
        </a>
    </div>
    <!-- END ACCORDION HEADING -->
    <!-- BEGIN MENU LIST ITEMS -->
    <ul id="collapse-pages" class="accordion-body nav nav-list collapse in">
        <li class="active"><a href="facebook-timeline.html">Facebook Timeline</a></li>
        <li><a href="historical-timeline.html">Historical Timeline</a></li>
        <li><a href="basic-user-profile.html">Basic User Profile</a></li>
        <li><a href="chat-inbox.html">Chat Inbox</a></li>
        <li><a href="pricing-tables.html">Pricing Tables</a></li>
        <li><a href="email-templates.html">Email Templates</a></li>
        <li><a href="email-inbox.html">Email Inbox</a></li>
        <li><a href="email-inbox-preview-pane.html">Email Inbox with Preview Pane</a></li>
        <li><a href="search-results.html">Search Results</a></li>
        <li><a href="blog-category.html">Blog Category</a></li>
        <li><a href="blog-page.html">Blog Page</a></li>
        <li><a href="contact-us.html">Contact Us</a></li>
        <li><a href="404-page.html">404 Page</a></li>
        <li><a href="500-page.html">500 Page</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="features-page.html">Features Page</a></li>
        <li><a href="shop-category.html">Shop Category</a></li>
        <li><a href="shop-index.html">Shop Index</a></li>
    </ul>
    <!-- END MENU LIST ITEMS -->
</div>
<!-- END ACCORDION GROUP -->

<!-- BEGIN MULTI LEVEL ACCORDION GROUP -->
<!-- END MULTI LEVEL ACCORDION GROUP -->


<!-- BEGIN ACCORDION GROUP -->
<div class="accordion-group ">
    <!-- BEGIN ACCORDION HEADING -->
    <div class="accordion-heading">
        <a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion2" href="#collapse-tables">

            <img src="/assets/img/icons/stuttgart-icon-pack/32x32/invoice.png" alt="Tables">


            <span>Tables </span><span class="arrow"></span>
        </a>
    </div>
    <!-- END ACCORDION HEADING -->
    <!-- BEGIN MENU LIST ITEMS -->
    <ul id="collapse-tables" class="accordion-body nav nav-list collapse ">
        <li><a href="../tables/basic.html">Basic tables</a></li>
        <li><a href="../tables/dynamic.html">Dynamic tables</a></li>
        <li><a href="../tables/responsive.html">Responsive Tables</a></li>
        <li><a href="../tables/jquery.html">jQuery Style</a></li>
    </ul>
    <!-- END MENU LIST ITEMS -->
</div>
<!-- END ACCORDION GROUP -->

<!-- BEGIN MULTI LEVEL ACCORDION GROUP -->
<!-- END MULTI LEVEL ACCORDION GROUP -->


<!-- BEGIN ACCORDION GROUP -->
<div class="accordion-group ">
    <!-- BEGIN ACCORDION HEADING -->
    <div class="accordion-heading">
        <a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion2" href="#collapse-files-media">

            <img src="/assets/img/icons/stuttgart-icon-pack/32x32/photography.png" alt="Files &amp; Media">


            <span>Files &amp; Media </span><span class="arrow"></span>
        </a>
    </div>
    <!-- END ACCORDION HEADING -->
    <!-- BEGIN MENU LIST ITEMS -->
    <ul id="collapse-files-media" class="accordion-body nav nav-list collapse ">
        <li><a href="../files-media/gallery.html">Gallery</a></li>
        <li><a href="../files-media/file-uploaders.html">File Uploaders</a></li>
    </ul>
    <!-- END MENU LIST ITEMS -->
</div>
<!-- END ACCORDION GROUP -->

<!-- BEGIN MULTI LEVEL ACCORDION GROUP -->
<!-- END MULTI LEVEL ACCORDION GROUP -->


<!-- BEGIN ACCORDION GROUP -->
<div class="accordion-group ">
    <!-- BEGIN ACCORDION HEADING -->
    <div class="accordion-heading">
        <a class="accordion-toggle " href="../calendar.html">

            <img src="/assets/img/icons/stuttgart-icon-pack/32x32/calendar.png" alt="Calendar">


            <span>Calendar </span><span class="badge">1</span>
        </a>
    </div>
    <!-- END ACCORDION HEADING -->
</div>
<!-- END ACCORDION GROUP -->

<!-- BEGIN MULTI LEVEL ACCORDION GROUP -->
<!-- END MULTI LEVEL ACCORDION GROUP -->


<!-- BEGIN ACCORDION GROUP -->
<div class="accordion-group ">
    <!-- BEGIN ACCORDION HEADING -->
    <div class="accordion-heading">
        <a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion2" href="#collapse-maps">

            <img src="/assets/img/icons/stuttgart-icon-pack/32x32/world.png" alt="Maps">


            <span>Maps </span><span class="arrow"></span>
        </a>
    </div>
    <!-- END ACCORDION HEADING -->
    <!-- BEGIN MENU LIST ITEMS -->
    <ul id="collapse-maps" class="accordion-body nav nav-list collapse ">
        <li><a href="../maps/vector.html">Vector Maps</a></li>
        <li><a href="../maps/google.html">Google Maps</a></li>
    </ul>
    <!-- END MENU LIST ITEMS -->
</div>
<!-- END ACCORDION GROUP -->
</div>
<!-- END ACCORDION SECTION -->
</section>
<!-- END MENU SECTION -->

</div>
<!-- BEGIN CHAT USERS LIST -->
<div class="chat-users">
    <div class="no-user">User not found</div>
    <ul class="user-list">
        <li>
            <a data-firstname="Cesar" data-lastname="Mendoza" data-status="online" data-userid="1" href="#">
                <img src="/assets/img/people-face/user2_22.jpg" alt="">
                <span>Cesar Mendoza</span>
                <i class="icon-circle user-status online"></i>
            </a>
        </li>
        <li>
            <a data-firstname="Yadra" data-lastname="Abels" data-status="offline" data-userid="2" href="#">
                <img src="/assets/img/people-face/user1_22.jpg" alt="">
                <span>Yadra Abels</span>
                <i class="icon-circle user-status offline"></i>
            </a>
        </li>
        <li>
            <a data-firstname="Tobei" data-lastname="Tsumura" data-status="online" data-userid="3" href="#">
                <img src="/assets/img/people-face/user4_22.jpg" alt="">
                <span>Tobei Tsumura</span>
                <i class="icon-circle user-status online"></i>
            </a>
        </li>
        <li>
            <a data-firstname="John" data-lastname="Doe" data-status="offline" data-userid="4" href="#">
                <img src="/assets/img/people-face/user3_22.jpg" alt="">
                <span>John Doe</span>
                <i class="icon-circle user-status offline"></i>
            </a>
        </li>
    </ul>


    <form class="user-filter">
        <div class="input-prepend open">
            <div class="btn-group dropup">
                <button class="btn dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-cog"></i>
                </button>
                <ul class="dropdown-menu pull-left">
                    <li><a href="#">Chat Sounds</a></li>
                    <li><a href="#">Advanced Settings...</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Turn Off Chat</a></li>
                </ul>
            </div>
            <input type="text" class="input-filter" placeholder="Search user...">
        </div>
    </form>
</div>
<!-- END CHAT USERS LIST -->
</div>
<!-- END SIDEBAR CONTENT -->
</aside>