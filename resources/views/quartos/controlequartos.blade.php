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
          <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
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
    @endforeach
    <hr>
    <a id="teste123" type="button" href="#" class="btn btn-primary">
      Adicionar Quarto
    </a>
    </div>
  </div>
</div>

  

@endsection