@extends('layouts.painel')

@section('title') Controle de Funcionários @endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Cadastro de Funcionário</h3>
        </div>

        <div class="card-body table-responsive p-0">
            <div class="modal-body">
                <div class="card-body">
                <form form method="POST" action="{{route('controlfuncionarioadddata')}}">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-md-8">
                        <label for="inputEmail4">Nome</label>
                        <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputPassword4">Data do Nascimento</label>
                        <input type="date" class="form-control" name="datanasc" placeholder="Data">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputPassword4">CPF</label>
                        <input type="text" class="form-control" name="cpf" placeholder="CPF">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputPassword4">RG</label>
                        <input type="text" class="form-control" name="rg" placeholder="RG">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputPassword4">Celular</label>
                        <input type="text" class="form-control" name="celular" placeholder="Celular">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputPassword4">Celular 02</label>
                        <input type="text" class="form-control" name="celular2" placeholder="Celular 02">
                      </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputAddress">Endereço</label>
                      <input type="text" class="form-control" name="rua" placeholder="Endereço">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputAddress">Número</label>
                      <input type="text" class="form-control" name="numerocasa" placeholder="Número da casa">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputAddress">Bairro</label>
                      <input type="text" class="form-control" name="bairro" placeholder="Bairro">
                    </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Cidade</label>
                        <input type="text" class="form-control" name="cidade" placeholder="Cidade">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado" class="form-control">
                          <option selected>Escolha...</option>
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
                        <input type="text" class="form-control" name="cep" placeholder="CEP (Só números)">
                      </div>
                      <div class="form-group" style="margin:5px">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="isAdmin" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">Administrador</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="isAdmin" id="inlineRadio2" value="2">
                            <label class="form-check-label" for="inlineRadio2">Recepcionista</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="isAdmin" id="inlineRadio3" value="3">
                            <label class="form-check-label" for="inlineRadio3">Outro...</label>
                          </div>
                      </div>
                    </div>
                </div>
                <!-- /.card-body -->
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type ="submit" class="btn btn-primary">Criar Funcionário</button>
        </div>
      </form>
        </div>
      </div>
    </div>
  </div>
@endsection