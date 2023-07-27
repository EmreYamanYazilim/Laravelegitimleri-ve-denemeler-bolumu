<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@if($errors->any())  <!-- gelen değerlerimiz  error adında bir değişkende tutuluyor  değişkenimizin dolu olup olmadığını any adında komutla öğreniyoruz-->

<ul>
    @foreach($errors->all() as $hatalar)  <!-- tüm hataları almak için all diyoruz ve forach döngüsü içinde hataları yazdırıyoruz  -->
    <li>
        {{ $hatalar }}
    </li>

    @endforeach
</ul>
@endif

<form action="{{ route("uyekayit") }}" method="post">
    @csrf
    <label for="">isim soyisim</label> <br>
    <input type="text" name="isimsoyisim"> <br>
    <label for="">telefon </label> <br>
    <input type="text" name="tel"> <br>
    <label for="">E mail </label> <br>
    <input type="text" name="mail"> <br>
    <input type="submit" value="Gönder">


</form>

</body>
</html>
