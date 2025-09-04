<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Declaração Militar</title>
    <style>
        @page {
            size: A4;
            margin: 2cm;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #fff;
            color: #000;
        }

        .container {
            width: 100%;
            max-width: 800px;
            margin: auto;
            /* padding: 2cm; */
            border: 2px solid #000;
            box-sizing: border-box;
            margin-bottom: 0px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .title {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .content {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 40px;
        }

        .signature {
            margin-top: 60px;
            text-align: right;
        }

        .quadro {
            width: 50%;
            border: 1px solid #000;
            padding: 6px;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            float: right;
        }

        .linha-tracejada {
            border-bottom: 1px dashed #000;
            margin: 15px 0;
            height: 20px;
        }
    </style>
</head>

<body>
    <div class="container" >

        {{-- <div
            style=" font-size: 18px; margin-bottom: 20px;border: 2px solid #000; padding: 10px;"> --}}

            <div class="header" style="margin-left: 5px; margin-right: 5px; ">
                <div style="text-align: center;">
                    <img src="../public/adminlte/dist/assets/img/50anosMoz.jpg"
                        class="user-image rounded-circle shadow"
                        alt="Moçambique" style="height:5%; width: 15%; float: right; " />
                        {{-- style="height: 15%; width: 15%; float: right;" --}}
                    <img src="../public/adminlte/dist/assets/img/emblemamoz.png"
                        class="user-image rounded-circle shadow"
                        alt="Moçambique" style="height:10%; width: 15%; margin-left: 15%"/>
                </div>
                <div style="text-transform: uppercase;">República de Moçambique</div>
                <div style="text-transform: uppercase;">Ministério da Defesa Nacional</div>
                <div style="text-transform: uppercase;">CENTRO PROVINCIAL DE RECRUTAMENTO E MOBILIZAÇÃO DE MANICA</div>
                <div style="width: 100%">
                    <div class="quadro" style="font-size: 12px; margin-buttom: 0px;">
                        <p style="float: left;">A (O)</p>
                        <p></p>
                        <div class="linha-tracejada"></div>
                        <div class="linha-tracejada"></div>
                        <div class="linha-tracejada"></div>
                        <div class="linha-tracejada"></div>
                    </div>.
                </div>

                <div style="margin-top: 40%;margin-left: 0%">
                    <label style="margin-left: 0%; float: left;">N° __________/CPRRMM/25</label>
                    <label style="float: right;">Chimoio, aos ______/____/2025</label>
                </div>

            </div>

            <div style="margin-left: 5px; margin-right: 5px; ">
                ASSUNTO:<b class="title"><i><u>Declaração Militar</u></i></b>
            </div>
            <div class="content" style="margin-left: 5px; margin-right: 5px; ">
                <p>
                    Para os devidos efeitos e fins julgados convenientes e a pedido do interessado (a), o Centro
                    Provincial de Recrutamento e Mobilização de Manica, nos termos do {{ $artigo }},
                    declara que o (a) nacional de nome <b><u> {{ $cidadao->nome }}  {{ $cidadao->apelido }}</u><b>, sob registo N°
                    <u>{{ $cidadao->num_registo }}</u>
                    e NIM <u>{{ $cidadao->NIM }}</u>, tem a situação <b><u>REGULARIZADA.</u></b> </p>
                <p>
                    Por ser verdade, mandei passar a presente declaração que assino e autentico, com o carimbo a
                    tinta de óleo em uso neste Centro.
                </p>
            </div>
            <div class="signature" style="text-align: center">
                <div><b>A Delegada Provincial</b></div>
                <br>
                <div>_____________________________</div>
                <div>Natércia Manuel Mucavel</div>
                <div>(Téc.Sup.N1)</div>
                <br>
            </div>
            <div style="font-size:12px">
                <b>Documento valido por 90 (noventa) dias.</b><br>
                <b>Elaborado por:</b>
            </div>
        </div>
    </div>

    <div style="position: fixed; bottom: 0; width: 100%; text-align: center; font-size: 12px; border-top: 5px solid #000;">
        <i>{{$user->centro_recrutamento->endereco}}: Telefax {{$user->centro_recrutamento->telefone}}:
        {{$user->centro_recrutamento->email}}</i>
    </div>
</body>

</html>
