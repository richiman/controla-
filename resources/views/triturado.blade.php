@extends('layouts.sidemenu')
@section('content')
@endsection
<br>
<div class="container" style="margin-left:25%;">
  <br>
  <br><br>
  <br>
    <div class="row text-center">
      <br>
      <br>
      <div class="col-lg">
        <h1 class="text-center font-weight-bold">Trituración</h1>


      </div>
      @if(@session('message'))
      <div class="alert alert-success">
        {{session('message')}}
      </div>
      @endif
      <div class="col-lg">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Agregar +</button>
      </div>
    </div>
    <br><br><br>
    <div class="shadow rounded">
      <table class="table  table-hover text-center">
    <thead>
      <tr>
        <th scope="col">Costales</th>
        <th scope="col">Kal</th>
        <th scope="col">Javas</th>
        <th scope="col">Tiempo</th>
        <th scope="col">Cantidad</th>
        <th scope="col" colspan="2">Opciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trituraciones as $item)
      <tr>
        <td>{{ $item->costales }}</td>
        <td>{{ $item->kilos }}</td>
        <td>{{ $item->javas }}</td>
        <td>{{ $item->tiempo }}</td>
        <td>{{ $item->cantidad }}</td>
        <td>
          <a  type="button" data-toggle="modal" data-target="#exampleModalCenter{{ $item->id }}" class="btn btn-warning">Editar</a>
          <div class="modal fade" id="exampleModalCenter{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form  id="actualizar-{{$item->id}}" action=" {{route('triturado.actualizar', $item->id)}} " method="POST">
                    @method('put')
                    @csrf

                  <div class="input-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-lg" >Costal de maiz</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Large" name="costales" value="{{ $item->costales }}" aria-describedby="inputGroup-sizing-sm">
                  </div>
                  <br>
                  <div class="input-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-lg">Kal</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Large" name="kilos" value="{{ $item->kilos }}" aria-describedby="inputGroup-sizing-sm">
                  </div>
                  <br>
                  <div class="input-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-lg">Javas</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Large" name="javas" value="{{ $item->javas }}"  aria-describedby="inputGroup-sizing-sm">
                  </div>
                  <br>
                  <h5 class="">Tiempo</h5>
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Horas</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" name="tiempo" value="{{ $item->tiempo }}" aria-describedby="inputGroup-sizing-sm">
                  </div>
                  <br>
                  <div class="input-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-lg">Cantidad de maiz molido</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Large" name="cantidad" value="{{ $item->cantidad }}" aria-describedby="inputGroup-sizing-sm">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <a href="javascript: document.getElementById('actualizar-{{$item->id}}').submit()" type="button"  class="btn btn-warning">Editar</a>
                      </form>
                </div>
              </div>
            </div>
          </div>
        </td>
        <td>
          <a href="javascript: document.getElementById('delete-{{$item->id}}').submit()" class="btn btn-danger">Eliminar</a>
            <form id="delete-{{$item->id}}" action=" {{route('triturado.borrar', $item->id)}} " method="POST">
              @method('delete')
              @csrf
            </form>
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar trituracion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{ route('triturado.crear') }}" method="POST" >
            @csrf
      <div class="modal-body">
        <h5 class="modal-title" id="exampleModalLabel">Datos</h5>
        <br>
              <div class="input-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-lg" >Costal de maiz</span>
                </div>
                <input type="text" class="form-control" aria-label="Large" name="costales" aria-describedby="inputGroup-sizing-sm">
              </div>
              <br>
              <div class="input-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-lg">Kal</span>
                </div>
                <input type="text" class="form-control" aria-label="Large" name="kilos" aria-describedby="inputGroup-sizing-sm">
              </div>
              <br>
              <div class="input-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-lg">Javas</span>
                </div>
                <input type="text" class="form-control" aria-label="Large" name="javas" aria-describedby="inputGroup-sizing-sm">
              </div>
              <br>
              <h5 class="">Tiempo</h5>
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Horas</span>
                </div>
                <input type="text" class="form-control" aria-label="Small" name="tiempo" aria-describedby="inputGroup-sizing-sm">
              </div>
              <br>
              <div class="input-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-lg">Cantidad de maiz molido</span>
                </div>
                <input type="text" class="form-control" aria-label="Large" name="cantidad" aria-describedby="inputGroup-sizing-sm">
              </div>
      </div>
      <div class="modal-footer">
        <button  class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
