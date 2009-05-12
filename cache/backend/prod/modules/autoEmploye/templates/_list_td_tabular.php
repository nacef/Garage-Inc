<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($employe->getId(), 'employe_edit', $employe) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nom">
  <?php echo $employe->getNom() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_prenom">
  <?php echo $employe->getPrenom() ?>
</td>
