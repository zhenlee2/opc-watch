<?php

namespace App\Services\ShowPerformanceContractRating;

use App\Models\PerformanceContractReview;


class ShowPerformanceContractRating
{
    public function execute($id)
    {
        
        $data = PerformanceContractReview::select('pcr.accom_indicator_desc', 'pcr.accom_quality', 'pcr.accom_quantity', 'pcr.accom_timeliness', 'pcr.rating_quality', 'pcr.rating_quantity', 'pcr.rating_timeliness', 'pc_indicator.target_indicator_desc', 'pcr.remarks')
        ->where('pcr.pcindicator_id', '=', $id)
        ->get();

        return $data;
    }

    // public function execute()
    // {
    //     $indicator = new PCIndicator;
    //     $data = $indicator::performance_contract()
    //     ->leftJoin('pc', 'pc.id', '=', 'pc_indicator.pc_id')
    //     ->leftJoin('lib_activity', 'lib_activity.id', '=', 'pc.activity_id')
    //     ->leftJoin('category', 'category.id', '=', 'lib_activity.category_id')
    //     ->get();
    //     return $data;
    // }
}
