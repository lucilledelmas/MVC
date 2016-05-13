<?php
namespace Model;

class pageRepository {

    private $PDO;

    public function __construct(\PDO $PDO)
    {
        $this->PDO = $PDO;
    }

    public function lister($id = null)
    {
        return array[];
    }

    public function modifier(array $data)
    {
        return true;
    }

    public function supprimer(int $id)
    {
        return true;
    }

    public function inserer(array $data)
    {
        return 1;
    }


    public function getBySlug($slug)
    {
        $sql ="SELECT
                    `id`,
                    `slug`,
                    `body`,
                    `title`
                FROM
                    `page`
                WHERE
                    `slug` = :slug
                ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':slug',$slug,\PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchObject();
    }
}