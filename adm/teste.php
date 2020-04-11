<!DOCTYPE html>
<html>
  <head>
    <title>Parent Frame</title>
    <script>
      window.addEventListener('beforeunload', function(event) {
        console.log('I am the 1st one.');
      });
      window.addEventListener('unload', function(event) {
        console.log('I am the 3rd one.');
      });
    </script>
  </head>
  <body>
    <iframe src="child-frame.html"></iframe>
  </body>
</html>