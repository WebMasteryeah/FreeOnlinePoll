<html>
<head>
<title>Poll Result</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="design/css/polls.css">
    <link rel="stylesheet" type="text/css" href="design/css/table.css">
    <script type="text/javascript" src="dist/jquery.min.js"></script>
    <script type="text/javascript" src="dist/jquery.jqplot.min.js"></script>
    <script type="text/javascript" src="dist/plugins/jqplot.barRenderer.min.js"></script>
    <script type="text/javascript" src="dist/plugins/jqplot.pieRenderer.min.js"></script>
    <script type="text/javascript" src="dist/plugins/jqplot.categoryAxisRenderer.min.js"></script>
    <script type="text/javascript" src="dist/plugins/jqplot.pointLabels.min.js"></script>
    <script type="text/javascript" src="dist/plugins/jqplot.donutRenderer.min.js"></script>
    
    <link rel="stylesheet" type="text/css" hrf="dist/jquery.jqplot.min.css" />
</head>

<body>
    <div id="container">
        <h1>Free Online Polls</h1>
            <div id="body">
                <!-- use anchor function provided by url Helper -->
                <hr />
                <p>
                <a href="http://localhost/FreeOnlinePoll/">Vote</a> | 
                <a href="http://localhost/FreeOnlinePoll/index.php/admin/create">Create</a> | 
                <a href="http://localhost/FreeOnlinePoll/index.php/rest/polls">GET JSON</a> | 
                <a href="http://localhost/FreeOnlinePoll/pollView.php">Poll Results[Chart]</a> | 
                <a href="http://localhost/FreeOnlinePoll/index.php/user/about">About</a></p>
                <hr />
                
                <h2>Please select a poll</h2>
                <h3>Title:
                <select id="label" name='label'>
                    <option></option>
                </select></h3>
                <div id = "result">
                    <h3>Result: </h3>
                    <h4></h4>
                    <table id="table" border="1">
                        <tbody id = "tbd">
                            
                        </tbody>
                        <!-- <tfoot>
                            <tr><td>footer information</td></tr>
                        </tfoot> -->
                    </table>
                    <input type="button" id="driver" value="Get a Bar Chart" />                    
                </div>
                
                <div id = "chart1"></div>
            </div>
        <p class="footer">SENG365 Assignment2</p>
    </div>
    <script src="pollView.js"></script>
</body>
</html>
