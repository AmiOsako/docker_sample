<p>誤りがないことを確認のうえ送信ボタンをクリックしてください。</p>
<form method="post" action="{{ route('contact.complete') }}">
    @csrf
    <table class="table">
         <tr>
             <th>お問い合わせ部署</th>
             <td>{{ $contact->department->name }}</td>
             <input name="department_id" value="{{ $contact['department_id'] }}" type="hidden">
         </tr>
         <tr>
             <th>お名前</th>
             <td>{{ $contact->name }}</td>
             <input name="name" value="{{ $contact['name'] }}" type="hidden">
         </tr>
         <tr>
             <th>メールアドレス</th>
             <td>{{ $contact->email }}</td>
             <input name="email" value="{{ $contact['email'] }}" type="hidden">
         </tr>
         <tr>
             <th>内容</th>
             <td>{{ $contact->content }}</td>
             <input name="content" value="{{ $contact['content'] }}" type="hidden">
         </tr>
    </table>
    <div>
        <input type="submit" value="送信">
        <button type="button" onClick="history.back()">戻る</button>
    </div>
</form>
