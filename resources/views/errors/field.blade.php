{{--5.2以上版本使用$errors报错时，在App\Http\Kernel文件中的$middleware变量中，加入\Illuminate\Session\Middleware\StartSession::class,\Illuminate\View\Middleware\ShareErrorsFromSession::class, 代码--}}
@if($errors->any())
    <ul class="list-group">
        @foreach($errors->all() as $error)
            <li class="list-group-item list-group-item-danger">{{ $error }}</li>
        @endforeach
    </ul>
@endif