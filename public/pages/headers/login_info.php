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

<link type="text/css" rel="stylesheet" href="style.css">
                    <script type="text/javascript" src="script.js"></script>
<div class="panel panel-info navbar-collapse">
                        <div class="panel-heading">
                            <i class="fa fa-user"></i> Login Info
                        </div>
                        <div class="panel-body" style="padding-left: 1px">
                            
                            <?php
                                global $database;
                                $arry=User::find_by_id($session->user_id);
                                $sql="SELECT image FROM users WHERE `staff_id`='{$arry->staff_id}' ";
                                $result=$database->query($sql);
                                $f_name="";
                                while($fname = mysqli_fetch_array($result,MYSQL_ASSOC)){
                                    $f_name=$fname["image"];
                                }
                                if(!empty($f_name)){
                                $path="../uploads/".$f_name;
                                }else{
                                    $path="../images/user.jpg";
                                }
                            ?>
                            
                            <p><img src="<?php echo $path;?>" style="width:100px;height:100px; margin-left: 40px"></p>
                            <div id="calendar-container" style="height: 200px; text-align: left;">
                            <p class="text-info"><?php
                                echo "<strong>You have logged in as: </strong>";
                                echo $session->privilege." user"."<br/><br/>";
                                //print_r(User::find_by_id($session->user_id));
                                //$arr=User::find_by_id($session->user_id);
                                echo "<strong>Name: </strong>";
                                echo $arry->name."<br/><br/>";
                                echo "<strong>Staff ID: </strong>";
                                echo $arry->staff_id."<br/><br/>";
                                echo "<strong>Email: </strong>";
                                echo $arry->email."<br/>";
                                
                        ?></p>
                            </div>
                        </div>
                
                        <div class="panel-footer">
                            
                        </div>
                    </div>