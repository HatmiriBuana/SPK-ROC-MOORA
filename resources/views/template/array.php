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
</script>