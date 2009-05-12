<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($modele->getId(), 'modele_edit', $modele) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nom">
  <?php echo $modele->getNom() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_marque_id">
  <?php echo $modele->getMarqueId() ?>
</td>
