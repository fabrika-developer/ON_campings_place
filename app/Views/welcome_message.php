<?php 

    // print_r($this->data);

    echo count($this->data);

    foreach ($this->data as $key => $value) {
        echo '<pre>';
        print_r($value);
        echo '</pre>';
    }

    
?>
