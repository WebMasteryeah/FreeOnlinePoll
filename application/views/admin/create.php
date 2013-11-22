<?php echo $library_src;?>
<?php echo $script_head;?>

<h3>Create a news poll</h3>

<?php 
//to report error related to from validation
echo validation_errors();
?>

<?php
//form_open() is provided by the from helper  
//and renders the form element and adds extra functionality ???
//form_open() creates an opening from tag with a base URL build from your donfig preferences. 
//
echo form_open('admin/create') //creates a from that points to my based 
                               //URL plus the admin/create URL segments
                               //like <form method="post" action="localhost/index.php/polls/create>
?>

<?php echo form_open('admin/create') ?>

    <!-- Title -->
	<label for="title">Short Title: </label>
	<input type="text" id="ShortTitle" name="ShortTitle" size="50" /><br/><br/>
 
    <!-- Question -->
    <label for="qustion">Question: </label>
	<input type="text" id="question" name="question" size="80" /><br/><br/>
    
    <!-- Add more button -->
    <ol id="aList">
        <li>Answer1: <input type="text" id="answer1" name="answer1" size="30" /></li>
        <li>Answer2: <input type="text" id="answer2" name="answer2" size="30" /></li>
    </ol>
    <input type="button" id = "addMore" name="addMore" value=" + Add more answers" />(max 20 answers)<br/><br/>
    
    <!-- Submit Button -->
	<input type="submit" name="submit" value="Create news poll" />

</form>

<script src="<?php echo base_url();?>script/answers.js" ></script>
