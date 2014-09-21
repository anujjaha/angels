<?php
    echo $this->Html->css('adminpage/bootstrap');
    echo $this->Html->css('adminpage/font-awesome');
    echo $this->Html->css('adminpage/morris-0.4.3.min');
    echo $this->Html->css('adminpage/pace-theme-big-counter');
    echo $this->Html->css('adminpage/style');
    
    echo $this->Html->script('adminpage/bootstrap.min');
    echo $this->Html->script('adminpage/dashboard-demo');
    echo $this->Html->script('adminpage/jquery.metisMenu');
    echo $this->Html->script('adminpage/jquery-1.10.2');
   ?>
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User',array('action'=>'login')); ?>
<body class="body-Login-back">
<div class="container">
<div class="row">
    
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">                  
            <div class="panel-heading">
                
                <h3 class="panel-title">
                <?php echo __('Please Sign In'); ?>
                </h3>
            </div>
            <div class="panel-body">
                <form role="form">
                    <h2>Admin Login</h2>
                    <div class="form-group">
                    <?php
                    echo $this->Form->input('username', array('class'=>'form-control','placeholder'=>'Username'));
                    ?> 
                    </div>
                    <div class="form-group">
                    <?php
                    echo $this->Form->input('password',array('class'=>'form-control' ,'placeholder'=>'Password'));
                    ?>
                    </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                        </div>
                        <?php 
                        $options = array('label' => 'Login', 'type'=>'submit','class' =>'btn btn-lg btn-success btn-block');
                        echo $this->Form->end($options); ?>
                </form>
            </div>
        </div>
    </div>
</div>
</div>