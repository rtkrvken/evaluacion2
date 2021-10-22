<?php
require 'db.php';
$sql = 'SELECT * FROM people';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Cuentos</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>N°</th>
          <th>Nombre </th>
          <th>Link</th>
          <th>Descripcion</th>
          <th>Opciones</th>
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->id; ?></td>
            <td><?= $person->name; ?></td>
            <td><?= $person->link; ?></td>
            <td><?= $person->descripcion;?></td>
            <td>
              <a href="edit.php?id=<?= $person->id ?>" class="btn btn-info">Editar</a>
              <a onclick="return confirm('Borrar?')" href="delete.php?id=<?= $person->id ?>" class='btn btn-danger'>Eliminar</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
