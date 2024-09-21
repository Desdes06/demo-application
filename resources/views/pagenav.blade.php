@include('componen/navbar')
@include('css')
@include('js')

<div class="crud-layout">
    <div class="main-title">
        <div class="arrow"><a href="{{url('/')}}"><img src="{{asset('Vector.png')}}" alt=""></a></div>
    <div class="title">
        <h1 class="text-gradient-orange-500 to-green-400">Data KTP Pribadi</h1>
    </div>
</div>

<div class="btn-upload">
    @if (session('file_url'))
    <div class="user">
        <img src="{{session('file_url')}}" alt=""/>
            <div class="elev">
                <div style="margin-top:240px;"></div>
            <a href="" class="btn green">Ubah</a>
        </div>
    </div>
</div>
    </div>
<div class="tabeluser">
    @include('tabeldata')
        @else
    <form id="uploadForm" action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="filebtn" onchange="document.getElementById('uploadForm').submit();">
            <label for="filebtn">Upload Foto/File</label>
        </form>
    <div class="jarak">
        <a href="#" class="btn orange" id="validateButton" onclick="validateData()">
        Validasi Data
    </a>
</div>
    <div id="tableContainer" style="display: none; margin-left: -166px;">
        @include('tabeldata')
</div>
  @endif
</div>






<form action="{{ url('/ref') }}" method="POST">
    @csrf
    <input type="hidden" name="file_path" value="{{ str_replace(env('AWS_ENDPOINT') . '/' . env('AWS_BUCKET') . '/', '', session('file_url')) }}">
    <button type="submit" style="background: red;">Hapus File</button>
</form>




