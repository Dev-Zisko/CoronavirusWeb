@extends('layouts.home')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div style="border-left-color: #FF6A00 !important;" class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div style="color: #FF6A00 !important;" class="text-xs font-weight-bold text-primary text-uppercase mb-1">Casos activos</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($actives, 0, '', '.') }} infectados</div>
                    </div>
                    <div class="col-auto">
                      <i style="color: #FF6A00 !important;" class="fas fa-crown fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div style="border-left-color: #4800FF !important;" class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div style="color: #4800FF !important;" class="text-xs font-weight-bold text-success text-uppercase mb-1">Incremento de casos</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($tconfirmed, 0, '', '.') }} ayer a hoy</div>
                    </div>
                    <div class="col-auto">
                      <i style="color: #4800FF !important;" class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div style="border-left-color: #00C610 !important;" class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div style="color: #00C610 !important;" class="text-xs font-weight-bold text-info text-uppercase mb-1">Incremento de recuperados</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ number_format($trecovered, 0, '', '.') }} ayer a hoy</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i style="color: #00C610 !important;" class="fas fa-walking fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div style="border-left-color: #C10000 !important;" class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div style="color: #C10000 !important;" class="text-xs font-weight-bold text-warning text-uppercase mb-1">Incremento de fallecidos</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($tdeaths, 0, '', '.') }} ayer a hoy</div>
                    </div>
                    <div class="col-auto">
                      <i style="color: #C10000 !important;" class="fas fa-book-dead fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tabla de {{ $newid }}. Historial casos de Coronavirus COVID-19.</h1>
          <p>Esta página fue desarrollada el 23/03/2020, por eso los datos empiezan desde dicha fecha.</p>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Fecha de actualización</th>
                      <th>Personas infectadas</th>
                      <th style="color: #00B050 !important;">Personas recuperadas</th>
                      <th style="color: #C0504D !important;">Personas fallecidas</th>
                      <th style="color: #00B050 !important;">Recuperados (%)</th>
                      <th style="color: #C0504D !important;">Fallecidos (%)</th>
                      <th>Sin definir (%)</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($country as $count)
                        <tr>
                            <td>{{ $count->date }}</td>
                            <td>{{ $count->confirmed }}</td>
                            <td style="color: #00B050 !important;">{{ $count->recovered }}</td>
                            <td style="color: #C0504D !important;">{{ $count->deaths }}</td>
                            <td style="color: #00B050 !important;">{{ $count->percent_recovered }}%</td>
                            <td style="color: #C0504D !important;">{{ $count->percent_deaths }}%</td>
                            <td>{{ $count->percent_undefined }}%</td>
                        </tr>
                    @endforeach
                    @if(count($country) == 0)
                        <tr>
                            <td>No se pudo cargar la información, intente recargar la página.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endif
                  </tbody>
                </table>
                <br>
                <div>{{ $country->links() }}</div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
@endsection