
@extends('layout')

@section('content')
    <h1>勤怠表</h1>
    <div>
      <p>{{ $user->name }}</p>
      <p>{{ optional($user->timestamp)->punch_in }}</p>
      <p>{{ optional($user->timestamp)->punch_out }}</p>
    </div>
    <div>
      <a href={{ route('timestamp.list') }}>一覧に戻る</a>
    </div>
@endsection
</body>
</html>