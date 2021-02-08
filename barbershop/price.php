<?php
require_once('../includes/header.php');?>
<h2 class="text-center pt-3 ">Наши услуги</h2>
<h3 class="text-center pt-3 text-secondary mb-3">Виды стижек</h3>
<div class="container pb-5">
	<div class="row">
		<div class="col-sm">
		</div>
		<div class="col-7">
			<div id="carouselExampleControls" class="carousel slide align-content-center" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item">
						<img class="d-block w-100" src="../images/usluga1.jpg" height="350" width="300" alt="Второй слайд">
						<div class="carousel-caption d-none d-md-block">
							<h3>Стрижка: Бокс</h3>
							<p>300р.</p>
						</div>
					</div>
					<div class="carousel-item active">
						<img class="d-block w-100" src="../images/usluga2.jpg" height="350" width="300" alt="Третий слайд">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Стрижка: Полубокс</h3>
                            <p>350р.</p>
                        </div>
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
		<div class="col-sm">
		</div>
	</div>
</div>
<h3 class="text-center pt-3 text-secondary">Дополнительные услуги</h3>
<div class="container pb-5">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-7">
            <div id="carouselExampleControls2" class="carousel slide align-content-center" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../images/usluga3.jpg" height="350" width="300" alt="Третий слайд">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-secondary">Услуга: помыть голову</h3>
                            <p class="text-secondary">50р.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm">
        </div>
    </div>
</div>
<?php require_once('../includes/footer.php');
?>
