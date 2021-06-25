<div class="md:grid md:grid-cols-4">
    <div class="md:col-span-1"></div>
    <div class="md:col-span-2">
        @if ($errors->any())
            <div class="bg-red-300 p-2 rounded mb-2 border border-red-800 ">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="md:col-span-1"></div>
</div>

@if ($message = Session::get('success'))
    <div class="bg-green-400 mb-2 rounded py-1 px-2">
        <span class="text-white">{{ $message }}</span>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="bg-red-400 mb-2 rounded py-1 px-2">
        <span class="text-white">{{ $message }}</span>
    </div>
@endif