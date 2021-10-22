<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM people WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['name'])  || isset($_POST['link'] || isset($_POST['descripcion']) ) {
  $name = $_POST['name'];
  $link = $_POST['link'];
  $descripcion = $_POST['descripcion'];
  $sql = 'UPDATE people SET name=:name, link=:link, descripcion=:descripcion  WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name, ':link' => $link, ':descripcion' => $descripcion, ':id' => $id])) {
    header("Location: index.php");
  }



}


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Actualizar entrada</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Nombre</label>
          <input value="<?= $person->name; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="link">Link</label>
          <input type="text" value="<?= $person->link; ?>" name="link" id="link" class="form-control">
        </div>
        <div class="form-group">
          <label for="link">Descripcion</label>
          <input type="text" value="<?= $person->descripcion; ?>" name="descripcion" id="descripcion" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
