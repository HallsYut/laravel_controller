<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controller</title>
</head>
<body>
    <div class="header">
        <h1>HOME</h1>
    </div>
    <div class="contriner">
        <h1>ยินดีต้อนรับสู่</h1>
        <h1>NUTTAWUT</h1>
        <section>
            <div class="content">
                <h1>รับสอนเขียนเว็บไซต์</h1>
                <h1>รับสอนเขียนโปรแกรม</h1>
            </div>
        </section>
        <section>
            <div class="loop">
                <ul>
                    @foreach ($courses as $value)
                    <li><a href="/index_detail/{{ $value }}">คอร์ส {{ $value }}</a></li>
                    @endforeach
                </ul>
            </div>
        </section>
    </div>
</body>
</html>