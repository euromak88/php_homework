<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{title}}</title>
    <style>
        body {
            height: 100vh;
            width: 100%;
            margin: 0;
            box-sizing: border-box;
            position: relative;
        }
        section {
            height: 45vh;
        }
        footer {
            height: 10vh;
        }
        section, footer {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        h1 {
            margin: 0;
            font-size: 4rem;
        }
    </style>
</head>
<body>
    <section>
        <h1>{{heading}}</h1>
    </section>
    <section>
        <time>{{current_time}}г</time>
    </section>
</body>
</html>
