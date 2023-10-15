<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        h1 {
            color: #0074b8; /* Set the text color to a shade of blue */
            transition: color 0.3s; /* Add a smooth color transition effect */
            cursor: pointer; /* Change cursor to a pointer on hover */
        }

        h1:hover {
            color: #ef4444; /* Change text color to a shade of red on hover */
        }
    </style>
</head>
<body class="antialiased">
    <h1>Hello Yarana How Are You ?</h1>
    <table>
        <tr>
            <th>Name</th>
            <td>Abhishek Maurya</td>
        </tr>
        <tr>
            <th>Age</th>
            <td>25</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>example@email.com</td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td>123-456-7890</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>123 Main St, City, Country</td>
        </tr>
    </table>
</body>
</html>
