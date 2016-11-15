@extends('layouts.app1')

@section('content')
<div class="container">  
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">北汽研究院员工查询结果</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>查询失败</strong> 输入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif
                    

                    员工编号：<span>{{ $worker->yuangongbianhao }}</span>
                    <hr>
                    员工姓名：<span>{{ $worker->username }}</span>
                    <hr>
                    部门： <span>{{ $worker->bumen }}</span>
                    <hr>
                    科室：<span>{{ $worker->keshi }}</span>
                    <hr>
                    岗位：<span>{{ $worker->gangwei }}</span>

                </div>
            </div>
        </div>
    </div>
</div>  
@endsection