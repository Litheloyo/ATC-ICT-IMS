  <?php
include("connect.php");
include("session.php");
error_reporting(0);

?>


<div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="dash.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span>Transaction</span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="#"><i class="fa fa-plus"></i>New</a></li>
                                <li><a href="#"><i class="fa fa-new"></i>Reservation</a></li>
								<li><a href="#"><i class="fa fa-new"></i>Borrowed</a></li>
                                
								<li><a href="#"><i class="fa fa-return"></i>Returned</a></li>
							</ul>
						</li>
					
                        
                        <li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span>Add</span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="addmember.php"><i class="fa fa-plus"></i>New Borrower</a></li>
                                <li><a href="add_item.php"><i class="fa fa-new"></i>item</a></li>
								<li><a href="addroom.php"><i class="fa fa-new"></i>Room</a></li>
							</ul>
						</li>
                        
                        
                      
                               </div>
            </div>
        </div>
