<!DOCTYPE html>
<html lang="pt-br">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/escrever.css" />
  <link rel="stylesheet" href="css/spinner.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Icons+Round&family=Roboto:wght@300;400;500;700&display=swap" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@3.10.1/css/mdb.dark.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" />
  <link rel="stylesheet" href="style.css" />

  <title>Escrever Cartão</title>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="imgs/logo.svg" class="img-fluid" id="imagem-topo">
            <span class="papaiNoel">Panda Noel</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">COMECE DE GRAÇA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"  id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">CARTÕES DE NATAL</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        
                        <li><a class="dropdown-item" href="#">COMECE DE GRAÇA</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">CARTÕES DE NATAL</a></li>
                        
                    </ul>
                    
                </li>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section class="escreverCartao">
      <div class="row">
        <div class="col-md-6">
          <div class="container createImg">
            <img class="cartao" src="imgs/3.jpg" />
            <div class="centered" id="text2"></div>
          </div>
        </div>
        <div class="col-md-4">
          <h3>Digite a sua mensagem no campo abaixo</h3>
          <div class="mb-3">
            <textarea class="form-control" id="myText" id="exampleFormControlTextarea1" rows="3" oninput="addText()"
              maxlength="443"></textarea>
            <button id="geeks" type="button" class="btn btn-primary top">Gerar Cartão</button>
          </div>
        </div>
      </div>
    </section>

    <div id="img" style="display:none;">
      <img src="" id="newimg" class="top" />
    </div>


<script src="js/escrever.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
  $(function () {
    $("#geeks").click(function () {
      html2canvas($(".createImg"), {
        onrendered: function (canvas) {
          var imgsrc = canvas.toDataURL("image/png");
          console.log(imgsrc);
          $("#newimg").attr('src', imgsrc);
          $("#img").show();
          var dataURL = canvas.toDataURL();
          $.ajax({
            type: "POST",
            url: "script.php",
            data: {
              imgBase64: dataURL
            }
          }).done(function (o) {
            console.log('saved');
          });
        }
      });
    });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/animatedmodal@1.0.0/animatedModal.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/mdb-ui-kit@3.10.1/js/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tsparticles@1.37.5/tsparticles.slim.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>