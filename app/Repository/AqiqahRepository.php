<?php

namespace App\Repository;

use App\Models\AqiqahPackage;
use Illuminate\Support\Facades\DB;

class AqiqahRepository 
{
    public static function InsertUpdateAqiqah($data, $aqiqah_id = null){
        DB::beginTransaction();
        try {
            $aqiqah = AqiqahPackage::updateOrCreate(['id' => $aqiqah_id], $data);
            DB::commit();
            return $aqiqah;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}

?>