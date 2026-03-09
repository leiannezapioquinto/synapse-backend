<?php

namespace App\Constants;

class Resource
{
    public const MIN_RANDOM_ALPHANUMERIC_LENGTH = 6;

    public const ACCOUNT_TYPE_MEMBER = 'member';
    public const ACCOUNT_TYPE_STAFF = 'staff';
    public const ACCOUNT_TYPE_TRAINER = 'trainer';

    public const ACCOUNT_TYPES = [
        self::ACCOUNT_TYPE_MEMBER,
        self::ACCOUNT_TYPE_STAFF,
        self::ACCOUNT_TYPE_TRAINER
    ];

    public const GENDER_FEMALE = 'female';
    public const GENDER_MALE = 'male';
    public const GENDER_NON_BINARY = 'non-binary';

    public const GENDERS = [
        self::GENDER_FEMALE,
        self::GENDER_MALE,
        self::GENDER_NON_BINARY
    ];

    public const STATUS_ACTIVE = 'active';
    public const STATUS_INACTIVE = 'inactive';
    public const STATUS_DELETED = 'deleted';

    public const PLAN_FREE = 'free';
    public const PLAN_PAID = 'paid';

}
