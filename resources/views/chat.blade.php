<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Chatroom</title>

        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div id="app">
            <h1>Chatroom</h1>
            <chatmessage></chatmessage>
            <chatlog></chatlog>
            <chatcomposer></chatcomposer>
        </div>
        <script src="js/app.js" charset="utf-8"></script>
    </body>
