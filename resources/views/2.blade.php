<!DOCTYPE html>
<html lang="ru">

<head>
   <link rel="stylesheet" href="css/style.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ғұндар</title>
   <style>body {
   margin: 0;
   font-family: 'Montserrat', sans-serif;
   font-size: 15px;
   color: #333;
   line-height: 1.6;
}

*,
*:before,
*:after {
   box-sizing: border-box;
}

h1, h2, h3, h4, h5, h6 {
   margin: 0;
}

/* Container */
.container {
   width: 100%;
   max-width: 1200px;
   margin: 0 auto;
}

/* INtro */
.intro {
   display: flex;
   flex-direction: column;
   justify-content: center;
   width: 100%; 
   height: 100vh;
   background:url("http://2.bp.blogspot.com/-9TQ2lzdq9Fg/U_nH6eGESrI/AAAAAAAAAZA/ZQ3ftUbTs1g/s1600/standoffvers2.jpg") center no-repeat;
   background-size: cover;
   -webkit-background-size: cover;
   
}

.intro__inner {
   width: 100%;
   max-width: 880px;
   margin: 0 auto;
}

.intro__title {
   text-transform: uppercase;
   font-size: 100px;
   text-align: left;
   margin-left: -200px;
   line-height: 1;
   color: #855919 ;
}


/* Header */
.header {
   background-color: grey;
   border: 3px solid white;
   padding-top: 30px;
   padding-bottom: 30px;
   width: 100%;
   position: absolute;
   top: 0;
   left: 0;
   right: 0;
   z-index: 1000;
}

.header__inner {
   display: flex;
   justify-content: space-between;
   align-items: center;
}

.header__logo {
   font-size: 30px;
   font-weight: 700;
   color: #855919 ;
}

.logo {
   padding-left: 20%;
}

/* Menu */
.menu {
   list-style-type: none;
   margin: 0;
   padding: 0;
   overflow: hidden;
}

.menu a {
   text-decoration: none;
   font-family: 'Montserrat', sans-serif;
   font-size: 22px;
   color: #855919 ;
   display: inline-block;
   padding: 10px 20px;
   overflow: hidden;
   text-decoration: none;
   transition: color .1s linear;
}

.menu a:hover {
   color: black;
}

.menu li {
   float: left;
}


/* ---- About page CSS ---- */

/* Intro About page */

.about__intro {
   display: flex;
   width: 100%; 
   height: 100vh;
   background-color: white;
   
}

.about__subtitle {
   padding-top: 20%;
   
   color:#855919 ;
   font-size: 22px;
   font-weight: 900;
}

.about__titles {
   padding-top: 40px;
   color: black;
}

.about__text {
   font-size: 16px;
   font-weight: 600;
   background:grey ;
   color:white;
}
</style>
</head>

<body>
   <header class="header">
      <div class="container">
         <div class="header__inner">

            <div class="header__logo">
               <h1>Тарих<h1>
            </div>


            <div class="nav">
            <ul class="menu">
                  <li><a href=" {{ route('welcome') }} ">Тақырып</a></li>
                  <li><a href="{{ route('2') }}">Ғұндар жайлы</a></li>
                  <li><a href="{{ route('3') }}">Мекендеген жерлері</a></li>
               </ul>
            </div>

         </div>
      </div>
   </header>



   <div class="about__intro">
      <div class="container">

         <div class="about__subtitle">
            <h1>Ғұн мемлекеті</h1>
         </div>

         <div class="about__titles">
            <h1>Тарихы</h1>
         </div>

         <div class="about__text">
            <p>Біздің заманымызға дейін 1 мыңжылдықтың 2-жартысынан бастап Еуразияның этникалық-саяси тарихында Орталық Азияның көшпелі тайпалары ролі артты. Біздің заманымызға дейін 4-3 ғасырларда Қытайдың солтүстігі мен Орталық Азияда ғұндар деген тайпалар бірлестігі (сюнну, дунху) пайда болды. Нақты айтқанда, біздің заманымыздың дейін 209 жылы бой көтеріп, біздің заманымызда 216 жылы дейін дәурен сүрді.</p>
            <p>Шаңырағын көтерген әйгілі Мөде (Мотэ) батыр. Біздің заманымызға дейін 209 жылы Мөде әкесін өлтіріп, таққа ие болады.Осы заманнан бастап, ғұн мемлекеті күшейе бастады (атап айтсақ, біздің заманымызға дейін 188 жылы ғұндар өзіне қытай императоры Гао-Диды бағындырады, хань династиясы ғұндарға салық төлеп тұрғаны белгілі. Юечжи, ловфань, байянь, үйсүн тағы да басқа тайпалардың жерін тартып алады.)Ғұндар Байкалдан Тибетке, Шығыс Түркістаннан Хуанхэ өзеніне дейінгі жерде мемлекет құрды. Оның әскері 300-400 мың болды.</p>
         </div>

         <div class="about__titles">
            <h1>Шаруашылығы</h1>
         </div>

         <div class="about__text">
            <p>Шаруашылық-мәдени типінің негізі - көшпелі мал шаруашылығы. Мал өсіру, әсіресе жылқы өсіру басты рөл атқарды. Сондай-ақ қой өсіру, аң аулау, егіншілік дамыды.Ғұндардың қол өнер кәсібі күшті дамыған (металдан, сүйек пен мүйізден, тас пен саздан, ағаштан, керамикадан жасалды). Сауда дамығандығын жібек маталар, айналар, нефриттен істелген бұйымдар көрсетеді.Олар малдың барлық түрлерін өсірген. Ғұндардың негізгі баспанасы киіз үйлер болған. Ғұндарда бұйымының бетіне түрлі түсті заттарды жапсыру стилі пайда болды, тарихта ол полихромдық стиль деп аталған. Осы стиль Орталық Қазақстанда дамыған. Зерлеу әдісімен пайдаланды. Бұйымдарды безендіру үшін негізгі бейне жабайы аңдар болған.</p>
         </div>

         <div class="about__titles">
            <h1>Егіншілік кəсібі мен қоныстары</h1>
         </div>

         <div class="about__text">
            <p>Ғүндардың ішінде отырықшы тұрмыс кешіп, егіншілікпен шұғылданғандары да болған. Ғұндар дəнді дақылдың ішінде тарыны көп өсірген. Егіншіліктің жақсы дамығанын білдіретін құрал-саймандар табылған. </p>
            <p>Мысалға:</p>
            <ul class="about__text">
               <li>темір орақ</li>
               <li>соқа тістері</li> 
               <li>қол диірмендер</li>
               <li>дəнүккіштер</li>
            </ul>
         </div>

         <br>
         <br>
         <br>

      </div>
   </div>


</body>

</html>