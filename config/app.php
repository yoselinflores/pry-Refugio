<?php

const APP_URL="http://localhost/pry-Refugio/";
const APP_NAME="Refugio";
const APP_SESSION_NAME="Refugio";

date_default_timezone_set("America/Mexico_City");
?>

<div class="slider-frame">

    <div id="slider-frame" class="slider-frame">
        <div class="item-1">
            <img src="<?php echo APP_URL;?> app/views/img/perros.jpeg" alt="perros">
        </div>

        <div class="item-2">
            <img src="<?php echo APP_URL;?> app/views/img/gatos.jpeg" alt="gatos">
        </div>

        <div class="item-3">
            <img src="<?php echo APP_URL;?> app/views/img/animal.jpeg" alt="animal">
        </div>

        <div class="item-4">
            <img src="<?php echo APP_URL;?> app/views/img/cuidado.jpeg" alt="cuidado">
        </div>
</div>

<script>
bulbacarrusel.attach('slider-frame'){
    background-color: rgb(153, 98, 204);

}
.letras{
    
    color: rgba(53, 5, 244, 0.993);
}
.slider-frame{
    width: 1280px;
    height: auto;
    margin: 50px auto 0;
    overflow: hidden;

}
.slider-frame ul{
    display: flex;
    padding: 0;
    width: 400%;
    animation: slide 15s infinite alternate ease-in-out;
   

}
.slider-frame li{
    list-style: none;
    width: 100%;
    text-align: center;

}
.slider-frame li img{
    margin-top: auto;
    width: 80%;
    height: auto;/*Mantener la proporcion original*/
}
.slider-frame img{
    width: 100%;
}

@keyframes slide{
    0%{margin-left: 0%;}
    20%{margin-left: 0%;}

    25%{margin-left: -100%;}
    45%{margin-left: -100%;}

    50%{margin-left: -200%;}
    70%{margin-left: -200%;}

    75%{margin-left: -300%;}
    95%{margin-left: -300%;}
    }

</script>
  
  