<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data pass in view</title>
</head>
<body>
    <h2>my articles</h2>
    <ul>
        @foreach($articleName ?? [] as $article)
            <li>{{ $article }}</li>
        @endforeach
    </ul>

    <ul>
        @foreach($articleName2 ?? [] as $article2)
            <li>{{ $article2 }}</li>
        @endforeach
        
    </ul>
   
    <p>{{$myarticle}}</p>
</body>
</html>