<?php

namespace App\Exports;

use App\LedgerBook;
use Maatwebsite\Excel\Concerns\FromCollection;

class LedgerBooksExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return LedgerBook::all();
    }
}
