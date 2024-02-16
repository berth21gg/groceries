<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    @include('header')
    <br><br><br>
    <section>
        <h1>Home</h1>
        {{ $welcome_msg }}
    </section>
</body>

</html>
