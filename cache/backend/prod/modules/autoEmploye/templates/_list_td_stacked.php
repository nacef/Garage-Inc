<td colspan="3">
  <?php echo __('%%id%% - %%nom%% - %%prenom%%', array('%%id%%' => link_to($employe->getId(), 'employe_edit', $employe), '%%nom%%' => $employe->getNom(), '%%prenom%%' => $employe->getPrenom()), 'messages') ?>
</td>
