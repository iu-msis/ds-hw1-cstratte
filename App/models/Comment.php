<?php

class Comment
{
  public $id;
  public $comments;

  public function __construct($row) {
    $this->id = intval($row['id']);

    $this->comments = $row['comment'];

  public static function responseComments() {
    // 1. Connect to the database
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);

    // 2. Prepare the query
    $sql = 'SELECT * FROM Comment';

    $statement = $db->prepare($sql);

    // 3. Run the query
    $success = $statement->execute(
        [$id]
    );

    // 4. Handle the results
    $arr = [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      // 4.a. For each row, make a new work object
      $comment =  new Comment($row);

      var_dump($comment);
      die;
      array_push($commentarr, $comment);
    }
    return $commentarr;
  }



}
