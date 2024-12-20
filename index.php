<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>郭航的个人主页</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css" /> -->
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: "楷体";
        }
        
        header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://img0.baidu.com/it/u=3393898351,2453822867&fm=253&fmt=auto&app=120&f=JPEG?w=654&h=366);
            height: 100vh;
            background-size: cover;
            background-position: center;
        }
        
        ul {
            float: right;
            list-style-type: none;
            margin: 15px;
        }
        
        ul li {
            display: inline-block;
        }
        
        ul li a {
            text-decoration: none;
            color: #fff;
            padding: 5px 20px;
            border: 1px solid transparent;
            transition: .6s ease;
            border-radius: 20px;
        }
        
        ul li a:hover {
            background-color: #fff;
            color: #000;
        }
        
        ul li.active a {
            background-color: #fff;
            color: #000;
        }
        
        .title {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .title h1 {
            color: #fff;
            font-size: 70px;
            font-family: Century Gothic;
        }
    </style>
</head>

<body>
    <header>
        <div class="main">
            <ul>
                <li class="active"><a href="#">首页</a></li>
                <li><a href="http://www.baidu.com" target="_blank">百度</a></li>
                <li><a href="https://ynxun.lanzn.com/b0fowh0va" target="_blank">软件库&密码:6666</a></li>
                <li><a href="https://blog.csdn.net/2402_86803212?spm=1018.2226.3001.5343" target="_blank"><span style="color: crimson;">C</span>SDN主页</a></li>

            </ul>
        </div>
        <div class="title">
            <h1><span style="color: crimson;">郭航</span> 的个人主页</h1>
        </div>
    </header>
</body>

</html>