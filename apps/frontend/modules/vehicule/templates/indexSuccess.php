<h1>Vehicule List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Immatricule</th>
      <th>Modele</th>
      <th>Proprietaire</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($vehicule_list as $vehicule): ?>
    <tr>
      <td><a href="<?php echo url_for('vehicule/edit?id='.$vehicule->getId()) ?>"><?php echo $vehicule->getId() ?></a></td>
      <td><?php echo $vehicule->getImmatricule() ?></td>
      <td><?php echo $vehicule->getModeleId() ?></td>
      <td><?php echo $vehicule->getProprietaireId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('vehicule/new') ?>">New</a>
