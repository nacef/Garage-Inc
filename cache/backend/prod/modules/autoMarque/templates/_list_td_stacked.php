<td colspan="2">
  <?php echo __('%%id%% - %%nom%%', array('%%id%%' => link_to($marque->getId(), 'marque_edit', $marque), '%%nom%%' => $marque->getNom()), 'messages') ?>
</td>
