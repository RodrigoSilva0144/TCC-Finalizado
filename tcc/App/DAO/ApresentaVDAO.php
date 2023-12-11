<?php


class ApresentaVDAO{

    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=pdo";
        $this->conexao = new PDO($dsn, 'root', '');
    }

    //selecionar no bd
    public function select()
    {
        $sql = "SELECT * FROM produtos INNER JOIN images ON produtos.id = images.produto_id GROUP BY produtos.id LIMIT 6";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }

    public function selectValor(){
        $sql = "SELECT * FROM produtos INNER JOIN images ON produtos.id = images.produto_id GROUP BY produtos.id ORDER BY valor ASC LIMIT 6";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }
}