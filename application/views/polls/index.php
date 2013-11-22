<!-- Polls Overview -->
<h2>Current Polls</h2>
<?php 
    //set template
    $tmpl = array ( 'table_open'  => '<table border="0" cellpadding="2" cellspacing="1" class="mytable">' );
    $this->table->set_template($tmpl);

    //add polls_item to the table
    foreach($polls as $polls_item): 
    
        $text = $polls_item['Question'];
        $linkVote = anchor('user/vote/'.$polls_item['id'], 'Vote', 'title="vote"');
        $this->table->add_row($polls_item['ShortTitle'], $linkVote);
?>

<div id="main">
    <?php 
        //-- Display Table
        $table = $this->table->generate();
        echo $table;
    ?>
    
</div>

<?php endforeach ?>


