<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Subtle Scroll - A study of Shadows</title>
    <link rel = "stylesheet" type = "text/css" href = "https://fonts.googleapis.com/css?family=Ubuntu+Condensed"/>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>


    <section class="pages" id="blue-white">

    <span class = "pageNumber" style = "color:#fff;">1</span>

            <nav class = "scrollNav" style = "border: 1px solid #fff; color #fff;" id = "navBlue" data-class="shadowTopBlue,shadowBottomBlue,shadowBlue">

            <article class = "articleWhite" ><span><a class = "labProject" href = "#"> A </a> </span></article>
            <article class = "articleWhite" ><span><a class = "labProject" href = "#"> B </a> </span></article>
            <article class = "articleWhite" ><span><a class = "labProject" href = "#"> C </a> </span></article>
            <article class = "articleWhite" ><span><a class = "labProject" href = "#"> D </a> </span></article>
            <article class = "articleWhite" ><span><a class = "labProject" href = "#"> E </a> </span></article>
            <article class = "articleWhite" ><span><a class = "labProject" href = "#"> F </a> </span></article>
            <article class = "articleWhite" ><span><a class = "labProject" href = "#"> G </a> </span></article>
            <article class = "articleWhite" ><span><a class = "labProject" href = "#"> H </a> </span></article>

        </nav>


    </section>
    <section class="pages" id="white-black">
    
    <span class = "pageNumber">2</span>
        
        <nav class = "scrollNav" style = "border: 1px solid #222; color #222;" id = "navBlack" data-class="shadowTopBlack,shadowBottomBlack,shadowBlack">

            <article class = "articleBlack" ><span><a class = "labProject" href = "#"> A </a> </span></article>
            <article class = "articleBlack" ><span><a class = "labProject" href = "#"> B </a> </span></article>
            <article class = "articleBlack" ><span><a class = "labProject" href = "#"> C </a> </span></article>
            <article class = "articleBlack" ><span><a class = "labProject" href = "#"> D </a> </span></article>
            <article class = "articleBlack" ><span><a class = "labProject" href = "#"> E </a> </span></article>
            <article class = "articleBlack" ><span><a class = "labProject" href = "#"> F </a> </span></article>
            <article class = "articleBlack" ><span><a class = "labProject" href = "#"> G </a> </span></article>
            <article class = "articleBlack" ><span><a class = "labProject" href = "#"> H </a> </span></article>

        </nav>

    </section>
    <section class="pages" id="pink-white">
    
    <span class = "pageNumber" style = "color:#fff;">3</span>
     
        <nav class = "scrollNav" style = "border: 1px solid #fff; color #fff;" id = "navWhite" data-class="shadowTopPink,shadowBottomPink,shadowPink">

            <article class = "articleWhite" ><span><a class = "labProject" href = "#"> A </a> </span></article>
            <article class = "articleWhite" ><span><a class = "labProject" href = "#"> B </a> </span></article>
            <article class = "articleWhite" ><span><a class = "labProject" href = "#"> C </a> </span></article>
            <article class = "articleWhite" ><span><a class = "labProject" href = "#"> D </a> </span></article>
            <article class = "articleWhite" ><span><a class = "labProject" href = "#"> E </a> </span></article>
            <article class = "articleWhite" ><span><a class = "labProject" href = "#"> F </a> </span></article>
            <article class = "articleWhite" ><span><a class = "labProject" href = "#"> G </a> </span></article>
            <article class = "articleWhite" ><span><a class = "labProject" href = "#"> H </a> </span></article>

        </nav>
        
    </section>
    <section class="pages" id="pop-colors">
    
    <span class = "pageNumber" style = "color:#ed1b24;">4</span>
    
        <nav class = "scrollNav" style = "border: 1px solid #0068f6; color #FF3B27;" id = "navPop" data-class="shadowTopPOP,shadowBottomPOP,shadowPOP">

            <article class = "articlePOP" ><span><a class = "labProject" href = "#"> A </a> </span></article>
            <article class = "articlePOP" ><span><a class = "labProject" href = "#"> B </a> </span></article>
            <article class = "articlePOP" ><span><a class = "labProject" href = "#"> C </a> </span></article>
            <article class = "articlePOP" ><span><a class = "labProject" href = "#"> D </a> </span></article>
            <article class = "articlePOP" ><span><a class = "labProject" href = "#"> E </a> </span></article>
            <article class = "articlePOP" ><span><a class = "labProject" href = "#"> F </a> </span></article>
            <article class = "articlePOP" ><span><a class = "labProject" href = "#"> G </a> </span></article>
            <article class = "articlePOP" ><span><a class = "labProject" href = "#"> H </a> </span></article>

        </nav>
    

    </section>




    <script src="scroll.js"></script>

    <script>
    /*
        subtleScroll('#navBlack');
        subtleScroll('#navWhite');
        subtleScroll('#navBlue');
        subtleScroll('#navPop');


    */

    var navs = document.querySelectorAll('.scrollNav');

    //console.log( "#" + navs[0].getAttribute('id') );

    for( var k = 0; k < navs.length; k++ ){


        subtleScroll( "#" + navs[k].getAttribute('id') );

    }

    </script>

</body>

</html>