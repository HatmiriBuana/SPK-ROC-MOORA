<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cara Menyimpan Nilai Kedalam Array Kosong Dengan Form HTML Dan JavaScript</title>
	<style>
		body {
			font-family: sans-serif;
			margin: 10%
		}
		li { margin: 5px 0 }
	</style>
</head>
 
<body>
<input type="text" id="nomor" />
<input type="button" onclick="add();" value="add" />
<ul id="tampil"></ul>
</body>
</html>
 
<script type="text/javascript">
var tampung_array = [];
 
function add() {
   var masukan = document.getElementById('nomor');
   tampung_array.push(masukan.value);
   masukan.value = '';
   show();
}
 
function show() {
   var html = '';
   for (var i=0; i<tampung_array.length; i++) {
      html += '<li>' + tampung_array[i] + '</li>';
   }
   var tampil = document.getElementById('tampil');
   tampil.innerHTML = html;
}





var x = 5;

for (i=1, i<x.length, i++){
    if (i=1){5
        var bobot = (1/(x.length))/x.length;
        return $z = bobot;
    }
    if(i=1){4
            var bobot = (1/(x.length-1)+(1/(x.length)))/x.length;;
            return $z = bobot;
        }
    if(i=2){3
            var bobot = (1/(x.length-2))+(1/(x.length-1)+(1/(x.length)))/x.length;;
            return $z = bobot;
        }
    if(i=3){2
            var bobot = (1/(x.length-2))+(1/(x.length-2))+(1/(x.length-1)+(1/(x.length)))/x.length;;
            return $z = bobot;
        }
    if(i=4){1
            var bobot = ((1/(x.length-4))+(1/(x.length-3))+(1/(x.length-2))+(1/(x.length-1)+(1/(x.length))))/x.length;;
            return $z = bobot;
        }
    }
</script>




