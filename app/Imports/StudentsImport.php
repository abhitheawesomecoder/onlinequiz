<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new User([
            'name' => $row['name'],
            'email' => $row['email'],
            'password' => Hash::make($row['password']), // Make sure the passwords are hashed
            'mobile' => $row['mobile'],
            'role' => 'S',
            'class_name' => $row['class_name'],
            'school_name' => $row['school_name'],
            'division' => $row['division'],
            'adhaar_card_num' => $row['adhaar_card_num'],
            'class_teacher' => $row['class_teacher'],
            'fav_subject' => $row['fav_subject'],
            'schooler_ship' => $row['schooler_ship'],
            // Add other fields if needed
        ]);
    }
}
