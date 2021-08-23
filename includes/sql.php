<?php

include './includes/auxiliar.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function sql_connect()
{
    include './includes/sqlCredentials.php';

    // Create connection
    $conn = @mysqli_connect($serverName, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        $serverName = "sql172.main-hosting.eu";
        $conn = mysqli_connect($serverName, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    mysqli_set_charset($conn, "utf8");
    return $conn;
}

function sqlGetProfessional()
{
    $conn = sql_connect();

    $id = filterInput($_GET["id"]);
    
    $sql = sprintf("SELECT * FROM professionals WHERE link='%s'", $id);
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $professional = mysqli_fetch_assoc($result);
        $professional["description"] = nl2br($professional["description"]);
        $professional["services"] = listFormat($professional["services"]);
        //$professional["img"] = '<img class="responsive img-fluid" src="data:image/jpeg;base64,' . base64_encode($professional['img']) . '"./>';
        $professional["img"] = sprintf(
            '<img   class="img-fluid responsive"
                    srcset= "./img/profissoes/%s-1.jpg 600w,
                             ./img/profissoes/%s-2.jpg 400w"
                    sizes=  "(min-width: 768px) 450px,
                             (min-width: 360px) 370px,
                             240px"
                    src="./img/profissoes/%s-3.jpg"
                    alt="%s">',
            $professional["link"],
            $professional["link"],
            $professional["link"],
            $professional["name"]
        );
        return $professional;
    } else {
        echo "<script>window.location = 'https://www.tavaresramos.com.br/404'</script>";
    }
    
    mysqli_close($conn);
    return NULL;
}

function sqlListProfessionals(string $object, string $class, bool $link)
{
    $conn = sql_connect();
    $sql = "SELECT name, link FROM professionals ORDER BY name";
    $result = mysqli_query($conn, $sql);

    if ($link == true) {
        while ($professional = mysqli_fetch_assoc($result)) {
            printf(
                '<%s class="%s" href="./profissao?id=%s"> %s </%s>',
                $object,
                $class,
                $professional['link'],
                $professional['name'],
                $object
            );
        }
    } else {
        while ($professional = mysqli_fetch_assoc($result)) {
            printf(
                '<%s class="%s"> %s </%s>',
                $object,
                $class,
                $professional['name'],
                $object
            );
        }
    }
}

function listFormat(string $list)
{
    $lines = explode("\n", $list);
    $newList = "";
    foreach ($lines as $line) {
        $newList = $newList . "<li>" . $line . "</li>";
    };
    return $newList;
};
