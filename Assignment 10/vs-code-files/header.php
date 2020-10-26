<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,900&display=swap');

        * {
            font-family: 'Roboto', sans-serif;
            box-sizing: border-box;
            border-radius: 8px;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #33FFEB;
        }

        .header {
            font-size: 2rem;
            color: red;


            padding: 10px 20px;
            text-align: center;
        }

        .form-container {
            display: inline-block;
            position: relative;
            left: 50%;
            transform: translate(-50%);
            background-color: white;
            margin-top: 20px;
            padding: 30px 50px;
        }

        button {
            border: none;
            font-size: 1.2rem;
            background-color: blue;
            color: white;
            padding: 10px 40px;
            cursor: pointer;
        }

        .disabled {
            background-color: #76686c;
        }

        a {
            color: white;
            text-decoration: none;
        }

        .submit {
            margin-top: 30px;
            width: 100%;
        }

        h2 {
            color: red;
            text-align: center;
            font-weight: 200;
        }

        input {
            background-color: transparent;
            border: 1px solid black;
            padding: 10px;
            margin: 5px 0;
            width: 100%;
            font-size: 1.5rem;
            color: black;
        }

        .error {
            padding: 5px;
            text-align: center;
            background-color: red;
            color: white;
        }

        .success {
            padding: 7px;
            text-align: center;
            background-color: orange;
            color: white;
        }

        /* Table */
        table {
            border: 1px solid #0000FF;
            border-collapse: collapse;
            margin-top: 20px;
            padding: 0;
            width: 100%;
            table-layout: fixed;
        }

        table caption {
            font-size: 1.5em;
            margin: .7em 0 .95em;
        }

        table tr {
            background-color: #0080ff;
            border: 2px solid #ddd;
            padding: .25em;
        }

        table th,
        table td {
            padding: .655em;
            text-align: center;
        }

        table th {
            font-size: .95em;
            letter-spacing: .15em;
            text-transform: uppercase;
        }
    </style>
    <title>SQL Assessment</title>
</head>

<body>
    <div class='header'>
        ISHAAN OHRI 18BCE0265
    </div>