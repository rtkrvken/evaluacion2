

  


<?php require 'header.php'; ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Actualizar Registro</h2>
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
          <input value="<?= $videos->nombreVideo; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="link">Link</label>
          <input type="text" value="<?= $videos->urlVideo; ?>" name="link" id="link" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
require 'config.php';
$id = $_GET['id'];
$sql = ("SELECT * FROM videos WHERE  id='" .$id. "'");
$statement = $con->prepare($sql);
if (isset ($_POST['nombreVideo'])  && isset($_POST['urlVideo']) ) {
  $nombreVideo = $_POST['nombreVideo'];
  $urlVideo = $_POST['urlVideo'];
  $sqlVideo = 'UPDATE videos SET nombreVideo=:nombreVideo, urlVideo=:urlVideo WHERE id=:id';
  $statement = $con->prepare($sql);
  if ($statement->execute([':nombreVideo' => $nombreVideo, ':urlVideo' => $urlVideo, ':id' => $id])) {
    header("Location: /");
    
  }
}

?>



<?php require 'footer.php'; ?>
