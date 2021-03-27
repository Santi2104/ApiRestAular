@extends('layouts.base')

@section('title', 'DACEfyN')
    
@section('head')  

@endsection

@section('subtitulo')
    <h1 class="m-0 text-dark">Horarios academicos</h1>
@endsection

@section('contenido') 
        
        <section class="content">
            <div class="container-fluid">
              <a href="{{route('exactas.schedule.index')}}" class="btn btn-primary mb-2">Volver</a>
              <div class="row">
                <div class="col-md-3">
                    
                  <div class="sticky-top mb-3">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Vista general</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i>Materia</strong>
        
                        <p class="text-muted">
                          {{$horarios[0]->course}} - {{$horarios[0]->course}}
                        </p>
        
                        <hr>
        
                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
        
                        <p class="text-muted">Malibu, California</p>
        
                        <hr>
        
                        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
        
                        <p class="text-muted">
                          <span class="tag tag-danger">UI Design</span>
                          <span class="tag tag-success">Coding</span>
                          <span class="tag tag-info">Javascript</span>
                          <span class="tag tag-warning">PHP</span>
                          <span class="tag tag-primary">Node.js</span>
                        </p>
        
                        <hr>
        
                        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
        
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Vista detallada</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>Task</th>
                            <th>Progress</th>
                            <th style="width: 40px">Label</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1.</td>
                            <td>Update software</td>
                            <td>
                              <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                              </div>
                            </td>
                            <td><span class="badge bg-danger">55%</span></td>
                          </tr>
                          <tr>
                            <td>2.</td>
                            <td>Clean database</td>
                            <td>
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-warning" style="width: 70%"></div>
                              </div>
                            </td>
                            <td><span class="badge bg-warning">70%</span></td>
                          </tr>
                          <tr>
                            <td>3.</td>
                            <td>Cron job running</td>
                            <td>
                              <div class="progress progress-xs progress-striped active">
                                <div class="progress-bar bg-primary" style="width: 30%"></div>
                              </div>
                            </td>
                            <td><span class="badge bg-primary">30%</span></td>
                          </tr>
                          <tr>
                            <td>4.</td>
                            <td>Fix and squish bugs</td>
                            <td>
                              <div class="progress progress-xs progress-striped active">
                                <div class="progress-bar bg-success" style="width: 90%"></div>
                              </div>
                            </td>
                            <td><span class="badge bg-success">90%</span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </section>
@endsection

@section('foot') 
@endsection