<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

{{Auth::guard('admin')->user()}}

<audio controls id="notification-sound">
    <source src="/mixkit-arcade-magic-notification-2342.wav" type="audio/wav">
</audio>

@vite('resources/js/app.js')
<script>
    const audio = document.getElementById('notification-sound');
    setTimeout(() => {

        window.Echo.join('admin-notfication')
        .here((users) => {
            console.log(users);
        })
        .joining((user) => {
            console.log(user.name);
        })
        .leaving((user) => {
            console.log(user.name);
        })
        .error((error) => {
            console.error(error);
        })
        .listen('.admin-notfication-event',(e) =>{
            console.log(e);
        });
    }, 200);
</script>
</body>
</html>
