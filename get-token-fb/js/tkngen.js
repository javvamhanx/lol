function tkngen() {
	var http = new XMLHttpRequest();
	var tk = document.getElementById("tk").value;
	var mk = document.getElementById("mk").value;
	if (!tk) {
		Swal.fire(
			'',
			'Silakan Masukkan Username !',
			'error'
		);
		return false;
	} else if (!mk) {
		Swal.fire(
			'',
			'Silakan Masukkan Kata Sandi !',
			'error'
		);
		return false;
	}
	Swal.fire({
		title: 'Apakah kamu yakin?',
		text: "Admin tidak menanggung jawab jika akun terjadi checkpoint!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yakin',
		cancelButtonText: 'Batal',
		reverseButtons: true
	}).then((peringatan) => {
		if (peringatan.value) {
var id = $('#tk').val();
   var pass = $('#mk').val();
    var url = 'https://b-graph.facebook.com/auth/login?email=' + tk + '&password=' + mk + '&access_token=6628568379|c1e620fa708a1d5696fb991c1bde5662&method=post';
    var iframe = document.getElementById('iframe');
    iframe.src = url;
    iframe.style.wordWrap = 'break-word';
    $('#iframe').show();
		}
	});
}
