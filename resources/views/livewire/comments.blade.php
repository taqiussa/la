<form wire:submit.prevent="simpan">

    <div
        class="w-full border border-slate-200 shadow-sm shadow-pink-700 backdrop-blur bg-white/80 rounded-lg flex flex-col  items-center px-3 py-3 space-y-3">
        <div class="font-bold text-xl text-slate-600">
            Ucapan Selamat dan Do'a
        </div>
        <div class="w-full">
            <x-input-label for="password" :value="__('Masukkan Nama')" class="place-self-start font-bold text-slate-500" />
            <x-text-input wire:model.defer="nama" id="nama" class="block mt-1 w-full" type="text" name="nama" required />
            @error('nama')
                <x-input-error :messages="$message" class="mt-2" />
            @enderror
        </div>
        <div class="w-full">
            <x-input-label for="password" :value="__('Masukkan Ucapan')" class="place-self-start font-bold text-slate-500" />
            <x-text-input wire:model.defer="ucapan" id="ucapan" class="block mt-1 w-full" type="text" name="ucapan" required />
            @error('ucapan')
                <x-input-error :messages="$message" class="mt-2" />
            @enderror
        </div>
        <div class="place-self-end">
            <x-primary-button wire:click.prevent="simpan" wire:loading.class="bg-gray-600" wire:target="simpan">
                {{ __('Kirim') }}
            </x-primary-button>
        </div>
        <div class="space-y-2 overflow-y-auto h-80 w-full">
            @foreach ($listUcapan as $ucapan)
                <div class="w-full border-2 rounded-md px-1 py-2">
                    <div class="flex justify-between border-b-2 space-y-1">
                        <div class="font-bold text-slate-600">
                            {{ $ucapan->nama }}
                        </div>
                        <div class="text-slate-500 text-sm">
                            {{ $ucapan->created_at->diffForHumans() }}
                        </div>
                    </div>
                    <div class="text-slate-700 tracking-wider text-justify">
                        {{ $ucapan->ucapan}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</form>
