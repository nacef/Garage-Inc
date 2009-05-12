<?php use_helper('I18N', 'Date') ?>
<?php include_partial('marque/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Marque', array(), 'messages') ?></h1>

  <?php include_partial('marque/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('marque/form_header', array('marque' => $marque, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('marque/form', array('marque' => $marque, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('marque/form_footer', array('marque' => $marque, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
