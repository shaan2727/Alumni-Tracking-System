

<div>
<?php echo form_open_multipart('users/certificate');?>
<input type="hidden" value="<?php echo $user['userid']?>" name="userid">
<div class="container" style="margin-top: 10px;">
<div class="row">
<div class="col-sm-4">
<input type="text" placeholder="Enter Club Name" name="clubname" class="form-control"></div>
<div class="col-sm-4">
<input type="file" name="cert">
</div>
<div class="col-sm-4">
<button class="btn btn-primary">upload</button>
</div>
</div>
</div>
<?php echo form_close();?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Club Name</th>
      <th scope="col">Certificate</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row"><?=$user['clubname']?></th>
      <td><img src="<?=base_url('uploads/cert/'.$user['certificate'])?>" alt="certificate" width="150px" height="100px"></td>
    </tr>
  </tbody>
</table>
</div>