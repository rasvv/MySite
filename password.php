<!DOCTYPE html>
<html>
<?php
		include "head.php"
	?>


<script type="text/javascript">

    function write(text){
		document.getElementById("pass").innerHTML = text;
    }
    
    function generate(){
        var len = +document.getElementById("userAnswer").value;
        var ints =[0,1,2,3,4,5,6,7,8,9]; 
        var chars=['a','b','c','d','e','f','g','h','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
        var upchars=['A','B','C','D','E','F','G','H','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        var out='';
        for(var i=0;i<len;i++){
            var ch=Math.random();
            if(ch<0.33){
                var ch2=Math.ceil(Math.random()*ints.length-1);
                out+=ints[ch2];
            }else if(ch<0.66){
                var ch2=Math.ceil(Math.random()*chars.length-1);
                out+=chars[ch2];            
            }else{
                var ch2=Math.ceil(Math.random()*upchars.length-1);
                out+=upchars[ch2];            
            }
        }
        write(out);
    }   
</script>

<body>
	<?php
		include "menu.php"
	?>
	<section>
        <h1>Генератор паролей</h1>

        <main>
            <div class="box">

                <p id="info">Введите длину пароля</p>
                <input type="text" id="userAnswer">
                <p id="pass"></p>
                <br>
                <a href="#" onClick="generate();" id="button">Начать</a>             
            </div>
        </main>
    </section>
	<?php
		include "footer.php"
	?>
</body>
</html>