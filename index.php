<?php
// include do footer

include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="" target="_blank">
                <img class="d-block w-100" src="https://s.yimg.com/ny/api/res/1.2/dbABoSLb1P4xB_NvUtYThQ--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTQyNw--/https://s.yimg.com/os/creatr-uploaded-images/2021-09/bd100ab0-0abb-11ec-bf3d-86a63775ab8a" alt="Primeiro Slide">
                </a>
              </div>
              <div class="carousel-item">
                <a href="" target="_blank">
                <img class="d-block w-100" src="https://miro.medium.com/max/1400/1*VVdvi5v250Q8LfN-tmE_uw.jpeg" alt="Segundo Slide">
                </a>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Próximo</span>
            </a>
          </div>
<div class="container">
<h2 >promoção</h2>   
<div class="row mt-5">


  
  <?php
for ($i=0; $i < 3 ; $i++) {

  ?>

    <div class="card m-3" style="width: 18rem;">
  <img class="card-img-top" src="./content/<?php echo $produtos [$i]['imagem'];?>" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $produtos [$i] ['nome'];?></h5>
    <p class="card-text"><?php echo $produtos [$i] ['descricao'];?></p>
    <a href="produto-detalhe.php?id=<?php echo $i;?>&tipo=promocao" class="btn btn-primary">comprar</a>
  </div>
</div>


<?php
}
?>

</div>
</div>



<?php
// include do footer
include_once './includes/_footer.php';
?>