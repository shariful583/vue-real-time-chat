<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .list-group{
            overflow-y: scroll;
            height: 300px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row" id="app">
        <div class="offset-3 col-6">
            <li class="list-group-item active">Chatting App</li>
            <ul class="list-group" v-chat-scroll>
                <chat v-for="value in chat.msg" v-bind:key="value.index" color="info">@{{ value }}</chat>
            </ul>
            <input type="text" class="form-control" placeholder="Type" v-model='message' v-on:keyup.enter='msg'>
        </div>
    </div>
</div>
   <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
