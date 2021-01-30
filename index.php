<!DOCTYPE html>
<html>
<head>
	<title>UAS Chandra</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	<script>
		var persons;
		$(function() {
			// next();
			$("#currentIndex").html(i+1);
			// $("#nData").html(persons.length);
			getPersons();
		});
			var i=-1; //variabel i=-1 untuk value dari indeks 0

			
			function next() {
				i++; //digunakan untuk menambah +1
				if(i==persons.length-1) {
					$("#btnNext").addClass("disabled");
				} else if(i==0){
					$("#btnPrev").addClass("disabled");
				}else {
					$("#btnPrev").removeClass("disabled");
				}
				
				$("#nama").html(persons[i].nama);
				$("#kota").html(persons[i].alamat);
				$("#img").attr("src",persons[i].foto)
				$("#currentIndex").html(i+1);
			}

			function prev() {
				i--; //digunakan untuk mengurangi -1
				if(i==0) {
					$("#btnPrev").addClass("disabled");
				} else if(i!=persons.length-1) {
					$("#btnNext").removeClass("disabled");
				}
				
				$("#nama").html(persons[i].nama);
				$("#kota").html(persons[i].alamat);
				$("#img").attr("src",persons[i].foto)
				$("#currentIndex").html(i+1);
			}	
			function getPersons() {
				$.post("data.php", function(data) {
					// alert(JSON.stringify(data));
					persons=JSON.parse(data);
					$("#nData").html(persons.length);
					next();
					// checkI();
				});
			}
	</script>

</head>
<body class="mt-5">
	<div class="card m-auto " style="width:200px">
  		<img class="card-img-top" src="assets/default.png" alt="Card image" id="img">
  		<div class="card-body">
		    <h4 id="nama" class="card-title">Tanpa Nama</h4>
		    <p id="kota" class="card-text">Some example text.</p>
			<a id="btnPrev" href="#" class="btn btn-primary" onclick="prev()">Prev</a>
			<span id="currentIndex">1</span>/<span id="nData">3</span>
		    <a id="btnNext" href="#" class="btn btn-primary" onclick="next()">Next</a>
          </div>
          <div class="add text-center" style="margin-bottom: 1em;">
            <a type="button" href="tambah.php" class="btn btn-primary">Tambah</a>  
          </div>
    </div>
    


</body>
</html>
