<!DOCTYPE html>
<html lang="es">
<?php require 'header.php'; ?>

<body>


    
 <?php 
 require("config.php");

  $sqlVideo   = ("SELECT * FROM videos ORDER BY id ");
  $queryVideo = mysqli_query($con, $sqlVideo);
  $totalVideo = mysqli_num_rows($queryVideo);
  $DataVideo  = mysqli_fetch_array($queryVideo);
?>


    <div class="container">
      <h2 class="text-center mt-3 mb-5" style="color:white; font-weight: 800; ">
      Galeria de videos subidos
     </h2>
     <hr>

      <div class="row text-center">
        <div class="col-6">
        <h2 class="text-center mt-3 mb-5" style="color:white; font-weight: 800; ">
      Cuentos
     </h2>
          <?php 
          while ($row = mysqli_fetch_array($queryVideo)){ 
            ?>

            <h2 style="color:white">
            <?php echo $DataVideo['nombreVideo'];?> 
            </h2>

          <div class="video-responsive">
            <iframe  src="
            <?php echo $DataVideo['urlVideo']; ?>" style="width: 500px; height:300px; display: flex; align-items: center; margin:auto;  " frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
          </div>

          
        <?php }?>

        </div>


      </div>


      <div class="container">
      <h2 class="text-center mt-3 mb-5" style="color:white; font-weight: 800; ">
     
     </h2>
     <hr>

      <div class="row text-center">
        <div class="col-6">
        <h2 class="text-center mt-3 mb-5" style="color:white; font-weight: 800; ">
      Peliculas
     </h2>
          <?php 
          while ($row = mysqli_fetch_array($queryVideo)){ 
            ?>

            <h2 style="color:white">
            <?php echo $DataVideo['nombreVideo'];?> 
            </h2>

          <div class="video-responsive">
            <iframe  src="
            <?php echo $DataVideo['urlVideo']; ?>" style="width: 500px; height:300px; display: flex; align-items: center; margin:auto;  " frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
          </div>

          
        <?php }?>

        </div>


      </div>



      <div class="container">
      <h2 class="text-center mt-3 mb-5" style="color:white; font-weight: 800; ">
     
     </h2>
     <hr>

      <div class="row text-center">
        <div class="col-6">
        <h2 class="text-center mt-3 mb-5" style="color:white; font-weight: 800; ">
      Educativos
     </h2>
          <?php 
          while ($row = mysqli_fetch_array($queryVideo)){ 
            ?>

            <h2 style="color:white">
            <?php echo $DataVideo['nombreVideo'];?> 
            </h2>

          <div class="video-responsive">
            <iframe  src="
            <?php echo $DataVideo['urlVideo']; ?>" style="width: 500px; height:300px; display: flex; align-items: center; margin:auto;  " frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
          </div>

          
        <?php }?>

        </div>


      </div>



      <div class="container">
      <h2 class="text-center mt-3 mb-5" style="color:white; font-weight: 800; ">
     </h2>
     <hr>

      <div class="row text-center">
        <div class="col-6">
        <h2 class="text-center mt-3 mb-5" style="color:white; font-weight: 800; ">
      Dibujos animados
     </h2>
          <?php 
          while ($row = mysqli_fetch_array($queryVideo)){ 
            ?>

            <h2 style="color:white">
            <?php echo $DataVideo['nombreVideo'];?> 
            </h2>

          <div class="video-responsive">
            <iframe  src="
            <?php echo $DataVideo['urlVideo']; ?>" style="width: 500px; height:300px; display: flex; align-items: center; margin:auto;  " frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
          </div>

          
        <?php }?>

        </div>


      </div>


      <div class="container">
      <h2 class="text-center mt-3 mb-5" style="color:white; font-weight: 800; ">

     </h2>
     <hr>

      <div class="row text-center">
        <div class="col-6">
        <h2 class="text-center mt-3 mb-5" style="color:white; font-weight: 800; ">
      Manualidades
     </h2>
          <?php 
          while ($row = mysqli_fetch_array($queryVideo)){ 
            ?>

            <h2 style="color:white">
            <?php echo $DataVideo['nombreVideo'];?> 
            </h2>

          <div class="video-responsive">
            <iframe  src="
            <?php echo $DataVideo['urlVideo']; ?>" style="width: 500px; height:300px; display: flex; align-items: center; margin:auto;  " frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
          </div>

          
        <?php }?>

        </div>


      </div>



































    </div>



<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>



  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>


  <script src="js/main.js"></script>


<script type="text/javascript">
var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
  
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};

</script>

</body>
</html>

<?php require 'footer.php'; ?>
