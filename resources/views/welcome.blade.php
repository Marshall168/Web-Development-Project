<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <title>Scott Jones</title>
    </head>
    <body>
    <!-- Nav Section-->

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap');

* {
    padding:0;
    margin: 0;
    box-sizing: border-box;

}

html {
    font-size: 10px;
    font-family: 'Montserrat', sans-serif;
}

a {
    text-decoration: none;
}
.container {
    min-height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}




/* Hero Section */
#hero {
    background-image: url(img/hero.jpeg);
    background-size: cover;
    background-position: top center;
    position: relative;
    z-index: 1;
}

#hero::after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height:100%;
    width:100%;
    background-color: black;
    opacity: .7;
    z-index: -1;
}

#hero .hero{
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 50px;
    justify-content: flex-start;
}

#hero h1{
    display: block;
    width:fit-content;
    font-size: 4rem;
    position: relative;
    color:transparent;
    animation: text_reveal 1.5 ease forwards;
    animation-delay: 1.5s;
}
#hero h1:nth-child(1){
    animation-delay: 1.5s;
}
#hero h1:nth-child(2){
    animation-delay: 2.5s;
}
#hero h1:nth-child(3){
    animation: text_reveal_name .5s ease forwards;
    animation-delay: 3.5s;
}
#hero h1 span{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 0;
    background-color: #F00BE9;
    animation: text_reveal_box 1s ease ;
    animation-delay: 1s;

}

#hero h1:nth-child(1) span{
    animation-delay: 1s;
}
#hero h1:nth-child(2) span{
    animation-delay: 2s;
}
#hero h1:nth-child(3) span{
    animation-delay: 3s;
}

#hero .cta{
    display: inline-block;
    padding: 10px 30px;
    color: white;
    background-color: transparent;
    border: 2px solid #F00BE9;
    font-size: 2rem;
    text-transform: uppercase;
    letter-spacing: .1rem;
    margin-top: 30px;
    transition: .3s ease background-color;
    transition-property: background-color, color;

}
#hero .cta:hover{
    color: white;
    background-color: #F00BE9;
}
/* End Hero Section */



/* Hero Keyframes */
@keyframes text_reveal_box{
    50%{
        width: 100%;
        left: 0;
    }
    100%{
        width: 0%;
        left: 100%;
    }
}

@keyframes text_reveal{
    100%{
        color: white;

    }
}

@keyframes text_reveal_name{
    100%{
        color: #F00BE9;

    }
}
/* End Hero Keyframes */
    </style>

    <!-- End Nav Section-->


    <!-- Hero Section -->
        <section id="hero">
            <div class="hero container">
               <div>
                    <h1>Hello,<span></span></h1>
                   <h1> Welcome to<span></span></h1>
                   <h1> the Network<span></span></h1>
                   <a href="#" type="button" class="cta">Login</a>
               </div>
            </div>
        </section>
    <!-- End Hero Section -->



    <!-- About Section -->
        <section id="about">

        </section>
    <!-- End About Section -->



    </body>
</html>