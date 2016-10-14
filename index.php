<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>DevBattle</title>
</head>
<body>
    <form>
        <input type="text" name="input" oninput="f(this.value)">
    </form>
<script>
   function f(val) {
        //document.getElementById("a").innerHTML = val;
       $c = a(val);
       console.log("_");
       console.log("/"+ toString(c) +""\");
                   
    }
    
    function a(x){c=x.toUpperCase();return c.charCodeAt(0) - 65+1;} a('z');

</script>
</body>
</html>
