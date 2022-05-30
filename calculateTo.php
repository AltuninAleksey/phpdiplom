
    <?php
        include "nav.php";
       
    ?>
    <title>Калькулятор</title>
                <div class="container">
                <div class="head">
                    <div class="topblock">
                        <div class="logo"></div>
                        <div class="text">Автосервис где занимаются ремонтом <br>
                         мотоциклов и автомобилей!</div>
                        <div class="map_time">
                            <div class="map">
                                <svg 
                                width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 0C3.14018 0 0 2.92437 0 6.51889C0 10.9798 6.26431 17.5287 6.53102 17.8053C6.78154 18.0651 7.21892 18.0647 7.46898 17.8053C7.73569 17.5287 14 10.9798 14 6.51889C13.9999 2.92437 10.8598 0 7 0ZM7 16.5139C4.89174 14.1817 1.26057 9.58051 1.26057 6.51896C1.26057 3.57167 3.83525 1.17394 7 1.17394C10.1648 1.17394 12.7394 3.57167 12.7394 6.51893C12.7394 9.58062 9.10879 14.181 7 16.5139Z" fill="#BC1515"/>
                                    <path d="M7 3.23909C5.05803 3.23909 3.47816 4.71042 3.47816 6.51893C3.47816 8.32744 5.05807 9.79876 7 9.79876C8.94193 9.79876 10.5218 8.32744 10.5218 6.51893C10.5218 4.71042 8.94193 3.23909 7 3.23909ZM7 8.62482C5.75309 8.62482 4.73873 7.68014 4.73873 6.51893C4.73873 5.35771 5.75313 4.41303 7 4.41303C8.24687 4.41303 9.26127 5.35771 9.26127 6.51893C9.26127 7.68014 8.24687 8.62482 7 8.62482Z" fill="#BC1515"/>
                                </svg>
                                г. Брянск, ул. Власихинская 59г / 15
                                    
                            </div>
                            <div class="time">
                                <svg
                                width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.8 6.3H7.7V4.2C7.7 3.8129 7.3864 3.5 7 3.5C6.6136 3.5 6.3 3.8129 6.3 4.2V7C6.3 7.3871 6.6136 7.7 7 7.7H9.8C10.1871 7.7 10.5 7.3871 10.5 7C10.5 6.6129 10.1871 6.3 9.8 6.3ZM7 12.6C3.9123 12.6 1.4 10.0877 1.4 7C1.4 3.9123 3.9123 1.4 7 1.4C10.0877 1.4 12.6 3.9123 12.6 7C12.6 10.0877 10.0877 12.6 7 12.6ZM7 0C3.1402 0 0 3.1402 0 7C0 10.8598 3.1402 14 7 14C10.8598 14 14 10.8598 14 7C14 3.1402 10.8598 0 7 0Z" fill="#BC1515"/>
                                </svg>
                                Пн-Пт 10:00-19:00  /  Сб 10:00-17:00  /  Вс выходной
                                    
                            </div>

                        </div>
                        <div class="phone">
                            <div class="mobilephone">8(963) 577-44-00</div>
                            <a class="email" href="https://mail.google.com/mail/u/0/?pli=1#inbox?compose=new">
                                <svg
                                width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4574 0H0.542557C0.242935 0 0 0.271508 0 0.60637V12.3936C0 12.7284 0.242935 13 0.542557 13H15.4574C15.757 13 16 12.7284 16 12.3936V0.60637C16 0.271557 15.757 0 15.4574 0ZM14.9149 11.7873H1.08511V1.21274H14.9149V11.7873Z" fill="#BC1515"/>
                                    <path d="M2.50683 4.06913L7.71538 7.65579C7.80262 7.71589 7.90128 7.74592 7.99998 7.74592C8.09868 7.74592 8.19734 7.71589 8.28458 7.65579L13.4931 4.06913C13.7482 3.89348 13.8276 3.51991 13.6705 3.23482C13.5133 2.94973 13.179 2.86095 12.924 3.03665L7.99998 6.42728L3.07604 3.03665C2.82104 2.8611 2.48678 2.94968 2.32952 3.23482C2.17231 3.51986 2.2517 3.89348 2.50683 4.06913Z" fill="#BC1515"/>
                                </svg>                               
                                artem-kazakov@mail.ru</a>
                        </div>
                    </div>
               
                    <div class="botblock">
                        <button onclick="location.href='authorization.php';">  
                        <?php
                    if($_COOKIE['user']==""):
                    
                        echo "авторизация";
                    
                    else:
                        echo "личный кабинет";
                        
                   endif;
                   ?>
                   </button>
                    </div>
                   
         
                
                </div>     
            
        <form action="">
            Выберите производителя автомобиля : <br>

            <input type="checkbox" id="inomarka">Иномарка    
            <input type="checkbox" id="russian">Отечественный<br><br>
         
            Выберите необходимый перечень работ <br>
            <input type="checkbox" id="filter">Замены фильтра<br>
            <input type="checkbox" id="oil">Замены масла<br>
            <input type="checkbox" id="antifreze">Замена антифризак<br>
            <div class="text_result" id="text_result">0 рублей</div>
        </form>
        


<?php
    
    if($_COOKIE['user']!=""):

        ?>

        <button> Оформить заказ</button>
        

        <?php
        
    
    else:
        ?>
        создание заказа доступно только авторизованным пользователям
        
        <?php

       

    endif;
    echo "</div>";
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
          
            result.textContent=value_machine*(value_filter+value_oil+value_antifreze)+" рублей"
            
        }
        
            
     

    </script>
