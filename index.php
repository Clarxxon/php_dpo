<? include ('header.php');?>
<style>
.carousel-item  {
  width:100%;
  height:460px;
}
.carousel-item .img-fluid {
  width: 100%;
    height: auto;
    position: absolute;
    top: -80px;
}
 
</style>
<div class="container-fluid">
<section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Все возможности нашей студии</h1>
          <p class="lead text-muted">Мы можем сделать для вас видео любой сложности, обработать его, создать рекламную кампанию по Вашему заказу и многое-многое другое!</p>
        </div>
      </section>

     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="carousel-caption d-none d-md-block">
            <h1>Сотрудничество с русскими блогерами</h1>
            <p>мы сотрудничаем со всеми известными русскими блогерами!</p>
          </div>
          <img class="d-block img-fluid" src="1.png" alt="First slide">
        </div>
        <div class="carousel-item">
        <div class="carousel-caption d-none d-md-block">
            <h1>Сотрудничество с зарубежными блогерами</h1>
            <p>мы сотрудничаем со всеми известными зарубежными блогерами!</p>
          </div>
          <img class="d-block img-fluid" src="2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
        <div class="carousel-caption d-none d-md-block">
            <h1>Професиональная команда</h1>
            <p>Наша команда располагает профессионаьным оборудованием и программным обеспечением. Но, самое важное, большим опытом!</p>
          </div>
          <img class="d-block img-fluid" src="3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>



<? include ('footer.php')?>