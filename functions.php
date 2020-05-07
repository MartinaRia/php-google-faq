<?php

  require_once 'dbFaq.php';

  function printFaq($faq){
    foreach ($faq as $qa) {
      echo "<h2>"
        .$qa['question']
        ."</h2>";

        echo $qa['answer'];
    } // /foreach
  } // /printFaq

  function printFaqNum($faq){
    $length = count($faq);
    echo '<h2> Sono state trovate ' . $length. ' domande e risposte. </h2>';
  }

 ?>
