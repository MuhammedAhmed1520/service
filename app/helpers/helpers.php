<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Mail;

/**
 * return message...
 *
 * @param bool $status
 * @param string|null $msg
 * @param array $data
 * @return array|null
 */
function return_msg(bool $status = false, string $msg = null, array $data = []): ?array
{
    return ['status' => $status, 'msg' => $msg, 'data' => $data];
}
