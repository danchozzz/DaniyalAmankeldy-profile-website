<!DOCTYPE html>
<html lang="ru">

<head>
   <link rel="stylesheet" href="css/gallery.css">
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



/* Header */
.header {
   background-color: #939598;
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
   color: white;
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
   </header>

   <div class="product">
      <div class="container">

         <div class="product-icons" >
            <img src="https://media-exp1.licdn.com/dms/image/C511BAQE0cVYmg8QN0g/company-background_10000/0/1581481407499?e=2159024400&v=beta&t=tp4fzua9GkgJLUYXf0JEMnIBFCM-wlKKDnIuiqfnJbc">
            <img src="data:image/jpeg;base64,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">
            <img src="https://storage.yvision.kz/images/user/timagoofy/m2d03u71e37lgWJXHKnloQ92SqP7Kg.jpg">
         </div>

         <div class="containerr">
            <div class="img-container">
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnNkgVVcwVcTUR1WNDD545xjoDCzg1G9hP3Q&usqp=CAU" id="bigImg">
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