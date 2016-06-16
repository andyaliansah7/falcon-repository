<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>PH</title>

  <!--- Site CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/site.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/grid.css">

  <!--- Component CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/menu.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/input.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/icon.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/button.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/transition.css">

  <!--- Example Libs -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/popup.css">
  <script src="http://semantic-ui.com/examples/assets/library/jquery.min.js"></script>
  <script src="http://semantic-ui.com/examples/assets/library/iframe-content.js"></script>
<!--  <script src="http://semantic-ui.com/examples/assets/show-examples.js"></script>-->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/components/popup.js"></script>

  <!--- Component JS -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/components/transition.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/components/dropdown.js"></script>

  <!--- Example CSS -->
  <style>
  body {
    padding: 0.5em;
  }
  .ui.menu {
    margin: 2em 0em;
  }
  .ui.menu:last-child {
    margin-bottom: 110px;
  }
  </style>

  <!--- Example Javascript -->
  <script>
  $(document)
    .ready(function() {
      $('.ui.menu .ui.dropdown').dropdown({
        on: 'hover'
      });
      $('.ui.menu a.item')
        .on('click', function() {
          $(this)
            .addClass('active')
            .siblings()
            .removeClass('active')
          ;
        })
      ;
    })
  ;
  </script>
</head>
<body>

<div class="ui menu">
  <div class="header item">Brand</div>
  <a class="active item">Link</a>
  <a class="item">Link</a>
  <div class="ui dropdown item">
    Dropdown
    <i class="dropdown icon"></i>
    <div class="menu">
      <div class="item">Action</div>
      <div class="item">Another Action</div>
      <div class="item">Something else here</div>
      <div class="divider"></div>
      <div class="item">Separated Link</div>
      <div class="divider"></div>
      <div class="item">One more separated link</div>
    </div>
  </div>
  <div class="right menu">
    <a class="item">
        <div class="ui icon top left pointing dropdown button">
          <i class="user icon"></i>
          <div class="menu">
            <div class="header">Account & Settings</div>
            <div class="divider"></div>
            <div class="item">
              <i class="user icon"></i>
              Profile
            </div>
            <div class="item">
              <i class="key icon"></i>
              Logout
            </div>
          </div>
        </div>
    </a>
  </div>
</div>


</body>
</html>