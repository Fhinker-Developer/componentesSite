<?php


require_once "components/barcode-master/barcode-master/barcode.php";




?>
<!DOCTYPE html>
<html lang="pt">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabela</title>
    <link rel="stylesheet" href="components/table.css">
</head>

<body>

    <style>
        @import url("components/colorsS.css");

        body {
            margin: 0;
            padding: 0;
            overflow-y: auto;

        }

        header {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100;
            height: 48px;
            background: var(--color-gray-100);
            box-shadow: 0 1px 10px var(--color-gray-400);
        }

        .config,
        form {
            width: 400px;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .config button {

            width: 128px;
            height: 32px;
            border: none;
            border-radius: 8px;
            background-color: var(--color-red-200);
            color: var(--color-red-800);
            border: 1px solid var(--color-red-800);


        }

        .config :last-child {
            background-color: var(--color-green-200);
            color: var(--color-green-800);
            border: 1px solid var(--color-green-800);

        }
    </style>

    <header>

        <form action="">



            <div class="config">


                <button>sair</button>

                <button>Gerar QRCode</button>

            </div>
        </form>
    </header>
    <!-- end header -->

    <div class="content-table">

        <table>


            <thead>

                <tr>
                    <th>
                        <h1>Kwanda.lda</h1>
                    </th>

                    <th colspan="2"><output>ordem de servicp do cliente</output></th>

                    <th><label for="n">Numero</label>
                        <output name="" id="n">osexx1s243</output>
                    </th>
                </tr>

            </thead>
            <!-- end thead -->

            <tbody>

                <tr>
                    <td>
                        <ul>
                            <li>
                                <label>Pedido por</label>
                            </li>
                            <li>xxxxxxxx</li>
                        </ul>
                    </td>
                    <!-- end td -->
                    <td colspan="2">
                        <ul>
                            <li>
                                <label>nome da empresa</label>
                            </li>
                            <li>xxxxxxxx</li>
                        </ul>
                    </td>
                    <!-- end td -->
                    <td>
                        <ul>
                            <li>
                                <label>ref. contract</label>
                            </li>
                            <li>xxxxxxxx</li>
                        </ul>
                    </td>

                </tr>
                <!-- end tr -->

                <tr>
                    <td colspan="4">
                        <h2>categorias de servico</h2>
                    </td>
                </tr>
                <!-- end tr -->

                <tr>
                    <td>
                        <ul>
                            <li><input type="checkbox" name="" id="">
                                <label for="">accomodation</label>
                            </li>
                            <!-- end li -->
                            <li><input type="checkbox" name="" id="">
                                <label for="">clinic</label>
                            </li>
                            <!-- end li -->
                            <li><input type="checkbox" name="" id="">
                                <label for="">hotel</label>
                            </li>
                            <!-- end li -->
                        </ul>
                    </td>
                    <!-- end td -->
                    <td>
                        <ul>
                            <li><input type="checkbox" name="" id="">
                                <label for="">areas</label>
                            </li>
                            <!-- end li -->
                            <li><input type="checkbox" name="" id="">
                                <label for="">developm</label>
                            </li>
                            <!-- end li -->
                            <li><input type="checkbox" name="" id="">
                                <label for="">logistics</label>
                            </li>
                            <!-- end li -->
                        </ul>
                    </td>
                    <!-- end td -->

                    <td>
                        <ul>
                            <li><input type="checkbox" name="" id="">
                                <label for="">catering</label>
                            </li>
                            <!-- end li -->
                            <li><input type="checkbox" name="" id="">
                                <label for="">general services</label>
                            </li>
                            <!-- end li -->
                            <li><input type="checkbox" name="" id="">
                                <label for="">mecha/elec</label>
                            </li>
                            <!-- end li -->
                        </ul>
                    </td>
                    <!-- end td -->

                    <td>
                        <ul>
                            <li><input type="checkbox" name="" id="">
                                <label for="">channel/dock</label>
                            </li>
                            <!-- end li -->
                            <li><input type="checkbox" name="" id="">
                                <label for="">handling services</label>
                            </li>
                            <!-- end li -->
                            <li><input type="checkbox" name="" id="">
                                <label for="">other</label>
                            </li>
                            <!-- end li -->
                        </ul>
                    </td>
                    <!-- end td -->

                </tr>
                <!-- end tr -->


                <!-- end tr -->

                <tr>
                    <td colspan="4">
                        <h2>servico pedido</h2>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <label for="0">descricao</label>
                        <textarea name="" id="0"></textarea>
                    </td>

                    <!-- end -->

                </tr>
                <!-- end tr -->
                <tr>
                    <td colspan="4">
                        <label for="2">observacao</label>
                        <textarea name="" id="2"></textarea>
                    </td>
                </tr>
                <!-- end  tr-->
                <tr>
                    <td colspan="4">
                        <label for="1">horario/programacao</label>
                        <textarea name="" id="1"></textarea>
                    </td>
                </tr>
                <!-- end tr -->

                <tr>
                    <td>

                        <label for="o-cliente">cliente</label>
                        <output id="o-cliente">xxxxxxxxxxxx</output>


                    </td>
                    <!-- end td -->
                    <td>
                        <label for="o-data">Data</label>
                        <input type="date">
                    </td>
                    <!-- end td -->
                    <td>
                        <label for="o-cliente">Nome</label>
                        <output id="o-cliente">pedro moises</output>
                    </td>
                    <!-- end td -->
                    <td>
                        <label for="o-cliente">Assinatura</label>
                        <output id="o-cliente">xxxxxxxx</output>
                    </td>
                    <!-- end td -->
                </tr>
                <!-- end tr -->
                <tr>
                    <td colspan="4">
                        <h2>Aprovacao do pedido</h2>
                    </td>
                </tr>
                <!-- end tr -->
                <tr>
                    <td colspan="2">
                        <h2>chefe do departamento do servico pedido</h2>
                    </td>
                    <!-- end td -->
                    <td colspan="2">
                        <h2>gerente das operacoes</h2>
                    </td>
                    <!-- end td -->

                </tr>
                <!-- end tr -->
                <tr>
                    <td>
                        <label for="">aceite:</label>
                    </td>

                    <!-- end td -->
                    <td>
                        <ul class="container-row">

                            <li>
                                <label for="r-sim">sim</label>
                                <input type="radio" name="ration" id="r-sim">
                                <!-- end -->
                                <label for="r-nao">não</label>
                                <input type="radio" name="ration" id="r-nao">
                                <!-- end -->
                                <label for="r-quotacao">quotação</label>
                                <input type="radio" name="ration" id="r-quotacao">

                            </li>

                        </ul>

                    </td>
                    <!-- end td -->

                    <td colspan="2">
                        <label>Assinatura</label>
                        <output>xxxxxxxx</output>
                    </td>


                </tr>
                <!-- end tr -->

                <tr>
                    <td>
                        <label for="">Cod</label>
                        <output>xxxxxxxx</output>
                    </td>


                    <td>
                        <label>Ref. da faturacao</label>
                        <output>xxxxxxxx</output>
                    </td>

                </tr>
                <!-- end tr -->
                <tr>
                    <td>
                        <label>Assinatura</label>
                        <output>xxxxxxxx</output>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- end tr -->

            </tbody>

            <!-- end tbody -->




        </table>


    </div>

</body>

</html>