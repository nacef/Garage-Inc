<td colspan="3">
  <?php echo __('%%id%% - %%nom%% - %%marque_id%%', array('%%id%%' => link_to($modele->getId(), 'modele_edit', $modele), '%%nom%%' => $modele->getNom(), '%%marque_id%%' => $modele->getMarqueId()), 'messages') ?>
</td>
