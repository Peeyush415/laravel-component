<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <div>
        <h1 class="bg-lime-400 text-3xl font-bold underline">
            Welcome to Laravel-Component
    </div>
    <x-alert type='error' message="Record Not Saved" position="top-left"> </x-alert>
    <x-alert type='success' message="Record Saved" position="top-right"> </x-alert>
    <x-alert type='info' message="Record Updated" position="bottom-left"> </x-alert>
    <x-alert type='warning' message="Are you sure to send this data" position="bottom-right"> </x-alert>
  </h1>
</body>
</html>
