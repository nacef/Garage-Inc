<h1>Proprietaire List</h1>

<table>
  <thead>
    <tr>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Raison sociale</th>
      <th>Code tva</th>
      <th>Personne physique</th>
      <th>Id</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($proprietaire_list as $proprietaire): ?>
    <tr>
      <td><?php echo $proprietaire->getNom() ?></td>
      <td><?php echo $proprietaire->getPrenom() ?></td>
      <td><?php echo $proprietaire->getRaisonSociale() ?></td>
      <td><?php echo $proprietaire->getCodeTva() ?></td>
      <td><?php echo $proprietaire->getPersonnePhysique() ?></td>
      <td><a href="<?php echo url_for('proprietaire/edit?id='.$proprietaire->getId()) ?>"><?php echo $proprietaire->getId() ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('proprietaire/new') ?>">New</a>
