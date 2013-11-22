<?php 
//to report error related to from validation
echo validation_errors();

//echo $library_src; //is where the actual library file will be loaded, as well as any subsequent plugin script calls
//echo $script_head; //is where specific events, functions and other commands will be rendered.
?>

<?php
//form_open() is provided by the from helper  
//and renders the form element and adds extra functionality ???
//form_open() creates an opening from tag with a base URL build from your donfig preferences. 
//
echo form_open('user/vote') //creates a from that points to my based 
                               //URL plus the admin/create URL segments
                               //like <form method="post" action="localhost/index.php/polls/create>
?>

<?php echo form_open('user/vote') ?>
<?php

    //set template
    $tmpl = array ( 'table_open'  => '<table border="0" cellpadding="2" cellspacing="1" class="mytable">' );
    $this->table->set_template($tmpl);
    $ip = $this->input->ip_address();
    $count = 3;
    form_input('ip', $ip);
    
    foreach($polls as $polls_item): 
        $id = $polls_item['id'];
        $title = $polls_item['ShortTitle'];
        $this->table->add_row($polls_item['Question']); 
        $this->table->add_row($polls_item['Answer1'], form_radio('radioB', '1', FALSE));
        $this->table->add_row($polls_item['Answer2'], form_radio('radioB', '2', FALSE));
        if($polls_item['Answer3'] != FALSE){
            $this->table->add_row($polls_item['Answer3'], form_radio('radioB', '3', FALSE));
        }
        if($polls_item['Answer4'] != FALSE){
            $this->table->add_row($polls_item['Answer4'], form_radio('radioB', '4', FALSE));
        }
        if($polls_item['Answer5'] != FALSE){
            $this->table->add_row($polls_item['Answer5'], form_radio('radioB', '5', FALSE));
        }
        if($polls_item['Answer6'] != FALSE){
            $this->table->add_row($polls_item['Answer6'], form_radio('radioB', '6', FALSE));
        }
        if($polls_item['Answer7'] != FALSE){
            $this->table->add_row($polls_item['Answer7'], form_radio('radioB', '7', FALSE));
        }
        if($polls_item['Answer8'] != FALSE){
            $this->table->add_row($polls_item['Answer8'], form_radio('radioB', '8', FALSE));
        }
        if($polls_item['Answer9'] != FALSE){
            $this->table->add_row($polls_item['Answer9'], form_radio('radioB', '9', FALSE));
        }
        if($polls_item['Answer10'] != FALSE){
            $this->table->add_row($polls_item['Answer10'], form_radio('radioB', '10', FALSE));
        }
        if($polls_item['Answer11'] != FALSE){
            $this->table->add_row($polls_item['Answer11'], form_radio('radioB', '11', FALSE));
        }
        if($polls_item['Answer12'] != FALSE){
            $this->table->add_row($polls_item['Answer12'], form_radio('radioB', '12', FALSE));
        }
        if($polls_item['Answer13'] != FALSE){
            $this->table->add_row($polls_item['Answer13'], form_radio('radioB', '13', FALSE));
        }
        if($polls_item['Answer14'] != FALSE){
            $this->table->add_row($polls_item['Answer14'], form_radio('radioB', '14', FALSE));
        }
        if($polls_item['Answer15'] != FALSE){
            $this->table->add_row($polls_item['Answer15'], form_radio('radioB', '15', FALSE));
        }
        if($polls_item['Answer16'] != FALSE){
            $this->table->add_row($polls_item['Answer16'], form_radio('radioB', '16', FALSE));
        }
        if($polls_item['Answer17'] != FALSE){
            $this->table->add_row($polls_item['Answer17'], form_radio('radioB', '17', FALSE));
        }
        if($polls_item['Answer18'] != FALSE){
            $this->table->add_row($polls_item['Answer18'], form_radio('radioB', '18', FALSE));
        }
        if($polls_item['Answer19'] != FALSE){
            $this->table->add_row($polls_item['Answer19'], form_radio('radioB', '19', FALSE));
        }
        if($polls_item['Answer20'] != FALSE){
            $this->table->add_row($polls_item['Answer20'], form_radio('radioB', '20', FALSE));
        }
?>

<h2><?php echo $title ?></h2>

<div id="main">
    <?php 
        echo form_hidden('id', $polls_item['id']);
        //-- Display Table
        $table = $this->table->generate();
        echo $table;
    ?>
    <!-- Vote Button -->
    <br>
    <?php echo form_submit('submit', 'Vote'); ?>
    
</div>

</form>
<?php endforeach ?>
