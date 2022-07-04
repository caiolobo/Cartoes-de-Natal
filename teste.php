<?php include "header.php"; ?>
<?php include "menu.php"; ?>

<body>
  <section>
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="./imgs/1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="./imgs/2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="./imgs/3.jpg" style="width:100%">

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