<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($garage->getId(), 'garage_edit', $garage) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_raison_sociale">
  <?php echo $garage->getRaisonSociale() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_adresse">
  <?php echo $garage->getAdresse() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_tel">
  <?php echo $garage->getTel() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_fax">
  <?php echo $garage->getFax() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $garage->getEmail() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_web">
  <?php echo $garage->getWeb() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_code_tva">
  <?php echo $garage->getCodeTva() ?>
</td>
