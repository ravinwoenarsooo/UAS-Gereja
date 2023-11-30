@extends('layouts.kikiw')

@section('content')
<body style="background-color: #FAFBDF;">
    <div>
        <article class="w-full md:w-auto px-6 py-24 mx-auto">
            <div class="w-full mx-auto space-y-4 text-center">
                <h1 class="text-4xl font-bold md:text-5xl">{{ $wartaParoki->Judul }}</</h1>
                <p class="text-sm dark:text-gray-400 my-5">by Admin
                    <time datetime="2021-02-12 15:34:18-0200">{{ $wartaParoki->TanggalUpload }}</time>
                </p>
            </div>
            <div class="leading-10">
                <p>{{ $wartaParoki->Isi }}</p>
            </div>
        </article>
    </div>
</body>
@endsection