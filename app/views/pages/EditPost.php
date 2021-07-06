<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/editStyle.less">
    <title>Edit</title>
</head>
<body>
<nav class="menu">
    <header>Menu <span>×</span></header>
    <ol>
        <li class="menu-item"><a href="#0">Home</a></li>
        <li class="menu-item"><a href="#0">About</a></li>
        <li class="menu-item">
            <a href="#0">Widgets</a>
            <ol class="sub-menu">
                <li class="menu-item"><a href="#0">Big Widgets</a></li>
                <li class="menu-item"><a href="#0">Bigger Widgets</a></li>
                <li class="menu-item"><a href="#0">Huge Widgets</a></li>
            </ol>
        </li>
        <li class="menu-item">
            <a href="#0">Kabobs</a>
            <ol class="sub-menu">
                <li class="menu-item"><a href="#0">Shishkabobs</a></li>
                <li class="menu-item"><a href="#0">BBQ kabobs</a></li>
                <li class="menu-item"><a href="#0">Summer kabobs</a></li>
            </ol>
        </li>
        <li class="menu-item"><a href="#0">Contact</a></li>
    </ol>
    <footer><button aria-label="Toggle Menu">Toggle</button></footer>
</nav>


 <script >var $els = $('.menu a, .menu header');
var count = $els.length;
var grouplength = Math.ceil(count/3);
var groupNumber = 0;
var i = 1;
$('.menu').css('--count',count+'');
$els.each(function(j){
    if ( i > grouplength ) {
        groupNumber++;
        i=1;
    }
    $(this).attr('data-group',groupNumber);
    i++;
});

$('.menu footer button').on('click',function(e){
    e.preventDefault();
    $els.each(function(j){
        $(this).css('--top',$(this)[0].getBoundingClientRect().top + ($(this).attr('data-group') * -15) - 20);
        $(this).css('--delay-in',j*.1+'s');
        $(this).css('--delay-out',(count-j)*.1+'s');
    });
    $('.menu').toggleClass('closed');
    e.stopPropagation();
});

// run animation once at beginning for demo
setTimeout(function(){
    $('.menu footer button').click();
    setTimeout(function(){
        $('.menu footer button').click();
    }, (count * 100) + 500 );
}, 1000);</script>   
</body>
</html>