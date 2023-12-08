<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Shikku</title>

    <!-- Styles -->
    <style>

    </style>
</head>

<body class="m-0 bg-gradient-to-r from-cyan-500 to-blue-500 h-auto">
    <div class="container mx-auto py-2">
        @if (Route::has('login'))
            <div class="flex justify-end gap-3 sticky top-1 z-[999]">
                @auth
                    <a href="{{ url('/home') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-sm btn-info">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-sm btn-outline btn-neutral">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <!-- body -->
        <div class="grid grid-cols-1 lg:grid-cols-3 justify-center gap-3 mt-5">
            <!-- product card  -->
            <div class="card w-96 bg-base-100 shadow-xl">
                <figure>
                    <img
                        src="https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/465224/item/goods_00_465224.jpg" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">เสื้อ UNIQLOxNARUTO | Minato</h2>
                    <p>เนื้อผ้า Cotton 100% คุณภาพดี</p>
                    <p>ราคา 300.00 บาท</p>
                </div>
            </div>
            <!-- end product card  -->

            <!-- product card  -->
            <div class="card w-96 bg-base-100 shadow-xl">
                <figure>
                    <img
                        src="https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/465222/item/goods_09_465222.jpg" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">เสื้อ UNIQLOxNARUTO | Akatsuki</h2>
                    <p>เนื้อผ้า Cotton 100% คุณภาพดี</p>
                    <p>ราคา 300.00 บาท</p>
                </div>
            </div>
            <!-- end product card  -->

          <!-- product card  -->
          <div class="card w-96 bg-base-100 shadow-xl">
            <figure>
                <img
                    src="https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/470975/sub/goods_470975_sub14.jpg" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">เสื้อ UNIQLOxNARUTO | Akatsuki-Red</h2>
                <p>เนื้อผ้า Cotton 100% คุณภาพดี</p>
                <p>ราคา 300.00 บาท</p>
            </div>
        </div>
        <!-- end product card  -->

        <!-- product card  -->
        <div class="card w-96 bg-base-100 shadow-xl">
            <figure>
                <img
                    src="https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/466953/sub/goods_466953_sub15.jpg" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">เสื้อ UNIQLOxNARUTO | Nine Tail</h2>
                <p>เนื้อผ้า Cotton 100% คุณภาพดี</p>
                <p>ราคา 300.00 บาท</p>
            </div>
        </div>
        <!-- end product card  -->

        <!-- product card  -->
        <div class="card w-96 bg-base-100 shadow-xl">
            <figure>
                <img
                    src="https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/470976/sub/goods_470976_sub15.jpg" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">เสื้อ UNIQLOxNARUTO | Might Guy</h2>
                <p>เนื้อผ้า Cotton 100% คุณภาพดี</p>
                <p>ราคา 300.00 บาท</p>
            </div>
        </div>
        <!-- end product card  -->

        <!-- product card  -->
        <div class="card w-96 bg-base-100 shadow-xl">
            <figure>
                <img
                    src="https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/471085/sub/goods_471085_sub15.jpg" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">เสื้อ UNIQLOxNARUTO | Uzumaki Family</h2>
                <p>เนื้อผ้า Cotton 100% คุณภาพดี</p>
                <p>ราคา 300.00 บาท</p>
            </div>
        </div>
        <!-- end product card  -->
        </div>
    </div>
</body>

</html>
