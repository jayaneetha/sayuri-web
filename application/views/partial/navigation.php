<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->

					<a href="<?php echo base_url('index.php'); ?>/my_profile">
                        <img src="<?php echo base_url('assests/') ?>/img/avatars/sunny.png" alt="me" class="online"/>
						<span>
							john.doe
						</span>
                    </a>

				</span>
    </div>

    <nav>
        <ul>
            <li>
                <a href="<?php echo base_url('index.php'); ?>/" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span
                        class="menu-item-parent">Dashboard</span></a>
            </li>
            <li>
                <a href="<?php echo base_url('index.php'); ?>/autism_centers" title="Autism Centers"><i class="fa fa-lg fa-fw fa-building"></i> <span
                        class="menu-item-parent">Autism Centers</span></a>
            </li>
            <li>
                <a href="<?php echo base_url('index.php'); ?>/inbox" title="Inbox"><i class="fa fa-lg fa-fw fa-inbox"></i> <span
                        class="menu-item-parent">Inbox</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span
                        class="menu-item-parent">Other</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url('index.php'); ?>/login">Login</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php'); ?>/my_profile">Profile</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span
                        class="menu-item-parent">Parent</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url('index.php'); ?>/parent_view_performance">View Performance</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php'); ?>/parent_manage_consultants">Manage Consultants</a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span
                        class="menu-item-parent">Consultant</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url('index.php'); ?>/consultant_dashboard">Consultant Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php'); ?>/consultant_manage_peers">Peers</a>
                    </li>
                    
                </ul>
            </li>
            
        </ul>
    </nav>
    <span class="minifyme"> <i class="fa fa-arrow-circle-left hit"></i> </span>

</aside>