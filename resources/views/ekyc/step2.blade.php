<x-app-layout>
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow mt-8">
        <h2 class="text-xl font-semibold mb-4 text-gray-800">E-KYC - Langkah 2: Upload Dokumen</h2>

        @if (session('success'))
            <div class="text-green-700 font-semibold bg-green-100 p-3 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('ekyc.step2.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Foto KTP</label>
            <input type="file" name="file_ktp" accept="image/*" class="block w-full border-gray-300 rounded-md shadow-sm">
            @if (isset($data->file_ktp))
                <p class="text-sm text-gray-500">Sudah upload: {{ basename($data->file_ktp) }}</p>
                <img src="{{ asset('storage/' . $data->file_ktp) }}" class="h-32 rounded mt-2 border">
            @endif

            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Selfie dengan KTP</label>
            <input type="file" name="file_selfie" accept="image/*" class="block w-full border-gray-300 rounded-md shadow-sm">
            @if (isset($data->file_selfie))
                <p class="text-sm text-gray-500">Sudah upload: {{ basename($data->file_selfie) }}</p>
                <img src="{{ asset('storage/' . $data->file_selfie) }}" class="h-32 rounded mt-2 border">
            @endif

            <div class="flex justify-end">
            @if ($data && $data->status === 'submitted')
                <a href="{{ route('ekyc.step2') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                    Lanjut ke Step 3
                </a>
            @else
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Simpan & Lanjut Step 3
                </button>
            @endif
            </div>
        </form>
    </div>
</x-app-layout>