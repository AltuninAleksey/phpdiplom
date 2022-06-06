<? include_once "db/db.php";
    $buf_id=$_COOKIE['user'];
	$price=$_POST['price'];

    $conn = connect_db();
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }

	$sql = "SELECT automobile.id as id_auto,automobile.mark,automobile.model,automobile.year,automobile.VIN,automobile.status,
	users.id,users.FIO,users.login,users.pass,users.email  From automobile  JOIN users ON users.id=automobile.id_user WHERE automobile.id_user=$buf_id";
	$result = mysqli_query($conn, $sql);

	if($_POST['service']==="Тех осмотр"){
		$country=  $_POST['country'];
		$filter=   $_POST['filter'];
		$antifreze=$_POST['antifreze'];
		$oil=$_POST['oil'];
		$price=$country*($filter+$antifreze+$oil);

		if($country==="1.2"){
			$sql = "SELECT automobile.id as id_auto,automobile.mark,automobile.model,automobile.year,automobile.VIN,automobile.status,
			users.id,users.FIO,users.login,users.pass,users.email  From automobile  JOIN users ON users.id=automobile.id_user 
			WHERE automobile.id_user=$buf_id AND  automobile.mark='ИЖ'
			OR automobile.mark='ИЖ'
			OR automobile.mark='Жигули'
			OR automobile.mark='Азлк'
			OR automobile.mark='ЛУАЗ'
			OR automobile.mark='КАМАЗ'
			OR automobile.mark='ЗАЗ'
			OR automobile.mark='Lada' ";
			$result = mysqli_query($conn, $sql);

		}
	}
?>
<link rel="stylesheet" href="css/style_auth.css">
<nav>
    <div class="container">
        <div class="main"><a href="index.php">Главная</a></div>
    </div>

</nav>
<div class="scroll-table">
				<table>
					<thead>
						<tr>
							<th class="th1">Марка</th>
							<th class="th2">Модель</th>
							<th class="th3">Год</th>
							<th class="th4">Вин</th>
						</tr>
					</thead>
			
						<tbody>					
						<?php foreach($result as $row){
							echo "<tr>";
                            echo "<td>" . $row["mark"] . "</td>";
							echo "<td>" . $row["model"] . "</td>";
							echo "<td>" . $row["year"] . "</td>";
							echo "<td>" . $row["VIN"] . "</td>";
                            echo "<td> <form action='db/createservice.php' method='post'>
                                    <input type='text' hidden  name='service' value='$_POST[service]'>
									<input type='text' hidden  name='price' value='$price'>

									<input type='text' hidden  name='country' value='$_POST[country]'>
									<input type='text' hidden  name='filter' value='$_POST[filter]'>
									<input type='text' hidden  name='antifreze' value='$_POST[antifreze]'>
									<input type='text' hidden  name='oil' value='$_POST[oil]'>		

                                    <button type='submit' name='id_auto' value='$row[id_auto]'>выбрать</button> 
                              </form> </td>";
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


