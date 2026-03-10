<?php

namespace App\Services\Auth;

use App\Repositories\AccountRepository;
use App\Repositories\MemberRepository;
use App\Repositories\EmployeeRepository;
use App\Repositories\PlanRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Constants\Resource;
use App\Constants\IDPrefixes;
use App\Utils\IDGenerator;
use Illuminate\Support\Str;

class RegisterService
{
    protected $accountRepo;

    public function __construct(
        private AccountRepository $accountRepository,
        private MemberRepository $memberRepository,
        private EmployeeRepository $employeeRepository,
        private PlanRepository $planRepository
    ){
    }

    public function register(array $data)
    {
        $validated = Validator::make($data, $this->getValidationRules($data))->validate();

        $accountsData = $this->prepareAccountsData($validated);
        $userDetails = $this->prepareAccountDetails($validated, $accountsData['id']);

        try {

            $accountRecords = $this->accountRepository->create($accountsData);

            if ($validated['account_type'] === Resource::ACCOUNT_TYPE_MEMBER) {
                $userData = $this->memberRepository->create($userDetails);
            } else {
                $userData = $this->employeeRepository->create($userDetails);
            }
        } catch(Exception $e) {
            throw $e;
        }

        return [
            'success' => ($accountRecords && $userData) ? true : false,
        ];
    }

    private function getValidationRules(array $data): array
    {
        $rules = [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
            'account_type' => ['required', Rule::in(Resource::ACCOUNT_TYPES)],
        ];

        if (($data['account_type'] ?? null) === 'member') {
            $rules = array_merge($rules, [
                'contact_number' => ['required', 'string', 'regex:/^\+63\d{10}$/'],
                'province' => ['required', 'string'],
                'city' => ['required', 'string'],
                'barangay' => ['required', 'string'],
                'zip_code' => ['required', 'string'],
                'gender' => ['required', Rule::in(Resource::GENDERS)]
            ]);
        }

        return $rules;
    }

    private function prepareAccountsData(array $data)
    {
        $data['accounts_id'] = (string) Str::uuid();
        $data['id'] = (string) Str::uuid();
        $data['first_name'] = $data['first_name'];
        $data['last_name'] = $data['last_name'];
        $data['password'] = Hash::make($data['password']);
        $data['account_type'] = $data['account_type'];
        $data['account_status'] = Resource::STATUS_ACTIVE;
        $data['created_at'] = now()->timestamp;
        $data['updated_at'] = now()->timestamp;

        return $data;
    }

    private function prepareAccountDetails(array $data, string $memberId): array
    {
        $now = now()->timestamp;

        $defaultFreePlanId = $this->planRepository->findByType(Resource::PLAN_FREE);

        $common = [
            'first_name' => $data['first_name'],
            'middle_name' => null,
            'last_name' => $data['last_name'],
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $data = array_merge($data, $common);

        if (($data['account_type'] ?? '') === 'member') {
            $data['members_id'] = $memberId;
            $data['contact_number'] = $data['contact_number'];
            $data['province'] = $data['province'];
            $data['city'] = $data['city'];
            $data['barangay'] = $data['barangay'];
            $data['zip_code'] = $data['zip_code'];
            $data['gender'] = $data['gender'];
            $data['plan_id'] = $defaultFreePlanId->plans_id;
            $data['weight'] = null;
            $data['plan_status'] = Resource::STATUS_ACTIVE;

        } elseif (in_array($data['account_type'] ?? '', ['staff', 'trainer'])) {
            $data['employees_id'] = $memberId;
            $data['employment_status'] = Resource::STATUS_ACTIVE;
            $data['employment_first_date'] = null;
            $data['employment_last_date'] = null;
            $data['can_train'] = 1;
        }

        return $data;
    }
}
