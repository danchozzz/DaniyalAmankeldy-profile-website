<!DOCTYPE html>
<html lang="ru">
<head>
   <link rel="stylesheet" href="css/style.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Профиль</title>
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
   height: 120vh;
   background:url("https://i.pinimg.com/originals/02/1a/a7/021aa72493f24390fc53bb457892f9c9.jpg") center no-repeat;
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
   background-color: #939598;
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
   color: white;
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
               <h1>Daniyal<h1>
            </div>

            

            <div class="nav">
               <ul class="menu">
                  <li><a href=" {{ route('welcome') }} ">Main</a></li>
                  <li><a href="{{ route('2') }}">About me</a></li>
                  <li><a href="{{ route('3') }}">Photo</a></li>
               </ul>
            </div>

         </div>  
      </div>
   </header>



   <div class="intro">
      <div class="container">
         <div class="intro__inner">
            <h1 class="intro__title">Dancho_zzz</h1>
         </div>
      </div>
   </div>

   
</body> 
</html>
