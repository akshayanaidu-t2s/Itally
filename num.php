<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$('.input').keyup(function () {
    if (!this.value.match(/[0-9]/)) {
        this.value = this.value.replace(/[^0-9]/g, '');
    }
});
</script>
</head>
<body>
  <input class="input" maxlength="1" type="text" autocomplete="off"/>
</body>
</html>
