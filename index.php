
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>TV Show</title>
</head>
<style>
    input {
        width: 30%;
        padding-left: 1em;
        height: 3em;
        border: 0.2em solid white;
        border-radius: 2em;
    }
    button{color: white;
    background-color: #1182ea;
    border: 1em solid #1182ea;
    border-radius: 1.9em;
}
</style>

<body style="background: url('header.png');">
    <div id="header" class="row" style="margin:1em 1em 1em 1em">
        <div class="col-sm-12" style="height:10em;padding:4em 1em 4em 1em">
            <center>
                <form id="search" action="/search" method="POST">
                    <input id="website1" type="text" name="query" placeholder="search">
                    <button >Search</button>
                </form>
            </center>
        </div>
    </div>
</body>

</html>
