
<?php echo link_tag('design/css/polls.css') ?>

<h2>About</h2>
<p>This is free online-poll website. This site will allow users to create new polls and to vote on existing ones<br></p>
<div id = "core">
    <h3>Core functionality</h3>
    <h4>* Able to create polls</h4>
        <div id = "para">
            <p>Short Tite: Title of poll which is shown on the list of poll (defualt page)</p>
            <p>Question: Qustion of poll</p>
            <p>Answers: Two answer fields are default and if you want to add more answer then click "Add more answer +" </p>
            <p></p>
            <p>1. Fill the short title, question and answers</p>
            <p>2. Click "Create new poll" button</p>
            <p>*** if one of the field is empty then you cannot create poll. It will give you warning message</p>
        </div>
    <h4>* Vote polls</h4>
        <div id = "para">
            <p>Default page</p>
            <p>1. Click "Vote" next to the title of the poll</p>
            <p>2. Click one of radio buttons</p>
            <p>3. Click "vote" button</p>
        </div>
    <h4>* Able to see the result of poll</h4>
        <div id = "para">
            <p>1. Select a title of poll in the combobox</p>
            <p>2. Click "Load Data"</p>
        </div>
</div>

<div id = "core">
    <h3>Code and data design</h3>
    <h4>1. IP address: </h4>
    <div id = "para">
        <p>The IP number of the machine from which the vote request comes is recorded in the vote</p>
        <p>One would normally wish to ensure that a particular IP number only voted once on a given poll, but I did not implemente because I could not test this site.</p>
    </div>
</div>
