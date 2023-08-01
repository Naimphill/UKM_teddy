const flashData = $('.flash-data').data('flashdata');

if(flashData){
	Swal.fire({
		title: 'Data',
		text: 'Berhasil' + flashData,
		icon: 'success'
	});
}

// Tombol Hapus
$('.tombolhapus').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Are You Sure?',
        text: "Data Will be Deleted !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete !',
      }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
        }
      })
});

// Form Error

// Login
const loginFlash = $('.flash-login').data('flash');

if(loginFlash){

    Swal.fire({
        title: loginFlash,
        text: 'Username atau Password tidak tersedia',
        icon: 'warning'
    });
}

const flashData = $('.gagal').data('flashdata');

    if (flashData) {
      Swal.fire({
        title: 'Data',
        text: flashGagal,
        icon: 'warning'
      });
}

const flashData = $('.pengajuan').data('flashdata');
if (flashData) {
    Swal.fire({
        title: 'Data Ditemukan',
        text: flashPengajuan,
        icon: 'success'

    });
}
// $this->session->set_flashdata('flash-gagal', 'Failure Uploaded');