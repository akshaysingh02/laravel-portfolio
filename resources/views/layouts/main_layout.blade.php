<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <link rel="stylesheet" href="/css/state.css" type="text/css">
    <link rel="stylesheet" href="/css/layout.css" type="text/css">
    <link rel="stylesheet" href="/css/theme.css" type="text/css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">


    <script src="https://kit.fontawesome.com/4229d1b7f2.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <title>Portfolio</title>
    <style>
        /* html,
        body {
            min-height: 100%;
        }

        body,
        div,
        form,
        input,
        select,
        p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 16px;
            color: #eee;

        }

        body {
            background: url("/uploads/media/default/0001/01/b5edc1bad4dc8c20291c8394527cb2c5b43ee13c.jpeg") no-repeat center;
            background-size: cover;
        }

        h1,
        h2 {
            text-transform: uppercase;
            font-weight: 400;
        }

        h2 {
            margin: 0 0 0 8px;
        } */

        .main-block {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            padding: 25px;
            /* background: rgba(0, 0, 0, 0.4); */
        }

        .left-part,
        form {
            padding: 25px;
        }

        .left-part {
            text-align: center;
        }

        /* #form-heading{
            color: #fff;
        }
        #icon-form{
            color: #fff;
        } */
        /* #from-title{
            color: #fff;
        } */

        .fa-list-check {
            font-size: 72px;
        }

        form {
            /* background: rgba(0, 0, 0, 0.7); */
        }

        .title {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .info {
            display: flex;
            flex-direction: column;
        }

        input,
        select {
            padding: 5px;
            margin-bottom: 30px;
            background: transparent;
            border: none;
            border-bottom: 1px solid #130f49;
        }

        input::placeholder {
            color: #130f49;
            opacity: 30%;
        }

        option:focus {
            border: none;
        }

        option {
            background: black;
            border: none;
        }

        .checkbox input {
            margin: 0 10px 0 0;
            vertical-align: middle;
        }

        .checkbox a {
            color: #26a9e0;
        }

        .checkbox a:hover {
            color: #85d6de;
        }

        .btn-item,
        button {
            padding: 10px 5px;
            margin-top: 20px;
            border-radius: 5px;
            border: none;
            background: #26a9e0;
            text-decoration: none;
            font-size: 15px;
            font-weight: 400;
            color: #fff;
        }

        .btn-item {
            display: inline-block;
            margin: 20px 5px 0;
        }

        button {
            width: 100%;
        }

        button:hover,
        .btn-item:hover {
            background: #85d6de;
        }

        @media (min-width: 568px) {

            html,
            body {
                height: 100%;
            }

            .main-block {
                flex-direction: row;
                height: calc(100% - 50px);
            }

            .left-part,
            form {
                flex: 1;
                height: auto;
            }
        }
    </style>
</head>

<body>
    <div class="header flex flex-row justify-content-space-between">
        <a href="/">
            <div class="logo">akshay@portfolio</div>
        </a>

        <nav class=" flex flex-row justify-content-space-around align-items-center">
            <a href="/" class="{{Request::is('/')?'current':''}} text-link">Home</a>
            <a href="/projects/index" class="{{Request::is('projects/index')?'current-page':''}} text-link">Projects</a>
            <a href="https://github.com/akshaysingh02" class="social-media-link">
                <img src="https://img.icons8.com/fluent/28/000000/github.png" />
            </a>

            <a href="https://www.linkedin.com/in/akshaysingh02/" class="social-media-link">
                <img src="https://img.icons8.com/metro/28/000000/linkedin.png" />
            </a>
        </nav>


    </div>
    @yield('content')

    <div class="footer flex flex-row justify-content-space-between">
        <nav class=" flex flex-row justify-content-space-around align-center">
            <a href="/" class="{{Request::is('/')?'current':''}} text-link">Home</a>
            <a href="/projects/index" class="{{Request::is('projects/index')?'current-page':''}} text-link">Projects</a>
            <a href="https://github.com/akshaysingh02" class="social-media-link">
                <img src="https://img.icons8.com/fluent/28/000000/github.png" />
            </a>

            <a href="https://www.linkedin.com/in/akshaysingh02/" class="social-media-link">
                <img src="https://img.icons8.com/metro/28/000000/linkedin.png" />
            </a>

        </nav>
        <a href="/">
            <div class="logo">akshay@portfolio</div>
        </a>
    </div>
</body>

</html>