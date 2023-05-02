<x-app-layout>
    <x-breadcrumbs name="cashier.edit" :data="$cashier" />
    <h1 class="font-semibold text-2xl my-8">Ubah Kasir</h1>

    <div class="lg:flex gap-x-4">
        <div class="lg:w-1/5">
            <x-card-container>
                <div class="avatar">
                    <div class="w-full rounded rounded-xl">
                        <img src="{{ $cashier->profile_picture ? asset($cashier->profile_picture) : asset('images/menu/default.jpg') }}"
                            id="profileThumbnail" />
                    </div>
                </div>
                <a class="flex w-full justify-center items-center py-2 bg-gray-700 mt-3 text-white border border-transparent rounded-md shadow-sm"
                    id="btnChangeProfile">
                    <i class="fas fa-camera mr-2"></i>
                    <span>Unggah Foto</span>
                </a>
            </x-card-container>
        </div>
        <div class="lg:w-4/5">
            <form action="{{ route('admin.cashier.update', $cashier->id) }}" method="POST"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <x-card-container>
                    <h2 class="font-medium text-lg mb-8">Informasi Pribadi</h2>
                    <input type="file" id="profileImage" name="profile_picture" class="hidden" />

                    <div class="form-control mb-4">
                        <label class="input-group">
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                    <input type="radio" name="sex" value="1"
                                        {{ $cashier->sex == 1 ? 'checked' : '' }} class="radio checked:bg-primary" />
                                    <span class="text-sm text-gray-700 2xl:label-text bg-transparent">Pria</span>
                                </label>
                            </div>
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                    <input type="radio" name="sex" value="2"
                                        {{ $cashier->sex == 2 ? 'checked' : '' }} class="radio checked:bg-primary" />
                                    <span class="text-sm text-gray-700 2xl:label-text bg-transparent">Wanita</span>
                                </label>
                            </div>
                        </label>
                    </div>

                    <div class="grid grid-cols-2 gap-x-4">
                        <x-input id="first_name" label="Nama Depan" name="first_name" type="text" :value="$cashier->first_name"
                            required />
                        <x-input id="last_name" label="Nama Belakang" name="last_name" type="text" :value="$cashier->last_name"
                            required />
                    </div>

                    <div class="grid grid-cols-2 gap-x-4">
                        <x-input id="phone" label="Nomor Telepon" name="phone" :value="$cashier->phone" type="text"
                            required />
                        <x-input-single-datepicker label="Tanggal Lahir" id="birth_date" :value="$cashier->getBirthDate()"
                            class="block w-full" type="text" name="birth_date" required autocomplete="off"
                            required />
                    </div>

                    <x-textarea id="address" label="Alamat" name="address" required>
                        {{ $cashier->address }}
                    </x-textarea>

                    <div class="grid grid-cols-2 gap-x-4">
                        <x-input id="email" label="Email" name="email" type="email" :value="$cashier->email"
                            required />
                        <x-input id="password" label="Password" name="password" type="password" />
                    </div>

                    <div class="text-end">
                        <x-button class="px-8">
                            <i class="fas fa-save mr-3"></i>
                            <span>Simpan</span>
                        </x-button>
                    </div>
                </x-card-container>
            </form>
        </div>
    </div>

    @push('js-internal')
        <script>
            $(function() {
                $('#btnChangeProfile').on('click', function() {
                    $('#profileImage').click();
                });

                $('#profileImage').on('change', function() {
                    var file = this.files[0];
                    var reader = new FileReader();
                    reader.onloadend = function() {
                        $('#profileThumbnail').attr('src', reader.result);
                    };
                    if (file) {
                        reader.readAsDataURL(file);
                    } else {
                        $('#profileThumbnail').attr('src', '');
                    }
                });

                @if (Session::has('success'))
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: '{{ Session::get('success') }}',
                    });
                @endif

                @if (Session::has('error'))
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: '{{ Session::get('error') }}',
                    });
                @endif
            });
        </script>
    @endpush
</x-app-layout>
