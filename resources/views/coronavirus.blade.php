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
                      <div style="color: #FF6A00 !important;" class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total países</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countries }} infectados</div>
                    </div>
                    <div class="col-auto">
                      <i style="color: #FF6A00 !important;" class="fas fa-flag fa-2x text-gray-300"></i>
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
                      <div style="color: #4800FF !important;" class="text-xs font-weight-bold text-success text-uppercase mb-1">Total casos</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $infected }} personas</div>
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
                      <div style="color: #00C610 !important;" class="text-xs font-weight-bold text-info text-uppercase mb-1">Total recuperados</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $recovered }} personas</div>
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
                      <div style="color: #C10000 !important;" class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total fallecidos</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $deaths }} personas</div>
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
          <h1 class="h3 mb-2 text-gray-800">Tabla de países con casos de Coronavirus COVID-19.</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <form method="POST" style="float: left;">
              @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                        Filtrar por:
                        </span>
                    </div>
                    <select type="text" id="order" name="order" required>
                      @if($order == 1)
                        <option value="1" selected>País (A-Z)</option>
                        <option value="2">País (Z-A)</option>
                        <option value="3">Personas infectadas (Mayor a menor)</option>
                        <option value="4">Personas infectadas (Menor a mayor)</option>
                        <option value="5">Personas recuperadas (Mayor a menor)</option>
                        <option value="6">Personas recuperadas (Menor a mayor)</option>
                        <option value="7">Personas fallecidas (Mayor a menor)</option>
                        <option value="8">Personas fallecidas (Menor a mayor)</option>
                        <option value="9">Porcentaje recuperados (Mayor a menor)</option>
                        <option value="10">Porcentaje recuperados (Menor a mayor)</option>
                        <option value="11">Porcentaje fallecidos (Mayor a menor)</option>
                        <option value="12">Porcentaje fallecidos (Menor a mayor)</option>
                        <option value="13">Porcentaje sin definir (Mayor a menor)</option>
                        <option value="14">Porcentaje sin definir (Menor a mayor)</option>
                      @endif
                      @if($order == 2)
                        <option value="1">País (A-Z)</option>
                        <option value="2" selected>País (Z-A)</option>
                        <option value="3">Personas infectadas (Mayor a menor)</option>
                        <option value="4">Personas infectadas (Menor a mayor)</option>
                        <option value="5">Personas recuperadas (Mayor a menor)</option>
                        <option value="6">Personas recuperadas (Menor a mayor)</option>
                        <option value="7">Personas fallecidas (Mayor a menor)</option>
                        <option value="8">Personas fallecidas (Menor a mayor)</option>
                        <option value="9">Porcentaje recuperados (Mayor a menor)</option>
                        <option value="10">Porcentaje recuperados (Menor a mayor)</option>
                        <option value="11">Porcentaje fallecidos (Mayor a menor)</option>
                        <option value="12">Porcentaje fallecidos (Menor a mayor)</option>
                        <option value="13">Porcentaje sin definir (Mayor a menor)</option>
                        <option value="14">Porcentaje sin definir (Menor a mayor)</option>
                      @endif  
                      @if($order == 3)
                        <option value="1">País (A-Z)</option>
                        <option value="2">País (Z-A)</option>
                        <option value="3" selected>Personas infectadas (Mayor a menor)</option>
                        <option value="4">Personas infectadas (Menor a mayor)</option>
                        <option value="5">Personas recuperadas (Mayor a menor)</option>
                        <option value="6">Personas recuperadas (Menor a mayor)</option>
                        <option value="7">Personas fallecidas (Mayor a menor)</option>
                        <option value="8">Personas fallecidas (Menor a mayor)</option>
                        <option value="9">Porcentaje recuperados (Mayor a menor)</option>
                        <option value="10">Porcentaje recuperados (Menor a mayor)</option>
                        <option value="11">Porcentaje fallecidos (Mayor a menor)</option>
                        <option value="12">Porcentaje fallecidos (Menor a mayor)</option>
                        <option value="13">Porcentaje sin definir (Mayor a menor)</option>
                        <option value="14">Porcentaje sin definir (Menor a mayor)</option>
                      @endif
                      @if($order == 4)
                        <option value="1">País (A-Z)</option>
                        <option value="2">País (Z-A)</option>
                        <option value="3">Personas infectadas (Mayor a menor)</option>
                        <option value="4" selected>Personas infectadas (Menor a mayor)</option>
                        <option value="5">Personas recuperadas (Mayor a menor)</option>
                        <option value="6">Personas recuperadas (Menor a mayor)</option>
                        <option value="7">Personas fallecidas (Mayor a menor)</option>
                        <option value="8">Personas fallecidas (Menor a mayor)</option>
                        <option value="9">Porcentaje recuperados (Mayor a menor)</option>
                        <option value="10">Porcentaje recuperados (Menor a mayor)</option>
                        <option value="11">Porcentaje fallecidos (Mayor a menor)</option>
                        <option value="12">Porcentaje fallecidos (Menor a mayor)</option>
                        <option value="13">Porcentaje sin definir (Mayor a menor)</option>
                        <option value="14">Porcentaje sin definir (Menor a mayor)</option>
                      @endif
                      @if($order == 5)
                        <option value="1">País (A-Z)</option>
                        <option value="2">País (Z-A)</option>
                        <option value="3">Personas infectadas (Mayor a menor)</option>
                        <option value="4">Personas infectadas (Menor a mayor)</option>
                        <option value="5" selected>Personas recuperadas (Mayor a menor)</option>
                        <option value="6">Personas recuperadas (Menor a mayor)</option>
                        <option value="7">Personas fallecidas (Mayor a menor)</option>
                        <option value="8">Personas fallecidas (Menor a mayor)</option>
                        <option value="9">Porcentaje recuperados (Mayor a menor)</option>
                        <option value="10">Porcentaje recuperados (Menor a mayor)</option>
                        <option value="11">Porcentaje fallecidos (Mayor a menor)</option>
                        <option value="12">Porcentaje fallecidos (Menor a mayor)</option>
                        <option value="13">Porcentaje sin definir (Mayor a menor)</option>
                        <option value="14">Porcentaje sin definir (Menor a mayor)</option>
                      @endif 
                      @if($order == 6)
                        <option value="1">País (A-Z)</option>
                        <option value="2">País (Z-A)</option>
                        <option value="3">Personas infectadas (Mayor a menor)</option>
                        <option value="4">Personas infectadas (Menor a mayor)</option>
                        <option value="5">Personas recuperadas (Mayor a menor)</option>
                        <option value="6" selected>Personas recuperadas (Menor a mayor)</option>
                        <option value="7">Personas fallecidas (Mayor a menor)</option>
                        <option value="8">Personas fallecidas (Menor a mayor)</option>
                        <option value="9">Porcentaje recuperados (Mayor a menor)</option>
                        <option value="10">Porcentaje recuperados (Menor a mayor)</option>
                        <option value="11">Porcentaje fallecidos (Mayor a menor)</option>
                        <option value="12">Porcentaje fallecidos (Menor a mayor)</option>
                        <option value="13">Porcentaje sin definir (Mayor a menor)</option>
                        <option value="14">Porcentaje sin definir (Menor a mayor)</option>
                      @endif
                      @if($order == 7)
                        <option value="1">País (A-Z)</option>
                        <option value="2">País (Z-A)</option>
                        <option value="3">Personas infectadas (Mayor a menor)</option>
                        <option value="4">Personas infectadas (Menor a mayor)</option>
                        <option value="5">Personas recuperadas (Mayor a menor)</option>
                        <option value="6">Personas recuperadas (Menor a mayor)</option>
                        <option value="7" selected>Personas fallecidas (Mayor a menor)</option>
                        <option value="8">Personas fallecidas (Menor a mayor)</option>
                        <option value="9">Porcentaje recuperados (Mayor a menor)</option>
                        <option value="10">Porcentaje recuperados (Menor a mayor)</option>
                        <option value="11">Porcentaje fallecidos (Mayor a menor)</option>
                        <option value="12">Porcentaje fallecidos (Menor a mayor)</option>
                        <option value="13">Porcentaje sin definir (Mayor a menor)</option>
                        <option value="14">Porcentaje sin definir (Menor a mayor)</option>
                      @endif
                      @if($order == 8)
                        <option value="1">País (A-Z)</option>
                        <option value="2">País (Z-A)</option>
                        <option value="3">Personas infectadas (Mayor a menor)</option>
                        <option value="4">Personas infectadas (Menor a mayor)</option>
                        <option value="5">Personas recuperadas (Mayor a menor)</option>
                        <option value="6">Personas recuperadas (Menor a mayor)</option>
                        <option value="7">Personas fallecidas (Mayor a menor)</option>
                        <option value="8" selected>Personas fallecidas (Menor a mayor)</option>
                        <option value="9">Porcentaje recuperados (Mayor a menor)</option>
                        <option value="10">Porcentaje recuperados (Menor a mayor)</option>
                        <option value="11">Porcentaje fallecidos (Mayor a menor)</option>
                        <option value="12">Porcentaje fallecidos (Menor a mayor)</option>
                        <option value="13">Porcentaje sin definir (Mayor a menor)</option>
                        <option value="14">Porcentaje sin definir (Menor a mayor)</option>
                      @endif
                      @if($order == 9)
                        <option value="1">País (A-Z)</option>
                        <option value="2">País (Z-A)</option>
                        <option value="3">Personas infectadas (Mayor a menor)</option>
                        <option value="4">Personas infectadas (Menor a mayor)</option>
                        <option value="5">Personas recuperadas (Mayor a menor)</option>
                        <option value="6">Personas recuperadas (Menor a mayor)</option>
                        <option value="7">Personas fallecidas (Mayor a menor)</option>
                        <option value="8">Personas fallecidas (Menor a mayor)</option>
                        <option value="9" selected>Porcentaje recuperados (Mayor a menor)</option>
                        <option value="10">Porcentaje recuperados (Menor a mayor)</option>
                        <option value="11">Porcentaje fallecidos (Mayor a menor)</option>
                        <option value="12">Porcentaje fallecidos (Menor a mayor)</option>
                        <option value="13">Porcentaje sin definir (Mayor a menor)</option>
                        <option value="14">Porcentaje sin definir (Menor a mayor)</option>
                      @endif
                      @if($order == 10)
                        <option value="1">País (A-Z)</option>
                        <option value="2">País (Z-A)</option>
                        <option value="3">Personas infectadas (Mayor a menor)</option>
                        <option value="4">Personas infectadas (Menor a mayor)</option>
                        <option value="5">Personas recuperadas (Mayor a menor)</option>
                        <option value="6">Personas recuperadas (Menor a mayor)</option>
                        <option value="7">Personas fallecidas (Mayor a menor)</option>
                        <option value="8">Personas fallecidas (Menor a mayor)</option>
                        <option value="9">Porcentaje recuperados (Mayor a menor)</option>
                        <option value="10" selected>Porcentaje recuperados (Menor a mayor)</option>
                        <option value="11">Porcentaje fallecidos (Mayor a menor)</option>
                        <option value="12">Porcentaje fallecidos (Menor a mayor)</option>
                        <option value="13">Porcentaje sin definir (Mayor a menor)</option>
                        <option value="14">Porcentaje sin definir (Menor a mayor)</option>
                      @endif
                      @if($order == 11)
                        <option value="1">País (A-Z)</option>
                        <option value="2">País (Z-A)</option>
                        <option value="3">Personas infectadas (Mayor a menor)</option>
                        <option value="4">Personas infectadas (Menor a mayor)</option>
                        <option value="5">Personas recuperadas (Mayor a menor)</option>
                        <option value="6">Personas recuperadas (Menor a mayor)</option>
                        <option value="7">Personas fallecidas (Mayor a menor)</option>
                        <option value="8">Personas fallecidas (Menor a mayor)</option>
                        <option value="9">Porcentaje recuperados (Mayor a menor)</option>
                        <option value="10">Porcentaje recuperados (Menor a mayor)</option>
                        <option value="11" selected>Porcentaje fallecidos (Mayor a menor)</option>
                        <option value="12">Porcentaje fallecidos (Menor a mayor)</option>
                        <option value="13">Porcentaje sin definir (Mayor a menor)</option>
                        <option value="14">Porcentaje sin definir (Menor a mayor)</option>
                      @endif   
                      @if($order == 12)
                        <option value="1">País (A-Z)</option>
                        <option value="2">País (Z-A)</option>
                        <option value="3">Personas infectadas (Mayor a menor)</option>
                        <option value="4">Personas infectadas (Menor a mayor)</option>
                        <option value="5">Personas recuperadas (Mayor a menor)</option>
                        <option value="6">Personas recuperadas (Menor a mayor)</option>
                        <option value="7">Personas fallecidas (Mayor a menor)</option>
                        <option value="8">Personas fallecidas (Menor a mayor)</option>
                        <option value="9">Porcentaje recuperados (Mayor a menor)</option>
                        <option value="10">Porcentaje recuperados (Menor a mayor)</option>
                        <option value="11">Porcentaje fallecidos (Mayor a menor)</option>
                        <option value="12" selected>Porcentaje fallecidos (Menor a mayor)</option>
                        <option value="13">Porcentaje sin definir (Mayor a menor)</option>
                        <option value="14">Porcentaje sin definir (Menor a mayor)</option>
                      @endif   
                      @if($order == 13)
                        <option value="1">País (A-Z)</option>
                        <option value="2">País (Z-A)</option>
                        <option value="3">Personas infectadas (Mayor a menor)</option>
                        <option value="4">Personas infectadas (Menor a mayor)</option>
                        <option value="5">Personas recuperadas (Mayor a menor)</option>
                        <option value="6">Personas recuperadas (Menor a mayor)</option>
                        <option value="7">Personas fallecidas (Mayor a menor)</option>
                        <option value="8">Personas fallecidas (Menor a mayor)</option>
                        <option value="9">Porcentaje recuperados (Mayor a menor)</option>
                        <option value="10">Porcentaje recuperados (Menor a mayor)</option>
                        <option value="11">Porcentaje fallecidos (Mayor a menor)</option>
                        <option value="12">Porcentaje fallecidos (Menor a mayor)</option>
                        <option value="13" selected>Porcentaje sin definir (Mayor a menor)</option>
                        <option value="14">Porcentaje sin definir (Menor a mayor)</option>
                      @endif   
                      @if($order == 14)
                        <option value="1">País (A-Z)</option>
                        <option value="2">País (Z-A)</option>
                        <option value="3">Personas infectadas (Mayor a menor)</option>
                        <option value="4">Personas infectadas (Menor a mayor)</option>
                        <option value="5">Personas recuperadas (Mayor a menor)</option>
                        <option value="6">Personas recuperadas (Menor a mayor)</option>
                        <option value="7">Personas fallecidas (Mayor a menor)</option>
                        <option value="8">Personas fallecidas (Menor a mayor)</option>
                        <option value="9">Porcentaje recuperados (Mayor a menor)</option>
                        <option value="10">Porcentaje recuperados (Menor a mayor)</option>
                        <option value="11">Porcentaje fallecidos (Mayor a menor)</option>
                        <option value="12">Porcentaje fallecidos (Menor a mayor)</option>
                        <option value="13">Porcentaje sin definir (Mayor a menor)</option>
                        <option value="14" selected>Porcentaje sin definir (Menor a mayor)</option>
                      @endif                              
                    </select>
                    <div class="input-group-prepend">
                        <button style="color: #38ACFF; font-weight: bold;" type="submit" class="btn btn-outline-dark"><i style="color: #38ACFF;" class="fa fa-fw fa-search"></i> Filtrar</button>
                    </div>
                </div>
              </form>
              <form style="float: right;">
                    <input style="border: solid 1px #0094FF !important;" id="searchTerm" name="searchTerm" type="text" class="form-control" placeholder="Buscar en la tabla..." value="{{ old('searchTerm') }}" onkeyup="doSearch()">
                </form>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>País</th>
                      <th>Fecha de actualización</th>
                      <th>Personas infectadas</th>
                      <th style="color: #00B050 !important;">Personas recuperadas</th>
                      <th style="color: #C0504D !important;">Personas fallecidas</th>
                      <th style="color: #00B050 !important;">Recuperados (%)</th>
                      <th style="color: #C0504D !important;">Fallecidos (%)</th>
                      <th>Sin definir (%)</th>
                      <th>Ver histórico del país</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($cases as $case)
                        <tr>
                            <td>{{ $case->country }}</td>
                            <td>{{ $case->date }}</td>
                            <td>{{ number_format($case->confirmed, 0, '', '.') }}</td>
                            <td style="color: #00B050 !important;">{{ number_format($case->recovered, 0, '', '.') }}</td>
                            <td style="color: #C0504D !important;">{{ number_format($case->deaths, 0, '', '.') }}</td>
                            <td style="color: #00B050 !important;">{{ $case->percent_recovered }}%</td>
                            <td style="color: #C0504D !important;">{{ $case->percent_deaths }}%</td>
                            <td>{{ $case->percent_undefined }}%</td>
                            <td><a href="{{url('detalle',Crypt::encrypt($case->country))}}"><i style="color: #004A7F;" class="fa fa-fw fa-search"></i></a></td>
                        </tr>
                    @endforeach
                    @if(count($cases) == 0)
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
                <div>{{ $cases->links() }}</div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
