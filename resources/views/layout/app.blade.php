<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  @vite('resources/js/app.js')
</head>

<body>
  <main class="container">
    <h1>
      @yield('main-title')
    </h1>
    <div class="d-flex flex-wrap .justify-content-center">
      @foreach ($cards as $card)
        <div class="col-md-2">
          <div class="card bg-transparent text-light">
            
            <div class="card-body">
              <img src="{{ $card['thumb'] }}" class="card-img" alt="...">
              <p>{{ $card['title'] }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </main>
</body>

</html>
