<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Wolkenkrabbels</title>
	<style>
    </style>
</head>
<body>
    <form>
        <input type="text" name="input" oninput="myFunction(this.value)" value="GOOGLE">
    </form>
    
    <p id="a"></p>
    
<script>
function myFunction(val) {
    document.getElementById("a").innerHTML = val; 
}
</script>
</body>
</html>
