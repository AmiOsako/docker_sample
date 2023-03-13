<?php

namespace App\Repositories;

use App\Http\Requests\ContactCompleteRequest;
use App\Models\Contact;
use Illuminate\Support\Collection;

interface ContactRepositoryInterface
{
    /**
     * お問い合わせ一覧
     * @return Collection
     */
    public function contact():Collection;

    /**
     * お問い合わせを作成
     * @param ContactCompleteRequest $request
     * @return Contact
     */
    public function createContact(ContactCompleteRequest $request):Contact;

}
