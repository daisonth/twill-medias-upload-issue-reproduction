<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  @vite('resources/css/app.css')
</head>

<body class="bg-gray-900">

  <div class="container mx-auto mt-[100px] p-[20px]  border-[1px] border-dashed shadow-xl text-green-100 rounded-xl">
    <h1 class="text-center text-xl">Twill CMS Demo Website</h1>
  </div>

  <div
    class="container mx-auto mt-[30px] p-[20px]  border-[1px] border-dashed shadow-xl text-green-100 flex flex-col gap-[50px] rounded-xl">
    <div>
      <p class="pb-[20px] text-xl">Description: </p>
      <div class="flex items-start p-[20px] border border-dashed border-gray-600 text-lg rounded-xl">
        <p>{{$data->description}}</p>
      </div>
    </div>

    <div>
      <p class="pb-[20px] text-xl">Image 1: </p>
      <div class="flex items-start gap-[20px] p-[20px] border border-dashed border-gray-600 text-lg rounded-xl">
        @if($data->hasImage('demo_image'))
        <img src="{{ asset($data->image('demo_image')) }}" alt="" class="max-h-[200px]">
        @else
        <p class="text-red-400">Image Not Defined</p>
        @endif
      </div>
    </div>

    <div>
      <p class="pb-[20px] text-xl">Group of Images: </p>
      <div class="flex gap-[20px] items-start p-[20px] border border-dashed border-gray-600 text-lg rounded-xl">
        @if($data->hasImage('demo_images'))
        @foreach($data->images('demo_images') as $img)
        <img src="{{ asset($img) }}" alt="" class="max-h-[200px]">
        @endforeach
        @else
        <p class="text-red-400">Images Not Defined</p>
        @endif
      </div>
    </div>
  </div>

  @vite('resources/js/app.js')
</body>

</html>
