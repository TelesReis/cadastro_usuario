@extends('layouts.main')

@section('title', 'Formulário')

@section('content')
    
    <div id="usuario-create-container" class="col-md-6 offset-md-3">

        <form action="/cadastrar-usuario" method="POST" enctype="muiltpart/form-data">
            
            @csrf
            <div class="form-group">
                <label>Informe seu nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name">
            </div>

            <div class="form-group">
                <label>Informe seu e-mail</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="email">
            </div>

            <div class="form-group">
                <label>Informe sua data de nascimento</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>

            <div class="form-group">
                <label>Adicionar curriculo</label>
                <input type="file" id="arquivo" class="form-control-file" name="arquivo">
            </div>

            <button type="sbmit" class="btn btn-primary">cadastrar</button>

        </form>


    </div>
    
    @endsection