    <!-- Content Header (Page header) -->

    <section class="content-header"></section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Timelime example  -->
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-gray-dark card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle bg-gray" src="dist/img/avatar.png"
                    alt="User profile picture">
                </div>

                <h3 class="profile-username text-center" id="nombre_us">Nina Mcintire</h3>

                <p class="text-muted text-center" id="ape">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Compras</b> <a class="float-right font-weight-bold" id="totalCompra">1,322</a>
                  </li>
                </ul>

              </div>
              <!-- /.card-body -->
              <div class="card-footer row text-center">
                <div class="col-12 col-sm-6">
                  <a href="#" onclick="onLogout();" class="btn btn-dark text-white"><b>Salir</b></a>
                </div>
                <div class="col-12 col-sm-6">
                  <a href="#" onclick="onEdit();" class="btn btn-info"><b>Editar</b></a>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bg-green"> Completados </span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-check-circle text-white bg-green"></i>
                <div class="timeline-item">
                  <h3 class="timeline-header no-border"><a class="text-green"><b>Fecha: 2021-08-04 </b></a></h3>
                </div>
                <div class="timeline-item">
                  <h3 class="timeline-header no-border"><a class="text-green"><b>Fecha: 2021-08-04 </b></a></h3>
                </div>
                <div class="timeline-item">
                  <h3 class="timeline-header no-border"><a class="text-green"><b>Fecha: 2021-08-04 </b></a></h3>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div class="time-label text-info">
                <span class="bg-info"> En camino </span>
              </div>
              <div>
                <i class="fas fa-truck text-info bg-info"></i>
                <div class="timeline-item">
                  <h3 class="timeline-header no-border"><a class="text-info"><b>Fecha: 2021-08-04 </b></a></h3>
                  <div class="timeline-body">
                    Detalle del pedido
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div class="time-label">
                <span class="bg-danger text-white"> Cancelados </span>
              </div>
              <div>
                <i class="fas fa-times-circle bg-danger"></i>
                <div class="timeline-item">
                  <h3 class="timeline-header no-border"><a class="text-danger"><b>Fecha: 2021-08-04 </b></a></h3>
                  <div class="timeline-body">
                    Detalle del pedido
                  </div>
                </div>
              </div>
              <!-- END timeline item -->

            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.timeline -->
    </section>
