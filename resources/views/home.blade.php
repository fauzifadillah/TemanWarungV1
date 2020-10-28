<!DOCTYPE html>
<html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180936138-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-180936138-1');
  </script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>TemanWarung V1.0</title>
  <link rel="icon" href="{{ asset('/tw.png') }}">

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />

  <!-- {{-- CSRF TOKEN --}} -->
  <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
  {{-- CSS SORANGAN --}}
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <!-- SweetAlert -->
  <link rel="stylesheet" href="{{ asset('css/sweetalert2.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
<!-- MODAL GAMBAR -->
<script src="{{ asset('js/fbox-jquery.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}" />
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
</head>

{{-- Navbar Start --}}
<nav class="navbar navbar-dark bg-warning my-0">
  {{-- <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> --}}
  <marquee direction="" onmouseover="this.stop();" onmouseout="this.start();">
    <div class="holder">
         <div class="text-container">
       &nbsp; &nbsp;&nbsp; <a data-fancybox-group="gallery" class="fancybox text-dark" href="/digital" title="THE ELECTRIC LIGHTING ACT: section 35">Baru! Produk Digital dari TemanWarung, klik disini sekarang!</a>
        </div>
    </div>
    </marquee>
  {{-- <div class="navbar-collapse collapse" id="navbarsExample01" style="">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-md-0">
      <input class="form-control" type="text" placeholder="Search" aria-label="Search">
    </form>
  </div> --}}
</nav>    
{{-- Navbar End --}}
<!-- Header 
<div class="row mx-0 header-section">
  {{-- Logo TemanWarung --}}
  <div class="col-auto logo-temanwarung">
    <img width="75" src="{{ asset('/twputih.png') }}">
  </div>
  <div class="col-auto hashtag-temanwarung">
    <b class="ml-4">#SelaluAdaTeman</b>
  </div>
</div>
{{-- End of Header --}} -->

<div class="container">
  <div class="row container-content">
    <!-- Page Title -->
    <div class="col-lg-12 text-center">
      <img class="page-title" src="{{ asset('/tw_biru.png') }}">
    </div>
    <div class="col-lg-12 text-center">
      <b>#SelaluAdaTeman</b>
    </div>
    <div class="col-lg-12">
      <div class="card" >
        <div class="card-body">
          <table id="table" class="" style="width:100%">
          <tbody>
            @foreach($model as $a)
            @if($a->id%3==0)
              <td class="text-center">
                <a href="{{route('detail',$a->id)}}" class="category" id="{{($a->id)/3}}" name="{{$a->id}}"><img src="{{ asset($a->image) }}" class="image-detail"/></a>
              </td>
            </tr>
            @elseif($a->id%3==1)
            <tr id="{{($a->id+2)/3}}">
              <td class="text-center">
                <a href="{{route('detail',$a->id)}}" class="category" id="{{($a->id+2)/3}}" name="{{$a->id}}"><img src="{{ asset($a->image) }}" class="image-detail"/></a>
              </td>
            @else
              <td class="text-center">
                <a href="{{route('detail',$a->id)}}" class="category" id="{{($a->id+1)/3}}" name="{{$a->id}}"><img src="{{ asset($a->image) }}" class="image-detail"/></a>
              </td>
            @endif
            @endforeach
          </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Footer --}}
<div class="container-footer">
  <div class="row">
    <!-- Social media -->
    <div class="col-12 text-center my-auto py-auto">
      {{-- <a href="https://temanwarung.id"><span class="footer-icon" ><i class="fab fa-facebook" aria-hidden="true"></i></span></a> --}}
      <a href="https://instagram.com/temanwarung"><span class="footer-icon"><i class="fab fa-instagram" aria-hidden="true"></i></span></a>
      <a href="https://linkedin.com/company/temanwarung"><span class="footer-icon"><i class="fab fa-linkedin" aria-hidden="true"></i></span></a>
      {{-- <a href="https://temanwarung.id"><span class="footer-icon"><i class="fab fa-youtube" aria-hidden="true"></i></span></a> --}}
    </div>
    <!-- Term and Condition -->
    <div class="col-12 mt-4 text-center">
      <b class="footer-term-condition">Term of Use &bull; Privacy Policy</b>
    </div>
    <!-- Copyright -->
    <div class="col-12 mt-2 text-center">
      <p class="footer-copyright">&copy; 2020 Teman Warung</p>
      <p class="footer-copyright">Server rendered in: {{ number_format( (microtime(true) - LARAVEL_START),3) }} sec.</p>
    </div>
  </div>
