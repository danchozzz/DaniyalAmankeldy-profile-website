<!DOCTYPE html>
<html lang="ru">

<head>
   <link rel="stylesheet" href="css/gallery.css">
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



/* Header */
.header {
   background-color: grey;
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
   color: #855919;
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
   color: #855919;
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


/* --------------------------- */

.product-icons img {
    height: 200px; 
    display: block; 
    cursor: pointer;
    opacity: .6;
     padding: 10px;
}

.product-icons img:hover {
    opacity:1;
}

.product-icons {
   padding-top: 250px;
    float: left;
}

.img-container img {
    height: 522px;
    display: block;
    margin: 0 auto;
    padding: 10px;
}

.img-container {
    float: left;
    margin: 10px;
    width: 700px;
}

.product {
    margin: 30px;
}

.containerr {
   padding-top: 250px;
}</style>
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

   <div class="product">
      <div class="container">

         <div class="product-icons" >
            <img src="img/1.jpg">
            <img src="img/2.jpg">
            <img src="img/3.jpg">
         </div>

         <div class="containerr">
            <div class="img-container">
               <img src="img/6.jpg" id="bigImg">
               <p style="width: 100%;">Біздің заманымызға дейінгі 4-3 ғасырларда Қытайдың солтүстігі мен Орталық Азия жерін мекендеген тайпалық бірлестік ғұндар деп аталды. Олар көшпелі, жауынгер халық болған. Ғұндардың кезінде патриархалды-рулық қарым-қатынастық белгілері өте күшті болды. Ғұндар ішінара 24 руға бөлінген және әр рудың басында ағамандар тұрған. Сол уақытта ағамандар кеңесі мен халық жиналысы жұмыс істеген. Сонымен бірге, ғұндар әскери тұтқындардан тұратын құлдар ұстаған.</p>
            </div>
         </div>
         

      </div>
      
   </div>
   

   <script>
      function showImg(event) {
         event = event || window.event;
         var iconImg = event.Target || event.srcElement; 
         if (iconImg.tagName == "IMG") { 
            document.getElementById("bigImg").src = iconImg.getAttribute('src');  
         }
      }
   </script>
   
</body>
</html>