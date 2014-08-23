<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'includes/connect.php';
include 'includes/header.php';
echo'              <li class="active"><a href="index.php">Home</a></li>

                    <li><a href="music.php">Music & Video</a> </li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.html">About</a></li>
                    ';
if($_SESSION['signed_in'])
{
    echo '<li><a href="admin.php">Admin</a></li>';
}

include 'includes/header1.php';

    echo '<div><h3>Categories</h3></div>
<table border="1";border-color="black"; border-style="solid";border-collapse="collapse";
    width="100%";>
    <tr>
    <th>Topic</th><th>Create Time</th><th>Category</th>
    </tr>';
    $sql = 'select topic_subject, topic_date, cat_name from topics left join categories on topic_cat = topics.topic_id';
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr><td padding='5px'><a href='index.php' color='dimgray';text-decoration='none';>{$row['topic_subject']}</a></td><td>{$row['topic_date']}</td><td>{$row['cat_name']}</td></tr>";
    }
    echo '</table></div></div>';

include 'includes/sidebar.php';
include 'includes/leg.php';
include 'includes/footer.php';
