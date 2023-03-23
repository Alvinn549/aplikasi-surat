<script>
  var clockDisplay = document.getElementById('clock');

  function startClock()
  {
    var getDate = new Date();
    let h = getDate.getHours();
    let m = getDate.getMinutes();
    let s = getDate.getSeconds();

    h = h < 10 ? "0" + h : h;
    m = m < 10 ? "0" + m : m;
    s = s < 10 ? "0" + s : s;

    clockDisplay.innerHTML = h+":"+m+":"+s;
  }
  setInterval(startClock, 1000);

  function previewImage(){
    const image = document.querySelector('#logo');
    const imgPreview = document.querySelector('#img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }

  }
</script>

<!-- bootstrap -->
<script src="{{ asset('js/bootstrap/bootstrap.bundle.js') }}"></script>
<!-- dashboard -->
<script src="{{ asset('js/scripts.js') }}"></script>
<!-- jquery -->
<script src="{{ asset('js/jQuery-3.6.0/jquery-3.6.0.js') }}"></script>
<!-- Sweetalert  -->
<script src="{{ asset('js/sweetalert/sweetalert.min.js') }}"></script>
<!-- datatables -->
<script src="{{ asset('js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatables/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('js/datatables/dataTables.fixedHeader.min.js') }}"></script>

<script>
  $('#penduduk_id').change(function() {
    var id = $(this).val();
    var url = '{{ route('getPendudukId', ':id') }}';
    url = url.replace(':id', id);

    $.ajax({
      url: url,
      type: 'get',
      dataType: 'json',
      success: function(response) {
        if (response !== null) {
          $('#nik').val(response.nik);
          $('#tempat_lahir').val(response.tempat_lahir);
          $('#tanggal_lahir').val(response.tanggal_lahir);
          $('#umur').val(response.umur);
          $('#kebangsaan').val(response.kebangsaan);
          $('#agama').val(response.agama);
          $('#pekerjaan').val(response.pekerjaan);
          $('#alamat').val(response.alamat_lengkap);
          $('#palapor').html(response.nama);
        }
      }
    });

  });
</script>

<script>
  $(document).ready(function() {
    var table = $('#penduduk-list').DataTable( {
      fixedHeader: true
    } );
  } );

  $(document).ready(function() {
    var table = $('#dusun-list').DataTable( {
      fixedHeader: true
    } );
  } );

  $(document).ready(function() {
    var table = $('#rw-list').DataTable( {
      fixedHeader: true
    } );
  } );

  $(document).ready(function() {
    var table = $('#rt-list').DataTable( {
      fixedHeader: true
    } );
  } );

  $(document).ready(function() {
    var table = $('#surat-list').DataTable( {
      fixedHeader: true
    } );
  } );

  $('.show-alert-delete-box').click(function(event){
    var form =  $(this).closest("form");
    event.preventDefault();
    swal({
      title: "Hapus data ini ?",
      text: "Perhatian data yang sudah di hapus tidak dapat dikembalikan !",
      icon: "warning",
      dangerMode: true,
      buttons: true,
    }).then((willDelete) => {
      if (willDelete) {
        form.submit();
      }
    });
  });

  $('#btn-store-penduduk').click(function(event) {
    var formObject = document.forms['store'];
    event.preventDefault(); 
    swal({
      title: "Simpan data ini ?",
      text: "Apakah anda yakin untuk menyimpan data ini ?",
      icon: "info",
      buttons: true,
    })
    .then((willStore) => {
      if (willStore) {
        formObject.submit();
      }
    });
  });

  

  $('#btn-create-surat').click(function(event) {
    var formObject = document.forms['store'];
    event.preventDefault(); 
    swal({
      title: "Kirim surat ini ?",
      text: "Apakah anda yakin untuk mengirim surat ini ?",
      icon: "info",
      buttons: true,
    })
    .then((willStore) => {
      if (willStore) {
        formObject.submit();
      }
    });
  });

  $('#btn-update-penduduk').click(function(event) {
    var formObject = document.forms['update'];
    event.preventDefault(); 
    swal({
      title: "Perbarui data ini ?",
      text: "Apakah anda yakin untuk memperbarui data ini ?",
      icon: "info",
      buttons: true,
    })
    .then((willUpdate) => {
      if (willUpdate) {
        formObject.submit();
      }
    });
  });

  $('#btn-update-profil-desa').click(function(event) {
    var formObject = document.forms['update'];
    event.preventDefault(); 
    swal({
      title: "Perbarui data ini ?",
      text: "Apakah anda yakin untuk memperbarui data ini ?",
      icon: "info",
      buttons: true,
    })
    .then((willUpdate) => {
      if (willUpdate) {
        formObject.submit();
      }
    });
  });

  $('#btn-store-dusun').click(function(event) {
    var formObject = document.forms['store'];
    event.preventDefault(); 
    swal({
      title: "Simpan data ini ?",
      text: "Apakah anda yakin untuk menyimpan data ini ?",
      icon: "info",
      buttons: true,
    })
    .then((willStore) => {
      if (willStore) {
        formObject.submit();
      }
    });
  });

  $('#btn-store-rw').click(function(event) {
    var formObject = document.forms['store'];
    event.preventDefault(); 
    swal({
      title: "Simpan data ini ?",
      text: "Apakah anda yakin untuk menyimpan data ini ?",
      icon: "info",
      buttons: true,
    })
    .then((willStore) => {
      if (willStore) {
        formObject.submit();
      }
    });
  });

  $('#btn-store-rt').click(function(event) {
    var formObject = document.forms['store'];
    event.preventDefault(); 
    swal({
      title: "Simpan data ini ?",
      text: "Apakah anda yakin untuk menyimpan data ini ?",
      icon: "info",
      buttons: true,
    })
    .then((willStore) => {
      if (willStore) {
        formObject.submit();
      }
    });
  });
</script>

@if(count($errors))
@foreach($errors->all() as $error)
<script>
  var klik = document.getElementById('btn-create-modal');
  klik.click()
</script>
@endforeach
@endif