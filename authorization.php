<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_auth.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Личный кабинт</title>
</head>
<body>
    
<nav>
    <div class="container">
        <div class="main"><a href="index.php">Главная</a></div>
		<div class="exit">  <a href="db/exit.php">Выйти</a></div>
    </div>

</nav>
<?php
    if($_COOKIE['user']==""):
?>

<div class="mainblock">
  

    <div class="vxod">Вход</div>
    <div class="login">Логин:</div>

    <form action="db/check.php" method="post">
        <input type="text" placeholder="Логин" name="login">

        <div class="password" >Пароль:</div>

        <input type="text" placeholder="Пароль" name="pass"><br>
        <button type="submit" class="passwordbutton"> ВХОД </button>
    </form>


    <div class="forgotpassword"><a href="#" >Забыли пароль?</a></div> 
    <div class="registration">Не зарегистрированы? <a href="">зарегистрироваться</a></div>
    
    <?php
else: 
    include_once "db/db.php";
    $buf_id=$_COOKIE['user'];

    

    $conn = connect_db();
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $sql = "SELECT automobile.mark,automobile.model,automobile.year,automobile.VIN,automobile.status,
		users.id,users.FIO,users.login,users.pass,users.email  From automobile  JOIN users ON users.id=automobile.id_user WHERE automobile.id_user=$buf_id";
    $result = mysqli_query($conn, $sql);

	
while ($row = mysqli_fetch_array($result)) {?>
    
 <div class="container">
		<div class="topblock">
			<div class="profile">
				<div class="photoprofile">
					<img src="img/profile.jpg" alt="#">
				</div>
				<div class="name"><?php echo $row['FIO'];?></div>
				<div class="nameOrganization">BondCompany</div>
				<div class="email"> <a href=<?php echo $row['email'];?>> <?php echo $row['email'];?></a></div>
				<div class="adress">Bryansk</div>
			</div>

<?php break;}?>


			<div class="BuyAndSell">		
				<div class="tabelbuy">   
					<h1>Автомобили</h1>				
						<!-- <a href="#" >Заказы</a> 
						<a href="#" class="postav">Поставки</a> -->

						<button type="button" class="add btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Добавить</button>


	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Добавление</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		
		<div class="modal-body">
			<form action="db/addauto.php" method="post">
			<div class="mb-3">
				<label for="recipient-name" class="col-form-label">Марка:</label>
				<input type="text" name="mark" class="form-control" id="recipient-name">
			</div>

			<div class="mb-3">
				<label for="recipient-name" class="col-form-label">Модель:</label>
				<input type="text" name="model" class="form-control" id="recipient-name">
			</div>

			<div class="mb-3">
				<label for="recipient-name" class="col-form-label">Год производства:</label>
				<input type="text" name="year" class="form-control" id="recipient-name">
			</div>

			<div class="mb-3">
				<label for="recipient-name" class="col-form-label">Вин номер:</label>
				<input type="text" name="vin" class="form-control" id="recipient-name">
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">закрыть</button>
				<button type="submit" class="btn btn-primary" data-bs-dismiss="modal">добавить</button>
				
				
			</div>
			</form>
		
		
		</div>
		</div>
	</div>
	</div>

		<select class="filter">
					<option>Все</option>
					<option>В ожидании</option>
					<option>Просроченные</option>
					<option>В работе</option>
					<option>Завершенные</option>
				</select>
			</div>
					
			<div class="scroll-table">
				<table>
					<thead>
						<tr>
							<th class="th1">Марка</th>
							<th class="th2">Модель</th>
							<th class="th3">Год</th>
							<th class="th4">Вин</th>
							<th class="th5">Статус</th>
						</tr>
					</thead>
				</table>	
				<div class="scroll-table-body">
					<table>
						<tbody>					
						<?php foreach($result as $row){
							echo "<tr>";
							echo "<td>" . $row["mark"] . "</td>";
							echo "<td>" . $row["model"] . "</td>";
							echo "<td>" . $row["year"] . "</td>";
							echo "<td>" . $row["VIN"] . "</td>";
							echo "<td>" . $row["status"] . "</td>";
							echo "</tr>";
						}
						echo "</table>";
						echo "</div>";
						?>	
						</tbody>
					</table>
				</div>	
			</div>
			</div>

		<div class="bottomblcok">
			<div class="nametabel">История покупок</div>
			<div class="scroll-table">
				<table>
					<thead>
						<tr>
							<th class="th1">#</th>
							<th class="th2">Наименование организации</th>
							<th class="th3">продукт</th>
							<th class="th4">количество</th>
							<th class="th5">цена за шт</th>
							<th class="th6">дата</th>
						</tr>
					</thead>
				</table>	
				<div class="scroll-table-body">
					<table>
					<tbody>					
							<tr>						
								<td class="th1" onclick="location.href='tovar.html'">1</td>
								<td class="th2" onclick="location.href='tovar.html'">Антонов Иван Федорович</a></td>
								<td class="th3" onclick="location.href='tovar.html'">2</td>
								<td class="th4" onclick="location.href='tovar.html'">Статус</td>			
								<td class="th5">Редактировать</td>
							<td class="th6">Удалить</td>
							</tr>
	
							<tr>
								<td class="th1" onclick="location.href='tovar.html'">2</td>
									<td class="th2" onclick="location.href='tovar.html'">Антонов Иван Федорович</a></td>
									<td class="th3" onclick="location.href='tovar.html'">34</td>
									<td class="th4" onclick="location.href='tovar.html'">Статус</td>
								<td class="th5">Редактировать</td>
								<td class="th6">Удалить</td>
							</tr>

							<tr>						
								<td class="th1" onclick="location.href='tovar.html'">1</td>
								<td class="th2" onclick="location.href='tovar.html'">Антонов Иван Федорович</a></td>
								<td class="th3" onclick="location.href='tovar.html'">2</td>
								<td class="th4" onclick="location.href='tovar.html'">Статус</td>			
								<td class="th5">Редактировать</td>
							<td class="th6">Удалить</td>
							</tr>

							<tr>						
								<td class="th1" onclick="location.href='tovar.html'">1</td>
								<td class="th2" onclick="location.href='tovar.html'">Антонов Иван Федорович</a></td>
								<td class="th3" onclick="location.href='tovar.html'">2</td>
								<td class="th4" onclick="location.href='tovar.html'">Статус</td>			
								<td class="th5">Редактировать</td>
							<td class="th6">Удалить</td>
							</tr>

							<tr>						
								<td class="th1" onclick="location.href='tovar.html'">1</td>
								<td class="th2" onclick="location.href='tovar.html'">Антонов Иван Федорович</a></td>
								<td class="th3" onclick="location.href='tovar.html'">2</td>
								<td class="th4" onclick="location.href='tovar.html'">Статус</td>			
								<td class="th5">Редактировать</td>
							<td class="th6">Удалить</td>
							</tr>
		
							</tbody>
						</table>
				</div>
		</div>
</div>


<?php
$result->free();
$conn->close();
endif;

?>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>