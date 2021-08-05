<div>
    @section('pageTitle')
        Wellcome to Code Blog
    @endsection
    {{-- <button x-data="{}" x-on:click="ShowModal('test-modal',{'name':'nguyen van hau'})">Hello.</button> --}}
    {{-- <livewire:test-modal /> --}}
    <div class="container mx-auto p-5">

        <h1 class="text-4xl mt-32 text-center tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
            Welcome to The Blog
        </h1>

        <div class="mt-10 max-w-xl mx-auto">
            @foreach($data as $field)
                <div class="border-b mb-5 pb-5 border-gray-200">
                    <a href="#" class="text-2xl font-bold mb-2">{{ $field->title }}</a>
                    <p>{{ Str::limit($field->body, 100) }}</p>
                    <span style="color: blueviolet;">{{ $field->tag }}</span>
                </div>
            @endforeach
        </div>

    </div>
</div>
