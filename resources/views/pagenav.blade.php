<script>
    <?php

    $file = 1;
    $data = 1;

    ?>
</script>

@include('componen/navbar')
@include('componen/form')
@include('css')
<div class="crud-layout">
    <div class="main-title">
        <div class="arrow"><img src="{{asset('Vector.png')}}" alt=""></div>
    <div class="title">
        <h1 class="text-gradient-orange-500 to-green-400">Data KTP Pribadi</h1>
    </div>
</div>

<br>
    <button
        type="button"
        data-dialog-target="sign-in-dialog">
        <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
          </svg>
    </button>

<div class="btn-upload">
    @if ($file == 0)
    <a href="#" class="btn blue">
        Upload Foto/File
    </a>
    <div class="jarak">
        <a href="#" class="btn orange">
        Validasi Data
     </a>
    @else
    <div class="user">
        <img src="{{asset('contohktp.png')}}" alt=""/>
        <a href="" class="btn green">Ubah</a>
    </div>

    </div>
    
  </div>
  <div class="tabeluser">
  @include('tabeldata')
  @endif
</div>

</div>

<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
