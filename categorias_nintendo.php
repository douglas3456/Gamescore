<?php
// include do footer

include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';

?>
<div class="container">
 <h1>categorias</h1>
 <h1>Nintendo</h1>
<div class="row mt-5">

<?php

$Nintendo = array(
    
   
    5 =>  array('nome'=>'Super Nintendo ','preco'=>'R$500,00','descricao'=>'Um clásico da nintendo rodando fitas,além de trazer nostalgia','imagem'=>'Super nes.jpg' ),
    6 =>  array('nome'=>'Game Cube','preco'=>'R$900.00','descricao'=>'Um dos consoles injustiçados da nintendo,concorrente do ps2. ','imagem'=>'cubo.jpg' ),
    7 =>  array('nome'=>'Sonic All stars racing ds ','preco'=>'R$200.00','descricao'=>'jogo de corrida com os personagens da sega','imagem'=>'corrida.jpeg' ),
   

   
   
   
);

?>

<?php

foreach ($Nintendo as $key => $value) {
  
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




