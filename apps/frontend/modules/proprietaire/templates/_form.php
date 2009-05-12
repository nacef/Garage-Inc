<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<form action="<?php echo url_for('proprietaire/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields() ?>
          &nbsp;<a href="<?php echo url_for('proprietaire/index') ?>">Cancel</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'proprietaire/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nom']->renderLabel() ?></th>
        <td>
          <?php echo $form['nom']->renderError() ?>
          <?php echo $form['nom'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['prenom']->renderLabel() ?></th>
        <td>
          <?php echo $form['prenom']->renderError() ?>
          <?php echo $form['prenom'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['raison_sociale']->renderLabel() ?></th>
        <td>
          <?php echo $form['raison_sociale']->renderError() ?>
          <?php echo $form['raison_sociale'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['code_tva']->renderLabel() ?></th>
        <td>
          <?php echo $form['code_tva']->renderError() ?>
          <?php echo $form['code_tva'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['personne_physique']->renderLabel() ?></th>
        <td>
          <?php echo $form['personne_physique']->renderError() ?>
          <?php echo $form['personne_physique'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
