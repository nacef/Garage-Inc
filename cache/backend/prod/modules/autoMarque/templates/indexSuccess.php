<?php use_helper('I18N', 'Date') ?>
<?php include_partial('marque/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Marque List', array(), 'messages') ?></h1>

  <?php include_partial('marque/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('marque/list_header', array('pager' => $pager)) ?>
  </div>

  <div id="sf_admin_bar">
    <?php include_partial('marque/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <form action="<?php echo url_for('marque_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('marque/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('marque/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('marque/list_actions', array('helper' => $helper)) ?>
    </ul>
    </form>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('marque/list_footer', array('pager' => $pager)) ?>
  </div>
</div>
