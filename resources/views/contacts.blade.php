@extends('layouts.painel')

@section('title') Contatos @endsection

@section('content')

   <!-- Main content -->
   <section class="content">

    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body pb-0">
        <div class="row d-flex align-items-stretch">
        @foreach ($funcionarios as $funcionario)
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                Funcionário(a)
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>{{$funcionario->nome}}</b></h2>
                    <p class="text-muted text-sm"><b>Sobre: </b> XXXXXX </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Endereço: <br> {{$funcionario->rua}}, {{$funcionario->numerocasa}} <br> {{$funcionario->bairro}} - {{$funcionario->cidade}} {{$funcionario->estado}}</li>
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Celular #1: {{$funcionario->celular}} <br> Celular #2: {{$funcionario->celular2}} </li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <img src="../../dist/img/user1-128x128.jpg" alt="" class="img-circle img-fluid">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="#" class="btn btn-sm bg-teal">
                    <i class="fas fa-comments"></i>
                  </a>
                </div>
              </div>
            </div>
        </div>
        @endforeach
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>


@endsection