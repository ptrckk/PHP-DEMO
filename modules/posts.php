<?php 
    if (isset($_GET["id"])) { 
        $page = $_GET["id"]; 
    } else { 
        $page=1; 
    };
    
    // Maximaal aantal resultaten per pagina
    $results_per_page = 4; 
    $start_from = ($page-1) * $results_per_page;
?>
    
<div class='pagination'>Pagina |

    <?php 

        // Tel het aantal rows en koppel deze aan total
        $sql = "SELECT COUNT(id) AS total FROM post";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        // Deel total door het max aantal resultaten per pagina
        $total_pages = ceil($row["total"] / $results_per_page);

        // Maak URL aan voor pagina's
        for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='recensies.php?id=".$i."'";

            if ($i==$page)  echo '';
            echo '>'.$i.'</a> '; 
        }; 

    ?>

</div>


<?php

    // Haal data op van database en laad een max aantal recensies. (van nieuw naar oud)
    $sql = "SELECT * FROM post order by id desc LIMIT $start_from," .$results_per_page;
    $result = $conn->query($sql); 

		if ($result->num_rows > 0) {
            echo "<section class='postWrapper'>";

            while($row = $result->fetch_assoc()) {

                // Variabelen
                $id = $row['id'];
                $title = $row['title'];
                $content = $row['content'];

                // Verkrijg tijd van post en verander format
                $defaultTime = $row['post_date'];
                $dtime = strtotime($defaultTime);
                setlocale(LC_TIME, 'nl_NL');
                $formatDateTime = strftime("%A %e %B %Y %H:%M", $dtime);

                // Print de data
                echo "
                <div class='post'>
        
                    <h4 class='post__title'>$title</h4>
                    <p class='post__time'>$formatDateTime</p>
                    <p class='post__content'>$content</p>
                    
                </div>
                ";
            }
		} else {
			echo 'Geen resultaten gevonden.';
        } echo "</section>";

?>