<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="assets/css/consulta.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col cabecalho">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand cabecalho__titulo" href="index.php">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link cabecalho__menu" aria-current="page"
                                        href="index.php">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link cabecalho__menu ativo" href="consulta.php">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col descricao">
                <h2 class="descricao__titulo">Consultar - Contatos Agendados</h2>
            </div>
        </div>

        <div class="tabelinha">
            <table class="table">
                <thead class="tabela__cabecalho">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Origem</th>
                        <th scope="col">Contato</th>
                        <th scope="col">Observação</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tabela__conteudo">
                            <?php
                            require_once("pessoa.class.php");
                            $pessoa = new Pessoa();
                            $pessoa->setNome($_POST['nome']);
                            echo $pessoa->getNome();
                            ?>
                        </td>
                        <td class="tabela__conteudo">
                            <?php
                                    require_once("pessoa.class.php");
                                    $pessoa = new Pessoa();
                                    $pessoa->setTelefone($_POST['telefone']);
                                    echo $pessoa->getTelefone();
                                ?>
                        </td>
                        <td class="tabela__conteudo">
                            <?php
                                    require_once("pessoa.class.php");
                                    $pessoa = new Pessoa();
                                    $pessoa->setOrigem($_POST['origem']);
                                    echo $pessoa->getOrigem();
                                ?>
                        </td>

                        <td class="tabela__conteudo">
                            <?php
                                    require_once("pessoa.class.php");
                                    $pessoa = new Pessoa();
                                    $pessoa->setData($_POST['data']);
                                    echo $pessoa->getData();
                                ?>
                        </td>

                        <td class="tabela__conteudo">
                            <?php
                                    require_once("pessoa.class.php");
                                    $pessoa = new Pessoa();
                                    $pessoa->setObservacao($_POST['observacao']);
                                    echo $pessoa->getObservacao();
                                ?>
                        </td>
                        <td class="tabela__conteudo">
                            <p>Editar</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>