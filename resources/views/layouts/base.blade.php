<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ mix('css/app.css')}}">
  <title>Clinica</title>
</head>

<body>

  @include('components.header')
  @yield('doctorList')
  @yield('docPatients')
  @yield('docCreate')
  @yield('docEdit')
  @include('components.footer')

</body>

</html>