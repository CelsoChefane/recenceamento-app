<!--begin::Header-->
@include('layouts.header')
<!--end::Header-->
<!--begin::Sidebar-->
@include('layouts.sidebar')

<div class="card card-info card-outline mb-4">
    <!--begin::Header-->
    <div class="card-header">
        <div class="card-title">Detalhes do Cidadao #{{ $cidadao->id }} {{ $cidadao->nome }}</div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body">

        <!--begin::Row-->
        <div class="row g-3">
            <div class="col-md-4">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid "
                                src='{{ asset('vendor/adminlte/dist/img/cornelder_logo.jpg') }}'
                                alt="Nome Completo">
                        </div>

                        <h3 class="profile-username text-center">{{ $cidadao->nome }} {{ $cidadao->apelido }}</h3>

                        {{-- <p class="text-muted text-center">Software Engineer</p> --}}

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Numero de Telefone</b>: <a class="float-right">{{ $cidadao->telefone }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>NIM</b>: <a class="float-right">{{ $cidadao->NIM }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Numero de Registro</b>: <a class="float-right">{{ $cidadao->num_registo }}</a>
                            </li>
                        </ul>

                        <a href="{{ URL::route('cidadao.declaracao', $cidadao->id) }}"
                            class="btn btn-danger btn-block"><b>Imprimir declaração</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>


            <div class="col-md-8">

                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="active tab-pane">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Morada</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="3" disabled>{{ $cidadao->endereco}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">sexo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" disabled value=" {{$cidadao->sexo}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Data de Nascimento</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" disabled value=" {{ $cidadao->data_nascimento}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Estado Civil</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" disabled value=" {{ $cidadao->estado_civil}}">
                                </div>
                            </div>

                        </div>
                        <!-- /.tab-pane -->
                    </div>
                </div>
            </div>

        </div>

    </div>



    <!--begin::JavaScript-->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict';

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation');

            // Loop over them and prevent submission
            Array.from(forms).forEach((form) => {
                form.addEventListener(
                    'submit',
                    (event) => {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }

                        form.classList.add('was-validated');
                    },
                    false,
                );
            });
        })();
    </script>
    <!--end::JavaScript-->


</div>

@include('layouts.footer')

<!--end::Footer-->




<script>
    new DataTable('#example');
</script>
