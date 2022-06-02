<? include_once "db/db.php";
    $buf_id=$_COOKIE['user'];
    echo $_POST['diagnostik'];

    

    $conn = connect_db();
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $sql = "SELECT automobile.id as id_auto,automobile.mark,automobile.model,automobile.year,automobile.VIN,automobile.status,
		users.id,users.FIO,users.login,users.pass,users.email  From automobile  JOIN users ON users.id=automobile.id_user WHERE automobile.id_user=$buf_id";
    $result = mysqli_query($conn, $sql);


?>

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
							echo "<td>" . $row["id_auto"] . "</td>";
                            echo "<td>" . $row["mark"] . "</td>";
							echo "<td>" . $row["model"] . "</td>";
							echo "<td>" . $row["year"] . "</td>";
							echo "<td>" . $row["VIN"] . "</td>";
                            echo "<td> <form action='db/createservice.php' method='post'>
                                    <input type='text' hidden  name='service' value='$_POST[diagnostik]' >
									<input type='text' hidden  name='price' value='$_POST[price]' >
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


