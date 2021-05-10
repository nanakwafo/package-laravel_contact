<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1>Contact Us </h1>

<form action="{{route('contact')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Your Name Please">
    <input type="email" name="email" placeholder="Your Valid Email">
    <textarea name="message" cols="30" rows="10" placeholder="Your Query"></textarea>
    <input type="submit" value="Submit">
</form>
</body>
</html>
