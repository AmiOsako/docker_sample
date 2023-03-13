
<h3>お問い合わせフォーム</h3>
@if ($errors->any())
    <div class="alert alert-danger mt-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route('contact.confirm') }}">
    @csrf
    <div class="mg-b_40">
    <lavel for="select" class="required-tag lg-label">お問い合わせ部署</lavel>
        <select class="form-control" id="department-id" name="department_id">
            @foreach ($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mg-b_40">
        <label for="name" class="required-tag lg-label">お名前</label><br>
        <input type="text" placeholder="山田太郎" id="name" name="name" value="{{ old('name') }}">
    </div>

    <div class="mg-b_40">
        <label for="email" class="required-tag lg-label">メールアドレス</label><br>
        <input type="email" placeholder="sample@example.com" id="mail" name="email" value="{{ old('email') }}">
    </div>

    <div class="mg-b_40">
        <label for="content" class="lg-label">お問い合わせ内容</label><br>
        <textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
    </div>

    <div class="mg-b_40">
        <input type="submit" value="確認">
    </div>
</form>

<div class="mg-b_40">
    <lavel for="content" class="lg-label">お問い合わせ一覧</lavel>
</div>

<div>
    <table>
        <tr>
            <th>お問い合わせ部署</th>
            <th>お名前</th>
            <th>メールアドレス</th>
            <th>お問い合わせ内容</th>
        </tr>
        @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->department->name }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->content }}</td>
        </tr>
        @endforeach
    </table>
</div>
