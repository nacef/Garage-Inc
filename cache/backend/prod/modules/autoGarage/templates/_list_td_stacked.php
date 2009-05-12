<td colspan="8">
  <?php echo __('%%id%% - %%raison_sociale%% - %%adresse%% - %%tel%% - %%fax%% - %%email%% - %%web%% - %%code_tva%%', array('%%id%%' => link_to($garage->getId(), 'garage_edit', $garage), '%%raison_sociale%%' => $garage->getRaisonSociale(), '%%adresse%%' => $garage->getAdresse(), '%%tel%%' => $garage->getTel(), '%%fax%%' => $garage->getFax(), '%%email%%' => $garage->getEmail(), '%%web%%' => $garage->getWeb(), '%%code_tva%%' => $garage->getCodeTva()), 'messages') ?>
</td>
