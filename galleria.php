<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
    <script type='text/javascript' src='galleria/galleria-1.2.9.min.js'></script>
    <style>
    .galleria{ width: 800px; height: 400px; background: #def }
</style>
</head>
<body>
  <div class="galleria">
    <img src="img/a.jpg">
    <img src="img/b.jpg">
    <img src="img/c.jpg">
    <img src="img/d.jpg">
    <img src="img/e.jpg">
    <img src="img/f.jpg">
    <img src="img/g.jpg">
</div>
  <script>
        Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
        Galleria.run('.galleria');
  </script>

</body>
</html>
