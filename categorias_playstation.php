<?php
// include do footer

include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';

?>
<div class="container">
 <h1>categorias</h1>
 <h1>playstation</h1>
<div class="row mt-5">

<?php

$Playstation = array(
    
    0 =>  array('nome'=>'pernalonga','preco'=>'R$150.00','descricao'=>'jogo de ultima geração, uma super aventura no ps4','imagem'=>'bigchungus.jpg' ),
    1 =>  array('nome'=>'Mario PS4 ','preco'=>'R$40.00','descricao'=>'Jogo familiar para toda a familia','imagem'=>'mario.jpg' ),
    4 =>  array('nome'=>'Playstation 3  ','preco'=>'R$600.00','descricao'=>'Console rival do xbox, feito pela sony, possui uma biblioteca de vários jogos e franquias que surgiram no sistema. ','imagem'=>'ps3.jpg' ),
    8 =>  array('nome'=>'Crash código para Ps3 ','preco'=>'R$20,00','descricao'=>'Código para ser inserido no playstation 3','imagem'=>'crash.jpg' ),
   

   
   
   
);

?>

<?php

foreach ($Playstation as $key => $value) {
  
  ?>

    <div class="card m-3" style="width: 18rem;">
  <img class="card-img-top" src="./content/<?php echo $value ['imagem'];?>" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $value  ['nome'];?></h5>
    <p class="card-text"><?php echo $value  ['descricao'];?></p>
    <a href="produto-detalhe.php?id=<?php echo $key;?>&tipo=promocao" class="btn btn-primary">comprar</a>
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




