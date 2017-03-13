@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.dashboard') }}</div>

                <div class="panel-body">
                    <div class="row">
                        <table id="dataTable" class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <td>Id</td>
                              <td>Nombe Indicador</td>
                              <td>Categoria</td>
                              <td>Clasificacion</td>
                              <td>dimension</td>
                              <td>Mapa</td>
                              <td>Documento</td>
                              <td>Opciones</td>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($query as $q)
                              <tr>
                                <td>{{$q->id}}</td>
                                <td>{{$q->nombre}}</td>
                                <td>{{$q->categoria}}</td>
                                <td>{{$q->clasificacion}}</td>
                                <td>{{$q->dimension}}</td>
                                <td>
                                  @if(!empty($q->mapa_url))
                                    <a href="#" class="btn btn-primary " data-fancybox data-src="#mapa-view" href="javascript:;" onclick="loadValue('mapa','{{$q->mapa_url}}')"> Ver mapa</a>
                                  @else
                                    Sin Asignar
                                  @endif
                                </td>
                                <td>
                                  @if(!empty($q->documento_url))
                                    <a href="#" class="btn btn-primary " data-fancybox data-src="#documento-view" href="javascript:;"> Ver mapa</a>
                                  @else
                                    Sin Asignar
                                  @endif
                                </td>
                                <td>
                                  <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                    Opciones
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                    <li><a href="#" data-fancybox data-src="#mapa-content" href="javascript:;" onclick="loadOption('mapa','{{$q->id}}')">Subir Mapa</a></li>
                                    <li><a href="#" data-fancybox data-src="#documentos-content" href="javascript:;" onclick="loadOption('documento','{{$q->id}}')">Subir Documento</a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div><!--row-->
                    <div style="display: none;" id="mapa-view">
                      <h1>Mapa</h2>
                      <img src="" id="mapa-img" width="600"/>
                    </div>
                    <div style="display: none;" id="mapa-content">
                      <form role="form" action="upload-image" enctype="multipart/form-data" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" id="indicador-mapa" name="indicador_value" value="" />
                        <h2>Subir Mapa Indicador</h2>
                        <h4 class="name-indicador"></h4>
                        <div class="row">
                  				<div class="col-md-12">
                  					<input type="file" name="mapa" />
                  				</div>
                  				<div class="col-md-12">
                  					<button type="submit" class="btn btn-success">Subir</button>
                  				</div>
                  			</div>
                      </form>
                    </div>
                    <div style="display: none;" id="documentos-content">
                      <form role="form" action="upload-document" enctype="multipart/form-data" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" id="indicador-documento" name="indicador_value" value="" />
                      	<h2>Subir Documento Indicador</h2>
                        <h4 class="name-indicador"></h4>
                        <div class="row">
                  				<div class="col-md-12">
                  					<input type="file" name="documento" />
                  				</div>
                  				<div class="col-md-12">
                  					<button type="submit" class="btn btn-success">Subir</button>
                  				</div>
                  			</div>
                      </form>
                    </div>

                </div><!--panel body-->

            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!-- row -->
@endsection
