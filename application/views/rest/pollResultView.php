<?php echo $library_src;?>
<?php echo $script_head;?>

<?php 
function comboBoxHtml($label, $map, $selectedRowId) {
    $html = "<p>$label: ";
    $html .= "<select id='$label' name='$label'>";
    foreach ($map as $id => $name) {
        $selected = $id === intval($selectedRowId) ? 'selected' : '';
        $html .= "<option value='$id' $selected>$name</option>\n";
    }
    $html .= "</select>\n</p>";
    return $html;
}


?>

<h2>List of Polls</h2>

<?php echo $polls ?>

<script src="<?php echo base_url();?>script/pollResultView.js" ></script>
