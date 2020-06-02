<?php
include_once("./DBConnection.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title> Users </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/team.css" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mallanna" rel="stylesheet">
</head>

<body>
	<!--Header-->
    <div class="top-bar_sub_w3layouts_agile">
		<h6>JQUERY DEMO </h6>
		<div class="clearfix"> </div>
	</div>
    <!--//inner_banner-->

    <!--Modal Success-->
    <div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <div class="login-m_page">
							<h3 class="sign">Update successful</h3>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
                <div class="modal-footer">
                    <a class="btn sign" data-dismiss="modal">&nbsp;&nbsp;CLOSE&nbsp;&nbsp;</a>
                </div>
    		</div>
		</div>
	</div>
    <!--Modal Success-->
    <!--Modal Fail-->
    <div class="modal fade" id="modalFail" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <div class="login-m_page">
							<h3 class="sign">Update failed</h3>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
                <div class="modal-footer">
                    <a class="btn sign" data-dismiss="modal">&nbsp;&nbsp;CLOSE&nbsp;&nbsp;</a>
                </div>
    		</div>
		</div>
	</div>
    <!--Modal Fail-->
    <!--Modal Add User -->
    <div class="modal fade" id="modalAddUser" tabindex="-1" role="dialog">
    		<div class="modal-dialog">
    			<!-- Modal content-->
    			<div class="modal-content">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="signin-form profile">
                            <div class="login-m_page">
    							<h3 class="sign"> Add User </h3>
    						</div>
    						<div class="clearfix"></div>
    					</div>
                        <div class="modal-body">
                        <div class="register-form" style="width:100%">
    						<div class="fields-grid">
    							<div class="styled-input">
                                    <label for="nvUsername">Username</label>
    								<input type="text" id="nvUsername">
    							</div>
                                <div class="styled-input">
                                    <label for="nvPassword">Password</label>
    								<input type="text" id="nvPassword">
    							</div>

    							<div class="clearfix"> </div>
    						</div>
    						<!--<input class="btn" type="submit" name="submit" value="Save">-->
    				</div>
                    </div>
    				</div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"> CANCEL </button>
                        <a class="btn sign" type="button" onclick="addUser()"> SAVE </a>
                    </div>
        		</div>
    		</div>
    	</div>
        <!--Modal Add -->
        <!--Modal Update -->
        <div class="modal fade" id="modalUpdateUser" tabindex="-1" role="dialog">
    		<div class="modal-dialog">
    			<!-- Modal content-->
    			<div class="modal-content">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="signin-form profile">
                            <div class="login-m_page">
    							<h3 class="sign"> Update User </h3>
    						</div>
    						<div class="clearfix"></div>
    					</div>
                        <div class="modal-body">
                            <div class="register-form" style="width:100%">
    						    <div class="fields-grid">
    							    <div class="styled-input agile-styled-input-top">
                                        <input  id="id_update" hidden="true">
    							    </div>
    							    <div class="styled-input">
                                        <label for="nvUsername_update">Username</label>
    								    <input type="text" id="nvUsername_update">
    							    </div>
                                    <div class="styled-input">
                                        <label for="nvPassword_update">Password</label>
    								    <input type="text" id="nvPassword_update">
    							    </div>
                                    <div class="clearfix"> </div>
    						    </div>
    				        </div>
                        </div>
    				</div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"> CANCEL </button>
                        <a class="btn sign" type="button" onclick="updateUser()"> SAVE </a>
                    </div>
        		</div>
    		</div>
    	</div>
    <!--Modal Update -->

    <!--inner content -->
	<div class="banner_bottom">
		<div class="banner_bottom_in_downloads">
			<h3 class="headerw3"> Users </h3>
            <div class="inner_sec_w3_agileinfo">
              <a class="btn sign" type="button" href="#" data-toggle="modal" data-target="#modalAddUser"> Add </a>
              <div class="users_div data_table_div">

               </div>
            </div>
        </div>
	</div>
    <!--inner content-->

    <!-- Jquery JS file -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Custom JS file -->
    <script src="js/users.js"></script>
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

</body>
</html>