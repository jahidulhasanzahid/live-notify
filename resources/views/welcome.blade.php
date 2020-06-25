<!DOCTYPE html>
<head>
  <title>Laravel and Pusher Live Notification</title>
  <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('e83a31ec67d2ec873a00', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
</head>
<body>
  <h1>Laravel and Pusher Live Notification</h1>
  <p>
     This Simple Task Done by <code>Jahidul Hasan Zahid</code>
     for task Laravel Notification <code>Bangla Puzzel</code>.
  </p>
  <a href="{{ url('nofity') }}" target="_blank">Click Here for get Notification</a>
</body>