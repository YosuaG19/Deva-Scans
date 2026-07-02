<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Baris bahasa berikut berisi pesan kesalahan bawaan yang digunakan oleh
    | validator Laravel. Anda bebas mengubah pesan-pesan ini sesuai dengan
    | kebutuhan aplikasi Anda.
    |
    */

    'accepted' => 'Kolom :attribute harus disetujui.',
    'accepted_if' => 'Kolom :attribute harus disetujui ketika :other bernilai :value.',
    'active_url' => 'Kolom :attribute harus berupa URL yang valid.',
    'after' => 'Kolom :attribute harus berupa tanggal setelah :date.',
    'after_or_equal' => 'Kolom :attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => 'Kolom :attribute hanya boleh berisi huruf.',
    'alpha_dash' => 'Kolom :attribute hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num' => 'Kolom :attribute hanya boleh berisi huruf dan angka.',
    'any_of' => 'Kolom :attribute tidak valid.',
    'array' => 'Kolom :attribute harus berupa array.',
    'ascii' => 'Kolom :attribute hanya boleh berisi karakter ASCII, huruf, angka, dan simbol.',
    'before' => 'Kolom :attribute harus berupa tanggal sebelum :date.',
    'before_or_equal' => 'Kolom :attribute harus berupa tanggal sebelum atau sama dengan :date.',

    'between' => [
        'array' => 'Kolom :attribute harus memiliki antara :min hingga :max item.',
        'file' => 'Ukuran :attribute harus antara :min hingga :max kilobyte.',
        'numeric' => 'Nilai :attribute harus antara :min hingga :max.',
        'string' => ':attribute harus terdiri dari antara :min hingga :max karakter.',
    ],

    'boolean' => 'Kolom :attribute harus bernilai benar atau salah.',
    'can' => 'Kolom :attribute berisi nilai yang tidak diizinkan.',
    'confirmed' => 'Konfirmasi :attribute tidak sesuai.',
    'contains' => 'Kolom :attribute tidak memiliki nilai yang diperlukan.',
    'current_password' => 'Password yang dimasukkan salah.',
    'date' => 'Kolom :attribute harus berupa tanggal yang valid.',
    'date_equals' => 'Kolom :attribute harus berupa tanggal yang sama dengan :date.',
    'date_format' => 'Kolom :attribute harus sesuai dengan format :format.',
    'decimal' => 'Kolom :attribute harus memiliki :decimal angka di belakang koma.',
    'declined' => 'Kolom :attribute harus ditolak.',
    'declined_if' => 'Kolom :attribute harus ditolak ketika :other bernilai :value.',
    'different' => 'Kolom :attribute dan :other harus berbeda.',
    'digits' => 'Kolom :attribute harus terdiri dari :digits digit.',
    'digits_between' => 'Kolom :attribute harus terdiri dari antara :min hingga :max digit.',
    'dimensions' => 'Dimensi gambar pada :attribute tidak valid.',
    'distinct' => 'Kolom :attribute memiliki nilai yang duplikat.',
    'doesnt_contain' => 'Kolom :attribute tidak boleh mengandung salah satu dari: :values.',
    'doesnt_end_with' => 'Kolom :attribute tidak boleh diakhiri dengan salah satu dari: :values.',
    'doesnt_start_with' => 'Kolom :attribute tidak boleh diawali dengan salah satu dari: :values.',
    'email' => 'Kolom :attribute harus berupa alamat email yang valid.',
    'encoding' => 'Kolom :attribute harus dikodekan dengan :encoding.',
    'ends_with' => 'Kolom :attribute harus diakhiri dengan salah satu dari: :values.',
    'enum' => ':attribute yang dipilih tidak valid.',
    'exists' => ':attribute yang dipilih tidak valid.',
    'extensions' => 'Kolom :attribute harus memiliki salah satu ekstensi berikut: :values.',
    'file' => 'Kolom :attribute harus berupa file.',
    'filled' => 'Kolom :attribute wajib memiliki nilai.',

    'gt' => [
        'array' => 'Kolom :attribute harus memiliki lebih dari :value item.',
        'file' => 'Ukuran :attribute harus lebih besar dari :value kilobyte.',
        'numeric' => 'Nilai :attribute harus lebih besar dari :value.',
        'string' => ':attribute harus lebih dari :value karakter.',
    ],

    'gte' => [
        'array' => 'Kolom :attribute harus memiliki minimal :value item.',
        'file' => 'Ukuran :attribute harus lebih besar dari atau sama dengan :value kilobyte.',
        'numeric' => 'Nilai :attribute harus lebih besar dari atau sama dengan :value.',
        'string' => ':attribute harus minimal :value karakter.',
    ],

    'hex_color' => 'Kolom :attribute harus berupa kode warna heksadesimal yang valid.',
    'image' => 'Kolom :attribute harus berupa gambar.',
    'in' => ':attribute yang dipilih tidak valid.',
    'in_array' => 'Kolom :attribute harus ada di dalam :other.',
    'in_array_keys' => 'Kolom :attribute harus memiliki setidaknya salah satu kunci berikut: :values.',
    'integer' => 'Kolom :attribute harus berupa bilangan bulat.',
    'ip' => 'Kolom :attribute harus berupa alamat IP yang valid.',
    'ipv4' => 'Kolom :attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => 'Kolom :attribute harus berupa alamat IPv6 yang valid.',
    'json' => 'Kolom :attribute harus berupa JSON yang valid.',
    'list' => 'Kolom :attribute harus berupa daftar.',
    'lowercase' => 'Kolom :attribute harus menggunakan huruf kecil.',
        'lt' => [
        'array' => 'Kolom :attribute harus memiliki kurang dari :value item.',
        'file' => 'Ukuran :attribute harus kurang dari :value kilobyte.',
        'numeric' => 'Nilai :attribute harus kurang dari :value.',
        'string' => ':attribute harus kurang dari :value karakter.',
    ],

    'lte' => [
        'array' => 'Kolom :attribute tidak boleh memiliki lebih dari :value item.',
        'file' => 'Ukuran :attribute harus kurang dari atau sama dengan :value kilobyte.',
        'numeric' => 'Nilai :attribute harus kurang dari atau sama dengan :value.',
        'string' => ':attribute tidak boleh lebih dari :value karakter.',
    ],

    'mac_address' => 'Kolom :attribute harus berupa alamat MAC yang valid.',

    'max' => [
        'array' => 'Kolom :attribute tidak boleh memiliki lebih dari :max item.',
        'file' => 'Ukuran :attribute tidak boleh lebih dari :max kilobyte.',
        'numeric' => 'Nilai :attribute tidak boleh lebih dari :max.',
        'string' => ':attribute tidak boleh lebih dari :max karakter.',
    ],

    'max_digits' => 'Kolom :attribute tidak boleh lebih dari :max digit.',
    'mimes' => 'Kolom :attribute harus berupa file dengan tipe: :values.',
    'mimetypes' => 'Kolom :attribute harus berupa file dengan tipe: :values.',

    'min' => [
        'array' => 'Kolom :attribute harus memiliki minimal :min item.',
        'file' => 'Ukuran :attribute minimal :min kilobyte.',
        'numeric' => 'Nilai :attribute minimal :min.',
        'string' => ':attribute minimal :min karakter.',
    ],

    'min_digits' => 'Kolom :attribute harus memiliki minimal :min digit.',
    'missing' => 'Kolom :attribute tidak boleh ada.',
    'missing_if' => 'Kolom :attribute tidak boleh ada ketika :other bernilai :value.',
    'missing_unless' => 'Kolom :attribute tidak boleh ada kecuali :other bernilai :value.',
    'missing_with' => 'Kolom :attribute tidak boleh ada ketika :values tersedia.',
    'missing_with_all' => 'Kolom :attribute tidak boleh ada ketika semua :values tersedia.',
    'multiple_of' => 'Kolom :attribute harus merupakan kelipatan dari :value.',
    'not_in' => ':attribute yang dipilih tidak valid.',
    'not_regex' => 'Format :attribute tidak valid.',
    'numeric' => 'Kolom :attribute harus berupa angka.',

    'password' => [
        'letters' => ':attribute harus mengandung setidaknya satu huruf.',
        'mixed' => ':attribute harus mengandung setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers' => ':attribute harus mengandung setidaknya satu angka.',
        'symbols' => ':attribute harus mengandung setidaknya satu simbol.',
        'uncompromised' => ':attribute yang diberikan ditemukan dalam kebocoran data. Silakan gunakan :attribute yang berbeda.',
    ],

    'present' => 'Kolom :attribute harus ada.',
    'present_if' => 'Kolom :attribute harus ada ketika :other bernilai :value.',
    'present_unless' => 'Kolom :attribute harus ada kecuali :other bernilai :value.',
    'present_with' => 'Kolom :attribute harus ada ketika :values tersedia.',
    'present_with_all' => 'Kolom :attribute harus ada ketika semua :values tersedia.',

    'prohibited' => 'Kolom :attribute dilarang diisi.',
    'prohibited_if' => 'Kolom :attribute dilarang diisi ketika :other bernilai :value.',
    'prohibited_if_accepted' => 'Kolom :attribute dilarang diisi ketika :other diterima.',
    'prohibited_if_declined' => 'Kolom :attribute dilarang diisi ketika :other ditolak.',
    'prohibited_unless' => 'Kolom :attribute dilarang diisi kecuali :other termasuk dalam :values.',
    'prohibits' => 'Kolom :attribute melarang :other untuk ikut diisi.',

    'regex' => 'Format :attribute tidak valid.',
    'required' => 'Kolom :attribute wajib diisi.',
    'required_array_keys' => 'Kolom :attribute harus memiliki kunci: :values.',
    'required_if' => 'Kolom :attribute wajib diisi ketika :other bernilai :value.',
    'required_if_accepted' => 'Kolom :attribute wajib diisi ketika :other diterima.',
    'required_if_declined' => 'Kolom :attribute wajib diisi ketika :other ditolak.',
    'required_unless' => 'Kolom :attribute wajib diisi kecuali :other termasuk dalam :values.',
    'required_with' => 'Kolom :attribute wajib diisi ketika :values tersedia.',
    'required_with_all' => 'Kolom :attribute wajib diisi ketika semua :values tersedia.',
    'required_without' => 'Kolom :attribute wajib diisi ketika :values tidak tersedia.',
    'required_without_all' => 'Kolom :attribute wajib diisi ketika tidak ada satu pun dari :values yang tersedia.',
        'same' => 'Kolom :attribute harus sama dengan :other.',
    'size' => [
        'array' => 'Kolom :attribute harus berisi :size item.',
        'file' => 'Ukuran :attribute harus :size kilobyte.',
        'numeric' => 'Nilai :attribute harus :size.',
        'string' => 'Kolom :attribute harus terdiri dari :size karakter.',
    ],
    'starts_with' => 'Kolom :attribute harus diawali dengan salah satu dari: :values.',
    'string' => 'Kolom :attribute harus berupa teks.',
    'timezone' => 'Kolom :attribute harus berupa zona waktu yang valid.',
    'unique' => ':attribute sudah digunakan.',
    'uploaded' => 'Gagal mengunggah :attribute.',
    'uppercase' => 'Kolom :attribute harus menggunakan huruf kapital.',
    'url' => 'Kolom :attribute harus berupa URL yang valid.',
    'ulid' => 'Kolom :attribute harus berupa ULID yang valid.',
    'uuid' => 'Kolom :attribute harus berupa UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan pesan validasi khusus untuk atribut
    | tertentu dengan menggunakan format "atribut.rule". Hal ini memudahkan
    | Anda dalam memberikan pesan yang lebih spesifik untuk aturan validasi
    | tertentu.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'pesan-validasi-khusus',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Baris bahasa berikut digunakan untuk mengganti placeholder nama atribut
    | dengan nama yang lebih mudah dipahami, misalnya "Alamat Email"
    | daripada "email". Hal ini membuat pesan validasi menjadi lebih jelas
    | bagi pengguna.
    |
    */

    'attributes' => [],

];
