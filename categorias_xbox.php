<?php
// include do footer

include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';

?>
<div class="container">
 <h1>categorias</h1>
 <h1>Xbox</h1>
<div class="row mt-5">

<?php

$Xbox = array(
    
 
    2=>  array('nome'=>'Virtual Tennis ','preco'=>'R$80.00','descricao'=>'game de esporte viciante para toda a familia experimentar.','imagem'=>'tennis.jpg' ),
    3 =>  array('nome'=>'Console xbox360 ','preco'=>'R$800.00','descricao'=>'Console feito no ano de 2005 com uma biblioteca grande de jogos e um dos sistema online poular de sua época.','imagem'=>'xbox.jpg' ),
    9 =>  array('nome'=>'Battlefield 4 ','preco'=>'R$100.00','descricao'=>'Jogo feito pela ea games e mais um da frankia,agora no xbox','imagem'=>'tiro.jpg' ),
    10 => array('nome'=>' Assasins Creed','preco'=>'R$100.00','descricao'=>'Mais um da série prestijiada da Ubisoft ','imagem'=>'creed.jpg' ),

    

   
   
   
);

?>

<?php

foreach ($Xbox as $key => $value) {
  
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

