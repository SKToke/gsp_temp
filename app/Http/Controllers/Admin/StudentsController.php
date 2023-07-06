<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CommonStatus;
use App\Enums\Gender;
use App\Enums\Religion;
use App\Enums\StudentStatus;
use App\Http\Controllers\Controller;
use App\Models\Admin\Settings\Department;
use App\Models\Admin\Settings\Disability;
use App\Models\Admin\Settings\District;
use App\Models\Admin\Settings\Institute;
use App\Models\Admin\Settings\Zone;
use App\Models\Student;
use App\Models\StudentValidator;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class StudentsController extends Controller
{
    public function index(): Renderable
    {
        $attributes = \request()->validate([
            'item' => ['nullable', 'in:10,25,50,100,200'],
            'search' => ['nullable', 'string'],
            'gender' => ['nullable', new Enum(Gender::class)],
            'religion' => ['nullable', new Enum(Religion::class)],
            'status' => ['nullable', new Enum(StudentStatus::class)],
            'zone_id' => ['nullable', Rule::exists(Zone::class, 'id')],
            'institute_id' => ['nullable', Rule::exists(Institute::class, 'id')],
            'department_id' => ['nullable', Rule::exists(Department::class, 'id')],
            'disability_id' => ['nullable', Rule::exists(Disability::class, 'id')],
            'district_id' => ['nullable', Rule::exists(District::class, 'id')],
        ]);

        $item = $attributes['item'] ?? 10;
        $search = $attributes['search'] ?? null;
        $status = $attributes['status'] ?? null;
        $gender = $attributes['gender'] ?? null;
        $religion = $attributes['religion'] ?? null;
        $zone_id = $attributes['zone_id'] ?? null;
        $disability_id = $attributes['disability_id'] ?? null;
        $institute_id = $attributes['institute_id'] ?? null;
        $department_id = $attributes['department_id'] ?? null;
        $district_id = $attributes['district_id'] ?? null;

        $students = Student::whereRelation('user', 'status', '=', CommonStatus::Active->name)
            ->when($status, fn($q) => $q->where('status', $status))
            ->when($gender, fn($q) => $q->where('gender', $gender))
            ->when($religion, fn($q) => $q->where('religion', $religion))
            ->when($zone_id, fn($q) => $q->where('zone_id', $zone_id))
            ->when($disability_id, fn($q) => $q->where('recipients_disability_id', $disability_id))
            ->when($institute_id, fn($q) => $q->where('institute_id', $institute_id))
            ->when($department_id, fn($q) => $q->where('department_id', $department_id))
            ->when($district_id, fn($q) => $q->where('district_id', $district_id))
            ->when($search, function ($sql) use ($search) {
                $sql->where('gsp_id', 'like', '%' . $search . '%')
                    ->orWhere('recipient_name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('primary_mobile', 'like', '%' . $search . '%');
            })
            ->latest()
            ->paginate($item)
            ->withQueryString();
        return view('admin.student', compact('students'));
    }

    public function edit(Student $student): Renderable
    {
        return view('admin.student-edit', compact('student'));
    }

    public function update(Student $student, Request $request)
    {
        $attributes = (new StudentValidator())->validate($student, $request->all(), false);
        updateStudent($student, $attributes);
        return back()->with('status', 'Data has been successfully updated.');
    }
}
