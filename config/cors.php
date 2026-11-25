<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['*'], // Ganti menjadi bintang untuk development
    'allowed_headers' => ['*'],
    'supports_credentials' => true, // Wajib true agar cookie/token bisa lewat
];