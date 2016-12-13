@extends('layouts.blank')

@push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')

<!-- page content --> 

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">

      </div>


    </div>

    <div class="clearfix"></div>


    <div class="row">
      <!-- form input mask -->
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><a href="{{ route('empresa.index')}} "> Empresas </a>| Editar </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <form class="form-horizontal form-label-left" action="{{ route('empresa.atualizar',$empresa->id) }}" method="post">
              {{ csrf_field() }}

              <input type="hidden" name="_method" value="put">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="razaossocial">Razão Social</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name="razaosocial" type="text" class="form-control" placeholder="Razão Social" required="required" value="{{ $empresa->razaosocial }}">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cnpj">CPNJ</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name="cnpj" type="text" class="form-control" placeholder="CPNJ" value="{{ $empresa->cnpj }}">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name="email" type="text" class="form-control" placeholder="Email" value="{{ $empresa->email }}">
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefone">Telefone</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name="telefone" type="text" class="form-control" placeholder="Telefone" value="{{ $empresa->telefone }}">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="endereco">Endereco</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name="endereco" type="text" class="form-control" placeholder="Endereço" value="{{ $empresa->endereco }}">
                </div>
              </div>

              <br>

              <button class="btn btn-info">Salvar</button>

            </form>
          </div>
        </div>
     </div>
     <!-- /form input mask -->

      <p>

        <div class="col-md-6 col-xs-12">



          <br>






        </form>
      </div>





    </div>

    <!-- /page content -->






    
    @endsection