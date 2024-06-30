<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5dc;
            color: #4b3f2f;
            line-height: 1.6;
        }

        header {
            background-color: #8b5e3c;
            color: white;
            padding: 1.5em 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 1248px;
            top: 0;
            z-index: 1000;
            position: relative;
        }

        header h1 {
            margin: 0;
            font-family: 'Playfair Display', serif;
            font-size: 2.5em;
        }

        nav {
            background-color: #a67c52;
            padding: 1em;
            display: flex;
            justify-content: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 1216px;
            top: 60px;
            z-index: 999;
        }

        nav a {
            margin: 0 1em;
            text-decoration: none;
            color: #f5f5dc;
            font-weight: bold;
            font-family: 'Roboto', Arial, sans-serif;
            padding: 0.5em 1em;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #8b5e3c;
            color: #f5f5dc;
        }

        main {
            padding: 2em;
            background-color: white;
            margin: 2em auto 2em auto;
            max-width: 1200px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        main h2 {
            color: #8b5e3c;
            font-family: 'Playfair Display', serif;
            font-size: 2em;
            margin-bottom: 1em;
            line-height: 1.8;
        }

        button {
            background-color: #8b5e3c;
            color: white;
            border: none;
            padding: 0.5em 1em;
            cursor: pointer;
            border-radius: 4px;
            font-family: 'Roboto', Arial, sans-serif;
            font-size: 0.9em;
        }

        button:hover {
            background-color: #a67c52;
        }

        ul, ol {
            margin: 1em 0;
            padding: 0 1.5em;
        }

        ul li, ol li {
            margin-bottom: 0.5em;
        }

        .card {
            display: inline-flexbox;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 1.5em;
            margin-bottom: 1.5em;
            width: 1130px;
        }

        form {
            margin-bottom: 1px;
        }

        form label {
            display: block;
            margin-bottom: 0.5em;
            color: #4b3f2f;
            font-family: 'Roboto', Arial, sans-serif;
            font-size: 0.85em;
        }

        form input[type="text"],
        form input[type="email"],
        form textarea {
            width: calc(100% - 20px);
            padding: 0.4em;
            margin-bottom: 1em;
            border: 1px solid #a67c52;
            border-radius: 4px;
            font-family: 'Roboto', Arial, sans-serif;
            font-size: 0.85em;
        }

        form input[type="submit"] {
            background-color: #8b5e3c;
            color: white;
            border: none;
            padding: 0.5em 1em;
            cursor: pointer;
            border-radius: 4px;
            font-family: 'Roboto', Arial, sans-serif;
            transition: background-color 0.3s ease;
            font-size: 0.9em;
        }

        table {
            width: 1181px;
            display: inline-flexbox;
            font-family: 'Roboto', Arial, sans-serif;
        }

        table th,
        table td {
            padding: 0.8em;
            text-align: left;
        }

        table th {
            background-color: #8b5e3c;
            border: 2px solid #8b5e3c;
            color: white;
            font-family: 'Playfair Display', serif;
        }

        table tr:nth-child(even) {
            background-color: #f5f5dc;
            border: 2px solid #f5f5dc;
        }

        table td{
            border: 2px solid #f5f5dc;
        }
        
        .action-buttons button {
            margin-right: 0.5em;
        }

        footer {
            text-align: center;
            padding: 1.5em 0;
            background-color: #4b3f2f;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
            font-family: 'Roboto', Arial, sans-serif;
        }

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                padding: 0.5em;
            }

            nav a {
                margin: 0.5em 0;
                padding: 0.5em;
            }

            main {
                padding: 1em;
                margin: 2em auto 2em auto;
            }

            form input[type="text"],
            form input[type="email"],
            form textarea {
                width: calc(100% - 10px);
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    @yield('contenido')
</body>
</html>