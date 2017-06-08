@extends ('backend.layouts.problematicas')

@section('container')
<div class="container">


  <div id="tematicas" class="modal fade" role="dialog">
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

   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#tematicas">Agregar Tematica</button>
       <hr>
       <table id="example" class="display" cellspacing="0" width="100%">
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
       <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
     </div>
     <div class="tab-pane" id="solucion">
       <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
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
    $('#example').DataTable();
} );
</script>
@endsection
