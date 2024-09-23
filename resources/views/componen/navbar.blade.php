@include('css')
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <header class="bg-white shadow-md shadow-gray-500">
        <nav class="mx-auto flex max-w-full items-center justify-between p-6 lg:px-8 shadow-black" aria-label="Global">
          <div class="flex lg:flex-1 items-center">
            <a href="#" class="-m-1.5 p-1.5 mr-2">
              <img style="height:60px" src="{{asset('Logo-kxpXFLZl_-transformed.png')}}" alt="image">
            </a>
            <h1 class="font-bold text-lg">BAPPENAS</h1>
          </div>
          </div>
          <div class="lg:flex lg:gap-x-7 items-center">
            <a href="/" >
              @if ($active == 'home')
                <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" fill="#00C7BD" class="bi bi-house" viewBox="0 0 16 16" style="filter: drop-shadow(0px 2px 2px rgba(0, 0, 0, 0.5));">
                  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                </svg> 
               @else
                <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" fill="#00C7BD" class="bi bi-house" viewBox="0 0 16 16">
                  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                </svg>  
              @endif             
            </a>
            <div class="h-10 border-l-4" style="border-color: #00FA99;"></div>
            <a href="/pagenav">
              @if ($active == 'pagenav')
              <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" fill="#00C7BD" class="bi bi-person" viewBox="0 0 16 16" style="filter: drop-shadow(0px 2px 2px rgba(0, 0, 0, 0.5));">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
              </svg>
              @else 
              <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" fill="#00C7BD" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
              </svg>
              @endif
            </a>
          </div>
        </nav>
      </header>
</body>