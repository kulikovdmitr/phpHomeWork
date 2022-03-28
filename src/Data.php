<?php

class Data
{
    public static function fields()
    {
        $fields = [
            'firstname' => [
                'field_name' => 'First Name',
                'required' => true,
            ],
            'lastname' => [
                'field_name' => 'Last Name',
                'required' => true,
            ],
            'inn' => [
                'field_name' => 'Estonian Indefication Number',
                'required' => true,
            ],
            'amount' => [
                'field_name' => 'Amount',
                'required' => true,
            ],
            'period' => [
                'field_name' => 'Period',
                'required' => true,
            ],
            'purpose' => [
                'field_name' => 'Purpose',
                'required' => true,
            ],
        ];

        return $fields;
    }
}
