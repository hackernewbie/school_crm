<!--**********************************
            Sidebar start
 ***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('dashboard') }}" aria-expanded="false">
                    <i class="material-symbols-outlined">home</i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">school</i>
                    <span class="nav-text">Student</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('students.list') }}">Student</a></li>
                    <li><a href="{{ route('student.show', 1) }}">Student Detail</a></li>
                    <li><a href="{{ route('student.create') }}">Add New Student</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">person</i>
                    <span class="nav-text">Teacher</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="teacher.html">Teacher</a></li>
                    <li><a href="teacher-detail.html">Teacher Detail</a></li>
                    <li><a href="add-teacher.html">Add New Teacher</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons"> person_outline </i>
                    <span class="nav-text">Profile</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./app-profile.html">Profile</a></li>
                    <li><a href="./edit-profile.html">Edit Profile</a></li>
                    <li><a href="./post-details.html">Post Details</a></li>
                    <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="./email-compose.html">Compose</a></li>
                            <li><a href="./email-inbox.html">Inbox</a></li>
                            <li><a href="./email-read.html">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="./app-calender.html">Calendar</a></li>
                    <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Shop</a>
                        <ul aria-expanded="false">
                            <li><a href="./ecom-product-grid.html">Product Grid</a></li>
                            <li><a href="./ecom-product-list.html">Product List</a></li>
                            <li><a href="./ecom-product-detail.html">Product Details</a></li>
                            <li><a href="./ecom-product-order.html">Order</a></li>
                            <li><a href="./ecom-checkout.html">Checkout</a></li>
                            <li><a href="./ecom-invoice.html">Invoice</a></li>
                            <li><a href="./ecom-customers.html">Customers</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons"> money </i>
                    <span class="nav-text">Fees</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./chart-flot.html">Flot</a></li>
                    <li><a href="./chart-morris.html">Morris</a></li>
                    <li><a href="./chart-chartjs.html">Chartjs</a></li>
                    <li><a href="./chart-chartist.html">Chartist</a></li>
                    <li><a href="./chart-sparkline.html">Sparkline</a></li>
                    <li><a href="./chart-peity.html">Peity</a></li>
                </ul>
            </li>
        </ul>
        <div class="copyright">
            <p><strong>School Admission Dashboard</strong></p>
            <p class="fs-12">Made with <span class="heart"></span> in India</p>
        </div>
    </div>
</div>
<!--**********************************
            Sidebar end
***********************************-->
