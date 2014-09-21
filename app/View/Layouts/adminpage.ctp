<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('adminpage/bootstrap');
		echo $this->Html->css('adminpage/font-awesome');
		echo $this->Html->css('adminpage/font-awesome.min');
		echo $this->Html->css('adminpage/main-style');
		echo $this->Html->css('adminpage/morris-0.4.3.min');
		echo $this->Html->css('adminpage/pace-theme-big-counter');
		echo $this->Html->css('adminpage/style');
		
		
		echo $this->Html->script('adminpage/bootstrap.min');
		echo $this->Html->script('adminpage/dashboard-demo');
		echo $this->Html->script('adminpage/jquery.metisMenu');
		echo $this->Html->script('adminpage/jquery-1.10.2');
		echo $this->Html->script('adminpage/morris');
		echo $this->Html->script('adminpage/pace');
		echo $this->Html->script('adminpage/raphael-2.1.0.min');
		echo $this->Html->script('adminpage/siminta');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>


<body class=" pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">
                    <?php
                    echo $this->Html->image('admin/logo.png',array('width'=>180,'height'=>160));
                    ?>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                    
                    <!-- end dropdown-messages -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-success">4</span>  <i class="fa fa-tasks fa-3x"></i>
                    </a>
                   
                    <!-- end dropdown-tasks -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                   
                    <!-- end dropdown-alerts -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo $this->base;?>/admins/logout/">
                        <i class="fa fa-sign-out fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
							<?php
								echo $this->Html->image('admin/user.png',array('width'=>250,'height'=>250));
								?>
                            </div>
                            <div class="user-info">
                                <div><strong>
                                <?php
                                echo $user_name;
                                ?>
                                </strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <!--<li class="sidebar-search">
                        <!-- search section
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section
                    </li>-->
                    <li class="selected">
                        <a href="<?php echo $this->base;?>/admins/index"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->base;?>/admins/index"><i class="fa fa-bar-chart-o fa-fw"></i>
                        User Management
                        </a>
                   </li>
                   <li>
                    <a href="<?php echo $this->base;?>/admins/memorials"><i class="fa fa-bar-chart-o fa-fw"></i>
							Memorials Management
                        </a>
                   </li>
                   <li>
                    <a href="<?php echo $this->base;?>/admins/tributes"><i class="fa fa-bar-chart-o fa-fw"></i>
							Tributes  Management
                        </a>
                   </li>
                   
                   <li>
                    <a href="<?php echo $this->base;?>/admins/gifts"><i class="fa fa-bar-chart-o fa-fw"></i>
							Gift  Management
                        </a>
                   </li>
                   
                   
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
		<div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
               
                <!--End Page Header -->
            </div>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

         


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
   


</body></html>
