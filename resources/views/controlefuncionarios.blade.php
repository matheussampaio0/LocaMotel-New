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
                    <a href="{{route('controlfuncionariodel', $funcionario->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
                            <form form method="POST" action="{{route('controlfuncionariosupdate', $funcionario->id)}}">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                  <div class="form-group col-md-8">
                                    <label for="inputEmail4">Nome</label>
                                    <input type="text" class="form-control" name="nome" value="{{$funcionario->nome}}">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputPassword4">Data do Nascimento</label>
                                    <input type="date" class="form-control" name="datanasc" value="{{$funcionario->data}}">
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label for="inputPassword4">CPF</label>
                                    <input type="text" class="form-control" name="cpf" value="{{$funcionario->cpf}}">
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label for="inputPassword4">RG</label>
                                    <input type="text" class="form-control" name="rg" value="{{$funcionario->rg}}">
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label for="inputPassword4">Celular</label>
                                    <input type="text" class="form-control" name="celular" value="{{$funcionario->celular}}">
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label for="inputPassword4">Celular 02</label>
                                    <input type="text" class="form-control" name="celular2" value="{{$funcionario->celular2}}">
                                  </div>
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputAddress">Endereço</label>
                                  <input type="text" class="form-control" name="rua" value="{{$funcionario->rua}}">
                                </div>
                                <div class="form-group col-md-3">
                                  <label for="inputAddress">Número</label>
                                  <input type="text" class="form-control" name="numerocasa" value="{{$funcionario->numerocasa}}">
                                </div>
                                <div class="form-group col-md-3">
                                  <label for="inputAddress">Bairro</label>
                                  <input type="text" class="form-control" name="bairro" value="{{$funcionario->bairro}}">
                                </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputCity">Cidade</label>
                                    <input type="text" class="form-control" name="cidade" value="{{$funcionario->cidade}}">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="estado">Estado</label>
                                    <select id="estado" name="estado" class="form-control">
                                      <option selected>{{$funcionario->estado}}</option>
                                      <option value="AC">Acre</option>
                                      <option value="AL">Alagoas</option>
                                      <option value="AP">Amapá</option>
                                      <option value="AM">Amazonas</option>
                                      <option value="BA">Bahia</option>
                                      <option value="CE">Ceará</option>
                                      <option value="DF">Distrito Federal</option>
                                      <option value="ES">Espírito Santo</option>
                                      <option value="GO">Goiás</option>
                                      <option value="MA">Maranhão</option>
                                      <option value="MT">Mato Grosso</option>
                                      <option value="MS">Mato Grosso do Sul</option>
                                      <option value="MG">Minas Gerais</option>
                                      <option value="PA">Pará</option>
                                      <option value="PB">Paraíba</option>
                                      <option value="PR">Paraná</option>
                                      <option value="PE">Pernambuco</option>
                                      <option value="PI">Piauí</option>
                                      <option value="RJ">Rio de Janeiro</option>
                                      <option value="RN">Rio Grande do Norte</option>
                                      <option value="RS">Rio Grande do Sul</option>
                                      <option value="RO">Rondônia</option>
                                      <option value="RR">Roraima</option>
                                      <option value="SC">Santa Catarina</option>
                                      <option value="SP">São Paulo</option>
                                      <option value="SE">Sergipe</option>
                                      <option value="TO">Tocantins</option>
                                    </select>
                                  </div>
                                  <div class="form-group col-md-2">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control" name="cep" value="{{$funcionario->cep}}">
                                  </div>
                                </div>
                            </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      <button type ="submit" class="btn btn-primary">Salvar Mudanças</button>
                    </div>
                  </form>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              @endforeach
            </tbody>
            <caption style="margin-left:5px"> Listando <strong>{{$qtdfuncionarios}}</strong> Funcionários</caption>
          </table>
          <a type="button" href="{{route('controlfuncionarioadd')}}" class="btn btn-primary" style="margin:7px;">
            Adicionar Funcionário
          </a>
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