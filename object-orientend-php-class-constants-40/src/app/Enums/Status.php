<?php

namespace App\Enums;

class Status
{
    public const PAID = 'paid';
    public const PENDING = 'pending';
    public const DECLINED = 'declined';

    public const ALL_STATUS = [
        self::PAID => 'paid',
        self::PENDING => 'pending',
        self::DECLINED => 'declined'
    ];
}