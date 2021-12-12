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
        <h1 class="text-center font-weight-bold">Deshidratadora</h1>
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
        <th scope="col">Tipo</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Kg</th>
        <th scope="col">Tiempo</th>
        <th scope="col" colspan="2">Opciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($deshidratadora as $item)
      <tr>
        <td>{{ $item->tipo }}</td>
        <td>{{ $item->cantidad }}</td>
        <td>{{ $item->kilos }}</td>
        <td>{{ $item->tiempo }}</td>
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
                  <form  id="actualizar-{{$item->id}}" action=" {{route('deshidratadora.actualizar', $item->id)}} " method="POST">
                    @method('put')
                    @csrf

                  <div class="input-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-lg" >Tipo tostada</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Large" name="tipo" value="{{ $item->tipo }}" aria-describedby="inputGroup-sizing-sm">
                  </div>
                  <br>
                  <div class="input-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-lg">Cantidad</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Large" name="cantidad" value="{{ $item->cantidad }}" aria-describedby="inputGroup-sizing-sm">
                  </div>
                  <br>
                  <div class="input-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-lg">Kilos</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Large" name="kilos" value="{{ $item->kilos }}"  aria-describedby="inputGroup-sizing-sm">
                  </div>
                  <br>
                  <h5 class="">Tiempo</h5>
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Tiempo</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" name="tiempo" value="{{ $item->tiempo }}" aria-describedby="inputGroup-sizing-sm">
                  </div>
                  <br>
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
            <form id="delete-{{$item->id}}" action=" {{route('deshidratadora.borrar', $item->id)}} " method="POST">
              @method('delete')
              @csrf
            </form>
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>
    </div>

    <br>
    <br>
    <div class="row text-center">
      <div class="col-lg">
        <h1 class="text-center font-weight-bold">Cartones</h1>
      </div>
      <div class="col-lg">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Agregar cartones</button>
      </div>
    </div> <br><br>
    <div class="shadow rounded">
      <table class="table  table-hover text-center">
    <thead>
      <tr>
        <th scope="col">Secos</th>
        <th scope="col">Coblados</th>
        <th scope="col">Total</th>
        <th scope="col" colspan="2">Opciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($cartones as $item)
      <tr>
        <td>{{ $item->secos }}</td>
        <td>{{ $item->doblados }}</td>
        <td>{{ $item->total}}</td>
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
                  <form  id="actualizarCartones-{{$item->id}}" action=" {{route('deshidratadora.actualizarCartones', $item->id)}} " method="POST">
                    @method('put')
                    @csrf

                  <div class="input-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-lg" >Tipo tostada</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Large" name="secos" value="{{ $item->secos }}" aria-describedby="inputGroup-sizing-sm">
                  </div>
                  <br>
                  <div class="input-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-lg">Cantidad</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Large" name="doblados" value="{{ $item->doblados }}" aria-describedby="inputGroup-sizing-sm">
                  </div>
                  <br>
                  <div class="input-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-lg">Kilos</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Large" name="total" value="{{ $item->total }}"  aria-describedby="inputGroup-sizing-sm">
                  </div>
                  <br>
                  <br>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <a href="javascript: document.getElementById('actualizarCartones-{{$item->id}}').submit()" type="button"  class="btn btn-warning">Editar</a>
                      </form>
                </div>
              </div>
            </div>
          </div>
        </td>
        <td>
          <a href="javascript: document.getElementById('deleteCartones-{{$item->id}}').submit()" class="btn btn-danger">Eliminar</a>
            <form id="deleteCartones-{{$item->id}}" action=" {{route('deshidratadora.deleteCartones', $item->id)}} " method="POST">
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
        <h5 class="modal-title" id="exampleModalLabel">Agregar Raspado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{ route('deshidratadora.crear') }}" method="POST" >
            @csrf
      <div class="modal-body">
        <h5 class="modal-title" id="exampleModalLabel">Datos</h5>
        <br>
              <div class="input-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-lg" >Tipo tostada</span>
                </div>
                <input type="text" class="form-control" aria-label="Large" name="tipo" aria-describedby="inputGroup-sizing-sm">
              </div>
              <br>
              <div class="input-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-lg">Cantidad</span>
                </div>
                <input type="text" class="form-control" aria-label="Large" name="cantidad" aria-describedby="inputGroup-sizing-sm">
              </div>
              <br>
              <div class="input-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-lg">Kilos</span>
                </div>
                <input type="text" class="form-control" aria-label="Large" name="kilos" aria-describedby="inputGroup-sizing-sm">
              </div>
              <br>
              <div class="input-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-lg">Tiempo</span>
                </div>
                <input type="text" class="form-control" aria-label="Large" name="tiempo" aria-describedby="inputGroup-sizing-sm">
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

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelCartones" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelCartones">Agregar Cartoes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{ route('deshidratadora.createCarton') }}" method="POST" >
            @csrf
      <div class="modal-body">
        <h5 class="modal-title" id="exampleModalLabel">Datos</h5>
        <br>
              <div class="input-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-lg" >Secos</span>
                </div>
                <input type="text" class="form-control" aria-label="Large" name="secos" aria-describedby="inputGroup-sizing-sm">
              </div>
              <br>
              <div class="input-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-lg">Doblados</span>
                </div>
                <input type="text" class="form-control" aria-label="Large" name="doblados" aria-describedby="inputGroup-sizing-sm">
              </div>
              <br>
              <div class="input-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-lg">Total</span>
                </div>
                <input type="text" class="form-control" aria-label="Large" name="total" aria-describedby="inputGroup-sizing-sm">
              </div>
              <br>

      </div>
      <div class="modal-footer">
        <button  class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
