<?php require(__DIR__."/php/components/header.php");?>
    <section>
        <center>
                <h3>Problems</h3>
                <div class="py-2">
                    <input placeholder="Search the problem">
                    <button>Search</button>
                </div>
                <table border="1px" cellspacing="0" cellpadding="5">
                    <tr >
                        <th>Problem number</th>
                        <th>Company or organization</th>
                        <th>Problem</th>
                        <th>Location</th>
                        <th>Number of votes</th>
                        <th>Date submitted </th>
                        <th>Resolved</th>
                        <th>Outdated</th>
                    </tr>
                    <tr>
                        <td><a href="problem.html" class="silent">#123</a></td>
                        <td>University of Rwanda (UR)</td>
                        <td>The computer laboratory of the university as fresh as new but it is closed </td>
                        <td>Huye</td>
                        <td>212 </td>
                        <td>12/06/2022</td>
                        <td>No</td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td>#12</td>
                        <td>University of Rwanda (UR)</td>
                        <td>We haven't received our diplomas </td>
                        <td>Huye</td>
                        <td>1434 </td>
                        <td>12/06/2022</td>
                        <td>No</td>
                        <td>No</td>
                    </tr>        
                    <tr>
                        <td>#123</td>
                        <td>University of Rwanda (UR)</td>
                        <td>University or  </td>
                        <td>Huye</td>
                        <td>12 </td>
                        <td>12/06/2022</td>
                        <td>No</td>
                        <td>No</td>
                    </tr>
                </table>

        </center>
    </section>
<?php require("./php/components/footer.php");?>
