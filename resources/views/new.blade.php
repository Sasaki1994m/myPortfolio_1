

@extends('layout')

@section('content')
    <h1>出勤打刻</h1>
    @if(Auth::check())
      <div class="button-form">
        <ul>
          <li>
          <form action="{{ route('timestamp.punch_in') }}" method="POST">
            @csrf
            @method('POST')
            <button type="submit" class="btn btn-primary">出勤</button>
          </form>
          <li>
          <form action="{{ route('timestamp.punch_out') }}" method="POST">
            @csrf
            @method('POST')
            <button type="submit" class="btn btn-primary">退勤</button>
          </form>
        </ul>
      </div>
    @endif 
    
    <div>
      <a href={{ route('timestamp.list') }}>一覧に戻る</a>
    </div>
@endsection
</body>
</html>