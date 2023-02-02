<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");

    * {
        font-family: "Montserrat", sans-serif;
        background-color: #272727;
        color:white;
    }

    header {
        display: flex;
        justify-content: center;
    }

    ul {
        font-size: 20px;
        display: flex;
        padding: 0;
    }

    li {
        list-style-type: none;
        margin-right: 50px;
    }

    a {
        text-decoration: none;
    }

    li:nth-last-child(1) {
        margin-right: 0px;
    }

    .content {
        margin-top: 100px;
        text-align: center;
        font-size: 30px;
    }
</style>

<body>
    <header>
        <nav class="menu">
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contacts">Contacts</a></li>
            </ul>
        </nav>
    </header>

    @yield("content")
</body>
</html>


