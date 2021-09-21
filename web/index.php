
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Elkris - электромонтажные работы</title>
    <meta name="description" content="Электромонтажные работы в Кирове. Качественное выполнение работы. Официальный сайт компании Элькрис.">
  <link rel="stylesheet" href="style.css">
  <style media="screen">
  ::-webkit-scrollbar-button {
background-image:url('');
background-repeat:no-repeat;
width:100px;
height:0px
}

::-webkit-scrollbar-track {
background-color:black;
}

::-webkit-scrollbar-thumb {
-webkit-border-radius: 0px;
border-radius: 0px;
background-color:#c9c9c9;
}

::-webkit-scrollbar-thumb:hover{
background-color:#8c8c8c;
}

::-webkit-resizer{
background-image:url('');
background-repeat:no-repeat;
width:4px;
height:0px
}

::-webkit-scrollbar{
width: 10px;
}
  .close{
    float: right;
    margin-right: 250px;
    margin-top: -70px;
    width: 96px;
    height: 96px;
    background-image: url(img/close.png);
    border: 0px;
  }
  .pph_ph{
    margin-left: 0px;
    transition: margin-left 0.5s;
  }
  .list_pph{
    width: 350px;
    height: 400px;
    background-color: lightgrey;
    margin-left: 25px;
    padding: 10px;
  }
  .place{
    width: 100%;
    height: 100px;
    margin-top: 5px;
    display: flex;
  }

  .place p{
    font-size: 15px;
    padding-left: 10px;
  }
  .workers{
    width: 1010px;
    margin-left: 150px;
  }
  .worker1{
    width: 500px;
    height: 300px;
    background: lightgrey;
    margin-top: 10px;
  }
  .worker2{
    width: 500px;
    height: 610px;
    float: right;
    margin-left: 10px;
    margin-top: -610px;
    background: lightgrey;
  }
  .adv2{
    margin-left: 150px;

  }
  .adv22{
    width: 500px;
    margin-left: 10px;
    float: left;
  }
  .form2{
    width: 1100px;
    margin-left: 150px;
    margin-top: 400px;
    background: #F3F2F0;
    padding-left: 50px;
    padding-top: -10px;
  }
  .input2{
    margin-left: 510px;
    margin-top: -233px;
  }
  .footer{
    height: 150px;
  }
  .footer img{
    position: relative;
    top: -80px;
    left: 150px;
  }
  .footer p{
    padding-left: 450px;
    padding-top: 30px;
  }
  .vk{
    width: 50px;
    height: 50px;
    position: relative;
    margin-left: 500px;
  }
  </style>
  </head>
  <body>
<?php require 'header.html'; ?>

    <h1 class="heading">Электромонтажные работы в Кирове</h1>
    <div class="i">
      <p>Фирма Элькрис делает высококачественный починка квартир в Кирове и Кировской области.
Диапазон наших предложений, навык и компетентность мастеров
дают возможность с высочайшим качеством выполнить <br>безусловно все внутренние отделочные работы в вашей жилплощади и не только.</p>
    </div>




<center><div class="slider">
  <div class="phs1" id="phs1">
    <img src="img/places/ph1.jpg" class="ph_img" width="420px" height="660px" alt="">
    <img src="img/places/ph2.jpg" class="ph_img" width="420px" height="660px" alt="">
  </div>
  <div class="phs2" id="phs2">
    <img src="img/places/ph3.jpg" class="ph_img" width="420px" height="660px" alt="">
    <img src="img/places/ph4.jpg" class="ph_img" width="420px" height="660px" alt="">
  </div>
  <button type="button" class="left" onclick="left()" id="arrow" name="button"><</button>
  <button type="button" class="right" onclick="right()" id="arrow2" name="button">></button>
</div></center>
<br><br><br><br>
<h1 class="heading">Наши преимущества</h1>
<div class="advs">
  <div class="adv">
    <h2>Приемущство1</h2>
  </div>
  <div class="adv">
    <h2>Приемущство2</h2>
  </div>
  <div class="adv">
    <h2>Приемущство3</h2>
  </div>
  <div class="adv">
    <h2>Приемущство4</h2>
  </div>
</div>

<div class="pph">
  <h1>Портфолио выполненных работ</h1>
  <p>Предлагаем ознакомиться с фотографиями работ квартир, электромонтажная работа которых <br>выполнена нашей компанией.</p>
  <div style="display: flex;">
    <div class="slider2">
      <div class="pph_ph" id="pph_ph">
        <img src="img/places/ph21.jpg" id="pph1" width="660px" height="420px" alt="">
      </div>
      <div class="pph_ph" id="pph_ph">
        <img src="img/places/ph22.jpg" id="pph2" width="660px" height="420px" alt="">
      </div>
      <div class="pph_ph" id="pph_ph">
        <img src="img/places/ph23.jpg" id="pph3" width="660px" height="420px" alt="">
      </div>
      <div class="pph_ph" id="pph_ph">
        <img src="img/places/ph24.jpg" id="pph4" width="660px" height="420px" alt="">
      </div>
    </div>

    <div class="list_pph">
      <a href="javascript:pph1()">
      <div class="place" onclick="pph1()">
        <img src="img/places/ph21.jpg" id="p1" width="150px" height="80px" alt="">
        <p>Электрика первого <br>этажа коттеджа в Радужном</p>
      </div>
      </a>
      <a href="javascript:pph2()">
      <div class="place">
        <img src="img/places/ph31.jpg" id="p2" width="145px" height="80px" alt="">
        <p>Электрика в подвале <br>коттеджа в Радужном.</p>
      </div>
      </a>
      <a href="javascript:pph3()">
      <div class="place">
        <img src="img/places/ph41.jpg" id="p3" width="145px" height="80px" alt="">
        <p>Трешка в европейских <br>улочках. <br>Сделано за четыре дня.</p>
      </div>
      </a>
    </div>

  </div>

  </div>
