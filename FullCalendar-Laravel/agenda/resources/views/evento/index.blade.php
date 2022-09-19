@extends('layouts.app')
@section('content')
    <div class="container">
        <div id="agenda"></div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Informações do evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="formularioEventos">
                      @csrf
                        <div class="form-group d-none">
                          <label for="id">Id: </label>
                          <input type="text"
                            class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="title">Título</label>
                          <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Escrever título do evento">
                        </div>
                        <div class="form-group">
                          <label for="descripcion">Descrição</label>
                          <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="start">Início</label>
                          <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="end">Final</label>
                          <input type="date" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnGuardar">Salvar</button>
                    <button type="button" class="btn btn-warning" id="btnModificar">Mudar</button>
                    <button type="button" class="btn btn-danger" id="btnEliminar">Excluir</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

@endsection
