<template>
    <main>
      <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Crear Usuario
                                    <small>Ingrese la información correctamente</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Usuario </li>
                                <li class="breadcrumb-item active">Crear Usuario </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card tab2-card">
                            
                            <div class="card-body">
                                <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active show" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true" data-original-title="" title="">Cuenta</a></li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                        <form class="needs-validation user-add" novalidate="">
                                            <h4>Detalle de cuenta</h4>
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Nombres</label>
                                                <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="text" required="">
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span> Apellidos</label>
                                                <input class="form-control col-xl-8 col-md-7" id="validationCustom1" type="text" required="">
                                            </div>
                                              <div class="form-group row">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4"> Correo</label>
                                                <input class="form-control col-xl-8 col-md-7" id="validationCustom1" type="text" required="">
                                            </div>
                                              <div class="form-group row">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4"> Teléfono</label>
                                                <input class="form-control col-xl-8 col-md-7" id="validationCustom1" type="text" required="">
                                            </div>
                                             <div class="form-group row">
                                                <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Rol</label>
                                                <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1">
                                                    <option>Adminstrador</option>
                                                    <option>Vendedor</option>                                                      
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Usuario</label>
                                                <input class="form-control col-xl-8 col-md-7" id="validationCustom2" type="text" required="">
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4"><span>*</span> Contraseña</label>
                                                <input class="form-control col-xl-8 col-md-7" id="validationCustom3" type="password" required="">
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom4" class="col-xl-3 col-md-4"><span>*</span> Confirme Contraseña</label>
                                                <input class="form-control col-xl-8 col-md-7" id="validationCustom4" type="password" required="">
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                                <div class="pull-right">
                                    <button type="button" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </main>
</template>