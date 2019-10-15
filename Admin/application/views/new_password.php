<?php include('header.php');?>
<div class="row">
  
<div class="col-md-3"></div>
    <div class="col-md-6  col-xs-12">
    <div class="x_panel">
        <div class="x_title">
        <h2>Send<small>New Password</small></h2>
        <div class="clearfix"></div>
        </div>
        <?php 
            if($status=$this->session->flashdata('success')):
            $status_class=$this->session->flashdata('success')
        ?>
        
        <script>
        $(document).ready(function(){
        new PNotify({
        title: 'Success!',
        text: '<?= $status ?>',
        type: 'success',
        styling: 'bootstrap3'
        });
        });
        </script>
        
        <?php endif; ?>
        <form  enctype="multipart/form-data" action="<?php echo base_url('dashboard/send_new_password');?>" method="post" class="form-horizontal form-label-left input_mask"> 

        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
            <label class="">User Email</label>
                <input type="email" class="form-control" name="email" required="true">
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                    
            <label class="">Password</label>
                <input type="text" class="form-control" name="password"  required="true">
                <span style="font-size:12px;">(Password needs to be generated from the Nexudus Panel.)</span>
        </div>
        <div class="form-group">
        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 col-sm-offset-3">
            <a href="<?= base_url('Partners');?>"><button type="button" class="btn btn-primary">Cancel</button></a>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" name="insert" value="insert" class="btn btn-success">Submit</button>
        </div>
        </div>
    </form>
    </div>
</div>
<div class="col-md-3"></div>
</div>    
<?php include('footer.php');?>