<?php include "header.php"; ?>
<?php include "menu.php"; ?>

<body>
  <section>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner" style="height: 30em">


        <div class="carousel-item h-100 active" style="background-image: url(./imgs/1.jpg); background-size:contain; background-repeat: no-repeat; background-position: center">
        <div><a class="btn btn-primary" style="margin-left: 47%; margin-top: 440px; background-color: #323975" href="escreverSalvar1.php" role="button">Eu quero esse</a></div>
        </div>

        <div class="carousel-item h-100" style="background-image: url(./imgs/2.jpg); background-size:contain; background-repeat: no-repeat; background-position: center">
        <div><a class="btn btn-primary" style="margin-left: 47%; margin-top: 440px; background-color: #fff; color:#323975" href="escreverSalvar2.php" role="button">Eu quero esse</a></div>
        </div>


        <div class="carousel-item h-100" style="background-image: url(./imgs/3.jpg); background-size:contain; background-repeat: no-repeat; background-position: center">
        <div><a class="btn btn-primary" style="margin-left: 47%; margin-top: 440px; background-color: #323975" href="escreverSalvar3.php" role="button">Eu quero esse</a></div>
        </div>



      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/animatedmodal@1.0.0/animatedModal.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/mdb-ui-kit@3.10.1/js/mdb.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/tsparticles@1.37.5/tsparticles.slim.min.js"></script>
  <script src="js/main.js"></script>


  <script>
    function addText() {
      document.getElementById('text2').innerHTML = document.getElementById('myText').value;
    }
  </script>

  </div>


</body>

</html>