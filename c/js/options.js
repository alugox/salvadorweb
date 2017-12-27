function loadDetails1($id, $paso){
	if($id == ""){
		document.getElementById("contentslideubi").innerHTML = "No se recibió ID";
	} else {
		document.getElementById("contentslideubi").innerHTML = "<img src='/c/img/loading.gif' width='32px' height='32px'>";
		document.getElementById("mapslideubi").innerHTML = "<img src='/c/img/loading.gif' width='32px' height='32px'>";
		if($paso == 1){
		$.ajax({
            method : "POST",
            url: '/c/api.php',
            data:{action:'loadone', data: $id, paso: $paso},
            success:function(html) {
                document.getElementById("contentslideubi").innerHTML = html;
            }
        });

		$.ajax({
            method : "POST",
            url: '/c/api.php',
            data:{action:'loadtwo', data: $id, paso: $paso},
            success:function(html) {
                document.getElementById("mapslideubi").innerHTML = html;
            }
        });

		}
	}
}