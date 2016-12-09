@extends('layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">

    FARMACIA CAMACA -> FILIAIS -> EDITAR


                
                  
                    <p>

                    <div class="col-md-6 col-xs-12">
                    
                   <form class="form-horizontal form-label-left" action="{{ route('empresa.atualizar',$empresa->id) }}" method="post">
                        {{ csrf_field() }}
                        
                        <input type="hidden" name="_method" value="put">


 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="razaossocial">Razão Social</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="razaosocial" type="text" class="form-control" placeholder="Razão Social" value="{{ $empresa->razaosocial }}">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="razaossocial">CPNJ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="cnpj" type="text" class="form-control" placeholder="Razão Social" value="{{ $empresa->cnpj }}">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="razaossocial">Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="email" type="text" class="form-control" placeholder="Razão Social" value="{{ $empresa->email }}">
                        </div>
                      </div>


                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="razaossocial">Telefone</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="telefone" type="text" class="form-control" placeholder="Razão Social" value="{{ $empresa->telefone }}">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="razaossocial">Endereco</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="endereco" type="text" class="form-control" placeholder="Razão Social" value="{{ $empresa->endereco }}">
                        </div>
                      </div>



                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="status" value="ativo"> &nbsp; Ativo &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="status" value="inativo"> Inativo
                            </label>
                          </div>
                        </div>
                      </div>


                         
                                                
                        <br>
                        
                         
                         
                         
                        <button class="btn btn-info">Salvar</button>
                        
                    </form>
                    </div>





    </div>

    <!-- /page content -->



    <!-- footer content -->
    <footer>
        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
@endsection