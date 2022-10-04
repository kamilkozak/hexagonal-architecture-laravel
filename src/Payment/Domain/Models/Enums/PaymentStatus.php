<?php

namespace Src\Payment\Domain\Models\Enums;

enum PaymentStatus: string
{
    case Processing = 'processing';
    case Succeeded = 'succeeded';
    case Failed = 'failed';
}
