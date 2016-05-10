<?php
/**
 * Created by PhpStorm.
 * User: lucilledelmas
 * Date: 10/05/2016
 * Time: 11:50
 */
namespace Model;

class pageRepository {

    private $PDO;

    public function __construct(\PDO $PDO)
    {
        $this->PDO = $PDO;
    }

    public function lister()
    {

    }

    public function modifier()
    {

    }

    public function supprimer()
    {

    }

    public function inserer()
    {

    }


    public function get()
    {
        $sql = "SELECT
    `id`,
    `slug`,
    `h1`,
    `body`,
    `title`,
    `img`,
    `span_text`,
    `span_class`
FROM
  `page`
WHERE
  1
";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $data = [];
        while ($row = $this->fetchObject($stmt)) {
            $data[] = $row;
        }

        return $data;
    }
}