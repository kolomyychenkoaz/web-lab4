<?php
require_once('../includes/header.php');?>
<h2 class="text-center pt-3 ">Наши вакансии</h2>
<h3 class="text-secondary">Парикмахер (универсал)</h3>
<div class="row p-3">
    <img class="rounded-circle" src="../images/vacansy1.jpg" width="250" height="250">
    <div>
        <p>Зарплата: 30000 р. Два раза в месяц</p>
        <p>Требуются студники универсалы с опытом работы от 1 года.</p>
    </div>
</div>
<h3 class="text-secondary">Администратор</h3>
<div class="row p-3">
    <img class="rounded-circle" src="../images/vacansy2.jpg" width="250" height="250">
    <div>
        <p>Зарплата: 45000 р. Два раза в месяц</p>
        <p>Требуются админимтраторы. Необхрдимо высшее образование. Желательно наличие опыта работы.</p>
    </div>
</div>
    <h2 class="text-center pt-3 ">Оставьте заявку </h2>
    <div class="container pb-5">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="bg-light col-6 p-2">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ваше ФИО</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ваше ФИО">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ваше время</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" placeholder="ваше время">
                    </div>
                    <button type="submit" class="btn btn-primary">Записаться</button>
                </form>
            </div>
            <div class="col-sm">
            </div>
        </div>
    </div>
<?php require_once('../includes/footer.php');
?>