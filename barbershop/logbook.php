<?php
require_once('../includes/header.php');
$dbQuery = mysqli_query($link, "SELECT * FROM log ORDER BY visit_date DESC LIMIT 10");
$outputBd = mysqli_fetch_all($dbQuery);
$i = 0;
?>
<h2 class="text-center pt-3 ">Журнал записей</h2>
<h3 class="text-center pt-3 text-secondary mb-3">Заполнить форму</h3>
<div class="container pb-5">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="bg-light col-6 p-2">
            <form method="post" action="../php-logic/enter-to-bd.php" name="form">
                <div class="form-group">
                    <label for="exampleInputEmail1">ваше имя</label>
                    <input type="text" class="form-control" name="name" placeholder="как к вам обращаться?" required>
                    <small id="name" class="form-text text-danger" hidden>введите ваше имя!</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">название услуги</label>
                    <input type="text" class="form-control" name="service"
                           placeholder="введите название прически или иной услуги" required>
                    <small id="service" class="form-text  text-danger" hidden>Необходимо ввести услугу</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">время записи</label>
                    <input type="datetime-local" class="form-control" name="visitDate" placeholder="ваше время"
                           required>
                    <small id="visitDate" class="form-text  text-danger" hidden>Необходимо указать даут и время</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">номер телефона (необязателно)</label>
                    <input type="tel" class="form-control" name="phone" placeholder="ваш номер">
                </div>
                <button onclick="validateForm()" class="btn btn-primary">Записаться</button>
            </form>
        </div>
        <div class="col-sm">
        </div>
    </div>
</div>

<h3 class="text-center pt-3 text-secondary mb-3">Просмотр журнала</h3>
<div class="row">
    <div class="col-sm">
    </div>
    <div class="col-9 p-2">
        <table class="table table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">услуга</th>
                <th scope="col">время</th>
                <th scope="col">телефон</th>
            </tr>
            </thead>
            <tbody>
			<?php foreach ($outputBd as $elemBd): ?>
                <tr class="bg-light">
                    <td><?php $i++;
						echo $i; ?></td>
                    <td><?php echo $elemBd[1]; ?></td>
                    <td><?php echo $elemBd[3]; ?></td>
                    <td><?php echo $elemBd[2]; ?></td>
                    <td><?php echo $elemBd[4]; ?></td>
                </tr>
			<?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm">
    </div>
</div>

<script>
    function validateForm() {
        var field1 = document.forms["form"]["name"].value;
        var field2 = document.forms["form"]["service"].value;
        var field3 = document.forms["form"]["visitDate"].value;
        var field4 = document.forms["form"]["phone"].value;
        if (field1 == "") {
            document.getElementById("name").hidden = false;
        } else {
            document.getElementById("name").hidden = true;
        }
        if (field2 == "") {
            document.getElementById("service").hidden = false;
        } else {
            document.getElementById("service").hidden = true;
        }
        if (field3 == "") {
            document.getElementById("visitDate").hidden = false;
        } else {
            document.getElementById("visitDate").hidden = true;
        }
    }
</script>
<?php require_once('../includes/footer.php');
?>