</div>
{{-- End of Footer --}}
{{-- HotJar Analytics --}}
<!-- Hotjar Tracking Code for www.temanwarung.id -->
<script>
  (function(h,o,t,j,a,r){
      h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
      h._hjSettings={hjid:2059658,hjsv:6};
      a=o.getElementsByTagName('head')[0];
      r=o.createElement('script');r.async=1;
      r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
      a.appendChild(r);
  })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
{{-- End of HotJar Analytics --}}
<!-- jQuery -->
<script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- Sweet Alert 2 -->
<script src="{{ asset('js/sweetalert2.all.js') }}"></script>

@include('layouts.modal')
<script>

  $(function() {                       //run when the DOM is ready
    $(".category").click(function() {  //use a class, since your ID gets mangled
      $(".category.active-image").removeClass("active-image")
      $(this).addClass("active-image");      //add the class to the clicked element
    });
  });

  $('body').on('click', '.modal-show', function(event){
    event.preventDefault();

    var url = $(this).attr('href');

    $.ajax({
      url: url,
      dataType: 'html',
      success: function (response) {
        $('#modal-body').html(response);
      }
    });

    $('#modal').modal('show');
  });

  $('body').on('submit','.form', function(event){
    event.preventDefault();

    var me = this,
        form = $('.form'),
        url = form.attr('action'),
        method = form.attr('method'),
        name = form.attr('id');

    $.ajax({
      url : url,
      type : "POST",
      data: new FormData(me),
      dataType: 'JSON',
      contentType: false,
      processData: false,
      success: function(response){
        $('#modal').modal('hide');

        swal({
          title: "Apakah kamu yakin ingin membeli '"+name+"'?",
          text: "Setelah ini kamu akan kembali ke WhatsApp TemanWarung",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'OK, saya yakin!',
          cancelButtonText: 'Gak jadi!'

        }).then((result)=>{
          if(result.value){
            $.ajax({
              url: '{{ route('save') }}',
              type : "POST",
              data: new FormData(me),
              dataType: 'JSON',
              contentType: false,
              processData: false,
              success: function(response){
                const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000,
                  background: '#28A746',
                  onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                  }
                })
                Toast.fire({
                  type: 'success',
                  text: 'Sukses!'
                })
                // console.log(response);
                href='https://api.whatsapp.com/send?phone=6281312630599&text='+response;
                window.location=href;
                // TO BE DETERMINED --OJOY
                $.ajax('https://api.whatsapp.com/send?phone=6281312630599', {
                        "headers": {
                        "accept": "application/json",
                        "Access-Control-Allow-Origin":"*"
                    },
                    data: JSON.stringify({
              
                    }),
                    contentType: 'application/json',
                    type: 'POST'
                  });
              },
              error: function(xhr){
                swal({
                  type: 'error',
                  title: 'Oops...',
                  text: 'Maaf sistem dalam perbaikan'
                });
              }
            });
          }
        });
      },
      error: function(xhr){
        var res = xhr.responseJSON;
        if ($.isEmptyObject(res) == false) {
          form.find('.invalid-feedback').remove();
          form.find('.is-invalid').removeClass('is-invalid');
          $.each(res.errors, function (key, value) {
            $('#' + key)
              .addClass('is-invalid')
              .after('<div class="invalid-feedback d-block">'+value+'</div>');
          });
        };
      }
    });
  });

  $('.category').on('click', function(){
    event.preventDefault();

    var me = $(this),
        url = me.attr('href'),
        id = me.attr('id'),
        name = me.attr('name'),
        tr = me.closest('tr'),
        td = tr.next('tr');
    $.ajax({
      url: url,
      dataType: 'html',
      success: function (response){
        if (tr.hasClass('shown'+id)){
          if(td.hasClass('image'+name)){
            tr.removeClass('shown'+id);
            td.remove()
          }
          else{
            td.remove()
            tr.after(response);
        td.html('coba');
          }
        }
        else{
          tr.addClass('shown'+id).after(response);
        }
      }
    });
  });
</script>
</body>
</html>
