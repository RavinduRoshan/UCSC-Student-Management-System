<?php
                                //echo "You have logged in as: ";
                                //echo $session->privilege." user"."<br/><br/>";
                                //print_r(User::find_by_id($session->user_id));
                                $arry=User::find_by_id($session->user_id);
                                //echo "Name: ";
                                //echo $arr->name."<br/><br/>";
                                //echo "Staff_id:";
                                //echo $arr->staff_id."<br/><br/>";
                                //echo "email:";
                                //echo $arr->email."<br/>";
                                
?>

<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="padding: 1px 15px" href="staff.php"><img class="img-responsive" src="../../assets//img//backgrounds//ucsc.png" style="padding-top: 0" alt="UCSC_logo" width="200" height="30"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $arry->name; ?> <i class="fa fa-caret-down"></i>
                    </a>
                     <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu" >
                        <li>
                            <a class="active" href="academic.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Students<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="class_lists.php">Class Lists</a>
                                </li>
                                <li>
                                    <a href="show_4th.php">4th Year Students</a>
                                </li>
                            </ul>
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-mortar-board fa-fw"></i> GPAs<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-certificate fa-fw"></i> View GPAs <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="view_gpa.php">Semester GPA</a>
                                        </li>
                                        <li>
                                            <a href="view_orl_gpa.php">2nd Year Final GPA</a>
                                        </li>
                                        <li>
                                            <a href="view_final_gpa.php">3rd Year Final GPA</a>
                                        </li>
                                        <li>
                                            <a href="view_4thyr_gpa.php">4th Year Final GPA</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Profile<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">View Profile</a>
                                </li>
                                <li>
                                    <a href="change_pw_aca.php">Change Password</a>
                                </li>
                            </ul>
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Settings</a>
                        </li>


                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
            


        </nav>