<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="styles/kiosk.css" />
        <link rel="stylesheet" href="scripts/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
    </head>

    <body>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Delete</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Title</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <script type="text/javascript" src="scripts/jquery-1.11.3.min.js"></script>
        <script type="text/javascript">

            $.when($.ajax("Controllers/Pledges/GetPledgeList.php")).done(function(pledges_json){
                var pledges = $.parseJSON(pledges_json);
                $.each(pledges, function(index, pledge){
                    $("tbody").append("<tr>\
                                       <td><a href='Controllers/Pledges/Delete.php?pledgeId="+ pledge.id +"'>delete</a></td>\
                                       <td>"+ pledge.first +"</td>\
                                       <td>"+ pledge.last +"</td>\
                                       <td>"+ pledge.company +"</td>\
                                       <td>"+ pledge.email +"</td>\
                                       <td>"+ pledge.country +"</td>\
                                       <td>"+ pledge.title +"</td>\
                                       </tr>");
                });

            });
        </script>


    </body>
</html>
