<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$items = \App\Models\InvoiceItem::where('invoice_id', 20)->get()->toArray();
file_put_contents('scratch_output.json', json_encode($items, JSON_PRETTY_PRINT));
echo "Done";
