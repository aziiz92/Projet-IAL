<?php

/**
 *
 */
class ArticleRepository
{
    private $_db;

    public function __construct($db)
    {
        $this->_db = $db;
    }

    public function findAll(bool $published = false, $category= null)
    {
        if ($published) {
            $query = "SELECT * FROM posts WHERE published = 1";
        } else {
            $query = "SELECT * FROM posts";
        }

        if ($category) {            
            $query = "SELECT * FROM posts ps WHERE ps.id 
                                IN (SELECT pt.post_id FROM post_categories pt WHERE pt.category_id=$category_id 
                                GROUP BY pt.post_id HAVING COUNT(1) = 1)";
        }

        try {
            $req = $this->_db->query($query);
            $result = $req->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function find($id)
    {
        $query = "SELECT * FROM posts WHERE id = ?";

        try {
            $req = $this->_db->prepare($query);
            $req->execute([$id]);
            $result = $req->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}
