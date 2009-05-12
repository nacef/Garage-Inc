<?php use_helper('I18N', 'Date') ?>
<?php include_partial('modele/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Modele', array(), 'messages') ?></h1>

  <?php include_partial('modele/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('modele/form_header', array('modele' => $modele, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('modele/form', array('modele' => $modele, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('modele/form_footer', array('modele' => $modele, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
