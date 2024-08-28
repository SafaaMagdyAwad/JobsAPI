<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Application</title>
</head>
<body>
    <h1>Job Application Mail</h1>
    <p> welcome hr: good afternoon , i'm{{ $data['name'] }} .</p>
    <hr>
    <p> here is my Website:  {{ $data['website']   }}:</p>
    <p>Cover Litter{{ $data['cover_litter']   }}.</p>
    <p>i think i'm good to work as {{ $data['job']   }} in your company.</p>
    <p> my cv is attached with the email </p>
    <p> thank you. </p>
</body>
</html>
