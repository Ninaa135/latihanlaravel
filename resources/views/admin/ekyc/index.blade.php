<x-app-layout>
    <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow mt-3">
        <h2 class="text-xl font-semibold mb-4"> Daftar eKYC Calon Mahasiswa</h2>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full border-collapse border border-gray-300 text-sm">
            <thead>
                <tr>
                    <th class="border p-2">No</th>
                    <th class="border p-2">Nama</th>
                    <th class="border p-2">NIM</th>
                    <th class="border p-2">Tanggal</th>
                    <th class="border p-2">Status</th>
                    <th class="border p-2">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($list as $i => $row)
                    <tr>
                        <td class="border p-2">{{ $i + 1 }}</td>
                        <td class="border p-2">{{ $row->user->name }}</td>
                        <td class="border p-2">{{ $row->user->nim }}</td>
                        <td class="border p-2">{{ $row->created_at->format('d M Y') }}</td>

                        <td class="border p-2">
                            <span class="px-3 py-1 rounded text-white 
                                {{ $row->status == 'ekyc_ditolak' ? 'bg-red-500' : 'bg-yellow-500' }}">
                                {{ ucfirst(str_replace('_', ' ', $row->status ?? 'Belum')) }}
                            </span>
                        </td>

                        <td class="border p-2 text-center">
                            <a href="{{ route('admin.ekyc.show', $row->id) }}"
                                class="text-blue-600 hover:underline">Detail</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="p-3 text-center text-gray-500">Belum ada data</td>
                    </tr>
                @endforelse

            </tbody>
        </table>

        <div class="mt-4">
            {{ $list->links() }}
        </div>
    </div>
</x-app-layout>