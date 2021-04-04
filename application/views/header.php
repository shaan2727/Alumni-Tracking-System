
<?php 

if($this->session->userdata('user_type') === 'alumni' && $this->session->userdata('is_verified')== FALSE){
  redirect('waiting');
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Alumni Tracking System</title>
<link type="text/css" rel="stylesheet" href="<?= base_url('assets\css\bootstrap.css')?>" />
<link type="text/css" rel="stylesheet" href="<?=base_url('assets\css\syle.css')?>" />
<script src="<?= base_url("assets\js\jquery-3.5.1.min.js")?>"></script>
<script src="<?= base_url('assets\js\bootstrap.min.js')?>"></script>
<script src="//geodata.solutions/includes/countrystatecity.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>
<body>
<img src="<?=base_url('assets\images\logo.png')?>" alt="College Logo" height="90" width="350"> </img>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?= base_url()?>">SLRTCE ALUMNI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url()?>">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>events">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>news">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>careers">Careers</a>
      </li>
      <?php if($this->session->userdata('user_type') == 'alumni'): ?>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>chirp">Chirp</a>
      </li>
      <?php endif; ?>
    </ul>
    <ul class = "navbar-nav ml-auto">
    <?php if($this->session->userdata('user_type') == 'alumni'):?>
      <li class="alert-infonav-item">
        <a class="nav-link" href="<?=base_url()?>profile/<?=$this->session->userdata('user_id');?>">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>logout">Logout</a>
      </li>
    <?php else: ?>
  <li class="alert-infonav-item">
        <a class="nav-link" href="<?=base_url()?>register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>login">Sign</a>
      </li>
    <?php endif; ?>
  </ul>
  </div>
</nav>
<div class="container">