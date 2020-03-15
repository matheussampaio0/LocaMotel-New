@extends('layouts.painel')

@section('title') Controle de Quartos @endsection

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Lista de Quartos</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
  @foreach ($quartos as $quarto)
    @if ($quarto->livre == 2)
      <div class="col-lg-3 col-6" style="margin-top: 10px;">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
          <h3>QUARTO {{$quarto->number}}</h3>
  
            <p>Manutenção</p>
          </div>
          <a href="#" class="small-box-footer">Opções Disponíveis</a>
          <div class="small-box-footer">
            <a id="icon-eye" href="#" data-toggle="modal" data-target="#modal-{{$quarto->id}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
            <a id="icon-trash" href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
          </div>
        </div>
      </div>
      @elseif ($quarto->livre == 1)
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3><strong>QUARTO {{$quarto->number}}</strong></h3>
  
            <p><strong>Disponível</strong></p>
          </div>
          <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
     @else
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>QUARTO {{$quarto->number}}</h3>
  
            <p>Indisponível</p>
          </div>
          <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    @endif

    <div class="modal fade" id="modal-{{$quarto->id}}">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Informações do quarto 0{{$quarto->number}}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationDefault01">Nome</label>
                  <input type="text" class="form-control" id="validationDefault01" value="{{$quarto->nome}}" required>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationDefault02">Situação</label>

                  <select class="custom-select">
                    @if ($quarto->livre == 0)
                    <option selected value="0">Indisponível</option>
                    <option value="1">Disponível</option>
                    <option value="2">Manutenção</option>
                    @elseif ($quarto->livre == 1)
                    <option value="0">Indisponível</option>
                    <option selected value="1">Disponível</option>
                    <option value="2">Manutenção</option>
                    @else
                    <option value="0">Indisponível</option>
                    <option value="1">Disponível</option>
                    <option selected value="2">Manutenção</option>
                    @endif
                  </select>

                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationDefaultUsername">Preço p/Hora</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">R$</span>
                    </div>
                  <input type="text" class="form-control" id="validationDefaultUsername" value="{{$quarto->price}}" aria-describedby="inputGroupPrepend2" required>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-3 mb-3">
                  <label for="validationDefault04">Número do Quarto</label>
                  <input type="text" class="form-control" id="validationDefault04" value="{{$quarto->number}}" required>
                </div>
                <div class="mb-3">
                  <label for="validationTextarea">Observação</label>
                  <textarea class="form-control" id="validationTextarea" value="{{$quarto->description}}" placeholder="{{$quarto->description}}"></textarea>
                </div>
              </div>
              <div class="form-group">
              </div>
            </form>
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
    <!-- /.modal -->
    
    @endforeach
    <hr>
    <a id="teste123" type="button" href="#" class="btn btn-primary">
      Adicionar Quarto
    </a>
    </div>
  </div>
</div>

  

@endsection