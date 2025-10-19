<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cliente</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
    
         
    <form action="cadastrar.php" method="post" autocomplete="on">
       
            <h1>Cadastro de Cliente</h1>
            <label for="cnpj">CNPJ:</label>
            <input type="text" id="cnpj" name="cnpj" maxlength="18" placeholder="00.000.000/0000-00" autocomplete="cnpj">
            
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="inome" required maxlength="30" placeholder="Nome Completo" autocomplete="name">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="iendereco" required autocomplete="endereco" autocomplete="endereco" placeholder="Rua, Avenida, etc.." maxlength="30">
            <label for="numero">Numero:</label>
            <input type="number" name="numero" id="numero" autocomplete="numero"  placeholder="S/N" required>
            <label for="icomp">Complemento:</label>
                        <input type="text" name="comp" id="icomp" maxlength="30" placeholder="Quadra, casa" autocomplete="comp">
            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" maxlength="30">
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" maxlength="30">
             <label for="iest">Estado</label>
                    <select name="estado" id="iestado">
                        <option value="" selected>---Escolha---</option>
                         <optgroup label="Região Norte">
                            <option value="AC">Acre</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="PA">Pará</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="TO">Tocantins</option>
            
                        </optgroup>
                         <optgroup label="Região Nordeste">
                            <option value="Al">Alagoas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="MA">Maranhão</option>
                            <option value="PB">Paraíba</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="SE">Sergipe</option>
            
                        </optgroup>
                        <optgroup label="Região Centro-Oeste">
                            <option value="DF">Distrito Federal</option>
                            <option value="GO">Goiás</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
            
                        </optgroup>
                        <optgroup label="Região Sudeste">
                            <option value="ES">Espírito Santos</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="SP">São Paulo</option>
                        </optgroup>
                        <optgroup label="Região Sul">
                            <option value="PR">Paraná</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="SC">Santa Catarina</option>
            
                        </optgroup>
            
            
            
            
                    </select>
            <label for="pais">Pais:</label>
               <select name="pais" id="pais">
                        <option value="" selected>---Escolha---</option>
                         <optgroup label="País">
                            <option value="Brasil">Brasil</option>
                            <option value="Paraguai">Paraguai</option>
                            </optgroup>
            
                    </select>
            <label for="email">Email:</label>
            <input type="email" name="email" id="iemail" placeholder="xxx@xxxx.xx" required autocomplete="email">
            <label for="telefone">Telefone:</label>
            <input type="tel" name="telefone" id="telefone" autocomplete="tel" pattern="(\([0-9]{2}\))\s([0-9]{5})-([0-9]{4})" placeholder="(99) 9999-9999" required maxlength="15">
             <label for="cep">CEP:</label>
            <input type="text" name="cep" id="cep" placeholder="00000-000" required>
            
            
            <input type="submit" value="Cadastrar Cliente">
        
    </form>

        <h2>Lista de Clientes</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include_once('conexao.php');
                $query = "SELECT id,nome,cidade,estado from clientes order by id";
                $resultado = $conexao->query($query);
                while($linha = $resultado->fetch_assoc()){
                    echo'<tr>';

                     echo '<td>' . $linha['nome'] . '</td>';
                     echo '<td>' . $linha['cidade'] . '</td>';
                     echo '<td>' . $linha['estado'] . '</td>';
                     echo '<td><a href="edita.php?id='.$linha['id'].'">Editar</a>|<a href="deleta.php?id='.$linha['id'].'">Excluir</a></td>';

                    echo '</tr>';
                }
                
                
                
                ?>
            
            </tbody>

        </table>

    </main>
    
</body>
</html>