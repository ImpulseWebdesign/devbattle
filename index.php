<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>DevBattle</title>
</head>
<body>
    <form>
        <input type="text" name="input" onchange="my(this.value)">
    </form>
<script type="text/javascript">
    
function my(val) {

   $c = a(val);
   console.log($c);
    
    
    $m = Math.max.apply(null, $c)+2;
    console.log($m);
    map = "";
    for($i=0;$i<$m;$i++){
        
        for($j=0;$j<$c.length;$j++){
            
            //console.log($i);
            //console.log($j);
            
            if($i == ($m - ($c[$j]+2))){
                map += "_";
            }else if($i == ($m - ($c[$j]+1))){
                map += "\/ \\";
            }else if($i <= $c[$j] && $i != $m){
                map += "| |";
            }else if($i == $m){
                map += "___";
            }else{
                map += " ";
            }
            
            
            
            if(($j+1) == $c.length){
                map += '\n';
            }
           //console.log("/"+ toString($c) +""\");
        }
        //map += '\n';
        
    }
    console.log(map);

}
function a(x){c=x.toUpperCase();b = []; for(i = 0; i < c.length; i++){ b.push(c[i].charCodeAt(0) - 65+1);} return b; }
</script>
</body>
</html>
