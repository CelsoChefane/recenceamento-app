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
    <form class="needs-validation" novalidate>
        <!--begin::Body-->
        <div class="card-body">
            <form method="" action="{{ URL::route('cidadao.store') }}">
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
                        <select class="form-select" id="validationCustom04" name="province" required>
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
                        <select class="form-select" id="validationCustom04" name="cidade">
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                        <div class="invalid-feedback">Please select a valid state.</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="validationCustom05" required />
                        <div class="invalid-feedback">Please provide a valid zip.</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">You must agree before submitting.</div>
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </form>
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
