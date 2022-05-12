<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="">

            <input type="checkbox" id="inomarka">Иномарка<br>
            <input type="checkbox" id="filter">Замены фильтра<br>
            <input type="checkbox" id="oil">Замены масла<br>
            <input type="checkbox" id="antifreze">Замена антифризак<br>
            <div class="text_result" id="text_result">0 рублей</div>
        </form>


    <script>

        let inomarka,filter,oil,antifreze;
        
        inomarka=document.getElementById("inomarka")
        let value_inomarka=0;
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
    
            if(inomarka.checked){
                value_inomarka=550;
            }
            else{
                value_inomarka=0
            }
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
            
            
           
            result.textContent=(value_inomarka+value_filter+value_oil+value_antifreze)+" рублей"
            
        }
        
            
     

    </script>
</body>
</html>