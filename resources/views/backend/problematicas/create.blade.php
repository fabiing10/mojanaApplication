@extends ('backend.layouts.problematicas')

@section('container')
<div class="container">


  <div id="tematicas_form" class="modal fade" role="dialog">
     <div class="modal-dialog">
       <!-- Modal content-->
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Agregar Nueva Tematica</h4>
         </div>
         <div class="modal-body">
           <form action="problematicas/tematica" method="post">
             {!! csrf_field() !!}
              <div class="form-group">
                <label for="email">Nombre Tematica:</label>
                <input type="text" class="form-control" id="nombre_tematica" name="nombre_tematica">
              </div>
              <button type="submit" class="btn btn-default">Guardar</button>
            </form>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
       </div>

     </div>
   </div>

   <div id="problematicas_form" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar Nuevo Problema</h4>
          </div>
          <div class="modal-body">
            <form action="problematicas/problema" method="post">
              {!! csrf_field() !!}
               <div class="form-group">
                 <label for="email">Seleccione una Tematica:</label><br>
                 <select name="tema_id">
                    <option>Seleccione una opcion</option>
                    @foreach($tematicas as $tematica)
                    <option value="{{$tematica->id}}">{{$tematica->nombre}}</option>
                    @endforeach
                 </select>
               </div>
               <div class="form-group">
                 <label for="email">Nombre del Problema:</label>
                 <input type="text" class="form-control" id="nombre_problema" name="nombre_problema">
               </div>
               <button type="submit" class="btn btn-default">Guardar</button>
             </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

    <div id="soluciones_form" class="modal fade" role="dialog">
       <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">Agregar Nueva Tematica</h4>
           </div>
           <div class="modal-body">
             <form action="problematicas/solucion" method="post">
               {!! csrf_field() !!}
               <div class="form-group">
                 <label for="email">Seleccione una Tematica:</label><br>
                 <select name="tema_problematica_id" onchange="loadProblematica(this)">
                   <option>Seleccione una opcion</option>
                    @foreach($tematicas as $tematica)
                    <option value="{{$tematica->id}}">{{$tematica->nombre}}</option>
                    @endforeach
                 </select>
               </div>
               <div class="form-group">
                 <label for="email">Seleccione una Problematica:</label><br>
                 <select name="problematica_id" id="problematica_id">

                 </select>
               </div>
               <div class="form-group">
                 <label for="email">Nombre de la Solucion:</label>
                 <input type="text" class="form-control" id="nombre_solucion" name="nombre_solucion">
               </div>
                <button type="submit" class="btn btn-default">Guardar</button>
              </form>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           </div>
         </div>

       </div>
     </div>



<div id="exTab3" class="container m-t-50">
  <ul  class="nav nav-pills">
     <li class="active">
       <a  href="#tematicas" data-toggle="tab">Tematicas</a>
     </li>
     <li>
       <a href="#problematicas" data-toggle="tab">Problematicas</a>
     </li>
     <li>
       <a href="#solucion" data-toggle="tab">Solucion</a>
     </li>
   </ul>
   <div class="tab-content clearfix">
     <div class="tab-pane active" id="tematicas">

       <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#tematicas_form">Agregar Tematica</button>
       <hr>
       <table id="tematicas_table" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre Tematica</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Nombre Tematica</th>
            </tr>
        </tfoot>
        <tbody>
          @foreach($tematicas as $tematica)
            <tr>
                <td>{{$tematica->id}}</td>
                <td>{{$tematica->nombre}}</td>

            </tr>
          @endforeach
        </tbody>
        </table>
     </div>
     <div class="tab-pane" id="problematicas">
       <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#problematicas_form">Agregar Problematica</button>
       <hr>
       <table id="problematicas_table" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre Tematica</th>
                <th>Nombre Problematica</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Nombre Tematica</th>
                <th>Nombre Problematica</th>
            </tr>
        </tfoot>
        <tbody>
          @foreach($problematicas as $problematica)
            <tr>
                <td>{{$problematica->id}}</td>
                <td>{{$problematica->TemaProblematica}}</td>
                <td>{{$problematica->problematica}}</td>

            </tr>
          @endforeach
        </tbody>
        </table>

     </div>
     <div class="tab-pane" id="solucion">
       <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#soluciones_form">Agregar Solucion</button>
       <hr>
       <table id="soluciones_table" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre Tematica</th>
                <th>Nombre Problematica</th>
                <th>Solucion</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Nombre Tematica</th>
                <th>Nombre Problematica</th>
                <th>Solucion</th>
            </tr>
        </tfoot>
        <tbody>
          @foreach($soluciones as $solucion)
            <tr>
                <td>{{$solucion->id}}</td>
                <td>{{$solucion->TemaProblematica}}</td>
                <td>{{$solucion->Problematica}}</td>
                <td>{{$solucion->Solucion}}</td>
            </tr>
          @endforeach
        </tbody>
        </table>
     </div>
   </div>
</div>








     <footer class="footer">
       <p>&copy; Company 2017</p>
     </footer>

   </div> <!-- /container -->

   <!-- Bootstrap core JavaScript
   ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->


   <!-- Modal -->



@stop

@section('script')
<script type="text/javascript">
$(document).ready(function() {
    $('#tematicas_table').DataTable();
    $('#problematicas_table').DataTable();
    $('#soluciones_table').DataTable();
} );

function loadProblematica(select){
  var id = select.value;
  var jqxhr = $.ajax( "/participacion/tematicas/"+id )
  .done(function(data) {
    var option = "<option>Seleccione una opcion</option>";
    $.each(data,function(index, value){
      console.log('My array has at position ' + index + ', this value: ' + value.nombre);
      option += "<option value="+value.id+">"+value.nombre+"</option>";
    });
    $('#problematica_id').append(option);

  })
  .fail(function() {
    alert( "error" );
  })
  .always(function() {

  });
}
</script>
@endsection
