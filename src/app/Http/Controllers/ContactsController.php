<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactCompleteRequest;
use App\Http\Requests\ContactConfirmRequest;
use App\Models\Contact;
use App\Repositories\ContactRepositoryInterface;
use App\Repositories\DepartmentRepositoryInterface;
use Illuminate\Contracts\View\View;

/**
 * Contactのコントローラー
 */
class ContactsController extends Controller
{
    private DepartmentRepositoryInterface $departmentRepository;
    private ContactRepositoryInterface $contactRepository;

    /**
     * @param DepartmentRepositoryInterface $departmentRepository
     * @param ContactRepositoryInterface $contactRepository
     */
    public function __construct(DepartmentRepositoryInterface $departmentRepository, ContactRepositoryInterface $contactRepository)
    {
        $this->departmentRepository = $departmentRepository;
        $this->contactRepository = $contactRepository;
    }

    /**
     * 問い合わせフォームと一覧ページを表示
     * @return View indexページ
     */
    public function index()
    {
        $departments = $this->departmentRepository->department();
        $contacts = $this->contactRepository->contact();
        return view('contacts.index', compact('departments', 'contacts'));
    }

    /**
     * 確認画面を表示
     * @param ContactConfirmRequest $request
     * @return View confirmページ
     */
    public function confirm(ContactConfirmRequest $request)
    {
        $contact = new Contact($request->only(['department_id', 'name', 'email', 'content']));
        return view('contacts.confirm', compact('contact'));
    }

    /**
     * お問い合わせを保存し、完了画面を表示
     * @param ContactCompleteRequest $request
     */
    public function complete(ContactCompleteRequest $request)
    {
        $input = $request->except('action');

        if ($request->action === '戻る') {
            return redirect()->action('ContactsController@index')->withInput($input);
        }
        // データを保存
        $this->contactRepository->createContact($request);

        // 二重送信防止
        $request->session()->regenerateToken();

        return view('contacts.complete');
    }

}
