<script>
    <?php

    $file = 1;
    $data = 1;

    ?>
</script>

@include('componen/navbar')
@include('css')
<div class="crud-layout">
    <div class="main-title">
        <div class="arrow"><img src="{{asset('Vector.png')}}" alt=""></div>
    <div class="title">
        <h1 class="text-gradient-orange-500 to-green-400">Data KTP Pribadi</h1>
    </div>
</div>

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

