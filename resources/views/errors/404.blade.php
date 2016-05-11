<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Pankaj Taneja">
    <link rel="shortcut icon" href="index.html">

    <title>404</title>

    <!-- Latest compiled and Bootstrap minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Core CSS -->
    {{--<link href="stylesheets/stylesheet.css" rel="stylesheet">--}}

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ultra' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>

    <style type="text/css">
        body {
            font-family: 'Open Sans',Helvetica,Arial,sans-serif !important;
            font-weight: lighter; !important;
        }

        /*=====================================================
        =            Media Queries for Owl          =
        =====================================================*/
        @media only screen and (max-width : 4000px) {

            .message {
                top: 55%;
            }

            .message  h1{
                margin-top: 7vmin;
                font-size: 27vmin;
                margin-bottom: -5vmin;
            }

            .owl-background {
                width: 50%;
            }

            .moon {
                left: 25%;
            }

            .moon .left{
                left: -40%;
            }

            .moon .right{
                right: -40%;
            }

            .owlmenu {
                display: block;
            }

            .branch {
                border-width: 2vmin 0 2vmin 105vmin;
            }

        }

        @media only screen and (max-width : 795px) {


            .message  h2{
                margin-top: 30px;
            }

            .moon .left{
                left: -40%;
            }

            .moon .right{
                right: -40%;
            }

            .owl-background {
                width: 100%;
            }

            .branch {
                border-width: 2vmin 0 2vmin 100vmin;
            }


        }

        @media only screen and (max-width : 480px) {


            .message  h2{
                margin-top: 35px;
            }

            .owl-background {
                width: 100%;
            }

            .moon .left{
                left: -40%;
            }

            .moon .right{
                right: -40%;
            }

            .owlmenu {
                display: none;
            }

            .branch {
                left: -59vmin;
            }

        }

        .dusk {
            background-color:#010A24;
            overflow:hidden;
        }

        .moon {
            position: absolute;
            height: 52vmin;
            width: 52vmin;
            border-radius: 50%;
            background-color: #fff;
            box-shadow: 0vmin 0vmin 25vmin 1vmin #fff;
            top: 5%;
            transform: translateX(-50%);
            left: 50%;
            z-index: 15;
        }

        .moon .left {
            position: absolute;
            color: #fff;
            font-family: rochester;
            font-weight:600;
            z-index: 5;
            font-size: 35vmin;
            text-shadow: 0vmin 1vmin 15vmin #fff;
        }

        .moon .right {
            position: absolute;
            color: #fff;
            font-family: rochester;
            font-weight:600;
            z-index: 5;
            font-size: 35vmin;
            text-shadow: 0vmin 1vmin 15vmin #fff;
        }

        .message {
            text-align: center;
        }

        .message  h1{
            font-family:ultra;
            color: #FFCD66;
        }

        .message  h2{
            color: #fff;
            font-size: 7.5vmin;
            font-weight:600;
            margin-bottom:0px;

        }

        .message  p {
            font-size: 2.5vmin;
            color: #8B9DA6;
            margin-top: 5vmin;
            margin-bottom: 1vmin;
        }





        /* OWL */


        .owl-background {
            height: 57vmin;
        }

        .owl {
            position: absolute;
            top: 4%;
            left: 50%;
            transform: scale(0.75, 0.75) translateX(-70%);
            -ms-transform: scale(0.75, 0.75) translateX(-70%); /* IE 9 */
            -webkit-transform: scale(0.75, 0.75) translateX(-70%); /* Safari and Chrome */
            -o-transform: scale(0.75, 0.75) translateX(-70%); /* Opera */
            -moz-transform: scale(0.75, 0.75) translateX(-70%); /* Firefox */
            z-index: 16;
        }

        .owl-body {
            width: 30vmin;
            height: 46vmin;
            background-color: #FFEAA8;
            -webkit-border-radius: 0% 0% 35% 35%;
            border-radius: 0% 0% 35% 35%;
        }

        .owl-head {
            background-color: #FFEAA8;
            height: 8vmin;
            width: 100%;
        }

        .ears {
            background-color: #fff;
            height: 100%;
            border-radius: 0% 0% 90% 90%;
        }

        .nose {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
            margin: auto;
            top: 16vmin;
            width: 0;
            height: 0;
            z-index: 1;
            border-style: solid;
            border-width: 3vmin 2vmin 0 2vmin;
            border-color: #B87F0A transparent transparent transparent;
        }

        .owl-eyes {
            height: 30%;
            width: 100%;
            position: relative;
            top: 5%;
            display: -webkit-box;
            display: -moz-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: box;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -o-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -moz-box-pack: center;
            -o-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
        }

        .feet {
            bottom: 0;
            position: absolute;
            width: 100%;
            z-index: 10;
        }

        .foot1{
            background: #B87F0A;
            height: 5vmin;
            width: 3vmin;
            border-radius: 5vmin;
            display: inline-block;
            position: relative;
            left: 6vmin;
            box-shadow: 3vmin 0vmin 0vmin 0vmin #B87F0A;
        }

        .foot2 {
            background: #B87F0A;
            height: 5vmin;
            width: 3vmin;
            border-radius: 5vmin;
            display: inline-block;
            position: relative;
            left: 14vmin;
            box-shadow: 3vmin 0vmin 0vmin 0vmin #B87F0A;
        }

        .branch {
            z-index: 5;
            position: absolute;
            top: 91%;
            width: 0;
            height: 0;
            border-style: solid;
            border-color: transparent transparent transparent #693E05;
            transform: translateX(-50%);
            left: 50%;
        }

        .owleye {
            position: relative;
            overflow: hidden;
            text-align: center;
            width: 2vmin;
            height: 2vmin;
            border: 3vmin solid #FFFCE8;
            padding: 4.5vmin;
            border-radius: 50%;
            box-sizing: border-box;
            margin: 2em auto;
        }

        .owleye.inner {
            position: absolute;
            background: #FFCD66;
            padding: 0;
            width: auto;
            height: auto;
            border: none;
            margin: 0;
            left: 1%;
            right: 1%;
            bottom: 1%;
            top: 1%;
        }

        .owleye.inner-2 {
            left: 25%;
            right: 25%;
            bottom: 25%;
            top: 26%;
            background: rgb(102, 102, 102);
            border: 1px solid #FFCD66;
        }

        .eyelid {
            position: absolute;
            height: 50%;
            left: 0;
            right: 0;
            background: #ddd;
            transition: margin 0.15s ease;
        }

        .eyelid.top {
            top: 0;
            border-bottom: .6vmin solid #aaa;
            border-radius: 200px 200px 0 0;
        }

        .eyelid.bottom {
            bottom: 0;
            border-radius: 0 0 200px 200px;
            margin-bottom: -50%;
            -webkit-animation: blink 4s ease-in-out infinite;
            animation: blink 4s ease-in-out infinite;
        }

        /* The animation code */

        @keyframes blink {
            0% {margin-bottom: -50%;}
            3% {margin-bottom: 0%;}
            6% {margin-bottom: -50%;}
            100% {margin-bottom: -50%;}
        }

        @-webkit-keyframes blink {
            0% {margin-bottom: -50%;}
            3% {margin-bottom: 0%;}
            6% {margin-bottom: -50%;}
            100% {margin-bottom: -50%;}
        }

        .wing1 {
            z-index: -2;
            right: 21vmin;
            top: 15vmin;
            position: absolute;
            width: 20vmin;
            height: 35vmin;
            background-color: #885E09;
            -moz-border-radius: 20vmin 0px 20vmin 0px;
            -webkit-border-radius: 20vmin 0px 20vmin 0px;
            border-radius: 20vmin 0px 20vmin 0px;
            transform-origin: 100% 0%;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
            -webkit-transform: rotate(-16deg);
            -moz-transform: rotate(-16deg);
            -o-transform: rotate(-16deg);
            -ms-transform: rotate(-16deg);
            transform: rotate(-16deg);

        }

        .wing2 {
            z-index: -2;
            right: 21vmin;
            top: 15vmin;
            position: absolute;
            width: 20vmin;
            height: 35vmin;
            background-color: #986F1E;
            -moz-border-radius: 20vmin 0px 20vmin 0px;
            -webkit-border-radius: 20vmin 0px 20vmin 0px;
            border-radius: 20vmin 0px 20vmin 0px;
            transform-origin: 100% 0%;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
            -webkit-transform: rotate(-16deg);
            -moz-transform: rotate(-16deg);
            -o-transform: rotate(-16deg);
            -ms-transform: rotate(-16deg);
            transform: rotate(-16deg);

        }

        .wing3 {
            z-index: -2;
            right: 21vmin;
            top: 15vmin;
            position: absolute;
            width: 20vmin;
            height: 35vmin;
            background-color: #A37E34;
            -moz-border-radius: 20vmin 0px 20vmin 0px;
            -webkit-border-radius: 20vmin 0px 20vmin 0px;
            border-radius: 20vmin 0px 20vmin 0px;
            transform-origin: 100% 0%;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
            -webkit-transform: rotate(-16deg);
            -moz-transform: rotate(-16deg);
            -o-transform: rotate(-16deg);
            -ms-transform: rotate(-16deg);
            transform: rotate(-16deg);

        }

        .wing4 {
            z-index: -2;
            right: 21vmin;
            top: 15vmin;
            position: absolute;
            width: 20vmin;
            height: 35vmin;
            background-color: #B08E4B;
            -moz-border-radius: 20vmin 0px 20vmin 0px;
            -webkit-border-radius: 20vmin 0px 20vmin 0px;
            border-radius: 20vmin 0px 20vmin 0px;
            transform-origin: 100% 0%;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
            -webkit-transform: rotate(-16deg);
            -moz-transform: rotate(-16deg);
            -o-transform: rotate(-16deg);
            -ms-transform: rotate(-16deg);
            transform: rotate(-16deg);

        }

        .wing5 {
            z-index: -2;
            right: 21vmin;
            top: 15vmin;
            position: absolute;
            width: 20vmin;
            height: 35vmin;
            background-color: #BA9D64;
            -moz-border-radius: 20vmin 0px 20vmin 0px;
            -webkit-border-radius: 20vmin 0px 20vmin 0px;
            border-radius: 20vmin 0px 20vmin 0px;
            transform-origin: 100% 0%;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
            -webkit-transform: rotate(-16deg);
            -moz-transform: rotate(-16deg);
            -o-transform: rotate(-16deg);
            -ms-transform: rotate(-16deg);
            transform: rotate(-16deg);

        }

        .wing6 {
            z-index: -2;
            right: 21vmin;
            top: 15vmin;
            position: absolute;
            width: 16vmin;
            height: 38vmin;
            background-color: #CDB482;
            -moz-border-radius: 20vmin 0px 20vmin 0px;
            -webkit-border-radius: 20vmin 0px 20vmin 0px;
            border-radius: 20vmin 0px 20vmin 0px;
            transform-origin: 100% 0%;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
            -webkit-transform: rotate(-15deg);
            -moz-transform: rotate(-15deg);
            -o-transform: rotate(-15deg);
            -ms-transform: rotate(-15deg);
            transform: rotate(-15deg);

        }

        .wing7 {
            z-index: -2;
            left: 21vmin;
            top: 15vmin;
            position: absolute;
            width: 20vmin;
            height: 35vmin;
            background-color: #885E09;
            -moz-border-radius: 0px 20vmin 0px 20vmin;
            -webkit-border-radius: 0px 20vmin 0px 20vmin;
            border-radius: 0px 20vmin 0px 20vmin;
            transform-origin: 0% 0%;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
            -webkit-transform: rotate(12deg);
            -moz-transform: rotate(12deg);
            -o-transform: rotate(12deg);
            -ms-transform: rotate(12deg);
            transform: rotate(12deg);

        }


        .wing8 {
            z-index: -2;
            left: 21vmin;
            top: 15vmin;
            position: absolute;
            width: 20vmin;
            height: 35vmin;
            background-color: #986F1E;
            -moz-border-radius: 0px 20vmin 0px 20vmin;
            -webkit-border-radius: 0px 20vmin 0px 20vmin;
            border-radius: 0px 20vmin 0px 20vmin;
            transform-origin: 0% 0%;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
            -webkit-transform: rotate(12deg);
            -moz-transform: rotate(12deg);
            -o-transform: rotate(12deg);
            -ms-transform: rotate(12deg);
            transform: rotate(12deg);

        }

        .wing9 {
            z-index: -2;
            left: 21vmin;
            top: 15vmin;
            position: absolute;
            width: 20vmin;
            height: 35vmin;
            background-color: #A37E34;
            -moz-border-radius: 0px 20vmin 0px 20vmin;
            -webkit-border-radius: 0px 20vmin 0px 20vmin;
            border-radius: 0px 20vmin 0px 20vmin;
            transform-origin: 0% 0%;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
            -webkit-transform: rotate(12deg);
            -moz-transform: rotate(12deg);
            -o-transform: rotate(12deg);
            -ms-transform: rotate(12deg);
            transform: rotate(12deg);

        }

        .wing10 {
            z-index: -2;
            left: 21vmin;
            top: 15vmin;
            position: absolute;
            width: 20vmin;
            height: 35vmin;
            background-color: #B08E4B;
            -moz-border-radius: 0px 20vmin 0px 20vmin;
            -webkit-border-radius: 0px 20vmin 0px 20vmin;
            border-radius: 0px 20vmin 0px 20vmin;
            transform-origin: 0% 0%;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
            -webkit-transform: rotate(12deg);
            -moz-transform: rotate(12deg);
            -o-transform: rotate(12deg);
            -ms-transform: rotate(12deg);
            transform: rotate(12deg);

        }

        .wing11 {
            z-index: -2;
            left: 21vmin;
            top: 15vmin;
            position: absolute;
            width: 20vmin;
            height: 35vmin;
            background-color: #BA9D64 ;
            -moz-border-radius: 0px 20vmin 0px 20vmin;
            -webkit-border-radius: 0px 20vmin 0px 20vmin;
            border-radius: 0px 20vmin 0px 20vmin;
            transform-origin: 0% 0%;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
            -webkit-transform: rotate(12deg);
            -moz-transform: rotate(12deg);
            -o-transform: rotate(12deg);
            -ms-transform: rotate(12deg);
            transform: rotate(12deg);

        }


        .wing12 {
            z-index: -2;
            left: 21vmin;
            top: 15vmin;
            position: absolute;
            width: 16vmin;
            height: 38vmin;
            background-color: #CDB482;
            -moz-border-radius: 0px 20vmin 0px 20vmin;
            -webkit-border-radius: 0px 20vmin 0px 20vmin;
            border-radius: 0px 20vmin 0px 20vmin;
            transform-origin: 0% 0%;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
            -webkit-transform: rotate(13deg);
            -moz-transform: rotate(13deg);
            -o-transform: rotate(13deg);
            -ms-transform: rotate(13deg);
            transform: rotate(13deg);

        }

        .owl:hover  .wing1{
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);

        }

        .owl:hover  .wing2{
            -webkit-transform: rotate(35deg);
            -moz-transform: rotate(35deg);
            -o-transform: rotate(35deg);
            -ms-transform: rotate(35deg);
            transform: rotate(35deg);
        }

        .owl:hover  .wing3{
            -webkit-transform: rotate(25deg);
            -moz-transform: rotate(25deg);
            -o-transform: rotate(25deg);
            -ms-transform: rotate(25deg);
            transform: rotate(25deg);
        }

        .owl:hover  .wing4{
            -webkit-transform: rotate(15deg);
            -moz-transform: rotate(15deg);
            -o-transform: rotate(15deg);
            -ms-transform: rotate(15deg);
            transform: rotate(15deg);
        }

        .owl:hover  .wing5{
            -webkit-transform: rotate(5deg);
            -moz-transform: rotate(5deg);
            -o-transform: rotate(5deg);
            -ms-transform: rotate(5deg);
            transform: rotate(5deg);
        }

        .owl:hover  .wing6{
            -webkit-transform: rotate(2deg);
            -moz-transform: rotate(2deg);
            -o-transform: rotate(2deg);
            -ms-transform: rotate(2deg);
            transform: rotate(2deg);
        }

        .owl:hover  .wing7{
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .owl:hover  .wing8{
            -webkit-transform: rotate(-35deg);
            -moz-transform: rotate(-35deg);
            -o-transform: rotate(-35deg);
            -ms-transform: rotate(-35deg);
            transform: rotate(-35deg);
        }

        .owl:hover  .wing9{
            -webkit-transform: rotate(-25deg);
            -moz-transform: rotate(-25deg);
            -o-transform: rotate(-25deg);
            -ms-transform: rotate(-25deg);
            transform: rotate(-25deg);
        }

        .owl:hover  .wing10{
            -webkit-transform: rotate(-15deg);
            -moz-transform: rotate(-15deg);
            -o-transform: rotate(-15deg);
            -ms-transform: rotate(-15deg);
            transform: rotate(-15deg);
        }

        .owl:hover  .wing11{
            -webkit-transform: rotate(-5deg);
            -moz-transform: rotate(-5deg);
            -o-transform: rotate(-5deg);
            -ms-transform: rotate(-5deg);
            transform: rotate(-5deg);
        }

        .owl:hover  .wing12{
            -webkit-transform: rotate(-2deg);
            -moz-transform: rotate(-2deg);
            -o-transform: rotate(-2deg);
            -ms-transform: rotate(-2deg);
            transform: rotate(-2deg);
        }

        .owl:hover  .eyelid{
            position: relative;
        }

        .btndiv {
            height:100px;
            margin-top:10px;
            margin-bottom:0px;
        }

        .btnpop {
            background: #3777c4;
            position: relative;
            padding: 15px 40px;
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            border-bottom: 5px solid #1462BD;
            color: white;
            font-size: 25px;
            vertical-align: middle;
            -webkit-border-radius: 1px;
            -moz-border-radius: 1px;
            border-radius: 1px;
            transition: all 0.1s;
        }
        .btnpop:hover {
            border-bottom: 5px solid #1462BD;
            background: #4984cc;
        }
        .btnpop:active {
            top: 2px;
            border-bottom: 2px solid #1462BD;
            background: #4984cc;
            -webkit-box-shadow:none;
            box-shadow:none;
        }

        .btnpop:focus {outline:0;}

        .owlmenu {
            position: absolute;
            width: 65vmin;
            top: 65vmin;
            left: -14vmin;
        }

        .owlmenu ul, .owlmenu li {
            margin: 0;
            padding: 0;
        }
        .owlmenu ul {
            background: gray;
            list-style: none;
            width: 100%;
        }
        .owlmenu li {
            position: relative;
            width:auto;
        }
        .owlmenu a {
            color: #FFFFFF;
            display: block;
            font: bold 12px/20px sans-serif;
            padding: 2vmin 4vmin;
            text-align: center;
            text-decoration: none;
            -webkit-transition: all .25s ease;
            -moz-transition: all .25s ease;
            -ms-transition: all .25s ease;
            -o-transition: all .25s ease;
            transition: all .25s ease;
            float:left;
        }
        .owlmenu li:hover a {
            background: #000000;
        }

        #sstar {
            position: absolute;
            left: 60%;
            top: 20%;
            width: 1px;
            height: 1px;
            background-color: #fff;
            z-index: 3;
            opacity: 0;
            -webkit-transform-origin: 0 50%;
            -ms-transform-origin: 0 50%;
            transform-origin: 0 50%;
            border-radius: 50%;
            -webkit-animation: ss 1s linear 20s;
            animation: ss 1s linear 20s;
        }
        @media screen and (max-width: 320px) {
            #sstar {
                left: 80%;
            }
        }

        #moon {
            position: relative;
            left: 10%;
            top: 45%;
            width: 8em;
            height: 8em;
            border-radius: 50%;
            box-shadow: 1.8em 1.2em 0 0 gold;
            z-index: 2;
            opacity: 0;
            -webkit-animation: moon 8s linear 12s forwards;
            animation: moon 8s linear 12s forwards;
        }

        #stars1 {
            width: 1px;
            height: 1px;
            background: transparent;
            box-shadow: 1586px 1260px #FFF , 460px 1908px #FFF , 1485px 1401px #FFF , 792px 348px #FFF , 1933px 637px #FFF , 1305px 1581px #FFF , 1296px 1305px #FFF , 110px 1182px #FFF , 921px 1790px #FFF , 10px 237px #FFF , 776px 128px #FFF , 292px 1295px #FFF , 936px 1437px #FFF , 1363px 955px #FFF , 1022px 1413px #FFF , 588px 818px #FFF , 18px 739px #FFF , 1822px 1355px #FFF , 240px 865px #FFF , 1595px 429px #FFF , 1916px 1600px #FFF , 697px 450px #FFF , 604px 19px #FFF , 101px 1515px #FFF , 355px 559px #FFF , 60px 1041px #FFF , 528px 240px #FFF , 982px 77px #FFF , 730px 1797px #FFF , 1096px 1763px #FFF , 643px 1173px #FFF , 260px 751px #FFF , 1633px 1090px #FFF , 193px 695px #FFF , 1679px 133px #FFF , 139px 370px #FFF , 1288px 807px #FFF , 1451px 408px #FFF , 1457px 1299px #FFF , 239px 1540px #FFF , 1589px 1912px #FFF , 1687px 163px #FFF , 207px 421px #FFF , 1532px 365px #FFF , 192px 685px #FFF , 1184px 825px #FFF , 55px 778px #FFF , 1940px 1688px #FFF , 92px 1912px #FFF , 634px 1631px #FFF , 539px 1749px #FFF , 1703px 565px #FFF , 881px 1908px #FFF , 277px 1564px #FFF , 312px 1404px #FFF , 963px 938px #FFF , 1468px 1062px #FFF , 229px 1597px #FFF , 933px 1375px #FFF , 1593px 840px #FFF , 1277px 1844px #FFF , 1675px 1078px #FFF , 1557px 533px #FFF , 142px 901px #FFF , 404px 481px #FFF , 316px 322px #FFF , 686px 578px #FFF , 1040px 1469px #FFF , 873px 258px #FFF , 132px 1407px #FFF , 175px 1505px #FFF , 1473px 1013px #FFF , 232px 200px #FFF , 1220px 1668px #FFF , 1698px 70px #FFF , 315px 1635px #FFF , 1286px 110px #FFF , 1474px 1583px #FFF , 1088px 1681px #FFF , 266px 1362px #FFF , 861px 1467px #FFF , 65px 349px #FFF , 1090px 92px #FFF , 98px 1829px #FFF , 1867px 415px #FFF , 827px 274px #FFF , 1750px 1568px #FFF , 659px 1155px #FFF , 767px 1005px #FFF , 1258px 1340px #FFF , 1689px 137px #FFF , 13px 861px #FFF , 644px 1952px #FFF , 1915px 581px #FFF , 1534px 334px #FFF , 510px 1474px #FFF , 1578px 124px #FFF , 840px 221px #FFF , 473px 906px #FFF , 995px 593px #FFF , 1395px 368px #FFF , 1794px 525px #FFF , 1186px 1752px #FFF , 1623px 1417px #FFF , 1603px 1252px #FFF , 1562px 41px #FFF , 865px 1889px #FFF , 809px 354px #FFF , 353px 1223px #FFF , 74px 224px #FFF , 1007px 1477px #FFF , 540px 305px #FFF , 1155px 42px #FFF , 1781px 1183px #FFF , 396px 1175px #FFF , 1016px 935px #FFF , 425px 1461px #FFF , 1997px 1792px #FFF , 444px 1771px #FFF , 1833px 1347px #FFF , 543px 1367px #FFF , 1389px 1481px #FFF , 877px 1062px #FFF , 1029px 847px #FFF , 660px 1159px #FFF , 1383px 529px #FFF , 1810px 1293px #FFF , 820px 1021px #FFF , 151px 1274px #FFF , 1199px 19px #FFF , 1890px 111px #FFF , 1579px 413px #FFF , 1833px 975px #FFF , 664px 752px #FFF , 498px 258px #FFF , 1367px 864px #FFF , 877px 1729px #FFF , 1403px 358px #FFF , 1470px 69px #FFF , 331px 1467px #FFF , 1945px 1690px #FFF , 788px 1007px #FFF , 428px 1808px #FFF , 1583px 1864px #FFF , 746px 1663px #FFF , 449px 1283px #FFF , 1070px 1580px #FFF , 1601px 127px #FFF , 1595px 1986px #FFF , 1078px 540px #FFF , 520px 1797px #FFF , 1307px 1846px #FFF , 528px 1690px #FFF , 219px 1693px #FFF , 98px 1636px #FFF , 1987px 526px #FFF , 1525px 1917px #FFF , 1345px 220px #FFF , 194px 93px #FFF , 529px 328px #FFF , 765px 530px #FFF , 356px 1984px #FFF , 1412px 1038px #FFF , 125px 1406px #FFF , 1917px 597px #FFF , 1135px 862px #FFF , 38px 1112px #FFF , 1588px 13px #FFF , 1670px 1466px #FFF , 1828px 1007px #FFF , 92px 161px #FFF , 634px 1125px #FFF , 1196px 815px #FFF , 235px 1242px #FFF , 62px 1560px #FFF , 1668px 867px #FFF , 425px 237px #FFF , 1839px 1862px #FFF , 1114px 610px #FFF , 1957px 1713px #FFF , 462px 1771px #FFF , 1664px 464px #FFF , 547px 796px #FFF , 1055px 303px #FFF , 1883px 1014px #FFF , 1565px 1878px #FFF , 630px 667px #FFF , 1382px 913px #FFF , 1180px 969px #FFF , 532px 1927px #FFF , 1682px 683px #FFF , 383px 590px #FFF , 204px 1775px #FFF , 1675px 1164px #FFF , 4px 1800px #FFF , 882px 455px #FFF , 1080px 1011px #FFF , 1925px 1983px #FFF , 471px 308px #FFF , 1294px 559px #FFF , 839px 717px #FFF , 769px 1665px #FFF , 522px 1314px #FFF , 701px 1369px #FFF , 679px 1402px #FFF , 663px 53px #FFF , 1886px 1329px #FFF , 451px 312px #FFF , 665px 1711px #FFF , 891px 345px #FFF , 735px 1772px #FFF , 388px 620px #FFF , 652px 439px #FFF , 657px 1990px #FFF , 675px 934px #FFF , 1569px 224px #FFF , 1985px 1393px #FFF , 1163px 1709px #FFF , 971px 586px #FFF , 1978px 452px #FFF , 1457px 1401px #FFF , 459px 292px #FFF , 1365px 380px #FFF , 909px 333px #FFF , 271px 1288px #FFF , 854px 752px #FFF , 387px 546px #FFF , 30px 591px #FFF , 582px 277px #FFF , 1993px 1396px #FFF , 1778px 1391px #FFF , 1964px 80px #FFF , 166px 1852px #FFF , 1550px 1699px #FFF , 1983px 1056px #FFF , 1009px 1666px #FFF , 774px 978px #FFF , 285px 910px #FFF , 1894px 1914px #FFF , 1092px 1337px #FFF , 597px 1976px #FFF , 609px 1101px #FFF , 1658px 514px #FFF , 838px 1281px #FFF , 833px 1811px #FFF , 1791px 1408px #FFF , 318px 264px #FFF , 1630px 1949px #FFF , 415px 1996px #FFF , 716px 608px #FFF , 1897px 675px #FFF , 289px 550px #FFF , 1994px 603px #FFF , 5px 1697px #FFF , 1307px 402px #FFF , 1671px 1308px #FFF , 1935px 46px #FFF , 1858px 386px #FFF , 577px 660px #FFF , 1307px 227px #FFF , 1088px 1508px #FFF , 1800px 1976px #FFF , 701px 1788px #FFF , 1993px 1595px #FFF , 1789px 593px #FFF , 1453px 1864px #FFF , 563px 67px #FFF , 385px 101px #FFF , 266px 1913px #FFF , 1313px 1007px #FFF , 232px 1071px #FFF , 168px 1757px #FFF , 96px 743px #FFF , 676px 283px #FFF , 1371px 258px #FFF , 491px 998px #FFF , 1337px 458px #FFF , 228px 404px #FFF , 1045px 1498px #FFF , 1651px 1084px #FFF , 1657px 1373px #FFF , 890px 1567px #FFF , 1261px 992px #FFF , 1354px 569px #FFF , 147px 1601px #FFF , 598px 1140px #FFF , 1189px 483px #FFF , 167px 1172px #FFF , 361px 400px #FFF , 1433px 1838px #FFF , 269px 1346px #FFF , 1631px 287px #FFF , 678px 396px #FFF , 1243px 590px #FFF , 888px 1637px #FFF , 1512px 526px #FFF , 434px 967px #FFF , 1041px 1349px #FFF , 1443px 773px #FFF , 1554px 353px #FFF , 37px 1910px #FFF , 839px 515px #FFF , 1070px 981px #FFF , 1123px 849px #FFF , 419px 642px #FFF , 338px 923px #FFF , 773px 984px #FFF , 134px 437px #FFF , 1686px 281px #FFF , 1719px 850px #FFF , 1695px 15px #FFF , 1049px 1423px #FFF , 1539px 1369px #FFF , 1209px 631px #FFF , 1632px 1306px #FFF , 1848px 1481px #FFF , 1997px 177px #FFF , 351px 707px #FFF , 1948px 1266px #FFF , 1930px 776px #FFF , 1408px 81px #FFF , 1263px 1440px #FFF , 477px 1145px #FFF , 595px 616px #FFF , 280px 1585px #FFF , 948px 1301px #FFF , 1144px 1753px #FFF , 1279px 532px #FFF , 645px 12px #FFF , 1882px 862px #FFF , 278px 698px #FFF , 358px 1718px #FFF , 1024px 81px #FFF , 427px 1956px #FFF , 1488px 1590px #FFF , 1305px 1880px #FFF , 1541px 1564px #FFF , 29px 1342px #FFF , 1820px 436px #FFF , 887px 945px #FFF , 108px 1905px #FFF , 800px 1619px #FFF , 861px 1023px #FFF , 751px 366px #FFF , 1076px 1196px #FFF , 781px 343px #FFF , 1534px 671px #FFF , 32px 490px #FFF , 540px 613px #FFF , 673px 1048px #FFF , 1063px 1477px #FFF , 761px 1721px #FFF , 1146px 1601px #FFF , 1981px 215px #FFF , 396px 467px #FFF , 406px 875px #FFF , 772px 1777px #FFF , 1642px 188px #FFF , 1038px 488px #FFF , 1900px 324px #FFF , 1172px 394px #FFF , 460px 1814px #FFF , 1126px 630px #FFF , 789px 1583px #FFF , 1333px 1714px #FFF , 1318px 1433px #FFF , 1544px 1090px #FFF , 41px 748px #FFF , 1433px 1774px #FFF , 579px 603px #FFF , 909px 1175px #FFF , 457px 611px #FFF , 633px 1533px #FFF , 876px 1410px #FFF , 1794px 1103px #FFF , 1570px 575px #FFF , 1053px 1277px #FFF , 1679px 1392px #FFF , 1703px 775px #FFF , 1275px 51px #FFF , 1502px 1304px #FFF , 1408px 995px #FFF , 112px 1848px #FFF , 1933px 723px #FFF , 898px 452px #FFF , 32px 165px #FFF , 1799px 655px #FFF , 992px 973px #FFF , 755px 467px #FFF , 78px 1750px #FFF , 1169px 525px #FFF , 381px 1508px #FFF , 508px 1711px #FFF , 616px 638px #FFF , 479px 37px #FFF , 1045px 8px #FFF , 1427px 381px #FFF , 1282px 828px #FFF , 1441px 1971px #FFF , 711px 858px #FFF , 22px 1983px #FFF , 740px 1083px #FFF , 1101px 1090px #FFF , 1147px 1298px #FFF , 974px 1296px #FFF , 748px 1245px #FFF , 43px 863px #FFF , 470px 1027px #FFF , 627px 1630px #FFF , 681px 1086px #FFF , 873px 754px #FFF , 1040px 1221px #FFF , 730px 120px #FFF , 629px 89px #FFF , 762px 1589px #FFF , 520px 841px #FFF , 1260px 883px #FFF , 1120px 1118px #FFF , 1184px 263px #FFF , 697px 862px #FFF , 1568px 279px #FFF , 170px 820px #FFF , 304px 1044px #FFF , 1828px 698px #FFF , 670px 1264px #FFF , 492px 569px #FFF , 1621px 502px #FFF , 93px 1641px #FFF , 1736px 444px #FFF , 257px 801px #FFF , 969px 1127px #FFF , 632px 621px #FFF , 379px 1133px #FFF , 1596px 904px #FFF , 348px 1208px #FFF , 1656px 564px #FFF , 439px 1724px #FFF , 1352px 1866px #FFF , 1745px 1430px #FFF , 1656px 1221px #FFF , 456px 1673px #FFF , 1137px 822px #FFF , 872px 995px #FFF , 858px 293px #FFF , 1548px 1241px #FFF , 1855px 930px #FFF , 1829px 1424px #FFF , 1600px 1401px #FFF , 105px 403px #FFF , 751px 1333px #FFF , 1862px 1902px #FFF , 1195px 1px #FFF , 586px 1009px #FFF , 1598px 89px #FFF , 1858px 15px #FFF , 845px 1955px #FFF , 1627px 831px #FFF , 192px 1027px #FFF , 1268px 623px #FFF , 1910px 53px #FFF , 720px 1102px #FFF , 1492px 359px #FFF , 1520px 1010px #FFF , 575px 1830px #FFF , 392px 219px #FFF , 305px 347px #FFF , 1120px 1718px #FFF , 168px 1164px #FFF , 30px 406px #FFF , 1408px 311px #FFF , 1273px 1300px #FFF , 1128px 853px #FFF , 1582px 71px #FFF , 1986px 137px #FFF , 461px 626px #FFF , 598px 308px #FFF , 790px 955px #FFF , 110px 639px #FFF , 1269px 765px #FFF , 217px 1622px #FFF , 1048px 907px #FFF , 1566px 561px #FFF , 1471px 1393px #FFF , 1830px 453px #FFF , 144px 170px #FFF , 1518px 1079px #FFF , 1520px 415px #FFF , 567px 1760px #FFF , 1053px 568px #FFF , 1874px 431px #FFF , 827px 643px #FFF , 734px 956px #FFF , 730px 301px #FFF , 1320px 431px #FFF , 416px 894px #FFF , 353px 1471px #FFF , 801px 723px #FFF , 345px 515px #FFF , 66px 1817px #FFF , 41px 1798px #FFF , 1929px 1696px #FFF , 475px 112px #FFF , 396px 892px #FFF , 1185px 1562px #FFF , 989px 808px #FFF , 266px 510px #FFF , 587px 754px #FFF , 109px 1176px #FFF , 1869px 1716px #FFF , 1508px 1075px #FFF , 1661px 535px #FFF , 229px 615px #FFF , 47px 1026px #FFF , 615px 1623px #FFF , 1185px 626px #FFF , 1008px 1726px #FFF , 1412px 1859px #FFF , 1484px 632px #FFF , 989px 311px #FFF , 1374px 1688px #FFF , 240px 1089px #FFF , 463px 1915px #FFF , 1393px 122px #FFF , 391px 32px #FFF , 745px 1866px #FFF , 642px 399px #FFF , 1956px 1440px #FFF , 1923px 602px #FFF , 1618px 288px #FFF , 1921px 820px #FFF , 1877px 592px #FFF , 445px 939px #FFF , 1082px 1461px #FFF , 1468px 1907px #FFF , 1878px 1800px #FFF , 69px 1849px #FFF , 677px 1230px #FFF , 795px 1717px #FFF , 129px 1296px #FFF , 1525px 871px #FFF , 1814px 1689px #FFF , 1285px 1428px #FFF , 1481px 645px #FFF , 1885px 1430px #FFF , 1410px 1451px #FFF , 1142px 1913px #FFF , 603px 1689px #FFF , 1849px 907px #FFF , 846px 1788px #FFF , 1684px 643px #FFF , 328px 1484px #FFF , 275px 1969px #FFF , 1654px 1568px #FFF , 1236px 711px #FFF , 164px 438px #FFF , 908px 1406px #FFF , 1101px 1529px #FFF , 1400px 1117px #FFF , 707px 887px #FFF , 122px 551px #FFF , 1885px 442px #FFF , 1462px 695px #FFF , 119px 416px #FFF , 101px 1347px #FFF , 1975px 825px #FFF , 382px 1040px #FFF , 693px 858px #FFF , 1590px 959px #FFF , 857px 1589px #FFF , 870px 983px #FFF , 808px 273px #FFF , 1852px 1739px #FFF , 21px 315px #FFF , 438px 1145px #FFF , 715px 1822px #FFF , 737px 934px #FFF , 1103px 822px #FFF , 1628px 173px #FFF , 114px 978px #FFF , 823px 257px #FFF , 12px 1098px #FFF , 311px 1578px #FFF , 1209px 1314px #FFF , 50px 238px #FFF , 378px 561px #FFF , 315px 682px #FFF , 919px 1693px #FFF , 1402px 962px #FFF , 480px 1661px #FFF , 115px 676px #FFF , 1497px 681px #FFF , 1072px 757px #FFF , 1595px 923px #FFF , 1915px 523px #FFF , 775px 949px #FFF , 1590px 1930px #FFF , 1099px 1874px #FFF , 220px 257px #FFF , 509px 1974px #FFF , 522px 814px #FFF , 827px 1018px #FFF , 409px 70px #FFF , 1835px 1327px #FFF , 1237px 432px #FFF , 1876px 144px #FFF , 1150px 1008px #FFF , 30px 398px #FFF , 196px 955px #FFF , 1778px 1532px #FFF , 1045px 780px #FFF , 229px 1566px #FFF , 439px 498px #FFF , 1821px 1679px #FFF , 814px 412px #FFF , 1386px 450px #FFF , 383px 1323px #FFF , 1550px 1262px #FFF , 1575px 301px #FFF , 1775px 852px #FFF , 1463px 1671px #FFF , 67px 528px #FFF , 1766px 1993px #FFF , 750px 362px #FFF , 1230px 1871px #FFF , 1986px 598px #FFF , 1659px 1598px #FFF , 1035px 1637px #FFF , 1854px 1163px #FFF , 194px 859px #FFF , 1826px 359px #FFF , 91px 1752px #FFF , 267px 1424px #FFF , 1801px 1661px #FFF , 1747px 1728px #FFF , 1419px 167px #FFF , 1849px 1014px #FFF , 1054px 759px #FFF , 754px 1357px #FFF , 1781px 1258px #FFF , 1958px 1355px #FFF , 21px 1872px #FFF , 1169px 443px #FFF , 701px 1852px #FFF , 735px 1708px #FFF , 1665px 608px #FFF , 1970px 1854px #FFF , 36px 1101px #FFF , 1566px 1626px #FFF , 1758px 30px #FFF , 1505px 1012px #FFF , 1820px 1007px #FFF , 1720px 936px #FFF , 910px 481px #FFF , 544px 1885px #FFF , 27px 817px #FFF , 279px 972px #FFF , 1873px 774px #FFF , 581px 35px #FFF , 58px 1112px #FFF , 1210px 365px #FFF , 2000px 1242px #FFF , 1649px 21px #FFF , 822px 198px #FFF , 103px 1852px #FFF , 1348px 1064px #FFF , 794px 223px #FFF , 1363px 967px #FFF , 1951px 431px #FFF , 602px 1155px #FFF , 736px 1971px #FFF , 1527px 1300px #FFF , 209px 143px #FFF , 22px 1182px #FFF , 691px 1408px #FFF , 73px 725px #FFF , 79px 695px #FFF , 1416px 360px #FFF , 260px 242px #FFF , 1200px 995px #FFF , 426px 651px #FFF , 1410px 1709px #FFF , 1316px 1479px #FFF , 1797px 608px #FFF , 450px 1361px #FFF , 270px 1165px #FFF , 1570px 1066px #FFF , 1181px 90px #FFF , 4px 875px #FFF , 81px 1943px #FFF , 1842px 1539px #FFF , 1839px 425px #FFF , 1144px 180px #FFF , 148px 349px #FFF , 1748px 659px #FFF , 1060px 632px #FFF , 1229px 1977px #FFF , 968px 692px #FFF , 827px 1651px #FFF , 1111px 562px #FFF , 1437px 1057px #FFF;
            opacity: 0;
            -webkit-animation: animStar 50s linear infinite;
            animation: animStar 50s linear infinite;
        }
        #stars1:after {
            content: " ";
            position: absolute;
            top: 2000px;
            width: 1px;
            height: 1px;
            background: transparent;
            box-shadow: 1586px 1260px #FFF , 460px 1908px #FFF , 1485px 1401px #FFF , 792px 348px #FFF , 1933px 637px #FFF , 1305px 1581px #FFF , 1296px 1305px #FFF , 110px 1182px #FFF , 921px 1790px #FFF , 10px 237px #FFF , 776px 128px #FFF , 292px 1295px #FFF , 936px 1437px #FFF , 1363px 955px #FFF , 1022px 1413px #FFF , 588px 818px #FFF , 18px 739px #FFF , 1822px 1355px #FFF , 240px 865px #FFF , 1595px 429px #FFF , 1916px 1600px #FFF , 697px 450px #FFF , 604px 19px #FFF , 101px 1515px #FFF , 355px 559px #FFF , 60px 1041px #FFF , 528px 240px #FFF , 982px 77px #FFF , 730px 1797px #FFF , 1096px 1763px #FFF , 643px 1173px #FFF , 260px 751px #FFF , 1633px 1090px #FFF , 193px 695px #FFF , 1679px 133px #FFF , 139px 370px #FFF , 1288px 807px #FFF , 1451px 408px #FFF , 1457px 1299px #FFF , 239px 1540px #FFF , 1589px 1912px #FFF , 1687px 163px #FFF , 207px 421px #FFF , 1532px 365px #FFF , 192px 685px #FFF , 1184px 825px #FFF , 55px 778px #FFF , 1940px 1688px #FFF , 92px 1912px #FFF , 634px 1631px #FFF , 539px 1749px #FFF , 1703px 565px #FFF , 881px 1908px #FFF , 277px 1564px #FFF , 312px 1404px #FFF , 963px 938px #FFF , 1468px 1062px #FFF , 229px 1597px #FFF , 933px 1375px #FFF , 1593px 840px #FFF , 1277px 1844px #FFF , 1675px 1078px #FFF , 1557px 533px #FFF , 142px 901px #FFF , 404px 481px #FFF , 316px 322px #FFF , 686px 578px #FFF , 1040px 1469px #FFF , 873px 258px #FFF , 132px 1407px #FFF , 175px 1505px #FFF , 1473px 1013px #FFF , 232px 200px #FFF , 1220px 1668px #FFF , 1698px 70px #FFF , 315px 1635px #FFF , 1286px 110px #FFF , 1474px 1583px #FFF , 1088px 1681px #FFF , 266px 1362px #FFF , 861px 1467px #FFF , 65px 349px #FFF , 1090px 92px #FFF , 98px 1829px #FFF , 1867px 415px #FFF , 827px 274px #FFF , 1750px 1568px #FFF , 659px 1155px #FFF , 767px 1005px #FFF , 1258px 1340px #FFF , 1689px 137px #FFF , 13px 861px #FFF , 644px 1952px #FFF , 1915px 581px #FFF , 1534px 334px #FFF , 510px 1474px #FFF , 1578px 124px #FFF , 840px 221px #FFF , 473px 906px #FFF , 995px 593px #FFF , 1395px 368px #FFF , 1794px 525px #FFF , 1186px 1752px #FFF , 1623px 1417px #FFF , 1603px 1252px #FFF , 1562px 41px #FFF , 865px 1889px #FFF , 809px 354px #FFF , 353px 1223px #FFF , 74px 224px #FFF , 1007px 1477px #FFF , 540px 305px #FFF , 1155px 42px #FFF , 1781px 1183px #FFF , 396px 1175px #FFF , 1016px 935px #FFF , 425px 1461px #FFF , 1997px 1792px #FFF , 444px 1771px #FFF , 1833px 1347px #FFF , 543px 1367px #FFF , 1389px 1481px #FFF , 877px 1062px #FFF , 1029px 847px #FFF , 660px 1159px #FFF , 1383px 529px #FFF , 1810px 1293px #FFF , 820px 1021px #FFF , 151px 1274px #FFF , 1199px 19px #FFF , 1890px 111px #FFF , 1579px 413px #FFF , 1833px 975px #FFF , 664px 752px #FFF , 498px 258px #FFF , 1367px 864px #FFF , 877px 1729px #FFF , 1403px 358px #FFF , 1470px 69px #FFF , 331px 1467px #FFF , 1945px 1690px #FFF , 788px 1007px #FFF , 428px 1808px #FFF , 1583px 1864px #FFF , 746px 1663px #FFF , 449px 1283px #FFF , 1070px 1580px #FFF , 1601px 127px #FFF , 1595px 1986px #FFF , 1078px 540px #FFF , 520px 1797px #FFF , 1307px 1846px #FFF , 528px 1690px #FFF , 219px 1693px #FFF , 98px 1636px #FFF , 1987px 526px #FFF , 1525px 1917px #FFF , 1345px 220px #FFF , 194px 93px #FFF , 529px 328px #FFF , 765px 530px #FFF , 356px 1984px #FFF , 1412px 1038px #FFF , 125px 1406px #FFF , 1917px 597px #FFF , 1135px 862px #FFF , 38px 1112px #FFF , 1588px 13px #FFF , 1670px 1466px #FFF , 1828px 1007px #FFF , 92px 161px #FFF , 634px 1125px #FFF , 1196px 815px #FFF , 235px 1242px #FFF , 62px 1560px #FFF , 1668px 867px #FFF , 425px 237px #FFF , 1839px 1862px #FFF , 1114px 610px #FFF , 1957px 1713px #FFF , 462px 1771px #FFF , 1664px 464px #FFF , 547px 796px #FFF , 1055px 303px #FFF , 1883px 1014px #FFF , 1565px 1878px #FFF , 630px 667px #FFF , 1382px 913px #FFF , 1180px 969px #FFF , 532px 1927px #FFF , 1682px 683px #FFF , 383px 590px #FFF , 204px 1775px #FFF , 1675px 1164px #FFF , 4px 1800px #FFF , 882px 455px #FFF , 1080px 1011px #FFF , 1925px 1983px #FFF , 471px 308px #FFF , 1294px 559px #FFF , 839px 717px #FFF , 769px 1665px #FFF , 522px 1314px #FFF , 701px 1369px #FFF , 679px 1402px #FFF , 663px 53px #FFF , 1886px 1329px #FFF , 451px 312px #FFF , 665px 1711px #FFF , 891px 345px #FFF , 735px 1772px #FFF , 388px 620px #FFF , 652px 439px #FFF , 657px 1990px #FFF , 675px 934px #FFF , 1569px 224px #FFF , 1985px 1393px #FFF , 1163px 1709px #FFF , 971px 586px #FFF , 1978px 452px #FFF , 1457px 1401px #FFF , 459px 292px #FFF , 1365px 380px #FFF , 909px 333px #FFF , 271px 1288px #FFF , 854px 752px #FFF , 387px 546px #FFF , 30px 591px #FFF , 582px 277px #FFF , 1993px 1396px #FFF , 1778px 1391px #FFF , 1964px 80px #FFF , 166px 1852px #FFF , 1550px 1699px #FFF , 1983px 1056px #FFF , 1009px 1666px #FFF , 774px 978px #FFF , 285px 910px #FFF , 1894px 1914px #FFF , 1092px 1337px #FFF , 597px 1976px #FFF , 609px 1101px #FFF , 1658px 514px #FFF , 838px 1281px #FFF , 833px 1811px #FFF , 1791px 1408px #FFF , 318px 264px #FFF , 1630px 1949px #FFF , 415px 1996px #FFF , 716px 608px #FFF , 1897px 675px #FFF , 289px 550px #FFF , 1994px 603px #FFF , 5px 1697px #FFF , 1307px 402px #FFF , 1671px 1308px #FFF , 1935px 46px #FFF , 1858px 386px #FFF , 577px 660px #FFF , 1307px 227px #FFF , 1088px 1508px #FFF , 1800px 1976px #FFF , 701px 1788px #FFF , 1993px 1595px #FFF , 1789px 593px #FFF , 1453px 1864px #FFF , 563px 67px #FFF , 385px 101px #FFF , 266px 1913px #FFF , 1313px 1007px #FFF , 232px 1071px #FFF , 168px 1757px #FFF , 96px 743px #FFF , 676px 283px #FFF , 1371px 258px #FFF , 491px 998px #FFF , 1337px 458px #FFF , 228px 404px #FFF , 1045px 1498px #FFF , 1651px 1084px #FFF , 1657px 1373px #FFF , 890px 1567px #FFF , 1261px 992px #FFF , 1354px 569px #FFF , 147px 1601px #FFF , 598px 1140px #FFF , 1189px 483px #FFF , 167px 1172px #FFF , 361px 400px #FFF , 1433px 1838px #FFF , 269px 1346px #FFF , 1631px 287px #FFF , 678px 396px #FFF , 1243px 590px #FFF , 888px 1637px #FFF , 1512px 526px #FFF , 434px 967px #FFF , 1041px 1349px #FFF , 1443px 773px #FFF , 1554px 353px #FFF , 37px 1910px #FFF , 839px 515px #FFF , 1070px 981px #FFF , 1123px 849px #FFF , 419px 642px #FFF , 338px 923px #FFF , 773px 984px #FFF , 134px 437px #FFF , 1686px 281px #FFF , 1719px 850px #FFF , 1695px 15px #FFF , 1049px 1423px #FFF , 1539px 1369px #FFF , 1209px 631px #FFF , 1632px 1306px #FFF , 1848px 1481px #FFF , 1997px 177px #FFF , 351px 707px #FFF , 1948px 1266px #FFF , 1930px 776px #FFF , 1408px 81px #FFF , 1263px 1440px #FFF , 477px 1145px #FFF , 595px 616px #FFF , 280px 1585px #FFF , 948px 1301px #FFF , 1144px 1753px #FFF , 1279px 532px #FFF , 645px 12px #FFF , 1882px 862px #FFF , 278px 698px #FFF , 358px 1718px #FFF , 1024px 81px #FFF , 427px 1956px #FFF , 1488px 1590px #FFF , 1305px 1880px #FFF , 1541px 1564px #FFF , 29px 1342px #FFF , 1820px 436px #FFF , 887px 945px #FFF , 108px 1905px #FFF , 800px 1619px #FFF , 861px 1023px #FFF , 751px 366px #FFF , 1076px 1196px #FFF , 781px 343px #FFF , 1534px 671px #FFF , 32px 490px #FFF , 540px 613px #FFF , 673px 1048px #FFF , 1063px 1477px #FFF , 761px 1721px #FFF , 1146px 1601px #FFF , 1981px 215px #FFF , 396px 467px #FFF , 406px 875px #FFF , 772px 1777px #FFF , 1642px 188px #FFF , 1038px 488px #FFF , 1900px 324px #FFF , 1172px 394px #FFF , 460px 1814px #FFF , 1126px 630px #FFF , 789px 1583px #FFF , 1333px 1714px #FFF , 1318px 1433px #FFF , 1544px 1090px #FFF , 41px 748px #FFF , 1433px 1774px #FFF , 579px 603px #FFF , 909px 1175px #FFF , 457px 611px #FFF , 633px 1533px #FFF , 876px 1410px #FFF , 1794px 1103px #FFF , 1570px 575px #FFF , 1053px 1277px #FFF , 1679px 1392px #FFF , 1703px 775px #FFF , 1275px 51px #FFF , 1502px 1304px #FFF , 1408px 995px #FFF , 112px 1848px #FFF , 1933px 723px #FFF , 898px 452px #FFF , 32px 165px #FFF , 1799px 655px #FFF , 992px 973px #FFF , 755px 467px #FFF , 78px 1750px #FFF , 1169px 525px #FFF , 381px 1508px #FFF , 508px 1711px #FFF , 616px 638px #FFF , 479px 37px #FFF , 1045px 8px #FFF , 1427px 381px #FFF , 1282px 828px #FFF , 1441px 1971px #FFF , 711px 858px #FFF , 22px 1983px #FFF , 740px 1083px #FFF , 1101px 1090px #FFF , 1147px 1298px #FFF , 974px 1296px #FFF , 748px 1245px #FFF , 43px 863px #FFF , 470px 1027px #FFF , 627px 1630px #FFF , 681px 1086px #FFF , 873px 754px #FFF , 1040px 1221px #FFF , 730px 120px #FFF , 629px 89px #FFF , 762px 1589px #FFF , 520px 841px #FFF , 1260px 883px #FFF , 1120px 1118px #FFF , 1184px 263px #FFF , 697px 862px #FFF , 1568px 279px #FFF , 170px 820px #FFF , 304px 1044px #FFF , 1828px 698px #FFF , 670px 1264px #FFF , 492px 569px #FFF , 1621px 502px #FFF , 93px 1641px #FFF , 1736px 444px #FFF , 257px 801px #FFF , 969px 1127px #FFF , 632px 621px #FFF , 379px 1133px #FFF , 1596px 904px #FFF , 348px 1208px #FFF , 1656px 564px #FFF , 439px 1724px #FFF , 1352px 1866px #FFF , 1745px 1430px #FFF , 1656px 1221px #FFF , 456px 1673px #FFF , 1137px 822px #FFF , 872px 995px #FFF , 858px 293px #FFF , 1548px 1241px #FFF , 1855px 930px #FFF , 1829px 1424px #FFF , 1600px 1401px #FFF , 105px 403px #FFF , 751px 1333px #FFF , 1862px 1902px #FFF , 1195px 1px #FFF , 586px 1009px #FFF , 1598px 89px #FFF , 1858px 15px #FFF , 845px 1955px #FFF , 1627px 831px #FFF , 192px 1027px #FFF , 1268px 623px #FFF , 1910px 53px #FFF , 720px 1102px #FFF , 1492px 359px #FFF , 1520px 1010px #FFF , 575px 1830px #FFF , 392px 219px #FFF , 305px 347px #FFF , 1120px 1718px #FFF , 168px 1164px #FFF , 30px 406px #FFF , 1408px 311px #FFF , 1273px 1300px #FFF , 1128px 853px #FFF , 1582px 71px #FFF , 1986px 137px #FFF , 461px 626px #FFF , 598px 308px #FFF , 790px 955px #FFF , 110px 639px #FFF , 1269px 765px #FFF , 217px 1622px #FFF , 1048px 907px #FFF , 1566px 561px #FFF , 1471px 1393px #FFF , 1830px 453px #FFF , 144px 170px #FFF , 1518px 1079px #FFF , 1520px 415px #FFF , 567px 1760px #FFF , 1053px 568px #FFF , 1874px 431px #FFF , 827px 643px #FFF , 734px 956px #FFF , 730px 301px #FFF , 1320px 431px #FFF , 416px 894px #FFF , 353px 1471px #FFF , 801px 723px #FFF , 345px 515px #FFF , 66px 1817px #FFF , 41px 1798px #FFF , 1929px 1696px #FFF , 475px 112px #FFF , 396px 892px #FFF , 1185px 1562px #FFF , 989px 808px #FFF , 266px 510px #FFF , 587px 754px #FFF , 109px 1176px #FFF , 1869px 1716px #FFF , 1508px 1075px #FFF , 1661px 535px #FFF , 229px 615px #FFF , 47px 1026px #FFF , 615px 1623px #FFF , 1185px 626px #FFF , 1008px 1726px #FFF , 1412px 1859px #FFF , 1484px 632px #FFF , 989px 311px #FFF , 1374px 1688px #FFF , 240px 1089px #FFF , 463px 1915px #FFF , 1393px 122px #FFF , 391px 32px #FFF , 745px 1866px #FFF , 642px 399px #FFF , 1956px 1440px #FFF , 1923px 602px #FFF , 1618px 288px #FFF , 1921px 820px #FFF , 1877px 592px #FFF , 445px 939px #FFF , 1082px 1461px #FFF , 1468px 1907px #FFF , 1878px 1800px #FFF , 69px 1849px #FFF , 677px 1230px #FFF , 795px 1717px #FFF , 129px 1296px #FFF , 1525px 871px #FFF , 1814px 1689px #FFF , 1285px 1428px #FFF , 1481px 645px #FFF , 1885px 1430px #FFF , 1410px 1451px #FFF , 1142px 1913px #FFF , 603px 1689px #FFF , 1849px 907px #FFF , 846px 1788px #FFF , 1684px 643px #FFF , 328px 1484px #FFF , 275px 1969px #FFF , 1654px 1568px #FFF , 1236px 711px #FFF , 164px 438px #FFF , 908px 1406px #FFF , 1101px 1529px #FFF , 1400px 1117px #FFF , 707px 887px #FFF , 122px 551px #FFF , 1885px 442px #FFF , 1462px 695px #FFF , 119px 416px #FFF , 101px 1347px #FFF , 1975px 825px #FFF , 382px 1040px #FFF , 693px 858px #FFF , 1590px 959px #FFF , 857px 1589px #FFF , 870px 983px #FFF , 808px 273px #FFF , 1852px 1739px #FFF , 21px 315px #FFF , 438px 1145px #FFF , 715px 1822px #FFF , 737px 934px #FFF , 1103px 822px #FFF , 1628px 173px #FFF , 114px 978px #FFF , 823px 257px #FFF , 12px 1098px #FFF , 311px 1578px #FFF , 1209px 1314px #FFF , 50px 238px #FFF , 378px 561px #FFF , 315px 682px #FFF , 919px 1693px #FFF , 1402px 962px #FFF , 480px 1661px #FFF , 115px 676px #FFF , 1497px 681px #FFF , 1072px 757px #FFF , 1595px 923px #FFF , 1915px 523px #FFF , 775px 949px #FFF , 1590px 1930px #FFF , 1099px 1874px #FFF , 220px 257px #FFF , 509px 1974px #FFF , 522px 814px #FFF , 827px 1018px #FFF , 409px 70px #FFF , 1835px 1327px #FFF , 1237px 432px #FFF , 1876px 144px #FFF , 1150px 1008px #FFF , 30px 398px #FFF , 196px 955px #FFF , 1778px 1532px #FFF , 1045px 780px #FFF , 229px 1566px #FFF , 439px 498px #FFF , 1821px 1679px #FFF , 814px 412px #FFF , 1386px 450px #FFF , 383px 1323px #FFF , 1550px 1262px #FFF , 1575px 301px #FFF , 1775px 852px #FFF , 1463px 1671px #FFF , 67px 528px #FFF , 1766px 1993px #FFF , 750px 362px #FFF , 1230px 1871px #FFF , 1986px 598px #FFF , 1659px 1598px #FFF , 1035px 1637px #FFF , 1854px 1163px #FFF , 194px 859px #FFF , 1826px 359px #FFF , 91px 1752px #FFF , 267px 1424px #FFF , 1801px 1661px #FFF , 1747px 1728px #FFF , 1419px 167px #FFF , 1849px 1014px #FFF , 1054px 759px #FFF , 754px 1357px #FFF , 1781px 1258px #FFF , 1958px 1355px #FFF , 21px 1872px #FFF , 1169px 443px #FFF , 701px 1852px #FFF , 735px 1708px #FFF , 1665px 608px #FFF , 1970px 1854px #FFF , 36px 1101px #FFF , 1566px 1626px #FFF , 1758px 30px #FFF , 1505px 1012px #FFF , 1820px 1007px #FFF , 1720px 936px #FFF , 910px 481px #FFF , 544px 1885px #FFF , 27px 817px #FFF , 279px 972px #FFF , 1873px 774px #FFF , 581px 35px #FFF , 58px 1112px #FFF , 1210px 365px #FFF , 2000px 1242px #FFF , 1649px 21px #FFF , 822px 198px #FFF , 103px 1852px #FFF , 1348px 1064px #FFF , 794px 223px #FFF , 1363px 967px #FFF , 1951px 431px #FFF , 602px 1155px #FFF , 736px 1971px #FFF , 1527px 1300px #FFF , 209px 143px #FFF , 22px 1182px #FFF , 691px 1408px #FFF , 73px 725px #FFF , 79px 695px #FFF , 1416px 360px #FFF , 260px 242px #FFF , 1200px 995px #FFF , 426px 651px #FFF , 1410px 1709px #FFF , 1316px 1479px #FFF , 1797px 608px #FFF , 450px 1361px #FFF , 270px 1165px #FFF , 1570px 1066px #FFF , 1181px 90px #FFF , 4px 875px #FFF , 81px 1943px #FFF , 1842px 1539px #FFF , 1839px 425px #FFF , 1144px 180px #FFF , 148px 349px #FFF , 1748px 659px #FFF , 1060px 632px #FFF , 1229px 1977px #FFF , 968px 692px #FFF , 827px 1651px #FFF , 1111px 562px #FFF , 1437px 1057px #FFF;
        }

        #stars2 {
            width: 2px;
            height: 2px;
            background: transparent;
            box-shadow: 153px 1106px #FFF , 1532px 326px #FFF , 1910px 1965px #FFF , 393px 1476px #FFF , 767px 1373px #FFF , 1929px 344px #FFF , 1438px 1636px #FFF , 903px 268px #FFF , 1843px 618px #FFF , 305px 1405px #FFF , 1768px 752px #FFF , 1198px 39px #FFF , 55px 83px #FFF , 1600px 1431px #FFF , 537px 882px #FFF , 855px 1049px #FFF , 877px 1413px #FFF , 1596px 1380px #FFF , 1352px 1739px #FFF , 110px 245px #FFF , 193px 1358px #FFF , 878px 97px #FFF , 974px 335px #FFF , 757px 971px #FFF , 112px 1077px #FFF , 1280px 1694px #FFF , 374px 565px #FFF , 464px 8px #FFF , 871px 428px #FFF , 427px 1493px #FFF , 128px 878px #FFF , 166px 1865px #FFF , 1615px 1137px #FFF , 444px 709px #FFF , 921px 970px #FFF , 1264px 1181px #FFF , 1328px 1156px #FFF , 1071px 68px #FFF , 457px 576px #FFF , 1970px 562px #FFF , 1276px 1181px #FFF , 149px 1366px #FFF , 932px 609px #FFF , 1676px 161px #FFF , 1117px 1853px #FFF , 1239px 1728px #FFF , 1610px 1948px #FFF , 1735px 1819px #FFF , 898px 514px #FFF , 198px 1451px #FFF , 196px 1231px #FFF , 1120px 1114px #FFF , 1191px 675px #FFF , 484px 1344px #FFF , 850px 911px #FFF , 1352px 1541px #FFF , 527px 616px #FFF , 306px 432px #FFF , 101px 788px #FFF , 724px 1505px #FFF , 1520px 1804px #FFF , 872px 701px #FFF , 1461px 1455px #FFF , 821px 1094px #FFF , 1549px 1741px #FFF , 53px 1900px #FFF , 1354px 420px #FFF , 1641px 457px #FFF , 1905px 1768px #FFF , 80px 380px #FFF , 227px 542px #FFF , 120px 727px #FFF , 1718px 1774px #FFF , 1007px 1116px #FFF , 16px 118px #FFF , 1776px 429px #FFF , 107px 158px #FFF , 246px 1293px #FFF , 1468px 1868px #FFF , 1269px 1287px #FFF , 1531px 998px #FFF , 575px 1001px #FFF , 160px 607px #FFF , 1349px 1432px #FFF , 1645px 477px #FFF , 808px 930px #FFF , 642px 1409px #FFF , 1741px 1836px #FFF , 466px 1110px #FFF , 1431px 423px #FFF , 1564px 398px #FFF , 909px 1606px #FFF , 1845px 1476px #FFF , 1064px 1328px #FFF , 1414px 334px #FFF , 183px 1997px #FFF , 792px 247px #FFF , 865px 1967px #FFF , 314px 1144px #FFF , 880px 1019px #FFF , 1482px 1978px #FFF , 554px 463px #FFF , 1815px 173px #FFF , 1328px 1218px #FFF , 376px 1856px #FFF , 672px 1678px #FFF , 618px 38px #FFF , 1336px 322px #FFF , 1760px 145px #FFF , 608px 354px #FFF , 603px 1481px #FFF , 1848px 1094px #FFF , 1196px 738px #FFF , 1161px 321px #FFF , 1529px 1086px #FFF , 1950px 1814px #FFF , 1499px 492px #FFF , 703px 62px #FFF , 1986px 1827px #FFF , 1795px 397px #FFF , 1730px 1583px #FFF , 499px 1030px #FFF , 894px 1783px #FFF , 1965px 727px #FFF , 983px 692px #FFF , 560px 54px #FFF , 216px 1640px #FFF , 1436px 1540px #FFF , 1821px 1434px #FFF , 1552px 1628px #FFF , 289px 1200px #FFF , 966px 972px #FFF , 1934px 66px #FFF , 603px 1402px #FFF , 1715px 1744px #FFF , 478px 1945px #FFF , 118px 569px #FFF , 1507px 1145px #FFF , 480px 1503px #FFF , 858px 1498px #FFF , 287px 1019px #FFF , 288px 1940px #FFF , 989px 130px #FFF , 52px 64px #FFF , 1893px 824px #FFF , 916px 1073px #FFF , 1606px 1405px #FFF , 317px 82px #FFF , 1046px 140px #FFF , 365px 98px #FFF , 658px 1521px #FFF , 732px 1025px #FFF , 1480px 273px #FFF , 1900px 372px #FFF , 216px 229px #FFF , 363px 1520px #FFF , 95px 1636px #FFF , 1541px 1141px #FFF , 1516px 988px #FFF , 362px 1797px #FFF , 843px 458px #FFF , 1599px 1134px #FFF , 655px 1619px #FFF , 1326px 1388px #FFF , 1178px 1152px #FFF , 1969px 606px #FFF , 354px 1812px #FFF , 1666px 1851px #FFF , 1298px 655px #FFF , 960px 1274px #FFF , 897px 1749px #FFF , 1832px 1943px #FFF , 1994px 87px #FFF , 776px 140px #FFF , 1641px 305px #FFF , 1463px 1130px #FFF , 1483px 548px #FFF , 1633px 1689px #FFF , 1716px 1129px #FFF , 153px 1027px #FFF , 1298px 1099px #FFF , 387px 26px #FFF , 1056px 768px #FFF , 76px 282px #FFF , 1649px 1857px #FFF , 1423px 1401px #FFF , 107px 654px #FFF , 1146px 1268px #FFF , 763px 1239px #FFF , 1753px 875px #FFF , 1651px 1425px #FFF , 1116px 1718px #FFF , 847px 1505px #FFF , 1795px 1003px #FFF , 631px 1278px #FFF , 1809px 1707px #FFF , 1650px 589px #FFF , 454px 1976px #FFF , 32px 670px #FFF , 698px 1179px #FFF;
            opacity: 0;
            -webkit-animation: animStar 100s linear infinite;
            animation: animStar 100s linear infinite;
        }
        #stars2:after {
            content: " ";
            position: absolute;
            top: 2000px;
            width: 2px;
            height: 2px;
            background: transparent;
            box-shadow: 153px 1106px #FFF , 1532px 326px #FFF , 1910px 1965px #FFF , 393px 1476px #FFF , 767px 1373px #FFF , 1929px 344px #FFF , 1438px 1636px #FFF , 903px 268px #FFF , 1843px 618px #FFF , 305px 1405px #FFF , 1768px 752px #FFF , 1198px 39px #FFF , 55px 83px #FFF , 1600px 1431px #FFF , 537px 882px #FFF , 855px 1049px #FFF , 877px 1413px #FFF , 1596px 1380px #FFF , 1352px 1739px #FFF , 110px 245px #FFF , 193px 1358px #FFF , 878px 97px #FFF , 974px 335px #FFF , 757px 971px #FFF , 112px 1077px #FFF , 1280px 1694px #FFF , 374px 565px #FFF , 464px 8px #FFF , 871px 428px #FFF , 427px 1493px #FFF , 128px 878px #FFF , 166px 1865px #FFF , 1615px 1137px #FFF , 444px 709px #FFF , 921px 970px #FFF , 1264px 1181px #FFF , 1328px 1156px #FFF , 1071px 68px #FFF , 457px 576px #FFF , 1970px 562px #FFF , 1276px 1181px #FFF , 149px 1366px #FFF , 932px 609px #FFF , 1676px 161px #FFF , 1117px 1853px #FFF , 1239px 1728px #FFF , 1610px 1948px #FFF , 1735px 1819px #FFF , 898px 514px #FFF , 198px 1451px #FFF , 196px 1231px #FFF , 1120px 1114px #FFF , 1191px 675px #FFF , 484px 1344px #FFF , 850px 911px #FFF , 1352px 1541px #FFF , 527px 616px #FFF , 306px 432px #FFF , 101px 788px #FFF , 724px 1505px #FFF , 1520px 1804px #FFF , 872px 701px #FFF , 1461px 1455px #FFF , 821px 1094px #FFF , 1549px 1741px #FFF , 53px 1900px #FFF , 1354px 420px #FFF , 1641px 457px #FFF , 1905px 1768px #FFF , 80px 380px #FFF , 227px 542px #FFF , 120px 727px #FFF , 1718px 1774px #FFF , 1007px 1116px #FFF , 16px 118px #FFF , 1776px 429px #FFF , 107px 158px #FFF , 246px 1293px #FFF , 1468px 1868px #FFF , 1269px 1287px #FFF , 1531px 998px #FFF , 575px 1001px #FFF , 160px 607px #FFF , 1349px 1432px #FFF , 1645px 477px #FFF , 808px 930px #FFF , 642px 1409px #FFF , 1741px 1836px #FFF , 466px 1110px #FFF , 1431px 423px #FFF , 1564px 398px #FFF , 909px 1606px #FFF , 1845px 1476px #FFF , 1064px 1328px #FFF , 1414px 334px #FFF , 183px 1997px #FFF , 792px 247px #FFF , 865px 1967px #FFF , 314px 1144px #FFF , 880px 1019px #FFF , 1482px 1978px #FFF , 554px 463px #FFF , 1815px 173px #FFF , 1328px 1218px #FFF , 376px 1856px #FFF , 672px 1678px #FFF , 618px 38px #FFF , 1336px 322px #FFF , 1760px 145px #FFF , 608px 354px #FFF , 603px 1481px #FFF , 1848px 1094px #FFF , 1196px 738px #FFF , 1161px 321px #FFF , 1529px 1086px #FFF , 1950px 1814px #FFF , 1499px 492px #FFF , 703px 62px #FFF , 1986px 1827px #FFF , 1795px 397px #FFF , 1730px 1583px #FFF , 499px 1030px #FFF , 894px 1783px #FFF , 1965px 727px #FFF , 983px 692px #FFF , 560px 54px #FFF , 216px 1640px #FFF , 1436px 1540px #FFF , 1821px 1434px #FFF , 1552px 1628px #FFF , 289px 1200px #FFF , 966px 972px #FFF , 1934px 66px #FFF , 603px 1402px #FFF , 1715px 1744px #FFF , 478px 1945px #FFF , 118px 569px #FFF , 1507px 1145px #FFF , 480px 1503px #FFF , 858px 1498px #FFF , 287px 1019px #FFF , 288px 1940px #FFF , 989px 130px #FFF , 52px 64px #FFF , 1893px 824px #FFF , 916px 1073px #FFF , 1606px 1405px #FFF , 317px 82px #FFF , 1046px 140px #FFF , 365px 98px #FFF , 658px 1521px #FFF , 732px 1025px #FFF , 1480px 273px #FFF , 1900px 372px #FFF , 216px 229px #FFF , 363px 1520px #FFF , 95px 1636px #FFF , 1541px 1141px #FFF , 1516px 988px #FFF , 362px 1797px #FFF , 843px 458px #FFF , 1599px 1134px #FFF , 655px 1619px #FFF , 1326px 1388px #FFF , 1178px 1152px #FFF , 1969px 606px #FFF , 354px 1812px #FFF , 1666px 1851px #FFF , 1298px 655px #FFF , 960px 1274px #FFF , 897px 1749px #FFF , 1832px 1943px #FFF , 1994px 87px #FFF , 776px 140px #FFF , 1641px 305px #FFF , 1463px 1130px #FFF , 1483px 548px #FFF , 1633px 1689px #FFF , 1716px 1129px #FFF , 153px 1027px #FFF , 1298px 1099px #FFF , 387px 26px #FFF , 1056px 768px #FFF , 76px 282px #FFF , 1649px 1857px #FFF , 1423px 1401px #FFF , 107px 654px #FFF , 1146px 1268px #FFF , 763px 1239px #FFF , 1753px 875px #FFF , 1651px 1425px #FFF , 1116px 1718px #FFF , 847px 1505px #FFF , 1795px 1003px #FFF , 631px 1278px #FFF , 1809px 1707px #FFF , 1650px 589px #FFF , 454px 1976px #FFF , 32px 670px #FFF , 698px 1179px #FFF;
        }

        #stars3 {
            width: 3px;
            height: 3px;
            background: transparent;
            box-shadow: 1957px 212px #FFF , 271px 275px #FFF , 1389px 19px #FFF , 752px 956px #FFF , 1284px 1372px #FFF , 1523px 573px #FFF , 1873px 1688px #FFF , 197px 1203px #FFF , 1063px 134px #FFF , 1946px 608px #FFF , 915px 364px #FFF , 252px 867px #FFF , 1029px 771px #FFF , 364px 1668px #FFF , 759px 1325px #FFF , 1316px 1187px #FFF , 1959px 1610px #FFF , 1749px 1994px #FFF , 541px 1219px #FFF , 802px 740px #FFF , 949px 270px #FFF , 492px 67px #FFF , 608px 1607px #FFF , 32px 130px #FFF , 878px 1905px #FFF , 869px 1665px #FFF , 1817px 604px #FFF , 855px 27px #FFF , 773px 276px #FFF , 1397px 175px #FFF , 1187px 1306px #FFF , 1072px 1027px #FFF , 837px 1012px #FFF , 1860px 708px #FFF , 536px 1403px #FFF , 126px 1686px #FFF , 1636px 1214px #FFF , 1491px 1020px #FFF , 345px 1751px #FFF , 1831px 1010px #FFF , 1404px 1467px #FFF , 1188px 465px #FFF , 210px 997px #FFF , 1951px 1333px #FFF , 504px 669px #FFF , 1450px 1747px #FFF , 1271px 1692px #FFF , 31px 62px #FFF , 1745px 1720px #FFF , 751px 372px #FFF , 1274px 523px #FFF , 1047px 883px #FFF , 1218px 205px #FFF , 1395px 658px #FFF , 1040px 770px #FFF , 1881px 935px #FFF , 382px 191px #FFF , 470px 1644px #FFF , 1985px 60px #FFF , 1116px 997px #FFF , 1360px 1697px #FFF , 1476px 1988px #FFF , 756px 76px #FFF , 793px 1939px #FFF , 1492px 953px #FFF , 18px 1268px #FFF , 385px 1035px #FFF , 611px 46px #FFF , 1562px 1190px #FFF , 1355px 1152px #FFF , 1083px 825px #FFF , 1713px 1189px #FFF , 927px 58px #FFF , 1516px 1848px #FFF , 1756px 285px #FFF , 808px 142px #FFF , 523px 1463px #FFF , 1465px 83px #FFF , 1539px 19px #FFF , 237px 861px #FFF , 1882px 474px #FFF , 1087px 943px #FFF , 631px 343px #FFF , 48px 446px #FFF , 529px 1427px #FFF , 524px 805px #FFF , 1537px 407px #FFF , 697px 559px #FFF , 174px 963px #FFF , 166px 1877px #FFF , 1914px 625px #FFF , 357px 1641px #FFF , 389px 900px #FFF , 188px 779px #FFF , 1310px 931px #FFF , 1294px 341px #FFF , 1696px 1489px #FFF , 1846px 443px #FFF , 965px 998px #FFF , 1512px 1855px #FFF;
            opacity: 0;
            -webkit-animation: animStar 150s linear infinite;
            animation: animStar 150s linear infinite;
        }
        #stars3:after {
            content: " ";
            position: absolute;
            top: 2000px;
            width: 3px;
            height: 3px;
            background: transparent;
            box-shadow: 1957px 212px #FFF , 271px 275px #FFF , 1389px 19px #FFF , 752px 956px #FFF , 1284px 1372px #FFF , 1523px 573px #FFF , 1873px 1688px #FFF , 197px 1203px #FFF , 1063px 134px #FFF , 1946px 608px #FFF , 915px 364px #FFF , 252px 867px #FFF , 1029px 771px #FFF , 364px 1668px #FFF , 759px 1325px #FFF , 1316px 1187px #FFF , 1959px 1610px #FFF , 1749px 1994px #FFF , 541px 1219px #FFF , 802px 740px #FFF , 949px 270px #FFF , 492px 67px #FFF , 608px 1607px #FFF , 32px 130px #FFF , 878px 1905px #FFF , 869px 1665px #FFF , 1817px 604px #FFF , 855px 27px #FFF , 773px 276px #FFF , 1397px 175px #FFF , 1187px 1306px #FFF , 1072px 1027px #FFF , 837px 1012px #FFF , 1860px 708px #FFF , 536px 1403px #FFF , 126px 1686px #FFF , 1636px 1214px #FFF , 1491px 1020px #FFF , 345px 1751px #FFF , 1831px 1010px #FFF , 1404px 1467px #FFF , 1188px 465px #FFF , 210px 997px #FFF , 1951px 1333px #FFF , 504px 669px #FFF , 1450px 1747px #FFF , 1271px 1692px #FFF , 31px 62px #FFF , 1745px 1720px #FFF , 751px 372px #FFF , 1274px 523px #FFF , 1047px 883px #FFF , 1218px 205px #FFF , 1395px 658px #FFF , 1040px 770px #FFF , 1881px 935px #FFF , 382px 191px #FFF , 470px 1644px #FFF , 1985px 60px #FFF , 1116px 997px #FFF , 1360px 1697px #FFF , 1476px 1988px #FFF , 756px 76px #FFF , 793px 1939px #FFF , 1492px 953px #FFF , 18px 1268px #FFF , 385px 1035px #FFF , 611px 46px #FFF , 1562px 1190px #FFF , 1355px 1152px #FFF , 1083px 825px #FFF , 1713px 1189px #FFF , 927px 58px #FFF , 1516px 1848px #FFF , 1756px 285px #FFF , 808px 142px #FFF , 523px 1463px #FFF , 1465px 83px #FFF , 1539px 19px #FFF , 237px 861px #FFF , 1882px 474px #FFF , 1087px 943px #FFF , 631px 343px #FFF , 48px 446px #FFF , 529px 1427px #FFF , 524px 805px #FFF , 1537px 407px #FFF , 697px 559px #FFF , 174px 963px #FFF , 166px 1877px #FFF , 1914px 625px #FFF , 357px 1641px #FFF , 389px 900px #FFF , 188px 779px #FFF , 1310px 931px #FFF , 1294px 341px #FFF , 1696px 1489px #FFF , 1846px 443px #FFF , 965px 998px #FFF , 1512px 1855px #FFF;
        }

        @-webkit-keyframes animStar {
            0% {
                opacity: 0;
                -webkit-transform: translateY(0px);
                transform: translateY(0px);
            }
            10% {
                opacity: 1;
            }
            100% {
                -webkit-transform: translateY(-2000px);
                transform: translateY(-2000px);
            }
        }

        @keyframes animStar {
            0% {
                opacity: 0;
                -webkit-transform: translateY(0px);
                transform: translateY(0px);
            }
            10% {
                opacity: 1;
            }
            100% {
                -webkit-transform: translateY(-2000px);
                transform: translateY(-2000px);
            }
        }
        @-webkit-keyframes sun {
            0% {
                background-color: #FFFF66;
                -webkit-transform: translateY(0);
                transform: translateY(0);
                opacity: 1;
            }
            70% {
                background-color: #FF4400;
            }
            100% {
                -webkit-transform: translateY(640px);
                transform: translateY(640px);
                opacity: 0;
            }
        }
        @keyframes sun {
            0% {
                background-color: #FFFF66;
                -webkit-transform: translateY(0);
                transform: translateY(0);
                opacity: 1;
            }
            70% {
                background-color: #FF4400;
            }
            100% {
                -webkit-transform: translateY(640px);
                transform: translateY(640px);
                opacity: 0;
            }
        }
        @-webkit-keyframes set {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
        @keyframes set {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
        @-webkit-keyframes clouds {
            0% {
                -webkit-transform: translate(-250px, 0);
                transform: translate(-250px, 0);
            }
            30% {
                opacity: 1;
            }
            40% {
                opacity: 0;
            }
            100% {
                -webkit-transform: translate(1000px, 0);
                transform: translate(1000px, 0);
                opacity: 0;
            }
        }
        @keyframes clouds {
            0% {
                -webkit-transform: translate(-250px, 0);
                transform: translate(-250px, 0);
            }
            30% {
                opacity: 1;
            }
            40% {
                opacity: 0;
            }
            100% {
                -webkit-transform: translate(1000px, 0);
                transform: translate(1000px, 0);
                opacity: 0;
            }
        }
        @-webkit-keyframes moon {
            0% {
                opacity: 0;
                top: 35%;
            }
            60% {
                opacity: 0;
                top: 45%;
            }
            100% {
                top: 5%;
                opacity: 1;
            }
        }
        @keyframes moon {
            0% {
                opacity: 0;
                top: 35%;
            }
            60% {
                opacity: 0;
                top: 45%;
            }
            100% {
                top: 5%;
                opacity: 1;
            }
        }
        @-webkit-keyframes darkness {
            0% {
                bottom: 0px;
            }
            100% {
                bottom: -200px;
            }
        }
        @keyframes darkness {
            0% {
                bottom: 0px;
            }
            100% {
                bottom: -200px;
            }
        }
        @-webkit-keyframes owl {
            0% {
                bottom: 150px;
            }
            100% {
                bottom: 70px;
            }
        }
        @keyframes owl {
            0% {
                bottom: 150px;
            }
            100% {
                bottom: 70px;
            }
        }
        @-webkit-keyframes ss {
            0% {
                opacity: 0;
                width: 1px;
                height: 1px;
                left: 60%;
                top: 20%;
            }
            50% {
                opacity: 0.7;
                width: 2px;
                height: 4px;
                left: 50%;
                top: 25%;
            }
            75% {
                opacity: 1;
                width: 6px;
                height: 10px;
                left: 40%;
                top: 30%;
            }
            85% {
                opacity: 0.3;
            }
            100% {
                opacity: 0;
                width: 1px;
                height: 1px;
                left: 32%;
                top: 36%;
            }
        }
        @keyframes ss {
            0% {
                opacity: 0;
                width: 1px;
                height: 1px;
                left: 60%;
                top: 20%;
            }
            50% {
                opacity: 0.7;
                width: 2px;
                height: 4px;
                left: 50%;
                top: 25%;
            }
            75% {
                opacity: 1;
                width: 6px;
                height: 10px;
                left: 40%;
                top: 30%;
            }
            85% {
                opacity: 0.3;
            }
            100% {
                opacity: 0;
                width: 1px;
                height: 1px;
                left: 32%;
                top: 36%;
            }
        }
        @-webkit-keyframes orbit {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                opacity: 0;
            }
        }
        @keyframes orbit {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                opacity: 0;
            }
        }
        @-webkit-keyframes rayshift {
            0% {
                border-color: #FFFF66;
            }
            100% {
                border-color: #FF4400;
            }
        }
        @keyframes rayshift {
            0% {
                border-color: #FFFF66;
            }
            100% {
                border-color: #FF4400;
            }
        }
        @-webkit-keyframes smile {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        @keyframes smile {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        @-webkit-keyframes leye {
            0% {
                height: 0;
                opacity: 0;
            }
            25% {
                height: 0.5em;
                opacity: 1;
            }
            50% {
                height: 0.2em;
            }
            75% {
                height: 0.4em;
            }
            100% {
                height: 0.7em;
            }
        }
        @keyframes leye {
            0% {
                height: 0;
                opacity: 0;
            }
            25% {
                height: 0.5em;
                opacity: 1;
            }
            50% {
                height: 0.2em;
            }
            75% {
                height: 0.4em;
            }
            100% {
                height: 0.7em;
            }
        }
        @-webkit-keyframes reye {
            0% {
                height: 0;
                opacity: 0;
            }
            25% {
                height: 0.5em;
                opacity: 1;
            }
            50% {
                height: 0.2em;
            }
            75% {
                height: 0.4em;
            }
            100% {
                height: 0.7em;
            }
        }
        @keyframes reye {
            0% {
                height: 0;
                opacity: 0;
            }
            25% {
                height: 0.5em;
                opacity: 1;
            }
            50% {
                height: 0.2em;
            }
            75% {
                height: 0.4em;
            }
            100% {
                height: 0.7em;
            }
        }

    </style>

</head>
<body class="dusk">
<div class="col-md-12">
    <div class="owl-background">
        <div class="moon"><div class="left">4</div><div class="right">4</div></div>
        <div class="owl">
            <div class="wing1"></div>
            <div class="wing2"></div>
            <div class="wing3"></div>
            <div class="wing4"></div>
            <div class="wing5"></div>
            <div class="wing6"></div>
            <div class="wing7"></div>
            <div class="wing8"></div>
            <div class="wing9"></div>
            <div class="wing10"></div>
            <div class="wing11"></div>
            <div class="wing12"></div>
            <div class="owl-head">
                <div class="ears"></div>
            </div>
            <div class="owl-body">
                <div class="owl-eyes">
                    <div class="owleye">
                        <div class="owleye inner"></div>
                        <div class="owleye inner inner-2"></div>
                        <div class="eyelid top"></div>
                        <div class="eyelid bottom"></div>
                    </div>
                    <div class="owleye">
                        <div class="owleye inner"></div>
                        <div class="owleye inner inner-2"></div>
                        <div class="eyelid top"></div>
                        <div class="eyelid bottom"></div>
                    </div>
                    <div class="nose"></div>
                </div>
                <div class="feet">
                    <div class="foot1"></div>
                    <div class="foot2"></div>
                </div>
            </div>
            <div class="branch"></div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="message">
        <h2>Oops, parece que você está perdido!</h2>
        <p>A página que você está procurando não existe!</p><br>
        <div class="btndiv"><a href="{{ route('home.index') }}"><button class="btnpop">Página inicial</button><a></div>
    </div>
</div>
<div id='stars1'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<div id='sstar'></div>
</body>
</html>
