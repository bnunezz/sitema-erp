<main role="main">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php
        $cont_marc = 0;
        foreach($carousels as $carousel){
          if($cont_marc == 0){
            echo '<li data-target="#myCarousel" data-slide-to="'.$cont_marc.'" class="active"></li>';
          }else{
            echo '<li data-target="#myCarousel" data-slide-to="'.$cont_marc.'"></li>';
          }
          $cont_marc++;        
        }
      ?>
    </ol>
    <div class="carousel-inner">
      <?php
      $cont_slide = 0;
      foreach($carousels as $carousel){
        if($cont_slide == 0){
          echo '<div class="carousel-item active">';
        }else{
          echo '<div class="carousel-item">';
        }
        
        echo $this->Html->image('../files/carousel/'.$carousel->id . '/'.$carousel->imagem, ['class' => 'first-slide img-fluid', 'alt' => 'First slide']);
        echo '<div class="container">';
        echo '<div class="carousel-caption '.$carousel->position->posicao.'">';
        if($carousel->titulo != ""){
          echo '<h1 class="d-none d-md-block">'.$carousel->titulo.'</h1>';
        }
        if($carousel->descricao != ""){
          echo '<p class="d-none d-md-block">'.$carousel->descricao.'</p>';
        }
        if(($carousel->titulo_botao != "") AND ($carousel->link != "") AND ($carousel->color_id != "")){
          echo '<p><a class="btn btn-lg btn-'.$carousel->color->cor.'" href="'.$carousel->link.'" role="button">'.$carousel->titulo_botao.'</a></p>';
        }
        
        echo '</div>';
        echo '</div>';
        echo '</div>';
        $cont_slide++;
      }

      ?>

      
        
        
          
            
            
            
          
        
      

    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
 
  <div class="jumbotron servicos">
    <div class="container">
      <h2 class="display-4 text-center titulo-servicos">Serviços</h2>
      <div class="card-deck">
        <div class="card text-center">
          <div class="tamanho-icone">
            <i class="fas fa-plane"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title">Serviço um</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
        </div>
        <div class="card text-center">
          <div class="tamanho-icone">
            <i class="fas fa-train"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title">Serviço dois</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even content than the second to show that equal height action.</p>
          </div>
        </div>
        <div class="card text-center">
          <div class="tamanho-icone">
            <i class="fas fa-bus-alt"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title">Serviço tres</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content that equal height action.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="jumbotron depoimento">
    <div class="container">
      <h2 class="display-4 text-center titulo-depoimento"><?= $depoimentos->nome_dep; ?></h2>
      <p class="lead text-center desc-depoimento"><?= $depoimentos->descricao_dep; ?></p>
      <div class="card-deck">
        <div class="card text-center">
          <div class="embed-responsive embed-responsive-16by9">
          <?= $depoimentos->video_um; ?>
          </div>
        </div>
        <div class="card text-center">
          <div class="embed-responsive embed-responsive-16by9">
          <?= $depoimentos->video_dois; ?>
          </div>
        </div>
        <div class="card text-center">
          <div class="embed-responsive embed-responsive-16by9">
          <?= $depoimentos->video_tres; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
