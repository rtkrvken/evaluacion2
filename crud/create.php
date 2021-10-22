<?php
require 'db.php';
$message = '';
if (isset ($_POST['name'])  || isset($_POST['link']) || isset($_POST['descripcion'])) {

  $name = $_POST['name'];
  $link = $_POST['link'];
  $descripcion = $_POST['descripcion'];
  $sql = 'INSERT INTO people(name, link, descripcion) VALUES(:name, :link, :descripcion)';
  $statement = $connection->prepare($sql);
  
  if ($statement->execute([':name' => $name, ':link' => $link, ':descripcion' => $descripcion])) {
    $message = 'datos ingresados correctamente';

  }



}


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Create a person</h2>
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
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="link">Link</label>
          <input type="text" name="link" id="link" class="form-control">
        </div>
        <div class="form-group">
          <label for="descripcion">descripcion</label>
          <input type="text" name="descripcion" id="descripcion" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Crear entrada</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
