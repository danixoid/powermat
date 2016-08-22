@extends('app')

@section('title') Вход в систему @endsection

@section('content')

    <header id="auth">
        <h2><strong>&laquo;Mobile Energy&raquo;</strong> - Вход в систему</h2>

        <div class="content">
            <div class="form-horizontal">

                <div class="col-md-4 col-md-offset-4">
                    <form role="form-group" method="POST" action="{{ url('auth/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <input type="email" placeholder="admin@admin.com" class="form-control"
                                   name="email" value="{{ old('email') }}">
                            @if($errors->get('email'))
                                @foreach($errors->get('phone') as $error)
                                    <span class="text-danger">{{ str_replace('phone','телефон',$error) }}</span>
                                @endforeach
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="password" placeholder="Пароль" class="form-control" name="password">
                            @if($errors->get('password'))
                                @foreach($errors->get('password') as $error)
                                    <span class="text-danger">{{ str_replace('password','пароль',$error) }}</span>
                                @endforeach
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-bg btn-info">Войти</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('javascript')
@endsection