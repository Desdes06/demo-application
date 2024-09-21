@include('css')
<div class="crud-layout">
    <div class="main-title">
        <div class="arrow"><a href="{{url('/')}}"><img src="{{asset('Vector.png')}}" alt=""></a></div>
    <div class="title">
        <h1 class="text-gradient-orange-500 to-green-400">Data KTP Pribadi</h1>
    </div>
</div>

<div class="btn-upload">
    @if ($file)

    <div class="user">
        <img src="{{asset('contohktp.png')}}" alt=""/>
        <a href="" class="btn green">Ubah</a>
    </div>
    
</div>

</div>
<div class="tabeluser">
    @include('tabeldata')
    @else
    <a href="{{url('/upload')}}" class="btn blue">
        Upload Foto/File
    </a>
    <div class="jarak">
        <a href="#" class="btn orange">
        Validasi Data
     </a>
    </div>
  @endif
</div>



</div>

<a href="{{url('/ref')}}" class="btn blue">refresh</a>