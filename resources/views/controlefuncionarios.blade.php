@extends('layouts.painel')

@section('title') Controle de Funcionários @endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Lista de Funcionários</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>CPF</th>
                <th>CELULAR</th>
                <th>OPÇÕES</th>
              </tr>
            </thead>
            <tbody>
                @foreach($funcionarios as $funcionario)
              <tr>
                <td>{{ $funcionario->id }}</td>
                <td>{{ $funcionario->nome }}</td>
                <td>{{ $funcionario->cpf }}</td>
                <td>{{ $funcionario->celular }}</td>
                <td>
                    <a href="#" data-toggle="modal" data-target="#modal-{{$funcionario->id}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              <!-- Modal -->
              <div class="modal fade" id="modal-{{$funcionario->id}}">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Informações Detalhadas - {{$funcionario->nome}}</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-3">
                                  <input type="text" class="form-control" placeholder="{{$funcionario->nome}}">
                                </div>
                                <div class="col-4">
                                  <input type="text" class="form-control" placeholder=".col-4">
                                </div>
                                <div class="col-5">
                                  <input type="text" class="form-control" placeholder=".col-5">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder=".col-5">
                                  </div>
                              </div>
                            </div>
                            <!-- /.card-body -->
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              @endforeach
            </tbody>
            <caption style="margin-left:5px"> Listando <strong>{{$qtdfuncionarios}}</strong> Funcionários</caption>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->
    <!-- /.card-body -->
  </div>
@endsection