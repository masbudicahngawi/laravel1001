<footer class="bg-dark py-4 text-white mt-4">
	<div class="container">
		Belajar Laravel 10 | Copyright © {{ date("Y") }} Duniailkom
	</div>
</footer>


<script type="text/javascript">

	$(document).ready(function(){

		$("#tag_judul").blur(function(){
			var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
				}
			});

			let judul = document.getElementById("tag_judul");
			let isi_judul = judul.innerText;
			let idnya = $("#idnya").val();

			if(confirm("Anda yakin ?")){
				$.ajax({
					url: '/poi/update-judul',
					data : "_token=" + CSRF_TOKEN + "&id=" + idnya + "&judul=" + isi_judul,
					type : "post",
					success : function(data){
					// alert(data);
						alert("Judul berhasil diganti !");
					},
					error:function(){
						alert("error");
					}
				}); 
			}
		});
		

		$("#tag_deskripsi").blur(function(){
			var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
				}
			});

			let deskripsi = document.getElementById("tag_deskripsi");
			let isi_deskripsi = deskripsi.innerText;
			let idnya = $("#idnya").val();

			if(confirm("Anda yakin ?")){
				$.ajax({
					url: '/poi/update-deskripsi',
					data : "_token=" + CSRF_TOKEN + "&id=" + idnya + "&deskripsi=" + isi_deskripsi,
					type : "post",
					success : function(data){
					// alert(data);
						alert("Deskripsi berhasil diganti !");
					},
					error:function(){
						alert("error");
					}
				});
			}
		});


		theArr = [
			{ tag : 'satu', value : '1' }, 
			{ tag : 'dua', value : '2' },
			{ tag : 'tiga', value : '3' },
			{ tag : 'empat', value : '4' },
			{ tag : 'lima', value : '5' },
			{ tag : 'enam', value : '6' },
			{ tag : 'tujuh', value : '7' },
			{ tag : 'delapan', value : '8' },
			{ tag : 'sembilan', value : '9' },
			{ tag : 'sepuluh', value : '10' }
			];

		strTheArr = JSON.stringify(theArr);

		// alert("strTheArr : " + strTheArr + " dengan tipe : " + typeof(strTheArr));

		JSONParseStrTheArr = JSON.parse(strTheArr);

		// alert(JSONParseStrTheArr);

		// $('input[name="kategorinya"]').amsifySuggestags({
		$("#input_tag").amsifySuggestags({
			// suggestions : json_parse_suggestions,
			suggestions : JSONParseStrTheArr,
			showAllSuggestions: true,
			keepLastOnHoverTag: false,
			printValues: false
		});


		$("#tombol_simpan_tag").click(function(){
			let kode_kategori = $("#input_tag").val();
			alert("kode kategori : " + kode_kategori);
		});

	}); 
	
</script>

</body>
</html>