<?php

namespace App\Repositories;

use App\Models\Contact;
use Illuminate\Support\Collection;

/**
 * DBへアクセスする処理
 */
class ContactRepository implements ContactRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function contact():Collection
    {
        return Contact::all();
    }

    /**
     * @inheritDoc
     */
    public function createContact($request):Contact
    {
        return Contact::create($request->only(['department_id', 'name', 'email', 'content']));
    }

}
