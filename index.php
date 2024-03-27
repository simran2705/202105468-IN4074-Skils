<!--Simranjeet Singh 202105468 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Music classes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href=".css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }

        table tr td:last-child {
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
<header>
<ol>
<li> <a href="index.php">Home</a> </li>
<li> <a href="concert.html">Concerts</a> </li>
<li> <a href="registration.html">Registration</a> </li>
<li> <a href="about.html">about</a> </li>


</ol>
    </header>
    <main class="music">
    <h1> The Music </h2>
    <P>A universal language that cuts down barriers and unites people of all ages and cultures is music.
         It has the capacity to arouse feelings, jog memories, and stimulate the creative mind. Music
          has a tremendous effect on our life, whether it is through the deep words of a song, the
           melodic notes of a piano, or the rhythmic beats of a drum. It is with us in good times and
            bad, bringing comfort in the dark and enhancing the delight of the occasion. Music, which
             ranges from modern hits to classical classics, is a reflection of the richness of human
              expression and acts as a soundtrack for our lives, permeating our common experiences.</P>
    <h3> Our Music Classes </h3>
    <p>Students travel on a voyage of exploration and sound creation in our music classes. These exciting
         sessions offer a platform for exploring a variety of genres, styles, and instruments under the 
         direction of enthusiastic instructors. Students are encouraged to explore their creativity and
          refine their musical skills, whether they are exploring the complexities of classical works
           or experimenting with modern styles. They gain practical experience, theoretical instruction,
            and group projects that help them comprehend the cultural and historical value of music in
             addition to developing their technical proficiency. Students can develop their skills, 
             gain confidence, and create enduring friendships with other music lovers in this encouraging
              environment. In addition to developing their musical abilities, students gain important
               life lessons in self-control, cooperation, and endurance, setting the groundwork for a
                lifetime appreciation of the arts</p>
            <h3>Here our some music instructor information below </h3>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Employees Details</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo '<table class="table table-bordered table-striped">';
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>#</th>";
                            echo "<th>Name</th>";
                            echo "<th>Address</th>";
                            echo "<th>Salary</th>";
                            echo "<th>Action</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['address'] . "</td>";
                                echo "<td>" . $row['salary'] . "</td>";
                                echo "<td>";
                                echo '<a href="read.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                echo '<a href="update.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="delete.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
    </div>
    </main>
</body>

</html>
