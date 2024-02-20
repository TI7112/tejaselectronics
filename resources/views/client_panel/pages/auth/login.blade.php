<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Login | TEJAS Electronics</title>
    <script src="//cdn.tailwindcss.com"></script>
</head>

<body>
    <form action="{{ route('client_login') }}" method="POST" class="">
        @csrf
        <div class="flex justify-center items-center bg-zinc-800 min-h-screen gap-2 p-4">
            <div class="rounded-2xl w-full lg:w-96 bg-zinc-600  p-1">
                <div
                    class="border-2 border-zinc-200 bg-white rounded-2xl shadow-xl flex flex-col gap-10 w-full justify-between p-4">
                    <div class="flex justify-center pt-3">
                        <img class="w-20" src="{{asset('static/logo.png') }}" alt="">
                    </div>
                    <div class="w-full flex flex-col gap-3 py-3">
                        @if (Session::has('fail'))
                            <span class="bg-red-200 text-sm px-2 py-1">{{ Session::get('fail') }}</span>
                        @endif
                        <div class="w-full">
                            <p class="text-sm font-semibold py-1 text-slate-600">Enter Phone Number</p>
                            <input class="border-2 px-2 py-1 w-full" type="text" name="phone"
                                value="{{ old('phone') }}" placeholder="Enter Phone number">
                            @error('phone')
                                <span class="bg-red-200 w-full px-2 text-xs py-1">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="w-full">
                            <p class="text-sm font-semibold py-1 text-slate-600">Enter Password</p>
                            <input class="border-2 px-2 py-1 w-full" type="password" name="password"
                                placeholder="Enter password">
                            @error('password')
                                <span class="bg-red-200 w-full px-2 text-xs py-1">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <input class="bg-slate-700 text-white mt-2 hover:bg-slate-900 py-1" type="submit"
                            name="login">
                    <p class="text-center">Dont have an account? <a class="text-sky-500 hover:underline duration-400" href="{{ route('register') }}" >Signup</a></p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
