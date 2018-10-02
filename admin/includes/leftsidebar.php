<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../images/users/<?php echo $_SESSION['photo']; ?>" width="50" height="50" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name']; ?></div>
                    <div class="email"><?php echo $_SESSION['email']; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="user_details.php?id=<?php echo $_SESSION['id']; ?>"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="manage_client.php"><i class="material-icons">group</i>Clients</a></li>
                            <li><a href="transaction.php"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="admin_logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">local_atm</i>
                            <span>Buy & Sell</span>
                        </a>
                        <ul class="ml-menu">
                            <li>

                                <a href="transaction.php"><i class="material-icons">monetization_on</i><span>Transactions</span></a>
                            </li>
                            <li>
                                <a href="accounts.php"><i class="material-icons">attach_money</i><span>Accounts</span></a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">flight</i>
                            <span>Bookings</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="manage_booking.php">
                                    <i class="material-icons">accessible</i>
                                    <span>Manage Bookings</span>
                                </a>
                            </li>
                            <li>
                                <a href="create_booking.php">
                                    <i class="material-icons">commute</i>
                                    <span>Create Booking</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">event</i>
                            <span>Packages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="create_package.php">
                                    <i class="material-icons">cached</i>
                                    <span>Create Package</span>
                                </a>
                            </li>
                            <li>
                                <a href="manage_package.php">
                                    <i class="material-icons">build</i>
                                    <span>Manage Package</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">contact_support</i>
                            <span>Enquery & Issues</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="manage_issues.php">
                                    <i class="material-icons">help</i>
                                    <span>Manage Issues</span>
                                </a>
                            </li>
                            <li>
                                <a href="manage_enquery.php">
                                    <i class="material-icons">help_outline</i>
                                    <span>Manage Enquery</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">web</i>
                            <span>Manage Blog</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="manage_posts.php">
                                    <i class="material-icons">insert_photo</i>
                                    <span>Manage Posts</span>
                                </a>
                            </li>
                            <li>
                                <a href="manage_category.php">
                                    <i class="material-icons">text_fields</i>
                                    <span>Manage Category</span>
                                </a>
                            </li>
                            <li>
                                <a href="manage_comments.php">
                                    <i class="material-icons">border_color</i>
                                    <span>Manage Comments</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">supervisor_account</i>
                            <span>Users</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="create_user.php">
                                    <i class="material-icons">person_add</i>
                                    <span>Create User</span>
                                </a>
                            </li>
                            <li>
                                <a href="manage_user.php">
                                    <i class="material-icons">person_pin</i>
                                    <span>Manage User</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">face</i>
                            <span>Clients</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="create_client.php">
                                    <i class="material-icons">assignment_ind</i>
                                    <span>Create client</span>
                                </a>
                            </li>
                            <li>
                                <a href="manage_client.php">
                                    <i class="material-icons">contacts</i>
                                    <span>Manage client</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                  
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                     <a href="javascript:void(0);">Admin Panel - Trip.com</a>.
                </div>
                <div class="version">
                    <b>&copy; All rights reserved </b>
                </div>
            </div>
            <!-- #Footer -->
        </aside>