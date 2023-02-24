<!DOCTYPE html>
<html>
<head>
    <title>Fetch Country Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Fetch Country Data</h2>
    <form method="POST">
        <label for="country">Enter a country name:</label>
        <input type="text" id="country" name="country">
        <button type="submit">Fetch Data</button>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $country_name = $_POST['country'];
            
            if (!preg_match("/^[a-zA-Z ]+$/", $country_name)) {
                echo "<p style='color:red;'>Invalid country name.</p>";
            } else {
            
                require_once 'vendor/autoload.php';
                $client = new GuzzleHttp\Client();
                $url = 'https://restcountries.com/v2/name/'.$country_name.'?fullText=true';
                $response = $client->get($url);
                $data = json_decode($response->getBody(), true);
                
                if (!empty($data)) {
                    echo "<h3>".$data[0]['name']."</h3>";
                    echo "<table>";
                    echo "<tr><th>Capital</th><td>".$data[0]['capital']."</td></tr>";
                    echo "<tr><th>Region</th><td>".$data[0]['region']."</td></tr>";
                    echo "<tr><th>Population</th><td>".$data[0]['population']."</td></tr>";
                    foreach ($data[0]['languages'] as $language) {
                        echo $language['name']." (".$language['nativeName']."), ";
                    }
                    echo "</td></tr>";
                    echo "</table>";
                } else {
                    echo "<p style='color:red;'>No data found for the specified country name.</p>";
                }
            }
        }
    ?>
</body>
</html>