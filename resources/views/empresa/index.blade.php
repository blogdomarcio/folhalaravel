@extends('layouts.blank')

@push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')

<!-- page content -->
<div class="right_col" role="main">


  <div class="page-title">
    <div class="title_left">
      <h3>Empresas </h3>
    </div>

    <div class="title_right">
      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Pesquise a empresa...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Buscar!</button>
          </span>
        </div>
      </div>
    </div>
  </div>


  <div class="clearfix"></div>

  <div class=" pull-right">

    <a class="btn btn-primary" href="{{ route('empresa.adicionar') }}"><span class="glyphicon glyphicon-plus aria-hidden="true"></span> Cadastrar Empresa </a>  

  </div>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Razão Social</th>
        <th>Telefone</th>


        <th>Ação</th>

      </tr>


    </thead>

    <tbody>


      @foreach($empresas as $empresa)

      <tr>
        <th scope="row"> {{ $empresa->id }} </th>


        <td><a href="{{ route('empresa.editar',$empresa->id) }}">{{ $empresa->razaosocial }}</a></td>
        <td><a href="{{ route('empresa.editar',$empresa->id) }}">{{ $empresa->telefone }}</a></td>

        <td> <a class="btn btn-warning" href="{{ route('empresa.editar',$empresa->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> 
          <a class="btn btn-danger" href="javascript:(confirm('Deletar esse Empresa?') ? window.location.href='{{ route('empresa.deletar',$empresa->id)}}' : false)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> 
          <a class="btn btn-primary" href="{{ route('empresa.detalhe',$empresa->id) }}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>  Gerenciar Funcionarios</a> </td>
        </tr>


        @endforeach

      </tbody>

    </table>

    {!! $empresas->links() !!}

  </div>

  <!-- footer content -->
  <footer>
    <div class="pull-right">
      Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
    </div>
    <div class="clearfix"></div>
  </footer>
  <!-- /footer content -->

  @endsection