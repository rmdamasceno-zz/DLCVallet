
	function recovery(){
        $.ajax({
             url: 'http://localhost/wordpress/login/src/recovery.php',
             type: 'GET',
             success: function(res) {
				$("div#formLogin").css("display", "none");
                 document.getElementById("popup").innerHTML = res;
             }
        });
	}
	function popClose(){
        document.getElementById("popup").innerHTML = "";
		$("div#formLogin").css("display", "table");
	}
	function login(){
		$.ajax({
			type: "POST",
			url: "src/auth.php",
			data: {nrCPF:$('input[name="nrCPF"]').val(),txSENHA:$('input[name="txSENHA"]' ).val()} ,
			success: function(data) {
				if (data){
					//alert('logado'); 
					window.location.href = "http://localhost/wordpress/"
				}else{
					document.getElementById("mess").innerHTML = "Usuário e/ou Senha Incorreto!";
				}
			}
		});
	}

