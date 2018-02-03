@extends('layout.admin')

@section('title', '后台首页')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">首页轮播</h3>
        <div class="actions pull-right">
          <i class="fa fa-chevron-down"></i>
          <i class="fa fa-times"></i>
        </div>
      </div>
      <div class="panel-body">
       @foreach($carousel as $k=>$v)
        <form action="/config/carousel" method="post" enctype="multipart/form-data" class="form-horizontal form-border" id="form" novalidate="novalidate">
            <div class="form-group">
                <div class="col-sm-6" style="width: 610px;height:57px;margin:0 auto;float: none;background-image: url({{$v->path}});background-size: 100% 100%;">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-6">
                    <input type="file"  name="path" id="input1" style="margin-top: 3px;">
                </div>
            </div>
          <div class="form-group">
            <div class="col-sm-offset-8 col-sm-10">
               <input type="hidden" name="id" value="{{$v->id}}">
              <button type="submit" class="btn btn-primary">提交</button></div>
          </div>
        </form>
       @endforeach 
      </div>
    </div>
  </div>
</div>
@endsection
