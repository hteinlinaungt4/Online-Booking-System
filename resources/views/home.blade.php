<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>online-booking-system</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1>Hello welcome from home page</h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="bg-teal-600 rounded-md">Logout</button>
    </form>

</body>

</html>
