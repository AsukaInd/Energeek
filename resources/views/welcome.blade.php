<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">

    <form action="/" method="POST"
        class="flex flex-col justify-center px-10 py-5 bg-white shadow-lg border-2 border-black w-fit gap-10 mx-auto my-10 items-center">
        @csrf()
        <h2> Apply Lamaran</h2>

        <div class="flex flex-col gap-5 ">
            <div class="flex flex-col gap-3">
                <label for="" class="text-black font-medium "> Nama Lengkap</label>
                <input type="text" class="border-2 border-gray-500" name="name">
            </div>

            <div class="flex flex-col gap-3">
                <label for="" class="text-black font-medium "> Jabatan</label>
                <select name="job" id="" class="border-2 border-gray-500">
                    @foreach ($jobs as $job)
                        <option value="{{$job->id}}">{{$job->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col gap-3">
                <label for="" class="text-black font-medium "> Telepon</label>
                <input type="tel" class="border-2 border-gray-500" name="phone">
            </div>

            <div class="flex flex-col gap-3">
                <label for="" class="text-black font-medium "> Email</label>
                <input type="email" class="border-2 border-gray-500" name="email">
            </div>

            <div class="flex flex-col gap-3">
                <label for="" class="text-black font-medium "> Tahun Lahir</label>

                <input type="number" class="border-2 border-gray-500" name="year">
            </div>

            <div class="flex flex-col gap-3">
                <label for="" class="text-black font-medium "> Skill Set</label>
                <select name="skill" id="" class="border-2 border-gray-500">
                    @foreach ($skills as $skill)
                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                    @endforeach
                </select>
            </div>

        </div>

        <button type="submit" class="bg-red-600 text-white w-full">Apply</button>

    </form>


</body>

</html>
