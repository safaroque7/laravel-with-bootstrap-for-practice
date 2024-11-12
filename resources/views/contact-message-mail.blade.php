<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Contact Message </title>
</head>

<body>
    <h2> New Contact Message </h2>
    <p> <strong>Name</strong> {{ $messageData['name'] }} </p>
    <p> <strong>Phone</strong> {{ $messageData['phone'] }} </p>
    <p> <strong>Email</strong> {{ $messageData['email'] }} </p>
    <p> <strong>Comment</strong> {{ $messageData['comment'] }} </p>
</body> 

</html>