<button type="button" class="left2" onclick="left2()" id="arrow3" name="button"><</button>
<button type="button" class="right2" onclick="right2()" id="arrow4" name="button">></button>

<div class="workers">
  <h1>Ремонт выполняется специализированными бригадами</h1>
  <p>
    Электромонтажные работы квартиры выполняется
    бригадами с узкой специализацией.<br>
    Благодаря этому мы всегда обеспечиваем высокий уровень
    на всех этапах и качественный результат.<br>
    Все специалисты нашей компании являются гражданами РФ.
    Ниже представлены фото наших мастеров в процессе работы.
  </p>

<div class="worker1"></div>
<div class="worker1"></div>
<div class="worker2"></div>
</div>

<div class="adv2">
  <h1>Преимущества работы с генеральным подрядчиком</h1>
  <div class="adv22">
    <h2>1. — Ответственность</h2>
    <p>
Вы получите гарантии и ответственность за ВСЕ<br> выполненные
 в процессе евроремонта работы <br>в одном лице и сможете избежать
 рисков,<br>
связанных со скрытыми техническими дефектами.<br>
    </p>
  </div>
  <div class="adv22">
    <h2>2. — Управление</h2>
    <p>
      Мы эффективно управляет ВСЕМ производственным<br>
      процессом, учитываем все влияющие друг на друга<br>
      нюансы проведения различных работ <br>- это положительно
      влияет на качество и сроки.<br>

    </p>

  </div>
  <div class="adv22">
    <h2>3. — Обратная связь</h2>
    <p>
По всем вопросам Вас будет консультировать<br>
ответственный руководитель проекта.
</p>

  </div>
  <div class="adv22">
    <h2>4. — Полная картина</h2>
    <p>
Как генеральный подрядчик мы имеем глобальное<br>
представление о предстоящих и текущих процессах,<br>
этапах отделки, и конечном результате.<br>
У исполнителя конкретных<br>
работ такого понимания нет.
</p>

  </div>
</div>

<div class="form2"><br>
  <h1>Заявка на расчет стоимости ремонта</h1>
  <form class="" action="index.html" method="post">
    <input type="text" class="input" name="" placeholder="Имя" required><br><br>
    <textarea name="name" class="textarea" placeholder="Описание проекта" rows="8" cols="80" required></textarea><br><br>
    <input type="submit" class="send_bt" name="" value="Отправить"><br>
    <input type="tel" class="input input2" name="" placeholder="Телефон" required>
  </form>
</div>

<hr>
<div class="footer">
<p>
Улица Пугачёва, 3, Киров<br>
Офис: 45-45-24<br>
E-mail: 45-45-24@mail.ru
</p>
<a href="/"><img src="img/heading.png" alt=""></a>
<a href="https://vk.com/public180826580" target="_blank"><img src="img/vk.png" class="vk" alt=""></a>

</div>
<center><p>2021 - 2021</p></center>

<script type="text/javascript">
function p1() {

}
function pph1() {
document.getElementById('pph1').src = 'img/places/ph21.jpg'
document.getElementById('pph2').src = 'img/places/ph22.jpg'
document.getElementById('pph3').src = 'img/places/ph23.jpg'
document.getElementById('pph4').src = 'img/places/ph24.jpg'
}
function pph2() {
  document.getElementById('pph1').src = 'img/places/ph31.jpg'
  document.getElementById('pph2').src = 'img/places/ph32.jpg'
}
function pph3() {
  document.getElementById('pph1').src = 'img/places/ph41.jpg'
  document.getElementById('pph2').src = 'img/places/ph42.jpg'
  document.getElementById('pph3').src = 'img/places/ph43.jpg'
  document.getElementById('pph4').src = 'img/places/ph44.jpg'
}

  var page1 = 1
  var pos_page = 0
  function left2() {
    if (page1 != 1){
      pos_page = pos_page + 660
      ob = document.getElementById('pph_ph').style = 'margin-left: ' + pos_page + 'px;';
      page1 = page1 - 1
    }
  }
  function right2() {
    if (page1 != 4){
      pos_page = pos_page - 660
      ob = document.getElementById('pph_ph').style = 'margin-left: ' + pos_page + 'px;'
      page1 = page1 + 1
    }
  }
  function left() {
    document.getElementById('phs1').style = "margin-left: 0px;";
    document.getElementById('phs2').style = "margin-left: 850px;";
  }
  function right() {
    document.getElementById('phs1').style = "margin-left: -1700px;";
    document.getElementById('phs2').style = "margin-left: 0px;";
  }



</script>

  </body>
</html>
