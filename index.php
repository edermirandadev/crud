    <?php
    require 'config.php';
    ?>

<a href="adicionar.php">Adicionar Usuário</a>
<br/><br/>
<table border="3" width="60%">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ação</th>
    </tr>

    <?php
        $sql = "SELECT * FROM usuarios";
        $sql = $pdo->query($sql);
            if($sql->rowCount() > 0) {
                foreach($sql->fetchAll() as $usuarios) {
                    echo '<tr>';
                    echo '<td>'.$usuarios['nome'].'</td>';
                    echo '<td>'.$usuarios['email'].'</td>';
                    echo '<td><a href="editar.php?id='.$usuarios['id'].'">
                    Editar - <a href="excluir.php?id='.$usuarios['id'].'">Exlcluir</td>';
                    echo '<tr>';
                }
            }
    ?>
</table>