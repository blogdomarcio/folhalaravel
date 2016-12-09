@extends('layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">

    FARMACIA CAMACA -> FILIAIS

  
             

                   
                  
                    <p>
                    
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

                      <div class="col-md-2">
                
                    <a class="btn btn-primary" href="{{ route('empresa.adicionar') }}"><span class="glyphicon glyphicon-plus aria-hidden="true"></span> Cadastrar Empresa </a>  
                
                </div>



 {!! $empresas->links() !!}

    </div>

    <!-- /page content -->



    <!-- footer content -->
    
@endsection