@endsection

<script language="javascript">
    function doSearch()
    {
        const tableReg = document.getElementById('dataTable');
        const searchText = document.getElementById('searchTerm').value.toLowerCase();
        let total = 0;

        // Recorremos todas las filas con contenido de la tabla
        for (let i = 1; i < tableReg.rows.length; i++) {
            // Si el td tiene la clase "noSearch" no se busca en su cntenido
            if (tableReg.rows[i].classList.contains("noSearch")) {
                continue;
            }

            let found = false;
            const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
            // Recorremos todas las celdas
            for (let j = 0; j < cellsOfRow.length && !found; j++) {
                const compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                // Buscamos el texto en el contenido de la celda
                if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {
                    found = true;
                    total++;
                }
            }
            if (found) {
                tableReg.rows[i].style.display = '';
            } else {
                // si no ha encontrado ninguna coincidencia, esconde la
                // fila de la tabla
                tableReg.rows[i].style.display = 'none';
            }
        }

        // mostramos las coincidencias
        const lastTR=tableReg.rows[tableReg.rows.length-1];
        const td=lastTR.querySelector("td");
        lastTR.classList.remove("hide", "red");
        if (searchText == "") {
            lastTR.classList.add("hide");
        } else if (total) {
            td.innerHTML="Se ha encontrado "+total+" coincidencia"+((total>1)?"s":"");
        } else {
            lastTR.classList.add("red");
            td.innerHTML="No se han encontrado coincidencias";
        }
    }
</script>