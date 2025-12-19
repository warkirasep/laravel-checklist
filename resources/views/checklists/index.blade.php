<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Checklist
        </h2>
    </x-slot>

    <div class="py-6 max-w-3xl mx-auto">

        <!-- Form tambah checklist -->
        <form method="POST" action="{{ route('checklists.store') }}">
            @csrf
            <input
                type="text"
                name="title"
                placeholder="Checklist baru"
                class="border rounded p-2 w-full"
            >
            <button class="mt-2 bg-blue-500 text-white px-4 py-2 rounded">
                Tambah
            </button>
        </form>

        <!-- List checklist -->
        <ul class="mt-6">
            @foreach ($items as $item)
                <li class="flex justify-between border-b py-2 text-white">
                    {{ $item->title }}
                </li>
            @endforeach
        </ul>

    </div>
</x-app-layout>
