<?php
    include_once "db.php";

    $sql = "SELECT num, title, n_name, create_at FROM board ORDER BY num DESC";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{margin: auto;}
        th, td{border-bottom: 1px solid #000;}
        th{
            border-top: 3px solid skyblue;
            padding: 5px 20px;
            text-align: center;
        }
        td{text-align: center;}
        h1{
            text-align: center;
            position: relative;
        }
        .write{
            position: absolute;
            right: 50px;
            bottom: end;
        }
        a{text-decoration: none;}
    </style>
</head>
<body>
    <h1>자유게시판</h1>
    <table>
        <tr>
            <th width="50">번호</th>
            <th width="200">제목</th>
            <th width="100">작성자</th>
            <th width="150">작성일</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result))
            {
                $num = $row['num'];
                $title = $row['title'];
                $n_name = $row['n_name'];
                $create_at = $row['create_at'];
                print "<tr>";
                print "<td>${num}</td>";
                print "<td><a href='detail.php?num=$num'>${title}</a></td>";
                print "<td>${n_name}</td>";
                print "<td>${create_at}</td>";
                print "</tr>";
            }
        ?>
    </table>
    <a class="write" href="write.php"><button>글쓰기</button></a>
</body>
</html>