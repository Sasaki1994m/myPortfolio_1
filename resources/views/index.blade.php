
@extends('layout')

@section('content')

      @if(Auth::check())
        {{ "ようこそ" . Auth::user()->name. "さん" }}
          <!-- <div>
            <a href= {{ route('timestamp.new') }} class= 'btn btn-outline-primary'>新しい勤務</a>
          </div> -->
          <div class="container mt-4">
            <div>
              <a class="btn btn-primary" href="{{ route('timestamp.new') }}">
                  勤怠を登録する
              </a>
          </div>

  </div>
      @endif
    <h1>勤怠一覧</h1>
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline" method="GET" 
          action="{{ route('timestamp.list') }}" >
          <input class="form-control mr-sm-2"  name="search"
           type="search" 
          placeholder="名前を入れてください" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索</button>
        </form>
    </nav>
   
    <table class ='table table-striped table-hover'>
      <tr>
        <th>名前</th><th>出勤時間</th><th>退勤時間</th><th>出勤打刻</th><th>退勤打刻</th>
        <th>休憩時間</th><th>稼働時間</th>
    @foreach ($timestamps as $timestamp)
    <tr>
       <td>
       <a href= {{ route('timestamp.peage',['id' => $timestamp->id] ) }}>
        {{ optional($timestamp->user)->name }} </a>
       </td>
       <!-- <td>{{ \Carbon\Carbon::today()->format("Y年m月d日") }}</td> -->
       <td>{{ config('const.times.1')}}
       <td>{{ config('const.times.2')}}
       <td>{{ $timestamp->punch_in }}</td>
       <td>{{ $timestamp->punch_out }}</td>
       <td>{{ config('const.times.0') }}</td>
       <td> <?php 
          $punchin = new DateTime($timestamp->punch_in);
          $punchout = new DateTime($timestamp->punch_out);
          $punchout = $punchout->modify('-1 hours');
          $result = $punchin->diff($punchout);
          echo $result->format('%h時間%I分');
          // dd($result);die;?> </td>
     </tr>
    @endforeach  
    
@endsection
    
</body>
</html>