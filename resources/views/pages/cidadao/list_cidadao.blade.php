<!--begin::Header-->
@include('layouts.header')
<!--end::Header-->
<!--begin::Sidebar-->
@include('layouts.sidebar')

<div class="card card-info card-outline mb-4">
    <!--begin::Header-->
    <div class="card-header">
        <div class="card-title">Lista</div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body">

        <!--begin::Row-->
        <div class="row g-3">
            <table id="example"
                class="fleet-datatable responsive export excel colvis table table-sm table-bordered table-striped display compact">
                <thead>
                    <tr>
                        <th>@lang('#')</th>
                        <th>@lang('NIM')</th>
                        <th>@lang('Nome')</th>
                        <th>@lang('Telefone')</th>
                        <th>@lang('email')</th>
                        <th>@lang('Provincia')</th>
                        <th>@lang('Numero-Registro')</th>
                        <th>@lang('Options')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cidadaos as $cidadao)
                        <tr link="{{ URL::route('cidadao.show', [$cidadao->id]) }}">
                            <td>{{ $cidadao->id }}</td>
                            <td>{{ $cidadao->NIM }}</td>
                            <td>{{ $cidadao->nome }} {{ $cidadao->apelido }}</td>
                            <td>{{ $cidadao->telefone }}</td>
                            <td>{{ $cidadao->email }}</td>
                            <td>{{ $cidadao->provincium?->nome }}</td>
                            <td>{{ $cidadao->num_registo }}</td>

                            <td>

                                <a class="btn btn-xs btn-outline-secondary" role="button"
                                    href="{{ URL::route('cidadao.show', $cidadao->id) }}">
                                    <i class="nav-icon fas fa-eye"></i>
                                </a>

                                <a class="btn btn-xs btn-outline-primary" nome="{{ $cidadao->nome }}"
                                    telefone="{{ $cidadao->telefone }}" NIM="{{ $cidadao->NIM }}"
                                    id="{{ $cidadao->id }}" num_registo="{{ $cidadao->num_registo }}"
                                    provincium="{{ $cidadao->provincium?->id }}" data-toggle="modal"
                                    target-id="{{ $cidadao->id }}" data-target="#modal-vehicle-status" role="button">
                                    {{-- @lang('Edit') --}}
                                    <i class="nav-icon fas fa-edit"></i>
                                </a>

                                {{-- @can('is_admin') --}}
                                <a class="btn btn-xs btn-outline-danger" role="button"
                                    href="{{ URL::route('cidadao.destroy', $cidadao->id) }}"
                                    onclick="return confirm('Are you sure want to delete? This content is very sensitive!')">
                                    <i class="nav-icon fas fa-trash"></i>
                                </a>
                                {{-- @endcan --}}

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
