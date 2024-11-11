<?php

namespace App\Exports;

use App\Models\JobApplicants;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class JobApplicantsExport implements FromCollection,WithHeadings,ShouldAutoSize,WithStyles,WithTitle
{
    protected $condition;
    public function __construct($condition=null){
        $this->condition = $condition ?? null;
    }

    public function title(): string
    {
        return 'Job Applicant';
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(){
        $inputs = $this->condition;
        $users = jobApplicants::orderBy('id', 'desc')
            ->when(isset($inputs['location']), function ($q) use ($inputs) {
                return $q->where('prefered_location_1', 'like', '%' . $inputs['location'] . '%');
            })
            ->get();

        $output = [];
        if($users){
            $i=0;
            foreach($users as $user){
                $output[$i][]= $user->registration_number ?? '';
                $output[$i][]= $user->position ?? '';
                $output[$i][]= $user->prefered_location_1 ?? '';
                $output[$i][]= $user->prefered_location_2 ?? '';
                $output[$i][]= $user->prefered_location_3 ?? '';
                $output[$i][]= $user->applicant_name ?? '';
                $output[$i][]= $user->aadhaar_card_no ?? '';
                $output[$i][]= $user->pan_card_no ?? '';
                $output[$i][]= $user->dob && $user->dob != null  ? date('d-m-Y', strtotime($user->dob)) : '';
                $output[$i][]= $user->birth_place ?? '';
                $output[$i][]= $user->birth_state ?? '';
                $output[$i][]= $user->physically_challenged ?? '';
                $output[$i][]= $user->physically_challenged_details ?? '';
                $output[$i][]= $user->religion ?? '';
                $output[$i][]= $user->religion_details ?? '';
                $output[$i][]= $user->caste_category ?? '';
                $output[$i][]= $user->caste_category_other ?? '';
                $output[$i][]= $user->nationality ?? '';
                $output[$i][]= $user->address ?? '';
                $output[$i][]= $user->city ?? '';
                $output[$i][]= $user->state ?? '';
                $output[$i][]= $user->marital_status ?? '';
                $output[$i][]= $user->father_name ?? '';
                $output[$i][]= $user->husband_wife ?? '';
                $output[$i][]= $user->phone_number ?? '';
                $output[$i][]= $user->contact_number1 ?? '';
                $output[$i][]= $user->contact_number2 ?? '';
                $output[$i][]= $user->email ?? '';
                $output[$i][]= $user->uan_number ?? '';
                $output[$i][]= $user->esi_number ?? '';
                $output[$i][]= $user->name_of_registered_faculty ?? '';
                $output[$i][]= $user->degree ?? '';
                $output[$i][]= $user->registration_certificate ?? '';
                $output[$i][]= $user->main_qualification_year ?? '';
                $output[$i][]= $user->main_qualification_branch ?? '';
                $output[$i][]= $user->main_qualification_percentage ?? '';
                $output[$i][]= $user->main_qualification_date ?? '';
                $output[$i][]= $user->main_qualification_college ?? '';
                $output[$i][]= $user->main_qualification_univercity ?? '';
                $output[$i][]= $user->additiional_qualification_year ?? '';
                $output[$i][]= $user->additiional_qualification_branch ?? '';
                $output[$i][]= $user->additiional_qualification_percentage ?? '';
                $output[$i][]= $user->additiional_qualification_date && $user->additiional_qualification_date != null  ? date('d-m-Y', strtotime($user->additiional_qualification_date)) : '';
                $output[$i][]= $user->additiional_qualification_college ?? '';
                $output[$i][]= $user->additiional_qualification_univercity ?? '';
                $output[$i][]= $user->additiional1_qualification_year ?? '';
                $output[$i][]= $user->additiional1_qualification_branch ?? '';
                $output[$i][]= $user->additiional1_qualification_percentage ?? '';
                $output[$i][]= $user->additiional1_qualification_date && $user->additiional1_qualification_date != null  ? date('d-m-Y', strtotime($user->additiional1_qualification_date)) : '';
                $output[$i][]= $user->additiional1_qualification_college ?? '';
                $output[$i][]= $user->additiional1_qualification_univercity ?? '';
                $output[$i][]= $user->exp1_start_date && $user->exp1_start_date != null  ? date('d-m-Y', strtotime($user->exp1_start_date)) : '';
                $output[$i][]= $user->exp1_end_date && $user->exp1_end_date != null  ? date('d-m-Y', strtotime($user->exp1_end_date)) : '';
                $output[$i][]= $user->exp1_company_name ?? '';
                $output[$i][]= $user->exp1_location ?? '';
                $output[$i][]= $user->exp1_post_hold ?? '';
                $output[$i][]= $user->exp1_job_discription ?? '';
                $output[$i][]= $user->exp1_relevant ?? '';
                $output[$i][]= $user->exp2_start_date && $user->exp2_start_date != null  ? date('d-m-Y', strtotime($user->exp2_start_date)) : '';
                $output[$i][]= $user->exp2_end_date  && $user->exp2_end_date != null  ? date('d-m-Y', strtotime($user->exp2_end_date)) : '';
                $output[$i][]= $user->exp2_company_name ?? '';
                $output[$i][]= $user->exp2_location ?? '';
                $output[$i][]= $user->exp2_post_hold ?? '';
                $output[$i][]= $user->exp2_job_discription ?? '';
                $output[$i][]= $user->exp2_relevant ?? '';
                $output[$i][]= $user->applicent_remark ?? '';
                $i++;
            }
        }
        return collect($output);
    }

    public function headings(): array
    {
        return [
            'Registration number',
            'Position',
            'Prefered location 1',
            'Prefered location 2',
            'Prefered location 3',
            'Applicant name',
            'Aadhaar card no',
            'Pan card no',
            'DOB',
            'Birth place',
            'Birth state',
            'Physically challenged',
            'Physically challenged details',
            'Religion',
            'Religion details',
            'Caste category',
            'Caste category other',
            'Nationality',
            'Address',
            'City',
            'State',
            'Marital status',
            'Father name',
            'Husband/Wife',
            'Phone number',
            'Contact number1',
            'Contact number2',
            'Email',
            'Uan number',
            'Esi number',
            'Name of registered faculty',
            'Degree',
            'Registration certificate',
            'Main qualification year',
            'Main qualification branch',
            'Main qualification percentage',
            'Main qualification date',
            'Main qualification college',
            'Main qualification univercity',
            'Additiional qualification year',
            'Additiional qualification branch',
            'Additiional qualification percentage',
            'Additiional qualification date',
            'Additiional qualification college',
            'Additiional qualification univercity',
            'Additiional1 qualification year',
            'Additiional1 qualification branch',
            'Additiional1 qualification percentage',
            'Additiional1 qualification date',
            'Additiional1 qualification college',
            'Additiional1 qualification univercity',
            'Exp1 start date',
            'Exp1 end date',
            'Exp1 company name',
            'Exp1 location',
            'Exp1 post hold',
            'Exp1 job discription',
            'Exp1 relevant',
            'Exp2 start date',
            'Exp2 end date',
            'Exp2 company name',
            'Exp2 location',
            'Exp2 post hold',
            'Exp2 job discription',
            'Exp2 relevant',
            'Applicent remark',
        ];
    }

    public function styles(Worksheet $sheet){
        $sheet->getStyle('A1:BN1')->getFont()
            ->setSize(12)
            ->setBold(true)
            ->getColor()->setRGB('fff');

        $sheet->getRowDimension('1')->setRowHeight(20);

        $sheet->getStyle('A1:BN1')->getFill()
            ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
            ->getStartColor()->setARGB('8063f5');
    }
}
