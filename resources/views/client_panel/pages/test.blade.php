<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="//cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="grid grid-cols-4 gap-5">
        @foreach ($product as $value)
        @if ($value->video == "yes")
            
            <form class="bg-zinc-400 flex flex-col p-5 rounded-xl " method="POST" action="{{ route('upcat') }}">
                @csrf
                <img src="{{ asset('upload/product/' . $value->img) }}" alt="">
                <p>Product Title : {{ $value->name }}</p>
                <input class="hidden" type="text" name="product_id" value="{{ $value -> id }}">
                {{-- <select name="category">
                    @foreach ($cat as $item )
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                    <option selected value="{{ $value->getcategory->id }}">{{ $value->getcategory->name }}</option>
                </select> --}}
                <p class="text-sm font-bold pb-1">price : </p>
                <input class="px-2 py-0.5" type="text" name="price" value="{{ $value -> price }}">
                <button class="bg-slate-500 py-1 text-white" type="submit">Save</button>
            </form>
            @else
            <form class="bg-zinc-100 flex flex-col p-5 rounded-xl " method="POST" action="{{ route('upcat') }}">
                @csrf
                <img src="{{ asset('upload/product/' . $value->img) }}" alt="">
                <p class="text-sm font-bold pb-1">title : </p>
                <input class="px-2 py-0.5" type="text" name="title" value="{{ $value->name }}">
                <input class="hidden" type="text" name="product_id" value="{{ $value -> id }}">
                <p class="text-sm font-bold pb-1">category : </p>
                <select name="category">
                    @foreach ($cat as $item )
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                    <option selected value="{{ $value->getcategory->id }}">{{ $value->getcategory->name }}</option>
                </select>
                <p class="text-sm font-bold pb-1">price : </p>
                <input class="px-2 py-0.5" type="text" name="price" value="{{ $value -> price }}">
                <button class="bg-slate-500 py-1 text-white" type="submit">Save</button>
            </form>
            @endif
        @endforeach
    </div>
</body>
</html>