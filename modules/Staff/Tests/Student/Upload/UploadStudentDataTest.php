<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Tests\Student\Upload;

use Tests\TestCase;
use Tests\Helpers\StaffFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class UploadStudentDataTest extends TestCase
{
    use RefreshDatabase;
    use StaffFactoryHelper;

    /**
    *@test
    */
    public function shouldUploadCSVFileSuccessfully() : void
    {
        $this->markTestIncomplete('Changes in the process in the staff!');
        Storage::fake('student-records');
        $response = $this->actingAs($this->fakeStaff(), 'staff')
            ->post(\route('staff.student.upload-record'), [
                'student_csv' => UploadedFile::fake()->create('student_csv.csv')
            ]);

        $response->assertStatus(302);
    }
}
