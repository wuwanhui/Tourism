@extends('layouts.manage')

@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li><a href="#">微利分销</a></li>
            <li><a href="#">管理中心</a></li>
            <li class="active">资源供应</li>
        </ol>
        <div class="row">
            <div class="col-md-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">资源供应</div>

                    <div class="panel-body">
                        <ul>
                            <li>
                                <a href="{{url('/manage/supplier')}}" class="active">供应商列表</a>
                            </li>
                            <li>
                                <a href="{{url('/manage/supplier/product')}}">原始资源</a>
                            </li>

                        </ul>
                        <hr/>
                        <ul>
                            <li>
                                <a href="{{url('/manage/supplier/scenic')}}">景区配置</a>
                            </li>
                            <li>
                                <a href="{{url('/manage/supplier/produits')}}">产品中心</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="panel panel-default">
                    <form class="form-horizontal" role="form" method="POST">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12  text-left">
                                    <button type="button" class="btn btn-default"
                                            onclick="vbscript:window.history.back()">返回
                                    </button>
                                    <button type="submit" class="btn  btn-primary">保存</button>

                                </div>
                                <div class="col-xs-10 text-right"></div>
                            </div>
                        </div>
                        <div class="panel-body">
                            {{ csrf_field() }}
                            <div class="col-xs-12">
                                <fieldset>
                                    <legend>基本信息</legend>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-3 control-label">简称：</label>

                                        <div class="col-md-9">
                                            <input id="name" type="text" class="form-control" name="name"
                                                   value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('enterprise') ? ' has-error' : '' }}">
                                        <label for="enterprise" class="col-md-3 control-label">供应商全称：</label>

                                        <div class="col-md-9">
                                            <input id="enterprise" type="text" class="form-control" name="enterprise"
                                                   value="{{ old('enterprise') }}" required autofocus>

                                            @if ($errors->has('enterprise'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('enterprise') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('linkMan') ? ' has-error' : '' }}">
                                        <label for="linkMan" class="col-md-3 control-label">联系人：</label>

                                        <div class="col-md-9">
                                            <input id="linkMan" type="text" class="form-control" name="linkMan"
                                                   style="width: auto;"
                                                   value="{{ old('linkMan') }}" required autofocus>

                                            @if ($errors->has('linkMan'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('linkMan') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                        <label for="mobile" class="col-md-3 control-label">手机号：</label>

                                        <div class="col-md-9">
                                            <input id="mobile" type="text" class="form-control" name="mobile"
                                                   placeholder="手机号"
                                                   style="width: auto;"
                                                   value="{{ old('mobile') }}" autofocus>

                                            @if ($errors->has('mobile'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                                        <label for="tel" class="col-md-3 control-label">联系电话：</label>

                                        <div class="col-md-9">
                                            <input id="tel" type="text" class="form-control" name="tel"
                                                   style="width: auto;"
                                                   value="{{ old('tel') }}" autofocus>

                                            @if ($errors->has('tel'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('fax') ? ' has-error' : '' }}">
                                        <label for="fax" class="col-md-3 control-label">传真：</label>

                                        <div class="col-md-9">
                                            <input id="fax" type="text" class="form-control" name="fax"
                                                   style="width: auto;"
                                                   value="{{ old('fax') }}" autofocus>

                                            @if ($errors->has('fax'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('fax') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('qq') ? ' has-error' : '' }}">
                                        <label for="qq" class="col-md-3 control-label">QQ：</label>

                                        <div class="col-md-9">
                                            <input id="qq" type="text" class="form-control" name="qq"
                                                   style="width: auto;"
                                                   value="{{ old('qq') }}" autofocus>

                                            @if ($errors->has('qq'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('qq') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-3 control-label">电子邮件：</label>

                                        <div class="col-md-9">
                                            <input id="email" type="text" class="form-control" name="email"
                                                   value="{{ old('email') }}" autofocus>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('addres') ? ' has-error' : '' }}">
                                        <label for="addres" class="col-md-3 control-label">联系地址：</label>

                                        <div class="col-md-9">
                                            <input id="addres" type="text" class="form-control" name="addres"
                                                   value="{{ old('addres') }}" autofocus>

                                            @if ($errors->has('addres'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('addres') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('sort') ? ' has-error' : '' }}">
                                        <label for="sort" class="col-md-3 control-label">排序：</label>

                                        <div class="col-md-9">
                                            <input id="sort" type="text" class="form-control" name="sort"
                                                   style="width: auto;"
                                                   value="{{ old('sort') }}" autofocus>

                                            @if ($errors->has('sort'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('sort') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('platform') ? ' has-error' : '' }}">
                                        <label for="platform" class="col-md-3 control-label">所属平台：</label>

                                        <div class="col-md-9">
                                            <select id="platform" name="platform" class="form-control"
                                                    style="width: auto;">
                                                <option value="have">自有平台</option>
                                                <option value="qianfan">千番分销</option>
                                            </select>
                                            @if ($errors->has('platform'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('platform') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                        <label for="state" class="col-md-3 control-label">状态：</label>

                                        <div class="col-md-9">
                                            <select id="state" name="state" class="form-control" style="width: auto;">
                                                <option value="0">正常</option>
                                                <option value="1">禁用</option>
                                            </select>

                                            @if ($errors->has('state'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('remark') ? ' has-error' : '' }}">
                                        <label for="remark" class="col-md-3 control-label">内部备注：</label>

                                        <div class="col-md-9">

                                            <textarea id="remark" type="text" class="form-control"
                                                      name="remark"
                                                      style=" height: 100px"
                                            >{{old('refundable') }}</textarea>

                                            @if ($errors->has('remark'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('remark') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                @include("common.success")
                @include("common.errors") </div>
        </div>
    </div>
@endsection
