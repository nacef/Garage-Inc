<?php use_helper('I18N', 'Date') ?>
<?php include_partial('garage/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Garage', array(), 'messages') ?></h1>

  <?php include_partial('garage/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('garage/form_header', array('garage' => $garage, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('garage/form', array('garage' => $garage, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('garage/form_footer', array('garage' => $garage, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
