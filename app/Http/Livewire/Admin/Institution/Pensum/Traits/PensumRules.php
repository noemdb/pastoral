<?php

namespace App\Http\Livewire\Admin\Institution\Pensum\Traits;

trait PensumRules
{
   // 'level_id','pensum_id','order','hour_t_week','hour_p_week','unid_credit','approved_credit_unir','enable_academic_index',

    protected $rules = [
        'pensum.level_id' => 'required|integer',
        'pensum.course_id' => 'required|integer',
        'pensum.order' => 'required|integer',
        'pensum.hour_t_week' => 'required|integer',
        'pensum.hour_p_week' => 'required|integer',
        'pensum.unid_credit' => 'nullable|integer',
        'pensum.approved_credit_unir' => 'nullable|integer', //
        'pensum.enable_academic_index' => 'required|boolean', //
    ];

    protected function validationAttributes()
    {
        return [
            'pensum.level_id' => $this->list_comment['level_id'],
            'pensum.course_id' => $this->list_comment['course_id'],
            'pensum.order' => $this->list_comment['order'],
            'pensum.hour_t_week' => $this->list_comment['hour_t_week'],
            'pensum.hour_p_week' => $this->list_comment['hour_p_week'],
            'pensum.unid_credit' => $this->list_comment['unid_credit'],
            'pensum.approved_credit_unir' => $this->list_comment['approved_credit_unir'],
            'pensum.enable_academic_index' => $this->list_comment['enable_academic_index'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>