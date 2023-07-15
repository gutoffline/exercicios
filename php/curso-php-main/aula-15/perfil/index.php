<?php include_once "header.php"; ?>
<main class="fundo">
<!-- inicio conteudo -->
<div class="container">
  <div class="row pt-5">
  <?php  
  $n = 0;
  for($n=0; $n < 9; $n++):
  ?>
    <div class="col-12 col-sm-8 col-md-6 col-lg-3 mt-5">
      <div class="card">
        <img class="card-img-top" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/oslo.jpg" alt="Bologna">
        <div class="card-body text-center">
          <img class="avatar rounded-circle" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/robert.jpg" alt="Bologna">
          <h4 class="card-title">Cleyton Junior</h4>
          <h6 class="card-subtitle mb-2 text-muted">Desenvolvedor</h6>
          <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam repellendus quia quod rerum, quas, necessitatibus facilis ratione dicta officiis reiciendis delectus, perferendis blanditiis illum doloremque commodi dignissimos adipisci autem. Tempore.</p>
          <a href="#" class="btn"><i class="bi bi-instagram"></i></a>
          <a href="#" class="btn"><i class="bi bi-linkedin"></i></a>
          <a href="#" class="btn"><i class="bi bi-twitter"></i></a>
        </div>
      </div>
    </div>
    <?php  
  endfor;
  ?>
  </div>
</div>
</main>
<!-- fim conteudo -->
<?php include_once "footer.php"; ?>