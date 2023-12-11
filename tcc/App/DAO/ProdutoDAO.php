<?php


class ProdutoDAO
{

    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=pdo";

        $this->conexao = new PDO($dsn, 'root', '');
    }

    //inserir no bd
    public function insert(ProdutoModel $model)
    {
        //insert na tabela do banco de dados
        $sql = "INSERT INTO produtos (cidade, estado, valor, quantdias, quartos) VALUES (?, ?, ?, ?, ?) ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->cidade);
        $stmt->bindValue(2, $model->estado);
        $stmt->bindValue(3, $model->valor);
        $stmt->bindValue(4, $model->quantdias);
        $stmt->bindValue(5, $model->quartos);
        $stmt->execute();

        if ($stmt->rowCount()) {
            $usuario_id = $this->conexao->lastInsertid();

            $diretorio = "Viagensimg/$usuario_id/";

            mkdir($diretorio, 0755);

            $arquivo = $model->images;
            for ($cont = 0; $cont < count($arquivo['name']); $cont++) {

                $nome_arquivo = $arquivo['name'][$cont];

                $destino = $diretorio . $arquivo['name'][$cont];

                if (move_uploaded_file($arquivo['tmp_name'][$cont], $destino)) {
                    $sql_image =  "INSERT INTO images (nome_image, produto_id) VALUES (?, ?)";

                    $stmt_img = $this->conexao->prepare($sql_image);

                    $stmt_img->bindValue(1, $nome_arquivo);
                    $stmt_img->bindValue(2, $usuario_id);

                    $stmt_img->execute();
                }
            }
        }
    }
    //atualizar no bd
    public function update(ProdutoModel $model)
    {
        $sql = "UPDATE produtos SET cidade = ?, estado = ?, valor = ?, quantdias = ?, quartos = ? WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->cidade);
        $stmt->bindValue(2, $model->estado);
        $stmt->bindValue(3, $model->valor);
        $stmt->bindValue(4, $model->quantdias);
        $stmt->bindValue(5, $model->quartos);
        $stmt->bindValue(6, $model->id);
        $stmt->execute();

        
            $usuario_id = $model->id;

            $diretorio = "Viagensimg/$usuario_id/";

            $arquivo = $model->images;
            for ($cont = 0; $cont < count($arquivo['name']); $cont++) {

                $nome_arquivo = $arquivo['name'][$cont];

                $destino = $diretorio . $arquivo['name'][$cont];
                
                if (move_uploaded_file($arquivo['tmp_name'][$cont], $destino)) {
                    $sql_image =  "INSERT INTO images (nome_image, produto_id) VALUES (?, ?)";

                    $stmt_img = $this->conexao->prepare($sql_image);

                    $stmt_img->bindValue(1, $nome_arquivo);
                    $stmt_img->bindValue(2, $usuario_id);

                    $stmt_img->execute();
                }
            }
        
    }

    //selecionar no bd
    public function select()
    {
        $sql = "SELECT produtos.id AS 'id_produto', produtos.cidade, produtos.estado, produtos.valor, produtos.quantdias, produtos.quartos, images.id AS 'id_image', images.nome_image, images.produto_id FROM produtos LEFT JOIN images ON produtos.id = images.produto_id GROUP BY id_produto";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once 'Model/ProdutoModel.php';
        $sql = "SELECT produtos.id AS 'id_produto', produtos.cidade, produtos.estado, produtos.valor, produtos.quantdias, produtos.quartos, images.id AS 'id_image', images.nome_image, images.produto_id FROM produtos LEFT JOIN images ON produtos.id = images.produto_id WHERE produtos.id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        

        return $stmt->fetchObject("ProdutoModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM images WHERE produto_id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        $sql = "DELETE FROM produtos WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }


    public function deleteimg(int $id)
    {
        $sql = "DELETE FROM images WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public function selectImgByID(int $produtoid)
    {
        
        $sql = "SELECT * FROM images WHERE produto_id = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $produtoid);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS, "ProdutoModel");
    }

}
