<?php
   $user =$this->request->data;
?>
<div class="col-lg-12">
    <!-- Welcome Page - Dashboard Message -->
    <h1 class="page-header">Edit User</h1>
</div>
<div class="row">
    <div class="col-lg-12">
    <div class="alert alert-info">
        <i class="fa fa-folder-open"></i>
        <!-- User Information -->
        Update Information for  <?php echo $user['Usermeta']['firstname'] . " ".$user['Usermeta']['lastname'];?>
        </div>
    </div>
    </div>

<!-- Generate Datatable Listing -->
<div class="panel-body">
    <div class="col-lg-12">
        <!--jumbotron-->
        <div class="jumbotron">
            <?php
                if(!empty($save_user)) {
            ?>
                <div class="alert alert-success">
                    <?php echo $this->Session->flash(); ?>
                </div>
                <?php } ?>
            <?php echo $this->Form->create('User'); ?>
             <div class="form-group">
                    <?php 
                    echo $this->Form->input('id');
                    echo $this->Form->input('Usermeta.id');
                    echo $this->Form->input('Usermeta.firstname',array('class'=>'form-control')); 
                    echo $this->Form->input('Usermeta.middlename',array('class'=>'form-control'));
                    echo $this->Form->input('Usermeta.lastname' , array('class'=>'form-control'));
                    echo $this->Form->input('User.username' , array('class'=>'form-control'));
                    echo $this->Form->input('Usermeta.add_lineone' , array('class'=>'form-control') );
                    echo $this->Form->input('Usermeta.add_linetwo', array('class'=>'form-control'));
                    echo $this->Form->input('Usermeta.city' , array('class'=>'form-control'));
                    echo $this->Form->input('Usermeta.state' , array('class'=>'form-control'));
                    echo $this->Form->input('Usermeta.zip' , array('class'=>'form-control'));
                    echo $this->Form->input('Usermeta.dob_day' , array('class'=>'form-control'));
                    echo $this->Form->input('Usermeta.dob_month' , array('class'=>'form-control'));
                    echo $this->Form->input('Usermeta.dob_year' , array('class'=>'form-control'));
                    echo $this->Form->input('Usermeta.gender' , array('class'=>'form-control'));
                    $options = array('label'=>'Update','type'=>'submit','class'=>'btn btn-primary');
                    echo $this->Form->end($options);
                    ?>
            </div>
        </div>
                      <!--End jumbotron-->
                </div>
</div>
