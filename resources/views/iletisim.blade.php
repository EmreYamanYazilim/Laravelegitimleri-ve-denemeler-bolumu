<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iletisim formu</title>
</head>
<body>

<form action="{{ route("kaydetme") }}" method="post">
    @csrf
    <label for="isimsoyisim">İsimSoyisim</label><br>
    <input type="text" name="isimsoyisim"><br>
    <label for="email">E-Mail Adresi</label><br>
    <input type="text" name="email"><br>
    <label for="tel">İrtibat Numarası</label><br>
    <input type="number" name="tel"><br>
    <label for="metin">Mesaj</label><br>
    <textarea name="metin" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" value="Gönder">



</form>

</body>
</html>
