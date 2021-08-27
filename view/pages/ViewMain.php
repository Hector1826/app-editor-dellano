<div class="row mb-5 p-5">
    <div class="col-sm-2 p-1">
        <div class="card card-orange card-outline">
            <div class="card-body">
                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Catálogo</b>
                        <a class="font-weight-bold"><select id="idCata" name="idCata"
                                class="selectpicker form-control text-center" data-live-search="true" data-size="5"
                                onchange='onChangeCatalogo()'>
                            </select></a>
                    </li>
                    <li class="list-group-item">
                        <b>Precio</b> <a class="float-right font-weight-bold">
                            <input type="text" id="p_precio" name="p_precio"
                                class="form-control text-center font-weight-bold text-orange" readonly="" />
                        </a>
                    </li>
                    <li class="list-group-item">
                        <b>Cantidad</b><a class="float-right font-weight-bold">
                            <input type="number" id="num_impresion" name="num_impresion" value="1"
                                class="form-control text-center font-weight-bold text-orange"
                                onchange='onChangeCantidad()' />
                        </a>
                    </li>
                    <li class="list-group-item">

                        <b>Total</b>
                        <a class="float-right font-weight-bold">
                            <input type="text" id="costo" name="costo"
                                class="form-control text-center font-weight-bold text-orange" readonly="" />
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </div>

    <div class="col-sm-10 p-1 border-left vh-100 mb-5">
        <section id="Images" class="images-cards mb-5">
            <form action="#" method="post" enctype="multipart/form-data" id="upload-multi-images">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-12 text-orange" id="add-photo-container">
                        <div class="add-new-photo text-orange first" id="add-photo">
                            <span class="text-orange"><i class="icon-camera"></i></span>
                        </div>

                        <input type="file" multiple id="add-new-photo" name="add-new-photo[]"
                            accept="image/jpeg, .jpg, .png">
                    </div>
                    <div id="mImg"></div>
                </div>

            </form>
        </section>
    </div>
</div>
