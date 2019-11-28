<!doctype html>
<html>
    <head>
        <title>{Name}</title>
    </head>
    <style>
        p{
            font-size: 20px;
            text-indent: 5em;
        }
        h1{
            font-weight: bold;
            font-size: 30px;
        }
    </style>
    <body>
        <h1>{Name}</h1>
        <p><img src="/images/creators/{image}"/></p>
        <p>Name:{Name}</p>
        <p>Date of birth:{Date_of_birth}</p>
        <p>Grduate:{Grduate}</p>
        <p>Country:{Country}</p>
        <p>Game_company:{Game_company}</p>
        <p>Representative works:{Representative_works}</p>
        <p style="color:red">Identifier:{Identifier}</p>
        <p><a href="/creators">Back</a></p>
        <p><a href="/creators/home/edit/{id}">Edit</a></p>
        <p><a href="/home">Home</a></p>
    </body>
</html>

