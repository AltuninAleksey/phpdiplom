    <?php
        include "nav.php";
    ?>
    <div class="background">   
    <title>Калькулятор</title>
    <div class="container">
         
        <form action="ChoseAutoCalculate.php" method="POST">
           <h4> Выберите страну производителя автомобиля :</h4> <br>

            <input type="radio"  id="inomarka" name='country' value='1.5'>Иномарка    
            <input type="radio"  id="russian"  name='country' value='1.2'>Отечественный<br><br><br>
         
            <h5>Выберите необходимый перечень работ</h5> <br>
            <input type="checkbox" id="filter" name='filter'value='200'>Замены фильтра<br>
            <input type="checkbox" id="oil" name='antifreze'value='1200'>Замены масла<br>
            <input type="checkbox" id="antifreze" name='antifreze'value='1500'>Замена антифриз<br>
            <div class="text_result" id="text_result" name='result' >0 рублей</div>
     
<?php
    
    if($_COOKIE['user']!=""):
       echo"<br> <button type='submit'> Оформить заказ</button>";
    else:          
        echo"<br>создание заказа доступно только авторизованным пользователям 
        </form>" ;
    endif;
    echo "</div>
    </form>";
    include "foother.php";
?>

    <script>
        let inomarka,filter,oil,antifreze,russian;
        
        inomarka=document.getElementById("inomarka")
        russian=document.getElementById("russian")
        let value_machine=0;

        filter=document.getElementById("filter")
        let value_filter=0;
        oil=document.getElementById("oil")
        let value_oil=0;
        antifreze=document.getElementById("antifreze")
        let value_antifreze=0;


        let result = document.getElementById('text_result');
        let radio= document.querySelectorAll("input");

        
        radio.forEach(i => i.addEventListener('change', (event) => {    
            handleOnChange(event)
        }))

        const handleOnChange = (e) => {
            result.value=0
             
            if(filter.checked){
                value_filter=200;
            }
            else{
                value_filter=0
            }
            if(oil.checked){
                value_oil=1200;
            }
            else{
                value_oil=0
            }
            if(antifreze.checked){
                value_antifreze=1500;
            }
            else{
                value_antifreze=0
            }
            if(inomarka.checked){
                value_machine=1.5;
            }
            if(russian.checked){
                value_machine=1.2;
            }
          
            result.textContent="Примерная стоимость : "+value_machine*(value_filter+value_oil+value_antifreze)+" рублей"
            
        }
    </script>
