<!--begin::Header-->
@include('layouts.header')
<!--end::Header-->
<!--begin::Sidebar-->
@include('layouts.sidebar')

<div class="card card-info card-outline mb-4">
    <!--begin::Header-->
    <div class="card-header">
        <div class="card-title">Incerir dados Validos</div>
    </div>
    <!--end::Header-->
    <!--begin::Form-->
    <form method="" action="{{ URL::route('cidadao.store') }}">
        <!--begin::Body-->
        <div class="card-body">

                <!--begin::Row-->
                <div class="row g-3">
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Digite os nomes"
                            name="nome" required />
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Apelido</label>
                        <input type="text" class="form-control" id="validationCustom02"
                            placeholder="Digite o Apelido" name="apelido" required />
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="email" class="form-control" id="validationCustomUseremail"
                                aria-describedby="inputGroupPrepend" name="email" required />
                            <div class="valid-feedback">Please type you email.</div>
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Provicia</label>
                        <select class="form-select" id="province" name="province" required>
                            <option selected disabled value="">Choose...</option>

                            @foreach ($provincias as $province)
                                <option value="{{ $province->id }}">
                                    {{ $province->nome }}
                                </option>
                            @endforeach
                        </select>
                        <div class="valid-feedback">Please provide a valid Province.</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="validationCustom04" class="form-label">cidade</label>
                        <select class="form-select" id="cidade" name="cidade">
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                        <div class="invalid-feedback">Please select a valid state.</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">Sexo</label>
                        <fieldset class="">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexo" id="sexo"
                                    value="Masculino" checked />
                                <label class="form-check-label" for="gridRadios1">
                                    Masculino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexo" id="sexo"
                                    value="Feminino" />
                                <label class="form-check-label" for="gridRadios2">
                                    Feminino
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <!--end::Col-->


                    <!--begin::Col-->
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">Data de Nascimento</label>
                        <input type="Date" class="form-control" id="dataNascimento"
                            placeholder="Selecione a Data" name="dataNascimento" required />
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <!--end::Col-->


                    <!--begin::Col-->
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">Estado Civil</label>
                        <fieldset class="">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado_civil" id="sexo"
                                    value="Solteiro" checked />
                                <label class="form-check-label" for="gridRadios1">
                                    Solteiro/a
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado_civil" id="sexo"
                                    value="Casado" />
                                <label class="form-check-label" for="gridRadios2">
                                    Casado/a
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado_civil" id="sexo"
                                    value="Viuvo" />
                                <label class="form-check-label" for="gridRadios2">
                                    Viuvo/a
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado_civil" id="sexo"
                                    value="Outro" />
                                <label class="form-check-label" for="gridRadios2">
                                    Outro
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <!--end::Col-->


                    <!--begin::Col-->
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">Contacto</label>
                        <input type="number" class="form-control" id="contacto"
                            placeholder="Digite o contacto ex. 2588XXXXXXXX" name="contacto" required />
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim"
                            placeholder="Digite o NIM de Cadastro" name="nim" required />
                        <div class="valid-feedback">Obrigatorio!</div>
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">Numero de registro</label>
                        <input type="text" class="form-control" id="NRegisto"
                            placeholder="Digite o numero de registro" name="NRegisto" required />
                        <div class="valid-feedback">Obrigatorio!</div>
                    </div>
                    <!--end::Col-->


                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco"
                            placeholder="Digite o endereco atual" name="endereco" required />
                        <div class="valid-feedback">Obrigatorio!</div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->

        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer">
            <button class="btn btn-info" type="submit">Submit form</button>
        </div>
        <!--end::Footer-->
    </form>
    <!--end::Form-->
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
    $(document).ready(function() {
        $("#province").change(function() {
            let province_id = this.value;
            $.get('/getCity?province=' + province_id, function(data) {
                $("#cidade").html(data);
            })
        })
    })
</script>
