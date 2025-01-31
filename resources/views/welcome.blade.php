<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @vite('resources/js/app.js')
</body>

<script>
    setTimeout(() => {
        window.Echo.channel('testChannel')
            .listen('PublicEvent', (e) => {
                console.log(e);
            });
    }, 500);
    setTimeout(() => {
        window.Echo.private('private-channel.user.{{ Auth::id() }}')
            .listen('PrivateEvent', (e) => {
                console.log(e);
            });
    }, 500);
</script>
</html>