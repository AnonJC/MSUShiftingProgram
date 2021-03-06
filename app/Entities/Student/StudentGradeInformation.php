<?php

declare(strict_types=1);

namespace App\Entities\Student;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

final class StudentGradeInformation extends Model
{
    use Notifiable;
    protected $guarded = [];
}
